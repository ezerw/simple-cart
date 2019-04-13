<?php

namespace App\Contracts;

use App\Models\Product;

/**
 * Interface ProductRepositoryInterface
 * @package App\Contracts
 */
interface ProductRepositoryInterface
{
    public function __construct(array $products);
    public function getAll(): array;
    public function getById(int $id): Product;
}
