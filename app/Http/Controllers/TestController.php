<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $obj = json_decode(file_get_contents(storage_path() . "/students.json"), true);
        $students = $obj['students'];
        // echo "<pre>";
        // print_r($obj['students']);
        // print_r($students[0]);
        return view("ProductCatalog",['students'=>$students]);
    }
}
