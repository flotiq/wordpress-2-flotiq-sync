<?php

namespace Wordpress2FlotiqSync\Converters;

use Wordpress2FlotiqSync\Utils\ContentParser;

class PageConverter
{
    const CTD_NAME = 'wp_page';

    private $contentParser;

    public function __construct($apiMediaInstance)
    {
        $this->contentParser = new ContentParser($apiMediaInstance);
    }

    public function convert($page)
    {
        return [
            'id' => self::createFlotqId($page->ID),
            'slug' => $page->post_title,
            'title' => $page->post_title,
            'status' => $page->post_status,
            'created' => $page->post_date,
            'modified' => $page->post_modified,
            'content' => $this->contentParser->parse($page->post_content),
            'author' => [[
                'type' => 'internal',
                'dataUrl' => '/api/v1/content/wp_author/' . AuthorConverter::createFlotqId($page->post_author)
            ]],
            'featuredMedia' => $this->contentParser->featureMediaParse($page->ID)
        ];
    }

    static public function createFlotqId($wp_id)
    {
        return self::CTD_NAME . '_' . $wp_id;
    }
}