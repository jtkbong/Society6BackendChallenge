<?php

namespace App\Http\Controllers;

use App\DreamJunctionOrder;
use App\MarcoFineArtsOrder;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\CustomerController;
use App\Customer;

class OrderController extends Controller
{
    public function postCreate(Request $request) {
        $vendorId = $request->input('vendorId');
        $orderText = $request->input('orderText');
        $orderCreated = false;
        switch ($vendorId) {
            case 1:
                $orderCreated = MarcoFineArtsOrder::createOrder($orderText);
                break;
            case 2:
                $orderCreated = DreamJunctionOrder::createOrder($orderText);
                break;
            default:
                break;
        }

        if ($orderCreated) {
            echo "Order was created successfully.";
        } else {
            echo "Failed to create order";
        }
    }

    public function list($vendorId) {
        $vendor = DB::select('select name from vendor where id=?', [$vendorId])[0];
        $orders = DB::select("select * from `order` where vendorId=?", [$vendorId]);
        return view('ordersView', ['vendor' => $vendor, 'orders' => $orders]);
    }

    public function update(Request $request, $id) {
        $status = $request->input('status');
        DB::update('update `order` set status = ? where id = ?',[$status, $id]);
        echo "Order updated successfully.<br/>";
    }
}
