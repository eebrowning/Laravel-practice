@php
    $about_us= $primary_global_menu['items'][0];
        $about_stuff= $about_us['children'];
    $shop= $primary_global_menu['items'][1];
        $shop_stuff= $shop['children'];
    $community= $primary_global_menu['items'][2];
        $community_stuff= $community['children'];
    $art_of_ONE= $primary_global_menu['items'][3];
        $art_stuff= $art_of_ONE['children'];


@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">  
    <body>
        
        <nav id='header-nav'>
            <div><a href='/'>Home</a></div>
            <div id='nav-center'>
                
                @foreach($primary_global_menu['items'] as $dropdown)
                
                <div class='dropdown-menu'>
                    <a href="{{$dropdown['url']}}">{{$dropdown['title']}}</a>
                    <div class='hover-content'>
                        @foreach($dropdown['children'] as $thing)
                        <a href="{{$dropdown['url']}}{{$thing['url']}}">{{$thing['title']}}</a>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
            <div id='nav-right'>
                
                <div>Search(todo)</div>
                <div>Language</div>
            </div>
        </nav>
    </body>
        
</html>
