<div class="menu_container">
    <div class="logo_container">
        <a class="menu_logo" href="{{ route('home') }}">LIGHT & COLOR</a>
    </div>

    <div class="choose_container">
        <a class="menu_choose @if (str_contains(request()->path(), 'store')) menu_active @endif" href="{{ route('store') }} ">Store</a>
        @guest
        <a class="menu_choose @if (str_contains(request()->path(), 'register') || str_contains(request()->path(), 'login')) menu_active @endif" href="{{ route('login') }}">Sign in</a>

        @else
            <a class="menu_choose" href=""> Favorite </a>
            <a class="menu_choose @if (str_contains(request()->path(), 'profile')) menu_active @endif" href="{{ route('profile') }}"> Profile </a>
            <a class="menu_choose" href="{{ route('logout') }}">Logout</a>
        @endguest
    </div>
</div>
