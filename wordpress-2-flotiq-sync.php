<?php
/*
 Plugin Name: Wordpress2FlotiqSync
 Description: Flotiq synchronization for wordpress
 Version: 1.0
 Author: <a href="https://codewave.eu">CodeWave</a>
 License: private
 */

require_once(__DIR__ . '/php-sdk/vendor/autoload.php');
require_once(__DIR__ . '/autoloader.php');

session_start();

require __DIR__ . '/admin/wordpress-2-flotiq-sync-admin.php';

$wp_content_dir = ABSPATH . 'wp-content';
$wp_plugin_dir = $wp_content_dir . '/plugins';

if (is_admin()) {
    add_action('wp_trash_post', 'remove_object');
    // @todo from trash to public
    add_action('save_post', 'create_or_update_object');
    add_action('post_updated', 'create_or_update_object');
    add_action('add_attachment', 'create_or_update_media');
    add_action('delete_attachment', 'delete_media');
    add_action('created_term', 'create_or_update_tag');
    add_action('edited_term', 'create_or_update_tag');
}

function delete_media($post_id)
{
    $apiKey = get_option('flotiq_api_key');
    $w2fSync = new Wordpress2FlotiqSync\Wordpress2FlotiqSync($apiKey);
    $mediaPost = get_post($post_id, 'attachment');
    $w2fSync->removeMedia($mediaPost->guid);
}

function remove_object($post_id)
{
    $result = delete_entries($post_id);

    if ($result != 200) {
        $_SESSION['wordpress-2-flotiq-sync-search-message']
            = 'Proszę sprawdzić czy konfiguracja CA Search Sync jest poprawna.';
    }
}

function create_or_update_object($post_id)
{
    $apiKey = get_api_key();

    $post = get_post($post_id);

    $wordpress2FlotiqSync = new Wordpress2FlotiqSync\Wordpress2FlotiqSync($apiKey);

    try {
        $result = $wordpress2FlotiqSync->syncPosts([$post]);
    } catch (\OpenAPI\Client\ApiException $e) {


    }
}

function create_or_update_tag($tag_id)
{
    $apiKey = $apiKey = get_api_key();
    $tag = get_tag($tag_id);

    $wordpress2FlotiqSync = new Wordpress2FlotiqSync\Wordpress2FlotiqSync($apiKey);
    try {
        $wordpress2FlotiqSync->syncTags([$tag], wp_upload_dir()['basedir']);
    } catch (\OpenAPI\Client\ApiException $e) {
        return;
    }
}

function create_or_update_media($post_id)
{
    $apiKey = get_api_key();

    $post = get_post($post_id);

    $wordpress2FlotiqSync = new Wordpress2FlotiqSync\Wordpress2FlotiqSync($apiKey);
    try {
        $wordpress2FlotiqSync->syncMedia([$post], wp_upload_dir()['basedir']);
    } catch (\OpenAPI\Client\ApiException $e) {
        return;
    }
}

function get_api_key()
{
    $apiKey = get_option('flotiq_api_key');
    if (!$apiKey) {
        add_action('admin_notices', function () {
            ?>
            <div class="notice notice-error is-dismissible">
                <p><strong><?php echo __('Wordpress 2 Flotiq Sync'); ?></strong></p>
                <p><?php echo __('No api key, please provide api key!') ?></p>
            </div>
            <?php
        });
        return;
    }
    return $apiKey;
}


