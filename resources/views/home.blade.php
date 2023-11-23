@extends('layout.app')
@section('appContents')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/home.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="hero">

        <video autoplay loop muted plays -inline class="back-video">
            <source src="images/video.mp4" type="video/mp4">
        </video>

        <div class="content">
            <h3>Let's know about</h3>
            <br>
            <div class="animate-text">
                <h1>The Missile Man of India</h1>
            </div>
        </div>
    </div>

</body>
</html>
@endsection
