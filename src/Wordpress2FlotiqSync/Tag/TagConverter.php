<?php

namespace Wordpress2FlotiqSync\Tag;

class TagConverter
{
    static public function convert($tag)
    {
        // @todo - check tag with parent
        return [
            'id' => 'wp_tag_' . $tag->term_id,
            'slug' => $tag->slug,
            'name' => $tag->name,
            'description' => $tag->description
        ];
    }
}