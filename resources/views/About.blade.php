<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <x-navbar>
        <x-slot:main>
            <div class="d-flex mmm  justify-content-around mt-12 fade-element" style="margin-bottom: 13rem">
                <div class="lefty">
                    <h1>About <span>us.</span></h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente, corrupti. Ex assumenda quidem
                        debitis expedita.</p>
                    <button class="button">Click</button>
                </div>
                <div class="right">
                    <center>
                        <img src="{{ asset('loog/dark_mode_logo.png') }}" style="border-radius: 50%" alt="NotFound">
                    </center>
                </div>
            </div>
            <div class="d-flex mmm  mt-12 justify-content-around fade-element">
                <div class="lefty">
                    <h1>Why <span>us.</span></h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente, corrupti. Ex assumenda quidem
                        debitis expedita.</p>
                    <button class="button">Click</button>
                </div>
                <div class="right">
                    <center>
                        <img src="{{ asset('loog/dark_mode_logo.png') }}" style="border-radius: 50%" alt="NotFound">
                    </center>
                </div>
            </div>
            <div class="d-flex mt-12 justify-content-around fade-element">
                <p class="down">dolor. Lorem ipsum </p>
                <center class="box">
                    <span>Start</span>
                    <img src="{{ asset('loog/dark_mode_logo.png') }}" alt="NotFound">
                    <span>Now</span>
                </center>
                <p class="up">Lorem ipsum dolor.</p>
            </div>
            <div class="users fade-element">
                <center>
                    <div class="what ms-3">What</div>
                    <div class="think"> users think . </div>
                </center>
            </div>
            <div class="member fade-element">
                <div class="container text-center">
                    <div class="row" style="gap: 3%;">
                        @foreach ($team as $member)
                        <div class="col" style="height: fit-content;">
                            <center><img class="size-32 rounded-full mt-3 photos" src="{{asset($member["image"])}}" alt="Not Found"></center>
                            <br>
                            <p class="name">{{$member["name"]}}</p><br><br>
                            <p class="description">{{$member["description"]}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </x-slot:main>
    </x-navbar>
    <x-footer></x-footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{asset("js/script.js")}}"></script>
</body>

</html>