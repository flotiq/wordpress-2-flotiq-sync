<?php

namespace Wordpress2FlotiqSync\Utils;

class MediaFileName
{
    static public function getName($url)
    {
        $urlChunks = explode('/', $url);
        $fileName = $urlChunks[count($urlChunks) - 1];
        return str_replace('-scaled', '', $fileName);
    }
}