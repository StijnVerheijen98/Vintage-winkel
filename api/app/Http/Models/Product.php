<?php

namespace App\Http\Models;

use Carbon\Carbon;

/**
 * Class Product
 *
 * @package App\Http\Models
 */
class Product extends Model
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $short_description;

    /**
     * @var string
     */
    private $full_description;

    /**
     * @var array
     */
    private $images;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var float
     */
    private $price;

    /**
     * @var Carbon
     */
    private $created_at;

    /**
     * @var Carbon
     */
    private $updated_at;

    /**
     * @var Carbon
     */
    private $deleted_at;

    /**
     * Product constructor.
     *
     * @param int    $id
     * @param string $name
     * @param string $short_description
     * @param string $full_description
     * @param array  $images
     * @param int    $quantity
     * @param float  $price
     * @param Carbon $created_at
     * @param Carbon $updated_at
     * @param Carbon $deleted_at
     */
    public function __construct(
        int $id,
        string $name,
        string $short_description,
        string $full_description,
        array $images,
        int $quantity,
        float $price,
        Carbon $created_at,
        Carbon $updated_at,
        Carbon $deleted_at
    ) {
        $this->id                = $id;
        $this->name              = $name;
        $this->short_description = $short_description;
        $this->full_description  = $full_description;
        $this->images            = $images;
        $this->quantity          = $quantity;
        $this->price             = $price;
        $this->created_at        = $created_at;
        $this->updated_at        = $updated_at;
        $this->deleted_at        = $deleted_at;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getShortDescription(): string
    {
        return $this->short_description;
    }

    /**
     * @return string
     */
    public function getFullDescription(): string
    {
        return $this->full_description;
    }

    /**
     * @return array
     */
    public function getImages(): array
    {
        return $this->images;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return Carbon
     */
    public function getCreatedAt(): Carbon
    {
        return $this->created_at;
    }

    /**
     * @return Carbon
     */
    public function getUpdatedAt(): Carbon
    {
        return $this->updated_at;
    }

    /**
     * @return Carbon
     */
    public function getDeletedAt(): Carbon
    {
        return $this->deleted_at;
    }
}
