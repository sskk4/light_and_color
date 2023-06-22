<!DOCTYPE html>
<html lang="en">

@include('shared.header')

<body>

<div class="container">
    @include('shared.adminbar')

      </div>



      <div class="admin_panel_container">

        <div class="product">
            @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert"> {{ $error }} </div>
            @endforeach
    @endif

            @if(Session::has('error'))

            <h2>
            {{Session::get('error')}}
            </h2>
            @endif

            @if(Session::has('success'))

            <h2>
            {{Session::get('success')}}
            </h2>
            @endif


            <h2> Edit user id: {{$user->id}} </h2>

            <form action="{{ route('admin_users_update_post', ['id' => $user->id]) }}" method="POST">
                @csrf


                <label class="text_product">Name</label><br>
                <input type="text" name="name" class="add_product_input" value="{{$user->name}}" minlength="3" maxlength="20" required><br>

                <label class="text_product">Email</label><br>
                <input type="text" name="email" class="add_product_input" value="{{$user->email}}"  minlength="3" maxlength="20" required><br><br>

                <input type="submit" class="add_product_button" value="Update"><br>
            </form>
        </div>

      </div>

    <div class="bottom_container"> Sebastian Kolański © 2023 </div>
</div>


</body>
</html>
