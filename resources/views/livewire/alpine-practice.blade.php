
<div id=image-block>
<!-- I need to have an onClick on each gallery image that will replace the default image with the clicked image -->
        <script>
                let image;
                let shopify;
                function main(info){
                        info= info.split(" ");
                        let image= info[0];
                        let shopify= info[1];
                        let main= document.getElementById('image-main');

                        main.src= `https://cdn.shopify.com/s/files/1/1065/4262/products/${image}?v=${shopify}`
                }
        </script>
        
        <img id='image-main' src='https://cdn.shopify.com/s/files/1/1065/4262/products/{{$mediaCollection[0]['name']}}?v={{$mediaCollection[0]['shopifyId']}}' alt=""/>



        <div id='image-options'>
        @foreach($mediaCollection as $image)
        <img class="{{$image['name']}} {{$image['shopifyId']}}" src='https://cdn.shopify.com/s/files/1/1065/4262/products/{{$image['name']}}?v={{$image['shopifyId']}}' 
                onclick="main('{{$image['name']}} {{$image['shopifyId']}}');" 
                alt=""/>
        @endforeach 
        </div>


</div>
