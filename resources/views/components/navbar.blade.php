<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body style="background-color: #111111">
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">

                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex shrink-0 items-center">
                        <a href="/">
                            <img class="h-12 w-auto" style="border-radius: 50%"
                                src="{{ asset('loog/dark_mode_logo.png') }}" alt="Your Company">
                        </a>
                    </div>
                    <div class="hidden mt-1 sm:ml-6 sm:block">
                        <div class="flex justify-around">
                            <x-links href="/" cond="/">Home</x-links>
                            <x-links href="product" cond="product">Products</x-links>
                            <x-links href="/about" cond="about">About Us</x-links>
                            <x-links href="/contact" cond="contact">Contact With Us</x-links>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        @guest
                            <x-links
                                style="border: 1px solid #99999959;box-shadow: -2px 2px 5px 0px #ffffff33;margin-right: 9px;"
                                class="login" href="/login" cond="login">Login</x-links>
                            <x-links style="border: 1px solid #99999959;box-shadow: -2px 2px 5px 0px #ffffff33;"
                                href="/register" cond="register">Register</x-links>
                            <style>
                            </style>
                        @endguest

                        @auth
                            <form action="/logout" method="post">
                                @csrf
                                <button style="border: 1px solid #99999959;box-shadow: -2px 2px 5px 0px #ffffff33;margin-right: 9px;" class="text-white rounded-md px-3 py-2 text-sm font-medium hover:bg-gray-700"
                                    type="submit">Log Out</button>
                            </form>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
        <div class="sm:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2">
                <x-mobil-links href="/" cond="/">Home</x-mobil-links>
                <x-mobil-links href="/about" cond="about">About Us</x-mobil-links>
                <x-mobil-links href="/product" cond="product">Products</x-mobil-links>
                <x-mobil-links href="/contact" cond="contact">Contact With Us</x-mobil-links>
                @guest
                    <x-mobil-links style="border: 1px solid #99999959;box-shadow: -2px 2px 5px 0px #ffffff33;margin-right: 9px;" href="/login" style="margin-top: 2%" cond="login">Login</x-mobil-links>
                    <x-mobil-links style="border: 1px solid #99999959;box-shadow: -2px 2px 5px 0px #ffffff33;margin-right: 9px;" href="/register" cond="register">Register</x-mobil-links>
                @endguest
                @auth
                    <form action="/logout" method="post">
                        @csrf
                        <button style="border: 1px solid #99999959;box-shadow: -2px 2px 5px 0px #ffffff33;margin-right: 9px;" class="text-white rounded-md px-3 py-2 text-sm font-medium hover:bg-gray-700"
                            type="submit">Log Out</button>
                    </form>
                @endauth
            </div>
        </div>
    </nav>
    {{ $main }}

</body>

</html>
