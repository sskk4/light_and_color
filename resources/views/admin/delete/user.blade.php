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


            <h2> Delete user id: {{$user->id}}  </h2>

            <h2>  {{$user->name}} </h2>

            <h2> {{$user->email}} </h2>


            <button class="delete_button " onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Delete</button>

            <form id="delete-form" action="{{ route('admin_users_delete_post', ['id' => $user->id]) }}" method="POST" style="display: none;">
                @csrf
                @method('DELETE')
            </form>
        </div>


      </div>

    <div class="bottom_container"> Sebastian Kolański © 2023 </div>
</div>


</body>
</html>
