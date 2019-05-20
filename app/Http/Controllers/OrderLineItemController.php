<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OrderLineItemController extends Controller
{
    public function postCreate(int $productId, int $quantity, string $imageLink) {
        DB::insert('insert into order_line_items (productId, quantity, imageLink) values(?, ?, ?)',
            [$productId, $quantity, $imageLink]);
    }
}
