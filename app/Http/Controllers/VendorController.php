<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class VendorController extends Controller
{
    public function postCreate(Request $request) {
        $name = $request->input('name');
        DB::insert('insert into vendor (name) values(?)', [$name]);
        echo 'Vendor created successfully. <br/>';
    }

    public function list() {
        $vendors = DB::select('select * from vendor');
        return view('vendorsView', ['vendors' => $vendors]);
    }
}
