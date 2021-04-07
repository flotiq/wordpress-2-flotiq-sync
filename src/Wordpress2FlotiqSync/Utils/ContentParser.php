<?php

namespace Wordpress2FlotiqSync\Utils;

class ContentParser
{
    private $findMedia;

    public function __construct($apiMediaInstance)
    {
        $this->findMedia = new FindMedia($apiMediaInstance);
    }

    public function parse($content)
    {
        $content = preg_replace_callback("/(<img[^>]*src *= *[\"']?)([^\"']*)/i", function ($matches) {

            $url = $matches[2];
            $siteUrl = get_site_url();
            if (substr($url, 0, strlen($siteUrl)) !== $siteUrl) {
                return;
            }

            $fileName = MediaFileName::getName($url);

            $media = $this->findMedia->find($fileName);

            if ($media['count'] > 0) {
                return $matches[1] . 'http://api.flotiq.com' . $media['data'][0]['url'];
            }
        }, $content);

        return $content;
    }

    public function featureMediaParse($postId)
    {
        $featuredMediaUrl = get_the_post_thumbnail_url($postId, 'attachment');
        $featuredMediaName = MediaFileName::getName($featuredMediaUrl);
        $media = $this->findMedia->find($featuredMediaName);

        return [[
            'type' => 'internal',
            'dataUrl' => '/api/v1/content/_media/' . $media['data'][0]['id']
        ]];
    }
}