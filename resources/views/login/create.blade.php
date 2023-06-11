<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Light&Color</title>


    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login_style.css') }}">

</head>
<body>

<div class="container">

    <div class="menu_container">

        <div class="logo_container">
            <a class="menu_logo" href="index.html"> LIGHT & COLOR</a>
        </div>


    <div class="choose_container">
        <a class="menu_choose" href="{{route('store')}}"> Store </a>
        <a class="menu_choose" > Support </a>
        <a class="menu_choose"> About us </a>
        <a class="menu_choose menu_active" href="{{route('login')}}"> Sign in </a>
    </div>
    </div>

    <div class="main_container">


        <div class="register_panel login_panel">
            <div class="login_panel_p">
@if(Session::has('success'))

<div class='alert'>
{{Session::get('success')}}
</div>

@else
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <a class="text_p"> Name </a><br> <input name="name" type="text" class="register_input login_input" /><br>
            <a class="text_p"> E-mail </a><br> <input name="email" type="text" class="register_input login_input" /><br>
            <a class="text_p"> Password</a><br> <input name ="password" type="password" class="register_input login_input" /><br>
            <a class="text_p"> Confirm password</a><br> <input type="password" class="register_input login_input" /><br>
            <input type="submit" class="register_button login_button" value="CREATE ACCOUNT"/> <br>

            </form>
@endif
            </div>

        </div>



    </div>

    <div class="bottom_container"> Sebastian Kolański © 2023 </div>
</div>


</body>
</html>
