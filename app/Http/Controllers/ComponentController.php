<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function primary()
    {
        $components= json_decode(file_get_contents(storage_path() . '/components.json'),true);

        // $obj = json_decode(file_get_contents(storage_path() . "/components.json"), true);

//primary menu
        $primary_global_menu = $components[0]["contentElement"];
        $about_us= $primary_global_menu['items'][0];
        $shop= $primary_global_menu['items'][1];
        $community= $primary_global_menu['items'][2];
        $art_of_ONE= $primary_global_menu['items'][3];


/////footer menu
        $footer_menu = $components[1]["contentElement"];
        $where_to_buy = $footer_menu['items'][0];
        $returns_exchanges = $footer_menu['items'][1];
        $influencers_affiliates = $footer_menu['items'][2];
        $privacy_security = $footer_menu['items'][3];
        $wholesale_non_profit_sales = $footer_menu['items'][4];
        $contact_us = $footer_menu['items'][5];
        $faqs= $footer_menu['items'][6];

//home content? uncertain what to do with this atm.
        $homeContent = $components[3]["contentElement"];

        // echo "<pre>";
        // print_r($primary_global_menu);
        // echo "<pre>";
        // print_r($where_to_buy);

        return view("./Product/ProductCatalog",['components'=>$components]);
    }
    public function footer()
    {
/////footer menu
        $footer_menu = $components[1]["contentElement"];
        $where_to_buy = $footer_menu['items'][0];
        $returns_exchanges = $footer_menu['items'][1];
        $influencers_affiliates = $footer_menu['items'][2];
        $privacy_security = $footer_menu['items'][3];
        $wholesale_non_profit_sales = $footer_menu['items'][4];
        $contact_us = $footer_menu['items'][5];
        $faqs= $footer_menu['items'][6];
    }

}
