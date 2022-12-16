@php
    $about_us= $primary_global_menu['items'][0];
    $shop= $primary_global_menu['items'][1];
    $community= $primary_global_menu['items'][2];
    $art_of_ONE= $primary_global_menu['items'][3];


@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">  
    
    <body class="antialiased">
            <div>{{$primary_global_menu['name']}}, this is an "include" test</div>
            <nav>


            <ul id='nav-ul'>
                <li><a href='/'>Home</a></li>
                <li>About Us</li>
                <li>Shop</li>
                <li>Community</li>
                <li>Cart</li>
                <li>Search</li>
                <li>Language</li>
            </ul>
            </nav>


    </body>
</html>
