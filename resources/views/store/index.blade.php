<!DOCTYPE html>
<html lang="en">

@include('shared.header')

<body>

<div class="container">

    @include('shared.navbar')

    <div class="top_bar">
        <div class="top_bar_left">
          <div class="search-wrapper">
            <form onsubmit="event.preventDefault();" role="search">
              <input class="search" type="search" placeholder="Search..." autofocus required />
              <button type="submit" class='search_button'>Go</button>
            </form>
          </div>
          <select>
            <option value="name">Sort by</option>
            <option value="low_price">Low price</option>
            <option value="max_price">High price</option>
            <option value="date">Newest</option>
            <option value="date">Oldest</option>
            <option value="date">Most rated</option>
          </select>
        </div>

        <div class="top_bar_right">
          <button class="add-product-button">Add product</button>
        </div>
      </div>

    <div class="store_main_container">




        @foreach($products as $item)
        <div class="item">
            <img class="photo" src="{{ asset('img/' . $item->image  ) }}" alt="{{ $item->title }}">
            <div class="item-body">
                <h2 class="title">{{ $item->title }}</h2>
                <p class="price">${{ $item->price }}</p>
                <button class="buy-button" onclick="window.location.href='{{route('product', ['id' => $item->id])}}'">Buy</button>
            </div>
        </div>
    @endforeach

    </div>

    <div class="bottom_container bottom_color"> Sebastian Kolański © 2023  </div>
</div>


</body>
</html>
