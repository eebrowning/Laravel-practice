@php
        $pageType = $home['pageType'];
        $pageTitle = $home['pageTitle'];
        $metadata = $home['metadata'];
        $header = $home['header'];
        
        $heroes = $home['hero']['values'];//should be able to display these via looping
        $blocks= $home['blocks']['values'];//loops brother
        $content= $home['contentElement'];//nothing here, but maybe provide conditional elements on view?
        $footer = $home['footer'];//null and blank, but here we are, JIC.

@endphp


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta type={{$home['pageType']}} id= {{$home['metadata']['id']}}>
        <title>{{$home['pageTitle']}}</title>
        
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">
        @livewireStyles
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body class="antialiased">
        @livewireScripts
        @include('./Menu/PrimaryMenu')

        @show



        <div id='home-main'>
            <span id='heroes'>

                @foreach ($heroes as $hero)
                <div class= >
                    {!! $hero['content']['value'] !!}
                </div>   
   
                @endforeach

            </span>
    
            <span id='blocks'>

                @foreach ($blocks as $block)
                        {!! $block['content']['value'] !!}
    
                @endforeach
            </span>

        </div>
        <footer>
                {{$footer}}
        </footer>
        @include('./Menu/FooterMenu')

@show
    </body>
</html>


<!-- 
+-- Page
|       +-- Page Type: HomePage
|       +-- Page Title
|   +-- Meta
|   +-- Header Navigation
|       +-- Home
|       +-- Platform Menu
|       +-- Shopping Cart
|       +-- Avatar
|       +-- Search
|       +-- Store/Language Toggle
|   +-- Content
|       +-- Hero
|           +-- Box 1
|           +-- Box 2
|           +-- Box 3
|       +-- Content Blocks
|           +-- Block 1 through up to Block 12
|       +-- Content Element
|   +-- Footer
|       +-- Footer Type -->
