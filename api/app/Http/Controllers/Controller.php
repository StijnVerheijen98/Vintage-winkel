<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

/**
 * Class Controller
 *
 * @package App\Http\Controllers
 */
abstract class Controller extends BaseController
{
    /**
     * Get a single item
     *
     * @param int $id
     *
     * @return mixed
     */
    abstract function get($id = 0);

    /**
     * Get multiple items
     *
     * @param $limit
     * @param $page
     *
     * @return mixed
     */
    abstract function all($limit, $page);

    /**
     * Add a new item
     *
     * @param array $data
     *
     * @return mixed
     */
    abstract function add($data = []);

    /**
     * Update en aisling item
     *
     * @param int   $id
     * @param array $data
     *
     * @return mixed
     */
    abstract function update($id = 0, $data = []);

    /**
     * Delete an item
     *
     * @param int $id
     *
     * @return mixed
     */
    abstract function delete($id = 0);
}
