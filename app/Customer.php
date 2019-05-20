<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

class Customer extends Model
{
    protected $table = 'customer';
    protected $fillable = ['firstName',
        'lastName',
        'address1',
        'address2',
        'city',
        'state',
        'zip',
        'country'];

    public static function create(string $firstName,
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

        $lastInsertId = DB::select('select LAST_INSERT_ID() as id')[0];
        return $lastInsertId;
    }
}
