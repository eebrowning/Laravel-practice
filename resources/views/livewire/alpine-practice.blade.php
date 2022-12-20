
<div id=image-block>
<!-- I need to have an onClick on each gallery image that will replace the default image with the clicked image -->
        <img id='image-main' src='https://cdn.shopify.com/s/files/1/1065/4262/products/{{$mediaCollection[0]['name']}}?v={{$mediaCollection[0]['shopifyId']}}' alt=""/>

        <div id='image-options'>
        @foreach($mediaCollection as $image)
        <img src='https://cdn.shopify.com/s/files/1/1065/4262/products/{{$image['name']}}?v={{$image['shopifyId']}}' alt=""/>
        @endforeach
        
        </div>


</div>
