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

<div class='alert alert_green'>
{{Session::get('success')}}
</div>

@else
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <a class="text_p"> Name </a><br> <input name="name" type="text" minlength="3" maxlength="20" class="register_input login_input" /><br>
            <a class="text_p"> E-mail </a><br> <input name="email" type="text" class="register_input login_input" /><br>
            <a class="text_p"> Password</a><br> <input name ="password" type="password" class="register_input login_input" /><br>
            <a class="text_p"> Confirm password</a><br> <input name="password_confirmation" type="password" class="register_input login_input" /><br>
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
