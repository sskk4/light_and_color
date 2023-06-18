<!DOCTYPE html>
<html lang="en">

@include('shared.header')

<body>

<div class="container">

    @include('shared.navbar')

    <div class="top_bar">

        <div class="top_bar_left">

        </div>

        <div class="top_bar_middle">
          <div class="search-wrapper">
            <form onsubmit="event.preventDefault();" role="search">
              <input class="search" type="search" placeholder="Search..." autofocus required />
              <button type="submit" class='search_button'>Go</button>
            </form>
          </div>
          <select>
            <option value="name">Sort by</option>
            <option value="date">Newest</option>
            <option value="date">Oldest</option>
          </select>
        </div>

        <div class="top_bar_right">
            @guest

            @else
            <button class="add-product-button" onclick='window.location.href="{{route("add_work")}}"'>Add </button>
            @endguest

        </div>
      </div>

    <div class="store_main_container">

        @foreach($works as $item)
    <div class="border item">
        <div class="item-body">
            <h2 class="justify dark_text">{{ $item->image_style }}</h2>


            <p class="dark_text">Canvas quality:

                @if($item->canvas_quality == 0)
                Low
                @elseif($item->canvas_quality == 1)
                Medium
                @else
                High
                @endif


            </p>
            <input type="range" name="canvas_quality" min="0" max="2" step="1" value="{{ $item->canvas_quality }}" disabled>
            <p class="dark_text">Paint quality:

                @if($item->canvas_quality == 0)
                Low
                @elseif($item->canvas_quality == 1)
                Medium
                @else
                High
                @endif
    </p>
            <input type="range" name="paint_quality" min="0" max="2" step="1" value="{{ $item->canvas_quality }}" disabled>
            <p class="dark_text">Painting time (in days): {{ $item->painting_time }}</p>
            <p class="dark_text">Added by: {{ $item->user->name }}</p> <p class="date dark_text"> {{$item->created_at->format('d/m/Y')}} </p>


            <p class="price2 price">${{ $item->price }}</p>

            <button class="buy-button" onclick="window.location.href=''">Accept</button>
        </div>
    </div>
@endforeach


    </div>

    <div class="bottom_container bottom_color"> Sebastian Kolański © 2023  </div>
</div>


</body>
</html>
