<!DOCTYPE html>
<html lang="en">
    @include('shared.header')

    <body>

    <div class="container">

        @include('shared.navbar')

        <div class="add_product_panel">
            <div class="product_panel_p">

         @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert"> {{ $error }} </div>
                @endforeach
    @endif


                @if(Session::has('error'))

                <div class='alert'>
                {{Session::get('error')}}
                </div>



                @endif


                @if (Session::has('success'))
                <div class="alert_green">{{ Session::get('success') }}</div>
            @endif

            @if (Session::has('product'))
                @php
                    $product = Session::get('product');
                @endphp

                <div class="product">
                    <div class="product_image">
                        <img src="{{ asset('storage/images/'.$product->image) }}" class="pp photo_p" alt="Zdjęcie produktu">
                    </div>

                    <div class="product_content">
                        <h2 onclick="window.location.href='{{ route('product', ['id' => $product->id]) }}'">{{ $product->title }}</h2>
                        <p class="price">Price: <a class="price_name">${{ $product->price }}</a></p>
                        <p class="author">Added by: <a class="author_name">{{ $product->user_id }}</a></p>
                        <p class="author">Date: <a class="author_name">{{ $product->created_at }}</p>
                        <p class="description">Description: <a class="author_name">{{ $product->description }}</a></p>
                    </div>


                </div>

                <button class="add_product_button" onclick="window.location.href='{{ route('products') }}'">Back to store</button>
                @php
                    Session::forget('product');
                @endphp



                @else
                <h2> Add product </h2>

                <form action="{{ route('add_product') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <label class="text_product">Upload Image</label><br>
                    <input type="file" name="image" class="add_file" required><br><br>

                    <label class="text_product">Title</label><br>
                    <input type="text" name="title" class="add_product_input" minlength="3" maxlength="20" required><br>

                    <label class="text_product">Price</label><br>
                    <input type="number" name="price" class="add_product_input" min="0" required><br><br>

                    <label class="text_product">Description</label><br>
                    <textarea class="add_product_textarea" name="description" required></textarea><br>

                    <input type="submit" class="add_product_button" value="Submit"><br>
                </form>
@endif
        </div>
        </div>
    <div class="bottom_container bottom_color"> Sebastian Kolański © 2023 </div>

</div>

</body>
</html>
