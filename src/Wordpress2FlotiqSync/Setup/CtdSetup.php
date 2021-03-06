<?php

namespace Wordpress2FlotiqSync\Setup;

use GuzzleHttp\Client;
use OpenAPI\Client\Api\InternalApi;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;

class CtdSetup
{
    private $client;

    const CTD_PATH = __DIR__ . '/../../../vendor/flotiq/wordpress-content-type-definitions/ctd';

    public function __construct($apiKey)
    {
        $client = new Client();
        $config = Configuration::getDefaultConfiguration()
            ->setApiKey('X-AUTH-TOKEN', $apiKey);

        $this->client = new InternalApi(
            $client,
            $config
        );
    }

    /**
     * @return SetupStatus
     */
    public function setup()
    {
        try {
            $ctds = $this->getCtds();

            foreach ($ctds as $ctd) {
                $this->client->postContentDefinition($ctd);
            }
            return new SetupStatus(SetupStatus::STATUS_OK, 'Content type definitions installed successfully');
        } catch (ApiException $e) {
            if ($e->getCode() === 401) {
                return new SetupStatus(SetupStatus::STATUS_FAILED, $e->getMessage());
            }
            if ($e->getCode() === 500) {
                return new SetupStatus(SetupStatus::STATUS_FAILED, $e->getMessage());
            }
            return new SetupStatus(SetupStatus::STATUS_WARNING, $e->getMessage());
        } catch (\Exception $e) {
            return new SetupStatus(SetupStatus::STATUS_FAILED, $e->getMessage());
        }
    }

    private function getCtds()
    {
        $files = scandir(self::CTD_PATH);
        if (!$files) {
            throw new \Exception("Required Content Type Definitions not found!");
        }
        $files = array_diff($files, ['.', '..']);

        $ctds = [];
        foreach ($files as $file) {
            $fileContent = file_get_contents(self::CTD_PATH . '/' . $file);
            if (!$fileContent) {
                throw new \Exception("Can't read file:" . $file);
            }

            $ctdArray = json_decode($fileContent, true);

            if (json_last_error()) {
                throw new \Exception(json_last_error_msg());
            }

            $ctds[$file] = $ctdArray;
        }

        return $ctds;
    }
}
