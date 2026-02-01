<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <x-navbar>
        <x-slot:main>
            <div class="container d-flex">
                <div class="-content-start left-side">
                    <h1 class="h1-first">KEEP YOUR HOME SAVE.</h1>
                    <h1 class="h1-second">BE SAFER</h1>
                </div>
                <div class=" center">
                    <img src="{{ asset('loog/security-man.png') }}" style="object-fit: cover;" alt="NotFound">
                </div>
                <div class="right-side">
                    <h3 class="title">This is the title .</h3><br>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos quibusdam est blanditiis ex
                        reprehenderit sint voluptates illum similique! Error sed rem doloremque possimus molestias
                        exercitationem labore obcaecati expedita magnam tenetur.</p>
                    <button class="button">Button</button>
                </div>
            </div>
            <div class="container-fluid d-flex">
                <div class="left">
                    <div class="number">
                        <span>+</span>
                        <p class="d-inline-block">150</p>
                    </div>
                    <div class="text">expert <br> banned</div>
                </div>
                <div class="center">
                    <div class="number">
                        <span>+</span>
                        <p class="d-inline-block">50</p>
                    </div>
                    <div class="text">expert <br> banned</div>
                </div>
                <div class="right">
                    <div class="number">
                        <span>+</span>
                        <p class="d-inline-block">1000</p>
                    </div>
                    <div class="text">expert <br> banned</div>
                </div>
            </div>
            <x-footer></x-footer>
        </x-slot:main>
    </x-navbar>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        < /body>

        <
        /html>
