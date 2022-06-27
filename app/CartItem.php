<?php

declare(strict_types = 1);

namespace app;

use app\Product;
use app\CustomException;


class CartItem
{
    private Product $product;
    private int $quantity;


    public function __construct(Product $product, int $quantity)
    {
        $this -> product = $product;
        $this -> quantity = $quantity;
    }

    public function getProduct() 
    {
        return $this -> product;
    }

    /**
     * @return int
     */
    public function getQuantity() : int
    {
        return $this -> quantity;
    }

    public function setProduct (Product $product) : Product 
    {
        return $this -> product = $product;
    }

    public function setQuantity (int $quantity) : int 
    {
        return $this -> quantity = $$quantity;
    }



    
    /**
     * @param float $amount
     * 
     * @return void
     * @throws CustomException
     */
    public function increaseQuantity(int $amount = 1) : void
    {
        if($this -> getQuantity() + $amount > $this -> getProduct()->getAvailableQuantity()){
            throw CustomException::availableQuantityExceededException();
        }

        $this -> quantity += $amount;
    }

    /**
     * @param float $amount
     * 
     * @return void
     * @throws CustomException
     */
    public function decreaseQuantity(int $amount =  1) : void
    {
        if($this -> getQuantity() - $amount < 1){
            throw CustomException::outOfStockException();
        }

        $this -> quantity -= $amount;
    }
}
