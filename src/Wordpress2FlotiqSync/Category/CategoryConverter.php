<?php

namespace Wordpress2FlotiqSync\Category;

class CategoryConverter
{
    static public function convert($category)
    {

        return [
            'id' => 'wp_category_' . $category->term_id,
            'slug' => $category->slug,
            'name' => $category->name,
            'description' => $category->description
        ];
    }
}