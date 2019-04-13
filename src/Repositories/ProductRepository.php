<?php

namespace App\Repositories;

use App\Contracts\ProductRepositoryInterface;
use App\Models\Product;

/**
 * Class ProductRepository
 * @package App\Repositories
 */
class ProductRepository implements ProductRepositoryInterface
{
    /**
     * @var array
     */
    private $products = [];

    /**
     * ProductRepository constructor.
     * @param array $products
     */
    public function __construct(array $products)
    {
        foreach ($products as $key => $item) {
            $product = new Product();
            $product->setId($key + 1);
            $product->setName($item['name']);
            $product->setPrice($item['price']);

            $this->products[] = $product;
        }
    }

    /**
     * Retrieves all products
     *
     * @return array
     */
    public function getAll(): array
    {
        return $this->products;
    }

    /**
     * Finds an item in the list of all products
     *
     * @param int $id
     * @return Product
     */
    public function getById(int $id): Product
    {
        $found = null;
        foreach ($this->products as $product) {
            if ($product->getId() === $id) {
                $found = $product;
            }
        }

        return $found;
    }
}
