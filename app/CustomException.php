<?php

declare(strict_types = 1);

namespace app;

use Exception;

class CustomException extends Exception
{
    public static function availableQuantityExceededException() : static
    {
        return new static ('Product quantity exceeded');
    }

    public static function outOfStockException() : static
    {
        return new static ('This Product is out of stock because quantity cannot be less than one');
    }

    public static function itemNotFoundInCartException() : static
    {
        return new static ('This product is not found');
    }
}