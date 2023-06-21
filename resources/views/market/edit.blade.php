<!DOCTYPE html>
<html lang="en">
    @include('shared.header')

    <body>

    <div class="container">

        @include('shared.navbar')

        <div class="add_product_panel">
            <div class="product_panel_e">

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


                <h2> Edit product </h2>

                <form action="{{ route('product_update_post', ['id' => $product->id]) }}" method="POST">
                    @csrf

                    <div class="product_image">
                        <img src="{{asset ('storage/images/'. $product->image)}}" class="photo_edit" alt="Zdjęcie produktu">
                       </div>


                    <label class="text_product">Title</label><br>
                    <input type="text" name="title" class="add_product_input" value="{{$product->title}}" minlength="3" maxlength="20" required><br>

                    <label class="text_product">Price</label><br>
                    <input type="number" name="price" class="add_product_input" value="{{$product->price}}" min="0" required><br><br>

                    <label class="text_product">Description</label><br>
                    <textarea class="add_product_textarea" name="description" required>{{$product->description}}</textarea><br>

                    <input type="submit" class="add_product_button" value="Update"><br>
                </form>

        </div>
        </div>
    <div class="bottom_container bottom_color"> Sebastian Kolański © 2023 </div>

</div>

</body>
</html>
