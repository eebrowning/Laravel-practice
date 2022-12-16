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

        <title>{{$title}}</title>

    </head>
    <body class="antialiased">
    @include('../menu/PrimaryMenu')

@show
        <h1>{{$title}}</h1>

        <div>
        @for ($i=0 ; $i < sizeof($products) ; $i++)
         <p>product Name: <a href='/catalog/{{$products[$i]['metadata']['id']}}'>{{$products[$i]['pageTitle']}}<a></p>
         <p>product ID: {{$products[$i]['metadata']['id']}}</p>
         
         <p>product Link: <a href='{{$products[$i]['metadata']['link']}}'>{{$products[$i]['metadata']['link']}}<a></p>

        @endfor
        </div>
    </body>
</html>
