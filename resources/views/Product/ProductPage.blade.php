@php
    $title= $product['pageTitle'];
    $type= $product['pageType'];
    $sku= $product['contentElement']['values']['productSku'];
    $slug= $product['contentElement']['values']['productSlug'];
    
    $mediaCollection= $product['contentElement']['values']['mediaCollection'];

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


@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$title}}</title>

        <link href="{{ asset('css/product.css') }}" rel="stylesheet">
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    </head>
    <body >
    @include('../menu/PrimaryMenu')

    @show
    <div class="product-outer">

        <!-- <div id='image-block'>            
            <img id='image-main' src='https://cdn.shopify.com/s/files/1/1065/4262/products/{{$mediaCollection[0]['name']}}?v={{$mediaCollection[0]['shopifyId']}}' alt=""/>
            <div id='image-options'>
                @foreach($mediaCollection as $image)
                <img src='https://cdn.shopify.com/s/files/1/1065/4262/products/{{$image['name']}}?v={{$image['shopifyId']}}' alt=""/>
                @endforeach
                
            </div>
            
        </div> -->
        <livewire:alpine-practice />

        <div class="product-info">
            <h1>{{$title}}</h1>
            <p>{!!$productObject['tags']!!}</p>
            <div id='description'>{!!$productObject['description']!!}</div>
            <p>{!!$product['values']['longDescription']!!}</p>
            <p>{!!$product['values']['shortDescription']!!}</p>



        </div>
        <div class='product-options'>

        </div>
    </div>
    @include('./Menu/FooterMenu')

@show
    </body>
</html>
<!-- 
ProductPage

```markup
+-- Product
|       +-- Page Title
|       +-- Page Type
|       +-- Product SKU
|   +-- Meta
|       +-- Currency
|       +-- Twitter Site
|       +-- Twitter Creator
|       +-- Google Condition
|       +-- Google Age Category
|       +-- Google Gender Categorycoded?
|   +-- Header
|       +-- 
|   +-- Content
|       +-- Content Blocks
|           +-- Twitter Card
|           +-- Twitter Card Image
|           +-- Manufacturer Part Number (MPN) or Barcode (GTIN)
|           +-- Tags
|           +-- Google Product Category
|           +-- Google Color Category
|           +-- Google Material Category
|           +-- Google Unit Pricing Measure
|           +-- Product Slug
|           +-- Long Description
|           +-- Medium Description
|           +-- Short Description 
|           +-- Media Collection
``` -->
