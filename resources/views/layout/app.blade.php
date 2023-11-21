<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
</head>
<body>
    <div class="container">
    <div class="width-full h-full">
        @include('layout.header')
        <main class="">
            @yield('appContents')
        </main>
        @include('layout.footer')
    </div>
</body>

