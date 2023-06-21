<!DOCTYPE html>
<html lang="en">
    @include('shared.header')

    <body>

    <div class="container">

        @include('shared.navbar')




    <div class="product_main_container">



        <div class="product">
            @if (Session::has('success'))
            <h1>{{ Session::get('success') }}</h1>
        @endif


        <h1 class="delete_h1"> You sure to delete this product? </h1>

        <div class="product_image">
            <img src="{{asset ('storage/images/'. $product->image)}}" class="photo_p" alt="Zdjęcie produktu" >
           </div>


           <div class="product_content">
            <h2>{{$product->title}}</h2>
            <p class="price">Price: <a class="price_name"> ${{$product->price}} </a></p>
            <p class="author">Added by: <a class="author_name"> {{$product->user->name}} </a> </p>
            <p class="author"> Date: <a class="author_name"> {{$product->created_at}} </p>
            <p class="description">Description: <a class="author_name"> {{$product->description}}</a> </p>

            <button class="delete_button buy_button" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Delete</button>

            <form id="delete-form" action="{{ route('product_delete', ['id' => $product->id]) }}" method="POST" style="display: none;">
                @csrf
                @method('DELETE')
            </form>

            </div>
    </div>



    <div class="bottom_container bottom_color"> Sebastian Kolański © 2023 </div>
</div>
</div>

</body>
</html>
