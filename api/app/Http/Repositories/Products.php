<?php

namespace App\Http\Repositories;

class Products extends Repository
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get a single item
     *
     * @param int $id
     *
     * @return array|false|null
     */
    public function get($id = 0)
    {
        $stmt   = $this->db->prepare(
            "SELECT * FROM `Products` WHERE id = :id",
            [
                'id' => (int)$id,
            ]
        );
        $result = $this->db->fetchOne($stmt);

        return (!is_null($result))
            ? $result
            : null;
    }
}