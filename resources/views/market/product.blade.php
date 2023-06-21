<!DOCTYPE html>
<html lang="en">
    @include('shared.header')

    <body>

    <div class="container">

        @include('shared.navbar')




    <div class="product_main_container">



        <div class="product">
            @if (Session::has('success'))
            <h1>{{ Session::get('success') }}</h1>
        @endif

           <div class="product_image">
            <img src="{{asset ('storage/images/'. $p->image)}}" class="photo_p" alt="Zdjęcie produktu" onclick="showImage(this)">
           </div>




           @csrf
           @if (!auth()->guest())
               <div class="heart @if (App\Models\Rated::where('product_id', $p->id)->where('user_id', auth()->user()->id)->exists()) is-active @endif"></div>
           @endif



           <div class="product_content">
            <h2>{{$p->title}}</h2>
            <p class="price">Price: <a class="price_name"> ${{$p->price}} </a></p>
            <p class="author">Added by: <a class="author_name"> {{$p->user->name}} </a> </p>
            <p class="author"> Date: <a class="author_name"> {{$p->created_at}} </p>
            <p class="description">Description: <a class="author_name"> {{$p->description}}</a> </p>

            @guest
            @if($p->sold == 0)
            <button class="buy_button" onclick="window.location.href='{{route('login')}}'">Buy</button>
            @endif
        @else
            @if(auth()->check() && $p->user_id == auth()->user()->id)
                @if($p->sold == 0)
                    <button class="edit_button" onclick="window.location.href='{{route('product_update', ['id' => $p->id])}}'">Edit</button>
                @endif
            @else
                @if($p->sold == 0)
                    <button class="buy_button" onclick="window.location.href='{{route('buy_product', ['id' => $p->id])}}'">Buy</button>
                @endif
            @endif
        @endguest
            </div>
    </div>
        <div id="fullImageOverlay">
            <span class="closeButton" onclick="closeImage()">&times;</span>
            <img id="fullImage" src="" alt="Pełne zdjęcie">
        </div>


    <div class="bottom_container bottom_color"> Sebastian Kolański © 2023 </div>
</div>
</div>

</body>
</html>
