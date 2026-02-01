<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <x-navbar>
        <x-slot:main>
            <div class="d-flex mt-5 justify-content-center align-items-center">
                <div class="form-container">
                    <form class="form" method="POST" action="/about" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="f_name">First Name : </label>
                            <input type="text" id="f_name" name="first_name">
                            @error("first_name")
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="l_name">Last Name : </label>
                            <input type="text" id="l_name" name="last_name">
                            @error("last_name")
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="textarea">Your FeedBack : </label>
                            <textarea id="textarea" rows="10" name="feedback" cols="50"></textarea>
                            @error("feedback")
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <button class="form-submit-btn" type="submit">Submit</button>
                    </form>
                </div>
            </div>

        </x-slot:main>
    </x-navbar>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</body>

</html>
