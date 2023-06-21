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

    @if (Session::has('success'))
    <div class="alert_green">{{ Session::get('success') }}</div>
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


    <button class="add_product_button" onclick="window.location.href='{{ route('work') }}'">Back to orders</button>
    @php
        Session::forget('work');
    @endphp

@else
    <h2> Add painting order </h2>
    <form action="{{route('add_work')}}" method="POST">
        @csrf
        <div>
            <label for="image_style" class="text_product">Image style (description):</label><br>
            <textarea class="add_product_textarea" name="image_style" min="10" max="255" required></textarea>
        </div>

        <div>
            <label for="canvas_quality">Canvas quality:</label><br>
            <input type="range" name="canvas_quality" min="0" max="2" step="1" required>
        </div>

        <div>
            <label for="paint_quality">Paint quality:</label><br>
            <input type="range" name="paint_quality" min="0" max="2" step="1" required>
        </div>

        <div>
            <label for="painting_time">Painting time (in days):</label>
            <input type="number" name="painting_time" min="1" max="60" required><br>
        </div>

        <button type="submit" class="add_product_button">Submit</button>
    </form>
@endif

        </div>
        </div>
    <div class="bottom_container bottom_color"> Sebastian Kolański © 2023 </div>

</div>

</body>
</html>
