<?php

namespace Wordpress2FlotiqSync\Author;

class AuthorConverter
{
    static public function convert($user)
    {
        return [
            'id' => 'wp_author_' . $user->ID,
            'slug' => $user->data->user_login,
            'name' => $user->data->display_name,
            'description' => $user->data->user_nicename
        ];
    }
}