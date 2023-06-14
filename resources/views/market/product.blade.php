<!DOCTYPE html>
<html lang="en">
    @include('shared.header')

    <body>

    <div class="container">

        @include('shared.navbar')




    <div class="product_main_container">

        <div class="product">
           <div class="product_image">
            <img src="{{asset ('storage/images/'. $p->image)}}" class="photo_p" alt="Zdjęcie produktu" onclick="showImage(this)">
           </div>

           <div class="heart"></div>

           <div class="product_content">
            <h2>{{$p->title}}</h2>
            <p class="price">Price: <a class="price_name"> ${{$p->price}} </a></p>
            <p class="author">Added by: <a class="author_name"> {{$p->user_id}} </a> </p>
            <p class="author"> Date: <a class="author_name"> {{$p->created_at}} </p>
            <p class="description">Description: <a class="author_name"> {{$p->description}}</a> </p>

                  <button class="buy_button">Buy</button>
        </div>
    </div>
        <div id="fullImageOverlay">
            <span class="closeButton" onclick="closeImage()">&times;</span>
            <img id="fullImage" src="" alt="Pełne zdjęcie">
        </div>

    <div class="bottom_container bottom_color"> Sebastian Kolański © 2023 </div>
</div>
</div>

</body>
</html>
