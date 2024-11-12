<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    {{-- Container --}}
    <main class="mt-5 mb-5 w-10/12 p-8 bg-blue-500 mx-auto text-center text-white rounded-xl">
        <p class="mb-4 text-xl font-semibold">Daftar Produk</p>

        {{-- Daftar Produk --}}
        <section class="text-left mt-12">

            @if (count($products) > 0)
                @foreach ($products as $i => $product)
                    {{-- Card --}}
                    <div class="border-b border-white pb-3 mb-4">
                        <p>{{ ++$i }}. {{ $product->name }} - Rp {{ $product->price }} </p>
                        <small>{{ $product->description }}</small>
                    </div>
                @endforeach
            @else
                <p class="text-center">
                    <span class="font-semibold">Upss,</span>
                    Belum ada produk yang terdaftar
                </p>
            @endif

        </section>

    </main>

</body>

</html>
