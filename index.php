<?php

require_once "Cart.php";
require_once "CartItem.php";
require_once "Product.php";

$productOne = new Product(1, "Polo Shirt", 89.99, 10);
$productTwo = new Product(2, "Rolex Watch", 56.56, 10);
$productThree = new Product(3, "Samsung Phone", 189.99, 15);

$cart = new Cart();

$cartItemOne = $cart -> addProductToCart($productOne, 4);
$cartItemTwo = $cart -> addProductToCart($productTwo, 4);
$cartItemThree = $cart -> addProductToCart($productThree, 4);

$cartItemOne -> increaseQuantity(4);
$cartItemTwo -> increaseQuantity(4);

echo "Number in of items in cart" . PHP_EOL;
echo $cart -> getTotalQuantity() . PHP_EOL;

echo "Total price of items in cart" . PHP_EOL;
echo $cart -> getTotalPriceOfItemsInCart();

echo $cart -> removeItemFromCart($productThree) . PHP_EOL;

echo "Number in of items in cart" . PHP_EOL;
echo $cart -> getTotalQuantity() . PHP_EOL;





// $firstname = "Johnny";
// echo "Hello World" . ' ' . $firstname.PHP_EOL;

// echo PHP_VERSION.'</br>';

// $name = <<<TEXT
// Stephen
// Adehor
// TEXT;

// echo $name[10] . '</br>';

// $x = 89;
// var_dump($x === null);

// $listOfLanguages = array("Java", "PHP", "Python");
// array_push($listOfLanguages, "Scala");

// echo '<pre>';
// print_r($listOfLanguages);
// echo '<pre>';

// //Arrays with key, value pair.
// $list = [
//     "php" => "8.0.2",
//     'python' => '4.0'
// ];

// echo '<pre>';
// print_r($list);
// echo '<pre>';