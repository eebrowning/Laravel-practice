@php
  $pageTitle=$notFound['pageTitle'];
  $pageType=$notFound['pageType'];

@endphp


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta type={{$pageType}} name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/error404.css') }}" rel="stylesheet">
        <title>{{$pageTitle}}</title>

    </head>
    @include('./Menu/PrimaryMenu')
@show
    <div class="error-page">
    
      <h2>Error 404: Page not found</h2>
 

      {{print_r($notFound);}}

      <div id='error output'>
        Category: {{$notFound['categories'][0]['name']}}
      </div> 


    </div>
    @include('./Menu/FooterMenu')
@show
</html>
