@php    
        $mediaCollection=$productx;

@endphp
<div id=image-block>

        <img id='image-main' src='https://cdn.shopify.com/s/files/1/1065/4262/products/{{$mediaCollection[0]['name']}}?v={{$mediaCollection[0]['shopifyId']}}' alt=""/>

        <div id='image-options'>
        @foreach($mediaCollection as $image)
        <img src='https://cdn.shopify.com/s/files/1/1065/4262/products/{{$image['name']}}?v={{$image['shopifyId']}}' alt=""/>
        @endforeach
        
        </div>

    <!-- <div x-data="{ open: false }">
        <button @click="open = true">Show More...</button>

        <ul x-show="open" @click.outside="open = false">
            <li>thing1</li>
            <li>thing2</li>
        </ul>
    </div> -->

</div>
