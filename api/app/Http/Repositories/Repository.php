<?php
/**
 * Created by PhpStorm.
 * User: zerothe2nd
 * Date: 2/9/18
 * Time: 10:42 AM
 */

namespace App\Http\Repositories;

use Aura\Sql\ExtendedPdo;


class Repository
{
    protected $db;

    public function __construct()
    {
        $conn     = config('DB_CONNECTION');
        $host     = config('DB_HOST');
        $port     = config('DB_PORT');
        $name     = config('DB_DATABASE');
        $user     = config('DB_USERNAME');
        $pass     = config('DB_PASSWORD');
        $this->db = new ExtendedPdo(
            "$conn:host=$host:$port;dbname=$name",
            $user,
            $pass,
            [], // driver attributes/options as key-value pairs
            []  // queries to execute after connection
        );
    }

    abstract function get($id = 0);
}