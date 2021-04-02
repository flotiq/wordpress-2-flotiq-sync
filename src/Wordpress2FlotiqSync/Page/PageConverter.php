<?php

namespace Wordpress2FlotiqSync\Page;

use Wordpress2FlotiqSync\Utils\ContentParser;

class PageConverter
{
    private $contentParser;

    public function __construct($apiMediaInstance)
    {
        $this->contentParser = new ContentParser($apiMediaInstance);
    }

    public function convert($page)
    {
        return [
            'id' => 'wp_page_' . $page->ID,
            'slug' => $page->post_title,
            'title' => $page->post_title,
            'status' => $page->post_status,
            'created' => $page->post_date,
            'modified' => $page->post_modified,
            'content' => $this->contentParser->parse($page->post_content),
            'author' => [[
                'type' => 'internal',
                'dataUrl' => '/api/v1/content/wp_author/wp_author_' . $page->post_author
                ]
            ],
            'featuredMedia' => $this->contentParser->featureMediaParse($page->ID)
        ];
    }
}