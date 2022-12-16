<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $components= json_decode(file_get_contents(storage_path() . '/components.json'),true);
            $primary_global_menu = $components[0]["contentElement"];
             $footer_menu = $components[1]["contentElement"]; 
        $catalog= json_decode(file_get_contents(storage_path() . '/catalog.json'),true);
        $product= json_decode(file_get_contents(storage_path() . '/product.json'),true);

        // echo "<pre>";
        // print_r($catalog);

        return view("./Product/ProductCatalog",['catalog'=>$catalog, "primary_global_menu"=>$primary_global_menu,'footer_menu'=>$footer_menu]);
    }
   
}
