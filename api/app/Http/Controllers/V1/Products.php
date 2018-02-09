<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;

class Products extends Controller
{

    /**
     * Get a single item
     *
     * @param int $id
     *
     * @return mixed
     */
    function get($id = 0)
    {
        // TODO: Implement get() method.
    }

    /**
     * Get multiple items
     *
     * @param $limit
     * @param $page
     *
     * @return mixed
     */
    function all($limit, $page)
    {
        // TODO: Implement all() method.
    }

    /**
     * Add a new item
     *
     * @param array $data
     *
     * @return mixed
     */
    function add($data = [])
    {
        // TODO: Implement add() method.
    }

    /**
     * Update en aisling item
     *
     * @param int   $id
     * @param array $data
     *
     * @return mixed
     */
    function update($id = 0, $data = [])
    {
        // TODO: Implement update() method.
    }

    /**
     * Delete an item
     *
     * @param int $id
     *
     * @return mixed
     */
    function delete($id = 0)
    {
        // TODO: Implement delete() method.
    }
}
