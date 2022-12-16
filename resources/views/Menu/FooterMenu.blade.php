@php
    $links = $footer_menu['items'];
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">  
    
    <nav id='footer-nav'>
        <div class='footer-links'>

            @foreach($links as $link)
            <a class='footer-link' href={{$link['url']}}>{{$link['title']}}</a>
            @endforeach
            
        </div>
    </nav>
</html>
