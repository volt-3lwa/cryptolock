<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
    <x-navbar>
        <x-slot:main>
            <center>
                <form class="form" method="POST" action="/register">
                    @csrf
                    <p class="title">Register </p>
                    <p class="message">Signup now and get full access to our app. </p>
                    <div class="flexy">
                        <label>
                            <input class="input" type="text" placeholder="" name="first-name" >
                            <span>Firstname</span>
                            @error("first-name")
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </label>

                        <label>
                            <input class="input" type="text" name="last-name" placeholder="" >
                            <span>Lastname</span>
                            @error("last-name")
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>

                    <label>
                        <input class="input" name="email" type="email" placeholder="" >
                        <span>Email</span>
                        @error("email")
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </label>

                    <label>
                        <input class="input" name="password" type="password" placeholder="" >
                        <span>Password</span>
                        @error("password")
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </label>
                    <label>
                        <input class="input" name="password_confirmation" type="password" placeholder="" >
                        <span>Confirm password</span>
                        @error("password_confirmation")
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </label>
                    <button class="submit">Register</button>
                    <p class="signin">Already have an acount ? <a href="login">Signin</a> </p>
                </form>
            </center>

        </x-slot:main>
    </x-navbar>
</body>

</html>
