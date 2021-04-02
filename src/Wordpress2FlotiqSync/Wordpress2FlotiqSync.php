<?php


namespace Wordpress2FlotiqSync;

use GuzzleHttp\Client;
use OpenAPI\Client\Api\ContentMediaApi;
use OpenAPI\Client\Api\MediaApi;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Api\ContentWpAuthorApi;
use OpenAPI\Client\Api\ContentWpCategoryApi;
use OpenAPI\Client\Api\ContentWpTagApi;
use OpenAPI\Client\Api\ContentWpPageApi;
use OpenAPI\Client\Api\ContentWpPostApi;
use Wordpress2FlotiqSync\Page\PageConverter;
use Wordpress2FlotiqSync\Post\PostConverter;
use Wordpress2FlotiqSync\Tag\TagConverter;
use Wordpress2FlotiqSync\Author\AuthorConverter;
use Wordpress2FlotiqSync\Category\CategoryConverter;
use Wordpress2FlotiqSync\Utils\FindMedia;
use Wordpress2FlotiqSync\Utils\MediaFileName;

class Wordpress2FlotiqSync
{
    private $config;
    private $client;
    private $update;
    private $apiMediaInstance;
    public function __construct($apiKey, $update = 'true')
    {
        $this->client = new Client();
        $this->update = $update;
        $this->config = Configuration::getDefaultConfiguration()
            ->setApiKey('X-AUTH-TOKEN', $apiKey);

        $this->apiMediaInstance = new ContentMediaApi(
            $this->client,
            $this->config
        );
    }

    public function syncAuthors($users)
    {
        $apiInstance = new ContentWpAuthorApi(
            $this->client,
            $this->config
        );
        $authors = [];
        foreach ($users as $user) {
            $authors[] = AuthorConverter::convert($user);
        }
        try {
            return $apiInstance->batchCreateWpAuthor($this->update, $authors);
        } catch (ApiException $e) {
            return false;
        }
    }

    public function syncCategories($categories)
    {
        $fCategories = [];
        foreach ($categories as $category) {
            $fCategories[] = CategoryConverter::convert($category);
        }

        $apiInstance = new ContentWpCategoryApi(
            $this->client,
            $this->config
        );
        try {
            return $apiInstance->batchCreateWpCategory($this->update, $fCategories);
        } catch (ApiException $e) {
            return false;
        }
    }

    public function syncTags($tags)
    {
        $fTags = [];
        foreach ($tags as $tag) {
            $fTags[] = TagConverter::convert($tag);
        }
        $apiInstance = new ContentWpTagApi(
            $this->client,
            $this->config
        );

        try {
            return $apiInstance->batchCreateWpTag($this->update, $fTags);
        } catch (ApiException $e) {
            return false;
        }
    }

    public function syncMedia(array $media, $wpbBasedir)
    {
        $apiInstance = new MediaApi(
            $this->client,
            $this->config
        );

        foreach ($media as $m) {
            $guidChunks = explode('uploads', $m->guid);
            $fileName = MediaFileName::getName($m->guid);
            $imagePath = "$wpbBasedir/{$guidChunks[1]}";

            try {
                $findMedia = new FindMedia($this->apiMediaInstance);
                $exist = $findMedia->find($fileName);
                if (!array_key_exists(0, $exist['data'])) {

                    $fileSpl = new \SplFileObject($imagePath, 'r');

                    $apiInstance->postMedia($fileSpl, 'image', 1);
                }
            } catch (ApiException $e) {
                return false;
            }
        }

    }

    public function removeMedia($imagePostGuid)
    {
        $fileName = MediaFileName::getName($imagePostGuid);
        $findMedia = new FindMedia($this->apiMediaInstance);
        $exist = $findMedia->find($fileName);

        if (array_key_exists(0, $exist['data'])) {
            return $this->apiMediaInstance->deleteMediaWithHttpInfo($exist['data'][0]['id']);
        }
    }

    public function syncPages($pages)
    {
        $fPages = [];
        $pageConverter = new PageConverter($this->apiMediaInstance);

        foreach ($pages as $page) {
            $fPages[] = $pageConverter->convert($page);
        }
        $apiInstance = new ContentWpPageApi(
            $this->client,
            $this->config
        );

        try {
            return $apiInstance->batchCreateWpPage($this->update, $fPages);
        } catch (ApiException $e) {
            return false;
        }
    }

    public function syncPosts($posts)
    {
        $apiInstance = new ContentWpPostApi(
            $this->client,
            $this->config
        );

        $fPosts = [];
        $postConverter = new PostConverter($this->apiMediaInstance);
        foreach ($posts as $post) {
            $fPosts[] = $postConverter->convert($post);
        }
        try {

            return $apiInstance->batchCreateWpPost($this->update, $fPosts);
        } catch (ApiException $e) {
            return false;
        }
    }

}