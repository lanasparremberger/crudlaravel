<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="antialiased bg-blush text-plum">

    <!-- Fundo -->
    <div class="fixed inset-0 -z-10 bg-gradient-to-br from-blush via-[#FFEAF1] to-petal"></div>

    <div class="fixed -top-32 -left-20 w-96 h-96 rounded-full bg-rose/20 blur-3xl -z-10"></div>

    <div class="fixed -bottom-32 -right-20 w-[450px] h-[450px] rounded-full bg-wine/10 blur-3xl -z-10"></div>

    <div class="min-h-screen flex items-center justify-center px-4">

        <div class="w-full max-w-md">

            <div class="text-center mb-6">

                <a href="{{ url('/') }}"
                    class="inline-flex items-center gap-3">

                    <div
                        class="w-16 h-16 rounded-3xl bg-gradient-to-br from-rose to-wine text-white flex items-center justify-center shadow-soft text-2xl">

                        <i class="fa-solid fa-music"></i>

                    </div>

                    <span class="font-display text-3xl font-bold text-wine">
                        {{ config('app.name') }}
                    </span>

                </a>

            </div>

            <div
                class="bg-white/80 backdrop-blur-xl border border-white rounded-3xl shadow-soft p-8">

                {{ $slot }}

            </div>

        </div>

    </div>

</body>

</html>