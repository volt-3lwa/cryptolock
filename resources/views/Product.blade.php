<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <x-navbar>
        <x-slot:main>
            <div class="container">
                <p class="main_h1">FIND <span class="d-inline-block">Your Products</span> </p>
                <br><br>
                <div class="product-list">
                    @foreach ($products as $product)
                    <div class="product-item">
                        <div class="d-flex text_money justify-content-between">
                            <h1>{{$product["state"]}}</h1>
                            <p>{{$product["price"]}}</p>
                        </div>
                        <div class="projects-header">
                            <span class="line"></span>
                            <span class="text">{{$product["state"]}}</span>
                            <span class="line"></span>
                        </div>
                        <h3>{{$product["description"]}}</h3>
                        <div class="d-flex justify-content-center">
                            <a href="#">
                                <button class="button">Click</button>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </x-slot:main>
    </x-navbar>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
