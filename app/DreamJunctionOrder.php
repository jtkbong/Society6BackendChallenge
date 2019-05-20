<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use DB;

class DreamJunctionOrder extends Order
{
    public static function createOrder(string $orderText) {
        $orders = simplexml_load_string($orderText);
        foreach ($orders as $order) {
            $firstName = $order->first_name;
            $lastName = $order->last_name;
            $address1 = $order->address_1;
            $address2 = $order->address_2;
            $city = $order->city;
            $state = $order->state;
            $zip = $order->zip;
            $country = $order->country;
            $customerId = Customer::create($firstName,
                $lastName,
                $address1,
                $address2,
                $city,
                $state,
                $zip,
                $country)->id;

            $orderItemIds = array();

            foreach($order->items->item as $order_line_item) {
                $orderId = $order_line_item->order_number;
                $productId = (int) $order_line_item->product_id;
                $quantity = (int) $order_line_item->quantity;
                $imageLink = $order_line_item->image_url;
                $orderLineItemId = OrderLineItem::create($productId, $quantity, $imageLink)->id;
                array_push($orderItemIds, $orderLineItemId);
            }

            $vendorId = DB::select("select id from vendor where name='DreamJunction'")[0]->id;
            $orderItemIdsStr = implode(",", $orderItemIds);
            DB::insert("insert into `order` (vendorId, customerId, orderItemIds, status) values(?, ?, ?, ?)",
                [$vendorId, $customerId, $orderItemIdsStr, "preparing"]);
        }
        return true;
    }
}
