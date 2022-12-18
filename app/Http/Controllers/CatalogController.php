<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $catalog= json_decode(file_get_contents(storage_path() . '/catalog.json'),true);
        $product_pages = $catalog['productPages'];
        $type= $catalog['pageType'];
        $title= $catalog['pageTitle'];
    
        $meta= $catalog['metadata'];//blank
        $sort= $catalog['contentElement']['values']['sort'];
        $style= $catalog['contentElement']['values']['style'];
        $footerType= $catalog['contentElement']['values']['footerType'];
    
        $content= $catalog['contentElement'];
        $products= $catalog['productPages'];
    

        // echo "<pre>";
        // print_r($catalog);

        return view("./Product/ProductCatalog",['catalog'=>$catalog,'product_pages'=>$product_pages,'title'=>$title,'type'=>$type,
        'meta'=>$meta,'sort'=>$sort,'style'=>$style,'footerType'=>$footerType,'content'=>$content,'products'=>$products]);
    }
   
}
