<?php

require_once "vendor/autoload.php";

use app\{Cart, Product};

$productOne = new Product(1, "Polo Shirt", 89.99, 10);
$productTwo = new Product(2, "Rolex Watch", 56.56, 10);
$productThree = new Product(3, "Samsung Phone", 189.99, 15);

$cart = new Cart();

$cartItemOne = $cart -> addProductToCart($productOne, 4);
$cartItemTwo = $cart -> addProductToCart($productTwo, 4);
$cartItemThree = $cart -> addProductToCart($productThree, 4);

$cartItemOne -> increaseQuantity(4);
$cartItemTwo -> increaseQuantity(4);

$cartItemOne -> decreaseQuantity();

echo "Number of items in cart" . PHP_EOL;
echo $cart -> getTotalQuantity() . PHP_EOL;

echo "Total price of items in cart" . PHP_EOL;
echo $cart -> getTotalPriceOfItemsInCart();

echo $cart -> removeItemFromCart($productThree) . PHP_EOL;

echo "Number in of items in cart" . PHP_EOL;
echo $cart -> getTotalQuantity() . PHP_EOL;