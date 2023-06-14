<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Light&Color</title>

    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">


@if (str_contains(request()->path(), 'register') || str_contains(request()->path(), 'login')) <link rel="stylesheet" href="{{ asset('css/login_style.css') }}"> @endif

@if (str_contains(request()->path(), 'products')) <link rel="stylesheet" href="{{ asset('css/market_style.css') }}">  @endif

@if (str_contains(request()->path(), 'products/create')) <link rel="stylesheet" href="{{ asset('css/add_product_style.css') }}">  @endif

@if (str_contains(request()->path(), 'profile')) <link rel="stylesheet" href="{{ asset('css/profile_style.css') }}">  @endif

@if (str_contains(request()->path(), 'profile/edit')) <link rel="stylesheet" href="{{ asset('css/profile_edit_style.css') }}">  @endif

@if (request()->is('product/*'))
<link rel="stylesheet" href="{{ asset('css/product_style.css') }}">
<script src="{{ asset('js/script.js') }}"></script>
@endif

</head>
