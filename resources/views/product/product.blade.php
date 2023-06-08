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
    <script src="js/script.js"></script>

</head>
<body>

<div class="container">

    <div class="menu_container">

        <div class="logo_container">
            <a class="menu_logo" href="index.html"> LIGHT & COLOR</a>
        </div>


    <div class="choose_container">
        <a class="menu_choose menu_active"> Store </a>

        <a class="menu_choose"> Sign in </a>
    </div>
    </div>

    <div class="product_main_container">

        <div class="product">
           <div class="product_image">
            <img src="img/product.jpg" class="photo_p" alt="Zdjęcie produktu" onclick="showImage(this)">
           </div>

           <div class="heart"></div>
           <div class="product_content">
            <h2>Nazwa produktu</h2>
            <p class="price">Cena: <a class="price_name"> $19.99 </a></p>
            <p class="author">Dodane przez: <a class="author_name"> John Doe </a> </p>
            <p class="description">Opis produktu: <a class="author_name"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum
                risus a lorem fermentum, sit amet facilisis elit aliquam. Sed non nisi velit. Sed et ipsum vitae leo
                interdum commodo.</a> </p>



                  <button class="buy_button">KUP</button>
        </div>
    </div>
        <div id="fullImageOverlay">
            <span class="closeButton" onclick="closeImage()">&times;</span>
            <img id="fullImage" src="" alt="Pełne zdjęcie">
        </div>

    <div class="bottom_container bottom_color"> Sebastian Kolański © 2023 </div>
</div>


</body>
</html>
