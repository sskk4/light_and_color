<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Light&Color</title>



    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

<div class="container">

    <div class="menu_container">

        <div class="logo_container">
            <a class="menu_logo" href="{{route('home')}}"> LIGHT & COLOR</a>
        </div>


    <div class="choose_container">
        <a class="menu_choose" href="{{route('store.index')}}"> Store </a>
        <a class="menu_choose" > Support </a>
        <a class="menu_choose"> About us </a>
        <a class="menu_choose" href="{{route('login.index')}}"> Sign in </a>
    </div>
    </div>

    <div class="main_container">

        <div class="photo1 photo"> </div>
        <div class="photo2 photo"> </div>
        <div class="photo3 photo"> </div>
        <div class="photo4 photo"> </div>
        <div class="photo5 photo"> </div>
        <div class="photo6 photo"> </div>


    </div>

    <div class="bottom_container"> Sebastian Kolański © 2023 </div>
</div>


</body>
</html>
