<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $components= json_decode(file_get_contents(storage_path() . '/components.json'),true);
            $primary_global_menu = $components[0]["contentElement"];
            $footer_menu = $components[1]["contentElement"];    
            


        $home = json_decode(file_get_contents(storage_path() . "/home.json"), true);



        // echo "<pre>";
        // print_r($components);

        return view("HomePage",['home'=>$home,'primary_global_menu'=>$primary_global_menu,'footer_menu'=>$footer_menu]);
    }
   
}
