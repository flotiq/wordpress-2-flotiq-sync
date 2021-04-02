<?php


namespace Wordpress2FlotiqSync\Setup;


class SetupStatus
{
    const STATUS_OK = 'OK';
    const STATUS_WARNING = 'warning';
    const STATUS_FAILED = 'failed';

    public $status;
    public $message;

    public function __construct($status, $message)
    {
        $this->status = $status;
        $this->message = $message;
    }
}