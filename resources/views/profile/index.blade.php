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

        <button type="submit" class='bar_button @if(isset($products)) active @endif' onclick="window.location.href='{{ route('profile') }}'">Products</button>
        <button type="submit" class='bar_button @if(isset($products_sold)) active @endif' onclick="window.location.href='{{ route('profile_sold') }}'">Sold</button>
        <button type="submit" class='bar_button @if(isset($products_rated)) active @endif' onclick="window.location.href='{{ route('profile_rated') }}'">Favorite</button>
        <button type="submit" class='bar_button @if(isset($products_orders)) active @endif' onclick="window.location.href='{{ route('profile_orders') }}'">Orders</button>

      </div>

    <div class="profile_main_container">

        @if(isset($products))
        @if($products->count() > 0)
            @foreach($products as $item)
                <div class="item">
                    <img class="photo" src="{{ asset('storage/images/' . $item->image) }}" alt="{{ $item->title }}">
                    <div class="item-body">
                        <h2 class="title">{{ $item->title }}</h2>
                        <p class="price">${{ $item->price }}</p>
                        <button class="edit-button button_products" onclick="window.location.href='{{ route('product_update', ['id' => $item->id]) }}'">Edit</button>
                        <button class="delete-button button_products" onclick="window.location.href='{{ route('product_delete', ['id' => $item->id]) }}'">Delete</button>
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
    @elseif(isset($products_sold))
        @if($products_sold->count() > 0)
            @foreach($products_sold as $item)
                <div class="item">
                    <img class="photo" src="{{ asset('storage/images/' . $item->image) }}" alt="{{ $item->title }}">
                    <div class="item-body">
                        <h2 class="title">{{ $item->title }}</h2>
                        <p class="price">${{ $item->price }}</p>
                        <button class="check-button button_products" onclick="window.location.href='{{ route('product', ['id' => $item->id]) }}'">Check</button>
                    </div>
                </div>
            @endforeach
        @else
            <div class="empty">
                <p>Nothing here?</p>
                <button class="add-button" onclick="window.location.href='{{ route('add_product') }}'">Sell something!</button>
            </div>
        @endif
    @elseif(isset($products_rated))
        @if($products_rated->count() > 0)

            @foreach($products_rated as $item)

                    <div class="item">
                        <img class="photo" src="{{ asset('storage/images/' . $item->image) }}" alt="{{ $item->title }}">
                        <div class="item-body">
                            <h2 class="title">{{ $item->title }}</h2>
                            <p class="price">${{ $item->price }}</p>
                            <button class="check-button button_products" onclick="window.location.href='{{ route('product', ['id' => $item->id]) }}'">Check</button>
                        </div>
                    </div>

            @endforeach
        @else
            <div class="empty">
                <p>Nothing here?</p>
                <button class="add-button" onclick="window.location.href='{{ route('products') }}'">Check products!</button>
            </div>
        @endif

        @elseif(isset($products_orders))
        @if($products_orders->count() > 0)

            @foreach($products_orders as $item)

                    <div class="item">
                        <img class="photo" src="{{ asset('storage/images/' . $item->image) }}" alt="{{ $item->title }}">
                        <div class="item-body">
                            <h2 class="title">{{ $item->title }}</h2>
                            <p class="price">${{ $item->price }}</p>
                            <button class="check-button button_products" onclick="window.location.href='{{ route('product', ['id' => $item->id]) }}'">Check</button>
                        </div>
                    </div>

            @endforeach
        @else
            <div class="empty">
                <p>Nothing here?</p>
                <button class="add-button" onclick="window.location.href='{{ route('products') }}'">Buy something!</button>
            </div>
        @endif


    @endif


    </div>

    <div class="bottom_container bottom_color"> Sebastian Kolański © 2023  </div>
</div>


</body>
</html>
