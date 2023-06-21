<!DOCTYPE html>
<html lang="en">

@include('shared.header')

<body>

<div class="container">

    @include('shared.navbar')

    <div class="main_container">


        <div class="register_panel login_panel">
            <div class="login_panel_p">

                @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="alert"> {{ $error }} </div>
                        @endforeach
            @endif

@if(Session::has('success'))

<div class='alert_green'>
    Register successfully! <br><br>

   <div class="smaller_font"> Now you can: <br>
     - Buy products <br>
     - Add your products <br>
     - Send an order to paint a picture <br>
     - Get inspiration! <br><br>

   </div>

<button class="login_button" onclick="window.location.href='{{ route('login') }}'">Lets start!</button>
</div>

{{Session::get('success')}}


@else
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <a class="text_p"> Name </a><br>
                    <input name="name" type="text" minlength="5" maxlength="20" class="register_input login_input" required pattern="[A-Za-z ]+" /><br>

                    <a class="text_p"> E-mail </a><br>
                    <input name="email" type="email" class="register_input login_input" required /><br>

                    <a class="text_p"> Password</a><br>
                    <input name="password" type="password" class="register_input login_input" required minlength="6" /><br>

                    <a class="text_p"> Confirm password</a><br>
                    <input name="password_confirmation" type="password" class="register_input login_input" required minlength="6" /><br>

                    <input type="submit" class="register_button login_button" value="CREATE ACCOUNT"/><br>

            </form>
@endif
            </div>

        </div>

    </div>

    <div class="bottom_container"> Sebastian Kolański © 2023 </div>
</div>


</body>
</html>
