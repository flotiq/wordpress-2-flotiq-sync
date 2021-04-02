<?php


namespace Wordpress2FlotiqSync\Utils;


class FindMedia
{
    private $apiMediaInstance;

    /**
     * FindMedia constructor.
     * @param $apiMediaInstance
     */
    public function __construct($apiMediaInstance)
    {
        $this->apiMediaInstance = $apiMediaInstance;
    }

    /**
     * @param string $fileName
     * @return array
     */
    public function find($fileName)
    {
        $filter = '{"fileName":{"type":"contains","filter":"' . $fileName . '"}}';

        return $this->apiMediaInstance
            ->listMedia(1, 1, 'internal.createdAt', 'asc', 0, $filter);
    }
}