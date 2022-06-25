<?php

declare(strict_types=1);

namespace app;

class Product
{
    private int $id;
    private string $title;
    private float $price;
    private int $availableQuantity;


    public function __construct(int $id, string $title, float $price, int $availableQuantity)
    {
        $this -> id = $id;
        $this -> title = $title;
        $this -> price = $price;
        $this -> availableQuantity = $availableQuantity;
    }

    public function getId () : int
    {
        return $this -> id;
    }

    public function getTitle () : string
    {
        return $this -> title;
    }

    public function getPrice() : float
    {
        return $this -> price;
    }

    public function getAvailableQuantity() : float
    {
        return $this -> availableQuantity;
    }

}