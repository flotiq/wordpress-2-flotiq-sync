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

require __DIR__ . '/src/admin/wordpress-2-flotiq-sync-admin.php';

$wp_content_dir = ABSPATH . 'wp-content';
$wp_plugin_dir = $wp_content_dir . '/plugins';

if (is_admin()) {
    $apiKey = get_option('flotiq_api_key');
    if (!$apiKey) {
        return;
    }
    $wordpressIntegration = new WordpressIntegration($apiKey);

    add_action('wp_trash_post',  [$wordpressIntegration, 'remove_post']);

    add_action('new_to_publish', [$wordpressIntegration, 'create_or_update_object']);
    add_action('draft_to_publish', [$wordpressIntegration, 'create_or_update_object']);
    add_action('pending_to_publish', [$wordpressIntegration, 'create_or_update_object']);

    add_action('post_updated', [$wordpressIntegration, 'create_or_update_object']);
    add_action('add_attachment', [$wordpressIntegration, 'create_or_update_media']);
    add_action('delete_attachment', [$wordpressIntegration, 'delete_media']);
    add_action('created_term', [$wordpressIntegration, 'create_or_update_tag']);
    add_action('edited_term', [$wordpressIntegration, 'create_or_update_tag']);
    add_action('delete_term', [$wordpressIntegration, 'remove_tag']);
    add_action('create_category', [$wordpressIntegration, 'create_or_update_category']);
    add_action('edit_category', [$wordpressIntegration, 'create_or_update_category']);
    add_action('delete_category', [$wordpressIntegration, 'remove_category']);
}

class WordpressIntegration
{
    private $w2fSync;

    public function __construct($apiKey)
    {
        $this->w2fSync = new Wordpress2FlotiqSync\Wordpress2FlotiqSync($apiKey);
    }

    public function delete_media($post_id)
    {
        $apiKey = get_option('flotiq_api_key');
        $w2fSync = new Wordpress2FlotiqSync\Wordpress2FlotiqSync($apiKey);
        $mediaPost = get_post($post_id, 'attachment');
        $w2fSync->removeMedia($mediaPost->guid);
    }

    public function remove_post($post_id)
    {
        $post = get_post($post_id);

        if(!$post) {
            return;
        }
        if ($post->post_type === 'page') {
            $this->w2fSync->removePage($post_id);
        } else {
            $this->w2fSync->removePost($post_id);
        }
    }

    public function create_or_update_object($post_id)
    {
        $post = get_post($post_id);

        $this->w2fSync->syncPosts([$post]);
    }

    function create_or_update_tag($tag_id)
    {
        $tag = get_tag($tag_id);
        if (!$tag) {
            return;
        }

        $this->w2fSync->syncTags([$tag], wp_upload_dir()['basedir']);
    }

    public function create_or_update_media($post_id)
    {
        $post = get_post($post_id);

        $this->w2fSync->syncMedia([$post], wp_upload_dir()['basedir']);
    }

    public function create_or_update_category($category_id)
    {
        $category = get_category($category_id);

        $this->w2fSync->syncCategories([$category]);
    }

    public function remove_tag($tag_id)
    {
        $this->w2fSync->removeTag($tag_id);
    }

    public function remove_category($category_id)
    {
        $this->w2fSync->removeCategory($category_id);
    }
}
