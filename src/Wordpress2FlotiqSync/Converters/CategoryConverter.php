<?php

namespace Wordpress2FlotiqSync\Converters;

class CategoryConverter
{
    const CTD_NAME = 'wp_category';

    static public function convert($category)
    {

        return [
            'id' => self::createFlotqId($category->term_id),
            'slug' => $category->slug,
            'name' => $category->name,
            'description' => $category->description
        ];
    }

    static public function createFlotqId($wp_id)
    {
        return self::CTD_NAME . '_' . $wp_id;
    }
}