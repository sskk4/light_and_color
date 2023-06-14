<!DOCTYPE html>
<html lang="en">

@include('shared.header')

<body>

<div class="container">

    @include('shared.navbar')


    @if(Auth::check())
    <div class="profile_bar">
        <a class='name_text'>{{ Auth::user()->name }}</a><br>
        <a class='mail_text'>{{ Auth::user()->email }}</a>
        <a class='date_text'>Added at: {{ Auth::user()->created_at->format('Y-m-d') }}</a>


        <button type="submit" class='edit_button' onclick="window.location.href='{{ route('profile_update') }}'">Edit</button>


    </div>
@endif

    <div class="top_bar">

        <button type="submit" class='bar_button '>Products</button>
        <button type="submit" class='bar_button'>Sold</button>
        <button type="submit" class='bar_button'>Favorite</button>
        <button type="submit" class='bar_button'>Orders</button>

      </div>

    <div class="profile_main_container">

        @if($products !== null && $products->count() > 0)
        @foreach($products as $item)
            <div class="item">
                <img class="photo" src="{{ asset('storage/images/' . $item->image) }}" alt="{{ $item->title }}">
                <div class="item-body">
                    <h2 class="title">{{ $item->title }}</h2>
                    <p class="price">${{ $item->price }}</p>
                    <button class="edit-button button_products" onclick="window.location.href='{{ route('product', ['id' => $item->id]) }}'">Edit</button>
                    <button class="delete-button button_products" onclick="window.location.href='{{ route('product', ['id' => $item->id]) }}'">Delete</button>
                    <button class="check-button button_products" onclick="window.location.href='{{ route('product', ['id' => $item->id]) }}'">Check</button>
                </div>
            </div>
        @endforeach
    @else
        <div class="empty">
            <p>Nothing here?</p>
            <button class="add-button" onclick="window.location.href='{{ route('add_product') }}'">Add Product</button>
        </div>
    @endif

    </div>

    <div class="bottom_container bottom_color"> Sebastian Kolański © 2023  </div>
</div>


</body>
</html>
