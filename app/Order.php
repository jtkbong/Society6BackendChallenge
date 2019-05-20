<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

abstract class Order
{
    abstract protected static function createOrder(string $orderText);
}
