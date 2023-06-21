<!DOCTYPE html>
<html lang="en">

@include('shared.header')

<body>

<div class="container">
    @include('shared.adminbar')

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
                <button onclick="window.location.href='{{route('admin_products_active_update', ['id' => $product->id])}}'"> Edit </button>
                <button onclick="window.location.href='{{route('admin_products_active_delete', ['id' => $product->id])}}'"> Delete </button>
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
