<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CustomerController extends Controller
{
    public function postCreate(Request $request)
    {
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $address1 = $request->input('address1');
        $address2 = $request->input('address2');
        $city = $request->input('city');
        $state = $request->input('state');
        $zip = $request->input('zip');
        $country = $request->input('country');

        $this->create($firstName,
            $lastName,
            $address1,
            $address2,
            $city,
            $state,
            $zip,
            $country);
        echo 'Customer created successfully. <br/>';
    }

    public function create(string $firstName,
                           string $lastName,
                           string $address1,
                           ?string $address2,
                           string $city,
                           string $state,
                           string $zip,
                           string $country)
    {
        $checkedAddress2 = $address2 == null ? "NULL" : $address2;

        DB::insert('insert into customer (firstName, lastName, address1, address2, city, state, zip, country) 
                values(?, ?, ?, ?, ?, ?, ?, ?)', [
            $firstName,
            $lastName,
            $address1,
            $checkedAddress2,
            $city,
            $state,
            $zip,
            $country
        ]);
    }

    public function delete($id) {
        DB::delete('delete from customer where id = ?', [$id]);
        echo "Customer deleted successfully.<br/>";
    }

    public function list()
    {
        $customers = DB::select('select * from customer');
        return view('customersView', ['customers' => $customers]);
    }
}
