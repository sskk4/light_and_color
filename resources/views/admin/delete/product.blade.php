<!DOCTYPE html>
<html lang="en">

@include('shared.header')

<body>

<div class="container">
    @include('shared.adminbar')

      </div>



      <div class="admin_panel_container">

        <div class="product">
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert"> {{ $error }} </div>
        @endforeach
@endif

        @if(Session::has('error'))

        <h2>
        {{Session::get('error')}}
        </h2>
        @endif

        @if(Session::has('success'))

        <h2>
        {{Session::get('success')}}
        </h2>
        @endif


        <h2> Delete product id: {{$product->id}} </h2>

        <div class="product_image">
            <img src="{{asset ('storage/images/'. $product->image)}}" class="photo" alt="Zdjęcie produktu">
           </div>

        <h3>{{$product->title}}</h3>
        <p class="price">Price: <a class="price_name"> ${{$product->price}} </a></p>
        <p class="author">Added by: <a class="author_name"> {{$product->user->name}} </a> </p>
        <p class="author"> Date: <a class="author_name"> {{$product->created_at}} </p>
        <p class="description">Description: <a class="author_name"> {{$product->description}}</a> </p>

        <button class="delete_button buy_button" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Delete</button>

        <form id="delete-form" action="{{ route('admin_products_active_delete_post', ['id' => $product->id]) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
    </div>


    <div class="bottom_container"> Sebastian Kolański © 2023 </div>
</div>


</body>
</html>
