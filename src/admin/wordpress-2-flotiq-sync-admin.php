<?php

require_once(__DIR__ . '/../../php-sdk/vendor/autoload.php');
require_once(__DIR__ . '/../../autoloader.php');

$admin_update_search_url = 'wordpress_2_flotiq_sync_edit';

if (is_admin()) {
    add_action('admin_menu', 'wordpress_2_flotiq_sync_add_menu');
    add_action('admin_menu', 'wordpress_2_flotiq_sync_edit_save');
    add_action('admin_menu', 'wordpress_2_flotiq_sync_run');
}

function wordpress_2_flotiq_sync_add_menu()
{
    global $admin_update_search_url;
    if (function_exists('add_menu_page')) {
        add_options_page(
            'Flotiq Sync Settings',
            'Flotiq Sync',
            'manage_options',
            'wordpress_2_flotiq_sync_edit',
            'wordpress_2_flotiq_sync_edit'
        );
    }
}

function wordpress_2_flotiq_sync_edit()
{
    if (!get_option('flotiq_api_key')) {
        add_option('flotiq_api_key', '');
    }

    include __DIR__ . "/templates/settings.php";
}

// Handle admin form
function wordpress_2_flotiq_sync_edit_save()
{
    global $admin_update_search_url;

    if (isF2WsPage() && array_key_exists('action', $_REQUEST) && $_REQUEST['action'] === 'save') {
        $apiKey = $_REQUEST['flotiq_api_key'];
        $apiKey = sanitize_key($apiKey);
        if (isValidApiKey($apiKey)) {
            update_option('flotiq_api_key', $apiKey);
            header("Location: admin.php?page=$admin_update_search_url&saved=true");
        }
        add_action('admin_notices', function () {
            w2f_sync_notify('Api Key is invalid!', 'error');
        });
    }
}

function isValidApiKey($apiKey) {
    if (strlen($apiKey) != 32) {
        return false;
    }

    if (!ctype_alnum($apiKey)) {
        return false;
    }
    return true;
}

function wordpress_2_flotiq_sync_run()
{
    if (isF2WsPage() && array_key_exists('action', $_REQUEST) && $_REQUEST['action'] === 'start-sync') {
        $apiKey = get_option('flotiq_api_key');
        if (!$apiKey) {

            $message = 'Missing Api key, please fill api key field.';
            add_action('admin_notices', function () use ($message) {
                w2f_sync_notify($message);
            });

            return;
        }

        $wp2fSetup = new Wordpress2FlotiqSync\Setup\CtdSetup($apiKey);
        $status = $wp2fSetup->setup();


        if ($status->status === \Wordpress2FlotiqSync\Setup\SetupStatus::STATUS_FAILED) {
            add_action('admin_notices', function () use ($status) {
                w2f_sync_notify($status->message, 'error');
            });
            return;
        }

        $w2fSync = new Wordpress2FlotiqSync\Wordpress2FlotiqSync($apiKey);
        $users = get_users();
        if (count($users)) {
            $w2fSync->syncAuthors($users);
        }

        $categories = get_categories();
        if (count($categories)) {
            $w2fSync->syncCategories($categories);
        }

        $tags = get_tags();
        if (count($tags)) {
            $w2fSync->syncTags($tags);
        }

        $query_images_args = array(
            'post_type' => 'attachment',
            'post_mime_type' => 'image',
            'post_status' => 'inherit',
            'posts_per_page' => -1,
        );

        $query_images = new \WP_Query($query_images_args);

        if (count($query_images->posts)) {
            $basedir = wp_upload_dir()['basedir'];
            $w2fSync->syncMedia($query_images->posts, $basedir);
        }

        $pages = get_pages();
        if (count($pages)) {
            $w2fSync->syncPages($pages);
        }

        $posts = get_posts(['post_status' => 'publish']);
        if (count($posts)) {
            $w2fSync->syncPosts($posts);
        }
        add_action('admin_notices', function () use ($status) {
            w2f_sync_notify($status->message, 'info');
        });

        add_action('admin_notices', function () use ($status) {
            w2f_sync_notify('Synchronization done.', 'success');
        });

        return;
    }
}

function isF2WsPage()
{
    global $admin_update_search_url;
    return (array_key_exists('page', $_GET) && $_GET['page'] == $admin_update_search_url);
}

function w2f_sync_notify($message = '', $type = 'error')
{
    ?>
    <div class="notice notice-<?php echo $type ?> is-dismissible">
        <p><strong><?php echo __('Flotiq Sync'); ?></strong></p>
        <p><?php echo __($message) ?></p>
    </div>
    <?php
}

