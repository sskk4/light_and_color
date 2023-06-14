<!DOCTYPE html>
<html lang="en">

@include('shared.header')

<body>

<div class="container">

    @include('shared.navbar')


    <div class="profile_bar">

        <a class='name_text'> Name </a> <br>
        <a class='mail_text'> mail@example.pl </a>
        <a class='date_text'> Added at: 2022-22-22 </a>
        <button type="submit" class='edit_button'>Edit</button>
    </div>

    <div class="top_bar">

        <button type="submit" class='bar_button'>Products</button>
        <button type="submit" class='bar_button'>Sold</button>
        <button type="submit" class='bar_button'>Favorite</button>
        <button type="submit" class='bar_button'>Orders</button>

      </div>

    <div class="profile_main_container">

        Nothing here?

    </div>

    <div class="bottom_container bottom_color"> Sebastian Kolański © 2023  </div>
</div>


</body>
</html>
