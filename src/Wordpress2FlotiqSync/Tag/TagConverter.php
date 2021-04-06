<?php

namespace Wordpress2FlotiqSync\Tag;

class TagConverter
{
    const CTD_NAME = 'wp_tag';

    static public function convert($tag)
    {
        // @todo - check tag with parent
        return [
            'id' => self::createFlotqId($tag->term_id),
            'slug' => $tag->slug,
            'name' => $tag->name,
            'description' => $tag->description
        ];
    }

    static public function createFlotqId($tag_id)
    {
        return self::CTD_NAME . '_' . $tag_id;
    }
}