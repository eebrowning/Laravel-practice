<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function index()
    {// menu
        // $components= json_decode(file_get_contents(storage_path() . '/components.json'),true);
        //      $primary_global_menu = $components[0]["contentElement"];
        //     $footer_menu = $components[1]["contentElement"];  
        $notFound= json_decode(file_get_contents(storage_path() . '/error404.json'),true);



        return view("Error404",['notFound'=>$notFound]);
    }

}
