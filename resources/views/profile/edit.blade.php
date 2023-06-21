<!DOCTYPE html>
<html lang="en">
    @include('shared.header')
<body>

<div class="container">

        @include('shared.navbar')

        <div class="user_edit_panel">
            <div class="user_edit_panel_p">

                @if(Session::has('error'))

                <div class='alert'>
                {{Session::get('error')}}
                </div>

                @endif

<form action="" method="POST">
@csrf

<h2> Edit profile </h2>

<form action="{{ route('profile_update_post') }}" method="POST">
    @csrf
<div class="first_section">
            <a class="text_p"> Name </a><br> <input type="text" name='name' value="{{$user->name}}" class="user_edit_input" required pattern="[A-Za-z ]+" min="5" max="30"/><br>
            <a class="text_p"> E-mail </a><br> <input type="text" name='email' value="{{$user->email}}" class="user_edit_input" required/><br>
</div>

<div class="button-section">
    <input type="submit" class="profile_button" value="SAVE PROFILE"/> <br>
</div>

</form>

<div class="second_section">
        <a class="text_p"> Old password</a><br> <input type="password" name='password' class="user_edit_input" /><br>
        <a class="text_p"> New password</a><br> <input type="password" name='password' class="user_edit_input" /><br>
        <a class="text_p"> Confirm new password</a><br> <input type="password" name='password' class="user_edit_input" /><br>
</div>

<div class="button-section">
            <input type="submit" class="profile_button" value="CHANGE PASSWORD"/> <br>
</div>


        </div>
        </div>


    <div class="bottom_container"> Sebastian Kolański © 2023 </div>
</div>


</body>
</html>
