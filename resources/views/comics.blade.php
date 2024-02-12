<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')
    @vite('resources/js/comics.js')

</head>

<body>
    @include('partials.header')
    @include('partials.jumbo')
    <main>
        <div class="container my-p position-relative">
            <div class="plate">CURRENT SERIES</div>
    
            <div class="my-row">
                @foreach ($comics as $comic)
                    <div class="my-col">
                        <div class="imgContainer">
                            <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                        </div>
                        <div class="price">{{$comic['price']}}</div>
                        <div class="textComics">
                            {{ $comic['series'] }}
                        </div>
                    </div>
                @endforeach
            </div>
    
            <div class="text-center pt-4">
                <button class="my-btn">LOAD MORE</button>
            </div>
        </div>
        <section class="shippingBanner">
            <div class="container">
                <ul class="list-unstyled m-0  d-flex justify-content-around  p-5 flex-wrap">
                    @foreach ($blueBar['itemBar'] as $item)
                        <li>
                            <img src="{{ Vite::asset($item['icon']) }}" alt="">
                            <span class="title">{{$item['title']}}</span>
                        </li>    
                    @endforeach
                </ul>
            </div>
        </section>
    </main>
    @include('partials.footer')


</body>

</html>