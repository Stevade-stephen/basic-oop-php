<?php

declare(strict_types=1);

class Cart
{
    
    private array $items = [];

    public function __construct()
    {
        
    }


    /**
     * 
     * @param Product $product
     * @param int $quantity
     * @return CartItem
     */
    public function addProductToCart(Product $product, int $quantity) : CartItem
    {
        $cartItem = $this->findCartItem($product -> getId());

        if($cartItem === null){
            $cartItem = new CartItem($product, 0);
            $this -> items[] = $cartItem;
        }

        $cartItem -> increaseQuantity($quantity);
        
        
        return $cartItem;
    }

    /**
     * @param int $productId
     * 
     * @return CartItem
     */
    private function findCartItem (int $productId) : ?CartItem
    {
        foreach($this->items as $item){
            if($item -> getProduct()->getId() === $productId){
                return $item;
            }
        }

        return null;
    }

    /**
     * @param Product $product
     * 
     * @return void
     */
    public function removeItemFromCart(Product $product) : void
    {
        foreach($this->items as $index => $item){
            if($item->getProduct()->getId() === $product->getId()){
                unset($this->items[$index]);
                break;
            }
        }

    }

    /**
     * @return int
     */
    public function getTotalQuantity() : int
    {
        $sum = 0;
        foreach($this->items as $item)
        {
            $sum += $item -> getQuantity();
        }
        return $sum;

    }

    /**
     * @return float
     */
    public function getTotalPriceOfItemsInCart() : float
    {
        $sum = 0.0;
        foreach($this->items as $item){
            $sum += $item -> getQuantity() * $item -> getProduct() -> getPrice();
        }
        return $sum;
    }
}
