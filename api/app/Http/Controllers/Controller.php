<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Collection;

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
     * @return Collection;
     */
    abstract function get($id = 0);


    /**
     * @param int   $limit
     * @param int   $page
     * @param array $filters
     *
     * @return Collection;
     */
    abstract function all($limit = 0, $page = 0, $filters = []);

    /**
     * Add a new item
     *
     * @param array $data
     *
     * @return true
     */
    abstract function add($data = []);

    /**
     * Update en aisling item
     *
     * @param int   $id
     * @param array $data
     *
     * @return Collection;
     */
    abstract function update($id = 0, $data = []);

    /**
     * Delete an item
     *
     * @param int $id
     *
     * @return bool
     */
    abstract function delete($id = 0);
}
