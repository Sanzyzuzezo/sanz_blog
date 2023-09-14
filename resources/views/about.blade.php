@extends('layouts.main')

@section('container')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('about/style.css') }}">
</head>
<body>
    
    <div class="container">
        <div class="card" data-tilt>
            <img src="{{ asset('about/img/Profile-1.png') }}">
            <h2>HI GUYS!</h2>
            <p><br/>Introduction Myself. <br/><br/>My name is Muhammad Ikhsan
                <br/>as a student at a SMK N 1 in Garut  <br/>...
                <br/><br/>↓ This is My Social Media ↓ </p>

            <div class="link"> 
                <a href="https://instagram.com/shanemarch03?igshid=ZDdkNTZiNTM="><img src="{{ asset('about/img/Instagram-2.png') }}"></a>
                <a href="https://www.tiktok.com/@cyroborg?_t=8avnq1Q7I8I&_r=1"><img src="{{ asset('about/img/Tiktok-1.png') }}"></a>
                <a href="https://www.facebook.com/shane.march.37?mibextid=ZbWKwL"><img src="{{ asset('img/Facebook-1.png') }}"></a>
            
                <a href="https://t.me/Lostinanotherplace">
                    <button class="btn fourth">Message Me on Telegram</button>
        </div>
    </div>

    <script src="{{ ('about/js/main.js') }}"></script>
</body>
</html>

@endsection