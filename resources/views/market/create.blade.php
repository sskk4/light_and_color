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
                @if(Session::has('success'))

                <div class='alert alert_green'>
                {{Session::get('success')}}
                </div>

                @else
                <h2> Add product </h2>

<form action="{{route('add_product')}}" method="POST" enctype="multipart/form-data">
@csrf

            <a class="text_product"> Upload Image </a> <br><input type="file" name="image" class='add_file'/><br><br>
            <a class="text_product"> Title </a><br> <input type="text" name='title' class="add_product_input" /><br>
            <a class="text_product"> Price </a><br> <input type="text" name='price' class="add_product_input" /><br><br>
            <a class="text_product"> Description </a> <br> <textarea class="add_product_textarea" name="description"> </textarea><br>

            <input type="submit" class="add_product_button" value="Submit"/> <br>

</form>
@endif
        </div>
        </div>
    <div class="bottom_container bottom_color"> Sebastian Kolański © 2023 </div>

</div>

</body>
</html>
