<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

class OrderLineItem
{
    public static function create(int $productId, int $quantity, string $imageLink) {
        DB::insert('insert into order_line_items (productId, quantity, imageLink) values(?, ?, ?)',
            [$productId, $quantity, $imageLink]);
        $lastInsertId = DB::select('select LAST_INSERT_ID() as id')[0];
        return $lastInsertId;
    }
}
