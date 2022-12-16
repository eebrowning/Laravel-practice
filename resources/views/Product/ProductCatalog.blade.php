@php
    $product_pages = $catalog['productPages'];
    $title= $catalog['pageTitle'];
    $type= $catalog['pageType'];

    $meta= $catalog['metadata'];//blank
    $sort= $catalog['contentElement']['values']['sort'];
    $style= $catalog['contentElement']['values']['style'];
    $footerType= $catalog['contentElement']['values']['footerType'];

    $content= $catalog['contentElement'];
    $products= $catalog['productPages'];



@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> -->
        <link href="{{ asset('css/catalog.css') }}" rel="stylesheet">

        <title>{{$title}}</title>

    </head>
    @include('../menu/PrimaryMenu')
    @show
<body>

    <div class="catalog">
        <h1>{{$title}}</h1>
        
        @for ($i=0 ; $i < sizeof($products) ; $i++)
        <div class='product'>
            <div id='image-block'>
                <span style="display:none">
                    {{$name=$products[$i]['contentElement']['values']['mediaCollection'][0]['name']}}
                    {{$shopId=$products[$i]['contentElement']['values']['mediaCollection'][0]['shopifyId']}}
                </span>
            <img id='image-main' src='https://cdn.shopify.com/s/files/1/1065/4262/products/{{$name}}?v={{$shopId}}' alt=""/>
                
            </div>
            <div class='product-detail'>
                    <p>product page: <a href='/catalog/{{$products[$i]['metadata']['id']}}'>{{$products[$i]['pageTitle']}}<a></p>
                    <p>product ID: {{$products[$i]['metadata']['id']}}</p>
                    
                    <p>product Link: <a href='{{$products[$i]['metadata']['link']}}'>{{$products[$i]['metadata']['link']}}<a></p>

            </div>

        </div>
        @endfor
</div>
</body>
    @include('./Menu/FooterMenu')
    @show
</html>
