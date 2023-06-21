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

