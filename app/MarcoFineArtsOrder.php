<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use DB;

class MarcoFineArtsOrder extends Order
{
    public static function createOrder(string $orderText) {
        $data = json_decode($orderText, true);
        $orders = $data["data"]["orders"];
        foreach ($orders as $order) {
            $firstName = $order["buyer_first_name"];
            $lastName = $order["buyer_last_name"];
            $address1 = $order["buyer_shipping_address_1"];
            $address2 = $order["buyer_shipping_address_2"];
            $city = $order["buyer_shipping_city"];
            $state = $order["buyer_shipping_state"];
            $zip = $order["buyer_shipping_postal"];
            $country = $order["buyer_shipping_country"];
            $customerId = Customer::create($firstName,
                $lastName,
                $address1,
                $address2,
                $city,
                $state,
                $zip,
                $country)->id;

            $orderItemIds = array();
            foreach($order["print_line_items"] as $order_line_item) {
                $orderId = $order_line_item["external_order_id"];
                $productId = $order_line_item["product_id"];
                $quantity = $order_line_item["quantity"];
                $imageLink = $order_line_item["image_url"];
                $orderLineItemId = OrderLineItem::create($productId, $quantity, $imageLink)->id;
                array_push($orderItemIds, $orderLineItemId);
            }

            $vendorId = DB::select("select id from vendor where name='Marco Fine Arts'")[0]->id;
            $orderItemIdsStr = implode(",", $orderItemIds);
            DB::insert("insert into `order` (vendorId, customerId, orderItemIds, status) values(?, ?, ?, ?)",
                [$vendorId, $customerId, $orderItemIdsStr, "preparing"]);
        }
        return true;
    }
}
