<?php

namespace App\Models;

/**
 * Class Cart
 * @package App\Models
 */
class Cart
{
    /**
     * Default product quantity when adding to the cart
     */
    public const ITEM_DEFAULT_QUANTITY = 1;

    /**
     * Adds an item to the cart
     *
     * @param Product $product
     * @return bool
     */
    public function addItem(Product $product): bool
    {
        $key = $this->findItemInSession($product);

        if (isset($_SESSION['cart'][$key])) {
            $newQuantity = $_SESSION['cart'][$key]['quantity'] + 1;

            $_SESSION['cart'][$key]['quantity'] = $newQuantity;
            $_SESSION['cart'][$key]['total'] = $newQuantity * $product->getPrice();
        } else {
            $_SESSION['cart'][] = [
                'product' => $product,
                'quantity' => self::ITEM_DEFAULT_QUANTITY,
                'total' => self::ITEM_DEFAULT_QUANTITY * $product->getPrice()
            ];
        }

        return true;
    }

    /**
     * Removes an item from the cart
     *
     * @param Product $product
     * @return bool
     */
    public function removeItem(Product $product): bool
    {
        $key = $this->findItemInSession($product);

        if (isset($_SESSION['cart'][$key])) {
            unset($_SESSION['cart'][$key]);
            return true;
        }

        return false;
    }

    /**
     * Retrieves all items in the cart
     *
     * @return array
     */
    public function getItems(): array
    {
        return $_SESSION['cart'] ?? [];
    }

    /**
     * Calculated cart overall total
     * @return float
     */
    public function getOverallTotal(): float
    {
        $total = 0;

        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $item) {
                $total += $item['total'];
            }
        }

        return sprintf('%0.2f', $total);
    }

    /**
     * Finds an item in the cart and returns it's key
     *
     * @param Product $product
     * @return int|string|null
     */
    private function findItemInSession(Product $product): ?int
    {
        $keyFound = null;

        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['product']->getId() === $product->getId()) {
                $keyFound = $key;
            }
        }

        return $keyFound;
    }
}
