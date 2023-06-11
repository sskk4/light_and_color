<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Light&Color</title>

    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/store_style.css') }}">

</head>
<body>

<div class="container">

    <div class="menu_container">

        <div class="logo_container">
            <a class="menu_logo" href="{{route('home')}}"> LIGHT & COLOR</a>
        </div>


    <div class="choose_container">
        <a class="menu_choose menu_active"> Store </a>

        <a class="menu_choose"> Sign in </a>
    </div>
    </div>

    <div class="store_main_container">

        @foreach($products as $item)
        <div class="item" onclick="window.location.href='product.html'">
            <img class="photo" src="{{ asset('img/' . $item->image  ) }}" alt="{{ $item->title }}">
            <div class="item-body">
                <h2 class="title">{{ $item->title }}</h2>
                <p class="price">${{ $item->price }}</p>
                <button class="buy-button">Kup</button>
            </div>
        </div>
    @endforeach

    </div>

    <div class="bottom_container bottom_color"> Sebastian Kolański © 2023  </div>
</div>


</body>
</html>
