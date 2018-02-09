<?php
/**
 * Created by PhpStorm.
 * User: zerothe2nd
 * Date: 2/9/18
 * Time: 11:45 AM
 */

namespace App\Exceptions;

use Curl\Curl;

class DiscordHandler
{
    /**
     * @var Curl $curl
     */
    protected $curl;

    public function __construct(Curl $curl)
    {
        $this->curl = $curl;
    }

    public function handleError()
    {
        $this->curl->post(
            '',
            [

            ]
        );
    }
}