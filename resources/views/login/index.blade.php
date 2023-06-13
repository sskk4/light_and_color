<!DOCTYPE html>
<html lang="en">
    @include('shared.header')
<body>

<div class="container">

        @include('shared.navbar')

        <div class="login_panel">
            <div class="login_panel_p">

                @if(Session::has('error'))

                <div class='alert'>
                {{Session::get('error')}}
                </div>

                @endif

<form action="" method="POST">
@csrf
            <a class="text_p"> E-mail </a><br> <input type="text" name='email' class="login_input" /><br>
            <a class="text_p"> Password</a><br> <input type="password" name='password' class="login_input" /><br>
            <input type="submit" class="login_button" value="LOGIN"/> <br>
            <a class="text_a"> Don't have an account? <a href='{{route('register')}}' class="sign_a"> Sign up! </a> </a>

</form>

        </div>
        </div>


    <div class="bottom_container"> Sebastian Kolański © 2023 </div>
</div>


</body>
</html>
