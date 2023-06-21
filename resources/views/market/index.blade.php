<!DOCTYPE html>
<html lang="en">

@include('shared.header')

<body>

<div class="container">

    @include('shared.navbar')

    <div class=" @if (request()->is('products/old'))dark_top_bar @endif top_bar">

        <div class="top_bar_left">

            @if (request()->is('products'))<button class="add-product-button" onclick='window.location.href="{{route("old_products")}}"'>Sold</button> @endif
            @if (request()->is('products/old'))<button class=" blue_dark add-product-button" onclick='window.location.href="{{route("products")}}"'>Buy</button> @endif
          </div>

          <div class="top_bar_middle">
            <div class="search-wrapper">
                <form @if (request()->is('products')) action="{{ route('products') }}" @elseif (request()->is('products/old')) action="{{ route('old_products') }}" @endif method="GET" role="search">
                    <input class="search" type="search" name="query" placeholder="Search..." autofocus required />
                <button type="submit" class="@if (request()->is('products/old')) blue_dark @endif search_button">Go</button>
              </form>
            </div>
            <form @if (request()->is('products')) action="{{ route('products') }}" @elseif (request()->is('products/old')) action="{{ route('old_products') }}" @endif method="GET">
                <select name="sort_by" onchange="this.form.submit()">
                  <option value="">Sort by</option>
                  <option value="low_price" @if (request()->input('sort_by') === 'low_price') selected @endif>Low price</option>
                  <option value="max_price" @if (request()->input('sort_by') === 'max_price') selected @endif>High price</option>
                  <option value="newest" @if (request()->input('sort_by') === 'newest') selected @endif>Newest</option>
                  <option value="oldest" @if (request()->input('sort_by') === 'oldest') selected @endif>Oldest</option>
                  <option value="most_rated" @if (request()->input('sort_by') === 'most_rated') selected @endif>Most rated</option>
                </select>
              </form>
            </form>
          </div>

        <div class="top_bar_right">
            @guest

            @else
            @if (request()->is('products')) <button class="add-product-button" onclick='window.location.href="{{route("add_product")}}"'>Add </button> @endif
            @endguest

        </div>
      </div>

    <div class="@if (request()->is('products/old'))dark @endif store_main_container">

        @if (request()->is('products/old')) <h1 > Archive </h1> @endif

        @foreach($products as $item)
        <div class="item">
            <img class="photo" src="{{ asset('storage/images/' . $item->image  ) }}" alt="{{ $item->title }}">
            <div class="item-body">
                <h2 class="dark_text title">{{ $item->title }}</h2>
                @if (request()->is('products'))<p class="price">${{ $item->price }}</p>@endif
                @if (request()->is('products'))<button class="buy-button" onclick="window.location.href='{{route('product', ['id' => $item->id])}}'">Buy</button> @endif
                @if (request()->is('products/old'))<button class="check-button" onclick="window.location.href='{{route('product', ['id' => $item->id])}}'">Check</button> @endif

            </div>
        </div>
    @endforeach

    </div>

    <div class="bottom_container bottom_color"> Sebastian Kolański © 2023  </div>
</div>


</body>
</html>
