<?php

namespace App\Controllers;

use App\App;
use App\Models\Cart;

/**
 * Class Controller
 * @package App\Controllers
 */
class Controller
{
    /**
     * @var array
     */
    protected $productRepository;

    /**
     * @var Cart
     */
    protected $cart;

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        $this->productRepository = App::get('productRepository');
        $this->cart = App::get('cart');
    }

    /**
     * @throws \Exception
     */
    public function index()
    {
        $products = $this->productRepository->getAll();
        $cart = $this->cart;

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
            $this->cart->addItem(
                App::get('productRepository')->getById($_POST['product_id'])
            );

            return header('Location: /');
        }

        require __DIR__ . '/../Views/index.view.php';
    }

    /**
     * @throws \Exception
     */
    public function cart()
    {
        $cart = $this->cart;

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
            $this->cart->removeItem(
                App::get('productRepository')->getById($_POST['product_id'])
            );

            return header('Location: /cart');
        }

        require __DIR__ . '/../Views/cart.view.php';
    }
}
