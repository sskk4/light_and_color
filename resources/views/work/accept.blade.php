<!DOCTYPE html>
<html lang="en">

@include('shared.header')

<body>

<div class="container">

    @include('shared.navbar')



    <div class="store_main_container">

        @if (Session::has('success'))
        <div class="green_text alert_green">{{ Session::get('success') }}</div>
    @endif

        @if (Session::has('work'))
        @php
            $work = Session::get('work');
        @endphp

            <div class="border item">
                <div class="item-body">
                    <h2 class="justify dark_text">{{ $work->image_style }}</h2>

                    <p class="dark_text">Canvas quality:
                        @if($work->canvas_quality == 0)
                            Low
                        @elseif($work->canvas_quality == 1)
                            Medium
                        @else
                            High
                        @endif
                    </p>
                    <input type="range" name="canvas_quality" min="0" max="2" step="1" value="{{ $work->canvas_quality }}" disabled>

                    <p class="dark_text">Paint quality:
                        @if($work->canvas_quality == 0)
                            Low
                        @elseif($work->canvas_quality == 1)
                            Medium
                        @else
                            High
                        @endif
                    </p>
                    <input type="range" name="paint_quality" min="0" max="2" step="1" value="{{ $work->canvas_quality }}" disabled>

                    <p class="dark_text">Painting time (in days): {{ $work->painting_time }}</p>

                    <p class="price2 price">${{ $work->price }}</p>

                </div>
            </div>


        <button class="buy-button" onclick="window.location.href='{{ route('work') }}'">Back to orders</button>
        @php
            Session::forget('work');
        @endphp
    @else


    <div class="border item">
        <div class="item-body">
            <h2 class="dark_text_green"> Are you sure you want to accept this painting job? </h2>

            <h2 class="justify dark_text">{{ $work->image_style }}</h2>


            <p class="dark_text">Canvas quality:

                @if($work->canvas_quality == 0)
                Low
                @elseif($work->canvas_quality == 1)
                Medium
                @else
                High
                @endif


            </p>
            <input type="range" name="canvas_quality" min="0" max="2" step="1" value="{{ $work->canvas_quality }}" disabled>
            <p class="dark_text">Paint quality:

                @if($work->canvas_quality == 0)
                Low
                @elseif($work->canvas_quality == 1)
                Medium
                @else
                High
                @endif
    </p>
            <input type="range" name="paint_quality" min="0" max="2" step="1" value="{{ $work->canvas_quality }}" disabled>
            <p class="dark_text">Painting time (in days): {{ $work->painting_time }}</p>
            <p class="dark_text">Added by: {{ $work->user->name }}</p> <p class="date dark_text"> {{$work->created_at->format('d/m/Y')}} </p>


            <p class="price2 price">${{ $work->price }}</p>


            <form action="{{route('accept_work_post', ['id' => $work->id])}}" method="POST">
                @csrf
            <button class="buy-button" onclick="window.location.href='{{route('accept_work', ['id' => $work->id])}}'">Accept</button>
            </form>
        </div>
    </div>

    @endif

    </div>

    <div class="bottom_container bottom_color"> Sebastian Kolański © 2023  </div>
</div>


</body>
</html>
