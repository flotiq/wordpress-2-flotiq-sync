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
    add_action('wp_trash_post', 'remove_post');
    // @todo from trash to public
    add_action('save_post', 'create_or_update_object');
    add_action('post_updated', 'create_or_update_object');
    add_action('add_attachment', 'create_or_update_media');
    add_action('delete_attachment', 'delete_media');
    add_action('created_term', 'create_or_update_tag');
    add_action('edited_term', 'create_or_update_tag');
    add_action('delete_term', 'remove_tag');
    add_action('create_category', 'create_or_update_category');
    add_action('edit_category', 'create_or_update_category');
}

function delete_media($post_id)
{
    $apiKey = get_option('flotiq_api_key');
    $w2fSync = new Wordpress2FlotiqSync\Wordpress2FlotiqSync($apiKey);
    $mediaPost = get_post($post_id, 'attachment');
    $w2fSync->removeMedia($mediaPost->guid);
}

function remove_post($post_id)
{
    $apiKey = get_option('flotiq_api_key');
    if (!$apiKey) {
        return;
    }

    $wordpress2FlotiqSync = new Wordpress2FlotiqSync\Wordpress2FlotiqSync($apiKey);

    $wordpress2FlotiqSync->removePost($post_id);
}

function create_or_update_object($post_id)
{
    $apiKey = get_option('flotiq_api_key');
    if (!$apiKey) {
        return;
    }

    $post = get_post($post_id);

    $wordpress2FlotiqSync = new Wordpress2FlotiqSync\Wordpress2FlotiqSync($apiKey);

    try {
        $result = $wordpress2FlotiqSync->syncPosts([$post]);
    } catch (\OpenAPI\Client\ApiException $e) {


    }
}

function create_or_update_tag($tag_id)
{
    $apiKey = get_option('flotiq_api_key');
    if (!$apiKey) {
        return;
    }
    $tag = get_tag($tag_id);
    if (!$tag) {
        return;
    }
    $wordpress2FlotiqSync = new Wordpress2FlotiqSync\Wordpress2FlotiqSync($apiKey);
    try {
        $wordpress2FlotiqSync->syncTags([$tag], wp_upload_dir()['basedir']);
    } catch (\OpenAPI\Client\ApiException $e) {
        return;
    }
}

function create_or_update_media($post_id)
{
    $apiKey = get_option('flotiq_api_key');
    if (!$apiKey) {
        return;
    }

    $post = get_post($post_id);

    $wordpress2FlotiqSync = new Wordpress2FlotiqSync\Wordpress2FlotiqSync($apiKey);
    try {
        $wordpress2FlotiqSync->syncMedia([$post], wp_upload_dir()['basedir']);
    } catch (\OpenAPI\Client\ApiException $e) {
        return;
    }
}

function create_or_update_category($category_id)
{
    $apiKey = get_option('flotiq_api_key');
    if (!$apiKey) {
        return;
    }
    $category = get_category($category_id);

    $wordpress2FlotiqSync = new Wordpress2FlotiqSync\Wordpress2FlotiqSync($apiKey);
    try {
        $wordpress2FlotiqSync->syncCategories([$category]);
    } catch (\OpenAPI\Client\ApiException $e) {
        return;
    }
}

function remove_tag($tag_id)
{
    $apiKey = get_option('flotiq_api_key');
    if (!$apiKey) {
        return;
    }


    $wordpress2FlotiqSync = new Wordpress2FlotiqSync\Wordpress2FlotiqSync($apiKey);

    $wordpress2FlotiqSync->removeTag($tag_id);
}


