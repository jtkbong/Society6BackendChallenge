<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function postCreate(Request $request) {
        $vendorId = $request->input('vendorId');
        $productTypeId = $request->input('productTypeId');
        $creativeId = $request->input('creativeId');
        DB::insert('insert into product (vendorId, productTypeId, creativeId) values(?, ?, ?)',
            [$vendorId, $productTypeId, $creativeId]);
        echo 'Product created successfully. <br/>';
    }

    public function list() {
        $products = DB::select('select * from product');
        return view('productsView', ['products' => $products]);
    }
}
