<?php

namespace Wordpress2FlotiqSync\Converters;

class AuthorConverter
{
    const CTD_NAME = 'wp_author';

    static public function convert($user)
    {
        return [
            'id' => self::createFlotqId($user->ID),
            'slug' => $user->data->user_login,
            'name' => $user->data->display_name,
            'description' => $user->data->user_nicename
        ];
    }

    static public function createFlotqId($wp_id)
    {
        return self::CTD_NAME . '_' . $wp_id;
    }
}