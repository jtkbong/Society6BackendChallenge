<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use DB;

class CreativeController extends Controller
{
    public function postCreate(Request $request) {
        $name = $request->name;
        $description = $request->description;
        $link = $request->link;
        DB::insert('insert into creative (name, description, link) values(?, ?, ?)', [$name, $description, $link]);
        echo 'Creative created successfully. <br/>';
    }

    public function get($id) {
        $creative = DB::select('select * from creative where id = ?', [$id])[0];
        echo "Name: ".$creative->name."<br/>";
        echo "Description: ".$creative->description."<br/>";
        echo "Link: ".$creative->link."<br/>";
    }

    public function list() {
        $creatives = DB::select('select * from creative');
        return view('creativesView', ['creatives' => $creatives]);
    }

    public function update(Request $request, $id) {
        $name = $request->input('name');
        $description = $request->input('description');
        $link = $request->input('link');
        DB::update('update creative set name = ?, description = ?, link = ? where id = ?',[$name, $description, $link, $id]);
        echo "Creative updated successfully.<br/>";
    }

    public function delete($id) {
        DB::delete('delete from creative where id = ?', [$id]);
        echo "Creative deleted successfully.<br/>";
    }
}
