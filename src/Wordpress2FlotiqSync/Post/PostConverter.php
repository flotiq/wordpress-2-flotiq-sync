<?php

namespace Wordpress2FlotiqSync\Post;


use Wordpress2FlotiqSync\Utils\ContentParser;

class PostConverter
{
    private $contentParser;

    public function __construct($apiMediaInstance)
    {
        $this->contentParser = new ContentParser($apiMediaInstance);
    }

    public function convert($post)
    {
        return
            [
                'id' => 'wp_post_' . $post->ID,
                'slug' => $post->post_title,
                'title' => $post->post_title,
                'status' => $post->post_status,
                'type' => $post->post_type,
                'created' => $post->post_date,
                'modified' => $post->post_modified,
                'content' => $this->contentParser->parse($post->post_content),
                'excerpt' => $post->post_excerpt,
                'author' => [[
                    'type' => 'internal',
                    'dataUrl' => '/api/v1/content/wp_author/wp_author_' . $post->post_author
                ]],

                'tags' => self::parseTags($post->ID),
                'categories' => self::parseCategories($post->ID),
                'featuredMedia' => $this->contentParser->featureMediaParse($post->ID)
            ];
    }

    static private function parseTags($postId)
    {
        $tags = get_the_tags($postId);
        if (!$tags) {
            return [];
        }
        $fTags = [];
        foreach ($tags as $tag) {

            $fTags[] = [
                'type' => 'internal',
                'dataUrl' => '/api/v1/content/wp_tag/wp_tag_' . $tag->term_id
            ];
        }
        return $fTags;
    }

    static private function parseCategories($postId)
    {
        $categories = get_the_category($postId);
        if (!$categories) {
            return [];
        }
        $fCategories = [];
        foreach ($categories as $category) {

            $fCategories[] = [
                'type' => 'internal',
                'dataUrl' => '/api/v1/content/wp_category/wp_category_' . $category->term_id
            ];
        }
        return $fCategories;
    }
}


