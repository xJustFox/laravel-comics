<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')
    @include('partials.jumbo')
    <main class=" text-center py-3 ">
        <img src="https://www.clipartmax.com/png/full/265-2655834_work-in-progress-icon.png" alt="">
    </main>
    @include('partials.footer')


</body>

</html>