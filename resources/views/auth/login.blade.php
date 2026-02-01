<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <x-navbar>
        <x-slot:main>
            <center>

                <div class="form-container">
                    <p class="title">Login</p>
                <form class="form" method="POST" action="/login">
                    @csrf
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" :value="old("email")" placeholder="">
                        @error("email")
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="">
                        <div class="forgot">
                                @error("password")
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                        </div>
                    </div>
                    <button class="sign">Log in</button>
                </form>
                <p class="signup mt-3">Don't have an account?
                    <a rel="noopener noreferrer" href="/register" class="">Sign up</a>
                </p>
            </div>
        </center>
        </x-slot:main>
    </x-navbar>
</body>

</html>
