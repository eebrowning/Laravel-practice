<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $product= json_decode(file_get_contents(storage_path() . '/product.json'),true);

        $title= $product['pageTitle'];
        $type= $product['pageType'];
        $sku= $product['contentElement']['values']['productSku'];
        $slug= $product['contentElement']['values']['productSlug'];
        
    
        $meta= $product['metadata']['values'];
            $currency=$product['metadata']['values']['currency'];
            $twitterSite=$product['metadata']['values']['twitterSite'];
            $twitterCreator=$product['metadata']['values']['twitterCreator'];
            $googleCondition=$product['metadata']['values']['googleCondition'];
            $googleAgeCategory=$product['metadata']['values']['googleAgeCategory'];
            $googleGenderCategory=$product['metadata']['values']['googleGenderCategory'];
    
        $header= $product['header'];
    
        $productObject= $product['contentElement']['values']['productObject'];
        $mediaCollection= $product['contentElement']['values']['mediaCollection'];
    
    

        return view("./Product/ProductPage",[
            'product'=>$product,
            'title'=>$title,
            'type'=>$type,
            'sku'=>$sku,
            'slug'=>$slug,
            'header'=>$header,
            'productObject'=>$productObject,
            'mediaCollection'=>$mediaCollection

        ]);
    }
   
}
