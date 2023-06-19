<!DOCTYPE html>
<html lang="en">

@include('shared.header')

<body>

<div class="container">

<div class="menu_container">
    <div class="logo_container">
        <a class="menu_logo">LIGHT & COLOR  </a>
        <a class="smaller menu_logo" href="{{route('admin')}}"> ADMIN </a>
    </div>

    <div class="choose_container">
       <div class="menu_choose" onclick="window.location.href='{{ route('logout') }}'">   Logout </div>
    </div>
</div>

    <div class="top_bar">


        <button type="submit" class="bar_button @if (request()->is('admin/waiting/products') || request()->is('admin/waiting/works')) active @endif" onclick="window.location.href='{{ route('admin_waiting_products') }}'"> Waiting </button>

        <button type="submit" class="bar_button @if (request()->is('admin/products/active') || request()->is('admin/products/sold')) active @endif" onclick="window.location.href='{{ route('admin_products_active') }}'"> Products </button>

        <button type="submit" class="bar_button @if (request()->is('admin/works/active') || request()->is('admin/works/old')) active @endif" onclick="window.location.href='{{ route('admin_works_active') }}'"> Works </button>

        <button type="submit" class="bar_button @if (request()->is('admin/users')) active @endif" onclick="window.location.href='{{ route('admin_users') }}'"> Users </button>

        <button type="submit" class="bar_button @if (request()->is('admin/orders')) active @endif" onclick="window.location.href='{{ route('admin_orders') }}'"> Orders </button>

      </div>

      <div class="admin_panel_top_bar">

        @if (request()->is('admin/waiting/products') || request()->is('admin/waiting/works'))
        <button type="submit" class="bar_button @if (request()->is('admin/waiting/products')) active @endif " onclick="window.location.href='{{ route('admin_waiting_products') }}'">Products</button>
        <button type="submit" class="bar_button @if (request()->is('admin/waiting/works')) active @endif" onclick="window.location.href='{{ route('admin_waiting_works') }}'">Works</button>
      @endif


        @if (request()->is('admin/works/active') || request()->is('admin/works/old')  )
        <button type="submit" class="bar_button @if (request()->is('admin/works/active')) active @endif " onclick="window.location.href='{{ route('admin_works_active') }}'">Active</button>
        <button type="submit" class="bar_button @if (request()->is('admin/works/old')) active @endif" onclick="window.location.href='{{ route('admin_works_old') }}'">Old</button>

    @endif

      </div>



      <div class="admin_panel_container">

        <ul class="responsive-table">
        @if(isset($users))

         <li class="table-header">
            <div class="col col-1">User id</div>
            <div class="col col-2">User name</div>
            <div class="col col-3">User e-mail</div>
            <div class="col col-4"> </div>
          </li>


          @foreach ($users as $user)
          <li class="table-row">
            <div class="col col-1" data-label="User id">{{ $user->id }}</div>
            <div class="col col-2" data-label="Name">{{ $user->name }}</div>
            <div class="col col-3" data-label="Email">{{ $user->email }}</div>
            <div class="col col-4"><button> Edit </button> <button> Delete </button>  </div>
          </li>
          @endforeach
          @endif

          @if(isset($products_active))
          <li class="table-header">
            <div class="col col-1">Product id</div>
            <div class="col col-2">User id</div>
            <div class="col col-3">Title </div>
            <div class="col col-4"> </div>
          </li>

          @foreach ($products_active as $product)
          <li class="table-row">
            <div class="col col-1" data-label="Product id">{{ $product->id }}</div>
            <div class="col col-2" data-label="User id">{{ $product->user_id }}</div>
            <div class="col col-3" data-label="Title">{{ $product->title }}</div>
            <div class="col col-4">
                <button  onclick="window.location.href='{{ route('product', ['id' => $product->id]) }}'">Check</button>
                <button> Edit </button>
                <button> Delete </button>
            </div>
          </li>
          @endforeach

          @endif


          @if(isset($works_old))
          <li class="table-header">
            <div class="col col-1">Work id</div>
            <div class="col col-2">User id</div>
            <div class="col col-3">Description </div>
            <div class="col col-4"> </div>
          </li>

          @foreach ($works_old as $works2)
          <li class="table-row">
            <div class="col col-1" data-label="Work id">{{ $works2->id }}</div>
            <div class="col col-2" data-label="User id">{{ $works2->user_id }}</div>
            <div class="col col-3" data-label="Description">{{ $works2->image_style }}</div>
            <div class="col col-4"> <button> Delete </button>
            </div>
          </li>
          @endforeach

          @endif


          @if(isset($works_active))
          <li class="table-header">
            <div class="col col-1">Work id</div>
            <div class="col col-2">User id</div>
            <div class="col col-3">Description </div>
            <div class="col col-4"> </div>
          </li>

          @foreach ($works_active as $works)
          <li class="table-row">
            <div class="col col-1" data-label="Work id">{{ $works->id }}</div>
            <div class="col col-2" data-label="User id">{{ $works->user_id }}</div>
            <div class="col col-3" data-label="Description">{{ $works->image_style }}</div>
            <div class="col col-4">
                <button> Edit </button>
                <button> Delete </button>
            </div>
          </li>
          @endforeach

          @endif



          @if(isset($orders))
          <li class="table-header">
            <div class="col col-1">Order id</div>
            <div class="col col-2">Buyer id</div>
            <div class="col col-3">Product id </div>
            <div class="col col-4"> </div>
          </li>

          @foreach ($orders as $order)
          <li class="table-row">
            <div class="col col-1" data-label="Work id">{{ $order->id }}</div>
            <div class="col col-2" data-label="User id">{{ $order->user_id }}</div>
            <div class="col col-3" data-label="Description">{{ $order->product_id }}</div>
            <div class="col col-4"> <button  onclick="window.location.href='{{ route('product', ['id' => $order->product_id]) }}'">Check</button>
            </div>
          </li>
          @endforeach

          @endif

        </ul>


    </div>




    <div class="bottom_container"> Sebastian Kolański © 2023 </div>
</div>


</body>
</html>
