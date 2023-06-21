<!DOCTYPE html>
<html lang="en">
    @include('shared.header')

    <body>

    <div class="container">

        @include('shared.navbar')




    <div class="product_buy_main_container">

        <div class="product">
           <div class="product_image">
            <img src="{{asset ('storage/images/'. $p->image)}}" class="photo_p" alt="Zdjęcie produktu" onclick="showImage(this)">
           </div>

           <div class="product_content">
            <h2 onclick="window.location.href='{{route('product', ['id' => $p->id])}}'">{{$p->title}}</h2>
            <p class="price">Price: <a class="price_name"> ${{$p->price}} </a></p>
            <p class="author">Added by: <a class="author_name"> {{$p->user_id}} </a> </p>
            <p class="author"> Date: <a class="author_name"> {{$p->created_at}} </p>
            <p class="description">Description: <a class="author_name"> {{$p->description}}</a> </p>


        </div>
    </div>


        @csrf


        <div class="form_wrapper">
            <form action="{{route('buy_product', ['id' => $p->id])}}" method="POST">
                <div class="delivery">
                    <h3>Delivery</h3>
                    <label class="form_label">
                        <span>Full Name</span>
                        <input type="text" class="form_input" required>
                    </label>
                    <label class="form_label">
                        <span>Address</span>
                        <input type="text" class="form_input" required>
                    </label>
                    <label class="form_label">
                        <span>City</span>
                        <input type="text" class="form_input" required>
                    </label>
                    <label class="form_label">
                        <span>Postal Code</span>
                        <input type="text" class="form_input" pattern="[0-9]{5}" title="Enter a valid 5-digit postal code" required>
                    </label>
                </div>

                <div class="payment">
                    <h3>Payment</h3>
                    <label class="form_label">
                        <span>Card Number</span>
                        <input type="text" class="form_input" pattern="[0-9]{16}" title="Enter a valid 16-digit card number" required>
                    </label>
                    <label class="form_label">
                        <span>Expiration Date</span>
                        <input type="text" class="form_input" pattern="(0[1-9]|1[0-2])\/[0-9]{2}" title="Enter a valid expiration date (MM/YY)" required>
                    </label>
                    <label class="form_label">
                        <span>CVV</span>
                        <input type="text" class="form_input" pattern="[0-9]{3}" title="Enter a valid 3-digit CVV number" required>
                    </label>
                </div>

                <div class="comment">
                    <h3>Comment</h3>
                    <label class="form_label">
                        <span>Message</span>
                        <textarea class="form_textarea" required></textarea>
                    </label>
                </div>


        </div>



    @csrf
    <div class="confirm"> <button class="buy_button">Buy and pay</button> </div>
</form>

    <div class="bottom_container bottom_color"> Sebastian Kolański © 2023 </div>
</div>
<div id="fullImageOverlay">
    <span class="closeButton" onclick="closeImage()">&times;</span>
    <img id="fullImage" src="" alt="Pełne zdjęcie">
</div>

</div>

</body>
</html>
