<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductTypeController extends Controller
{
    public function postCreate(Request $request) {
        $name = $request->input('name');
        DB::insert('insert into product_type (name) values(?)', [$name]);
        echo 'Product type created successfully. <br/>';
    }

    public function list() {
        $productTypes = DB::select('select * from product_type');
        return view('productTypesView', ['productTypes' => $productTypes]);
    }
}
