<?php

require __DIR__ . '/../vendor/autoload.php';

use App\App;
use App\Router;
use App\Repositories\ProductRepository;
use App\Models\Cart;

// Start Session
session_name("simple-cart-exercise");
session_start();

$products = [
    ['name' => 'Sledgehammer', 'price' => 125.75],
    ['name' => 'Axe', 'price' => 190.50],
    ['name' => 'Bandsaw', 'price' => 562.131],
    ['name' => 'Chisel', 'price' => 12.9],
    ['name' => 'Hacksaw', 'price' => 18.45],
];

// Bind products to the container
App::bind('productRepository', new ProductRepository($products));

// Bind Cart to the container
App::bind('cart', new Cart());

// Start App
Router::start();
