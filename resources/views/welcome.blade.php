<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Swiftly</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('imgs/link/icon.png') }}">
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@2/tsparticles.bundle.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

</head>

<body class="font-sans text-gray-800">
    <canvas id="stars" class="fixed inset-0 -z-10"></canvas>

    <!-- PARTICULAS -->

    <div id="particles" class="fixed inset-0 -z-10"></div>

    <!-- NAVBAR -->

    @include('components/header')

    <!-- HERO -->

    <section class="relative h-screen overflow-hidden">

        <div id="slider" class="absolute inset-0">

            <img src="{{ asset('imgs/hero/taylortheeras.webp') }}"
                class="slide absolute w-full h-full object-cover opacity-100 transition-opacity duration-1000">

            <img src="{{ asset('imgs/hero/taylordorothea.jpg') }}"
                class="slide absolute w-full h-full object-cover opacity-0 transition-opacity duration-1000">

            <img src="{{ asset('imgs/hero/taylorred.jpg') }}"
                class="slide absolute w-full h-full object-cover opacity-0 transition-opacity duration-1000">

        </div>

        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative z-10 h-full flex flex-col justify-center items-center text-white text-center">

            <h1 class="text-6xl font-extrabold mb-6">
                Taylor Swift
            </h1>

            <p class="text-xl max-w-xl">
                As eras, álbuns e momentos icônicos do pop moderno.
            </p>

        </div>

    </section>
    <!-- TAYLOR -->
    <!-- NAV SEÇÕES -->
    <nav class="w-full bg-white/80 backdrop-blur-md shadow-md sticky top-0 z-20">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-center space-x-8 font-semibold text-gray-700">

            <a href="#eras" class="hover:text-pink-500 transition">
                Eras
            </a>

            <a href="#musicas" class="hover:text-purple-500 transition">
                Músicas
            </a>

            <a href="#posts" class="hover:text-indigo-500 transition">
                Posts
            </a>

            <a href="#qsn" class="hover:text-sky-500 transition">
                Quem somos?
            </a>

        </div>
    </nav>

   

    <section id=" reveal" class="py-24">

        <h2 id="eras" class="text-4xl font-bold text-center mb-16 text-purple-600">
            Álbuns da Taylor
        </h2>

        <div class="grid md:grid-cols-3 gap-12 max-w-6xl mx-auto">

            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="{{ asset('imgs/albuns/debut.jpg') }}" class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-lime-200 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Taylor Swift (debut)<br>
                            O ínicio da jornada country.
                        </p>
                    </div>

                </div>

            </div>






            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="{{ asset('imgs/albuns/fearless.jfif') }}" class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-yellow-200 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Fearless<br>
                            O country romântico e cheio de hits.
                        </p>
                    </div>

                </div>

            </div>

            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="{{ asset('imgs/albuns/speaknow.jpg') }}" class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-violet-200 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Speak Now<br>
                            O pop country cheio de histórias pessoais.
                        </p>
                    </div>

                </div>

            </div>


            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="{{ asset('imgs/albuns/red.jfif') }}" class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-red-400 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Red<br>
                            A transição para o pop e o country moderno.
                        </p>
                    </div>

                </div>

            </div>

            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="{{ asset('imgs/albuns/nineteen.avif') }}" class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-sky-200 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            1989<br>
                            A era pop que mudou tudo.
                        </p>
                    </div>

                </div>

            </div>

            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="{{ asset('imgs/albuns/reputation.jfif') }}" class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-gray-200 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Reputation<br>
                            Volta por cima com uma era mais sombria e cheia de hits.
                        </p>
                    </div>

                </div>

            </div>


            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="{{ asset('imgs/albuns/lover.jfif') }}" class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-pink-200 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Lover<br>
                            Romance, cores e liberdade.
                        </p>
                    </div>

                </div>

            </div>

            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="{{ asset('imgs/albuns/folklore.avif') }}" class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-zinc-200 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Folklore<br>
                            Indie instrumental e letras introspectivas.
                        </p>
                    </div>

                </div>

            </div>


            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="{{ asset('imgs/albuns/evermore.avif') }}" class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-yellow-600 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Evermore<br>
                            A continuação do folklore, com mais histórias e atmosferas.
                        </p>
                    </div>

                </div>

            </div>



            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="{{ asset('imgs/albuns/fearlesstv.jfif') }}" class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-amber-200 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Fearless (Taylor's Version)<br>
                            A regravação do clássico com novas faixas e uma nova perspectiva.
                        </p>
                    </div>

                </div>

            </div>

            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="{{ asset('imgs/albuns/redtv.jfif') }}" class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-red-300 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Red (Taylor's Version)<br>
                            A regravação do álbum que marcou a transição para o pop, com novas faixas e uma nova
                            perspectiva.
                        </p>
                    </div>

                </div>

            </div>

            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="{{ asset('imgs/albuns/midnights.avif') }}" class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-blue-300 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Midnights<br>
                            Noites, pensamentos e introspecção.
                        </p>
                    </div>

                </div>

            </div>

            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="{{ asset('imgs/albuns/speaknowtv.jfif') }}" class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-indigo-200 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Speak Now (Taylor's Version)<br>
                            Album regravado com novas faixas e uma nova perspectiva sobre a fase country pop.
                        </p>
                    </div>

                </div>

            </div>


            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="{{ asset('imgs/albuns/1989tv.jfif') }}" class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-blue-200 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            1989 (Taylor's Version)<br>
                            A regravação do álbum que mudou tudo, com novas faixas e uma nova perspectiva sobre a era
                            pop.
                        </p>
                    </div>

                </div>

            </div>

            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="{{ asset('imgs/albuns/ttpd.jfif') }}" class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-stone-200 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            The Tortured Poets Department<br>
                            A era com uma vibe mais sombria e poética.
                        </p>
                    </div>

                </div>

            </div>

            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="{{ asset('imgs/albuns/showgirl.jfif') }}" class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-orange-300 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            The Life of a Showgirl<br>
                            A era com uma vibe mais teatral e glamourosa.
                        </p>
                    </div>

                </div>

            </div>



        </div>

    </section>

    <!-- linha do tempo -->

    <section id="timeline" class="py-28">

        <h2 class="text-5xl font-extrabold text-center mb-24">
            Linha do Tempo — Eras da Taylor Swift
        </h2>

        <div class="relative max-w-6xl mx-auto">

            <!-- linha animada -->
            <div id="timeline-line" class="timeline-line"></div>

            <!-- linha base (fundo) -->
            <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-pink-200"></div>

            <!-- linha central -->
            <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-pink-400"></div>

            <!-- ITEM -->
            <!-- usa essa classe "timeline-item" pra animar -->

            <!-- Debut -->
            <div class="timeline-item mb-16 flex justify-between items-center w-full">

                <div class="w-5/12"></div>

                <div class="z-10 bg-green-500 w-6 h-6 rounded-full"></div>

                <div class="w-5/12 bg-white p-6 rounded-xl shadow-lg glow-green">
                    <h3 class="text-xl font-bold text-green-600">2006 — Debut</h3>
                    <p class="text-gray-600 mt-2">
                        Início country com letras autobiográficas.
                    </p>
                </div>

            </div>

            <!-- Fearless -->
            <div class="timeline-item mb-16 flex justify-between flex-row-reverse items-center w-full">
                <div class="w-5/12"></div>
                <div class="z-10 bg-yellow-400 w-6 h-6 rounded-full"></div>
                <div class="w-5/12 bg-white p-6 rounded-xl shadow-lg glow-yellow">
                    <h3 class="text-xl font-bold text-yellow-500">2008 — Fearless</h3>
                    <p class="text-gray-600 mt-2">Hits como Love Story. Grammy AOTY.</p>
                </div>
            </div>

            <!-- Speak Now -->
            <div class="timeline-item mb-16 flex justify-between items-center w-full">
                <div class="w-5/12 "></div>
                <div class="z-10 bg-purple-500 w-6 h-6 rounded-full"></div>
                <div class="w-5/12 bg-white p-6 rounded-xl shadow-lg glow-purple">
                    <h3 class="text-xl font-bold text-purple-600">2010 — Speak Now</h3>
                    <p class="text-gray-600 mt-2">Totalmente escrito por ela. Era roxa icônica.</p>
                </div>
            </div>

            <!-- Red -->
            <div class="timeline-item mb-16 flex justify-between flex-row-reverse items-center w-full">
                <div class="w-5/12"></div>
                <div class="z-10 bg-red-500 w-6 h-6 rounded-full"></div>
                <div class="w-5/12 bg-white p-6 rounded-xl shadow-lg glow-red">
                    <h3 class="text-xl font-bold text-red-500">2012 — Red</h3>
                    <p class="text-gray-600 mt-2">Mistura de estilos. All Too Well marcou época.</p>
                </div>
            </div>

            <!-- 1989 -->
            <div class="timeline-item mb-16 flex justify-between items-center w-full">
                <div class="w-5/12"></div>
                <div class="z-10 bg-sky-400 w-6 h-6 rounded-full"></div>
                <div class="w-5/12 bg-white p-6 rounded-xl shadow-lg glow-blue">
                    <h3 class="text-xl font-bold text-sky-500">2014 — 1989</h3>
                    <p class="text-gray-600 mt-2">Virada total pro pop.</p>
                </div>
            </div>

            <!-- Reputation -->
            <div class="timeline-item mb-16 flex justify-between flex-row-reverse items-center w-full">
                <div class="w-5/12"></div>
                <div class="z-10 bg-gray-900 w-6 h-6 rounded-full"></div>
                <div class="w-5/12 bg-white p-6 rounded-xl shadow-lg glow-black">
                    <h3 class="text-xl font-bold text-gray-900">2017 — Reputation</h3>
                    <p class="text-gray-600 mt-2">Era dark, vingança e reinvenção.</p>
                </div>
            </div>

            <!-- Lover -->
            <div class="timeline-item mb-16 flex justify-between items-center w-full">
                <div class="w-5/12"></div>
                <div class="z-10 bg-pink-400 w-6 h-6 rounded-full"></div>
                <div class="w-5/12 bg-white p-6 rounded-xl shadow-lg glow-pink">
                    <h3 class="text-xl font-bold text-pink-500">2019 — Lover</h3>
                    <p class="text-gray-600 mt-2">Colorido, romântico e leve.</p>
                </div>
            </div>

            <!-- Folklore -->
            <div class="timeline-item mb-16 flex justify-between flex-row-reverse items-center w-full">
                <div class="w-5/12"></div>
                <div class="z-10 bg-gray-400 w-6 h-6 rounded-full"></div>
                <div class="w-5/12 bg-white p-6 rounded-xl shadow-lg glow-gray">
                    <h3 class="text-xl font-bold text-gray-500">2020 — Folklore</h3>
                    <p class="text-gray-600 mt-2">Indie/folk introspectivo.</p>
                </div>
            </div>

            <!-- Evermore -->
            <div class="timeline-item mb-16 flex justify-between items-center w-full">
                <div class="w-5/12"></div>
                <div class="z-10 bg-amber-700 w-6 h-6 rounded-full"></div>
                <div class="w-5/12 bg-white p-6 rounded-xl shadow-lg glow-brown">
                    <h3 class="text-xl font-bold text-amber-700">2020 — Evermore</h3>
                    <p class="text-gray-600 mt-2">Continuação do folklore, mais madura.</p>
                </div>
            </div>

            <!-- Midnights -->
            <div class="timeline-item mb-16 flex justify-between flex-row-reverse items-center w-full">
                <div class="w-5/12"></div>
                <div class="z-10 bg-indigo-600 w-6 h-6 rounded-full"></div>
                <div class="w-5/12  bg-white p-6 rounded-xl shadow-lg glow-indigo">
                    <h3 class="text-xl font-bold text-indigo-600">2022 — Midnights</h3>
                    <p class="text-gray-600 mt-2">Noites, pensamentos e synth-pop.</p>
                </div>
            </div>

            <!-- The Tortured Poets Department -->
            <div class="timeline-item mb-16 flex justify-between items-center w-full">
                <div class="w-5/12"></div>
                <div class="z-10 bg-neutral-800 w-6 h-6 rounded-full"></div>
                <div class="w-5/12 bg-white p-6 rounded-xl shadow-lg glow-gray">
                    <h3 class="text-xl font-bold text-neutral-800">2024 — The Tortured Poets Department</h3>
                    <p class="text-gray-600 mt-2">Era introspectiva, lírica e mais crua emocionalmente.</p>
                </div>
            </div>

            <!-- The Life of a Showgirl -->
            <div class="timeline-item mb-16 flex justify-between flex-row-reverse items-center w-full">
                <div class="w-5/12"></div>
                <div class="z-10 bg-orange-500 w-6 h-6 rounded-full"></div>
                <div class="w-5/12 bg-white p-6 rounded-xl shadow-lg glow-showgirl">
                    <h3 class="text-xl font-bold text-orange-600">2025 — The Life of a Showgirl</h3>
                    <p class="text-gray-600 mt-2">Era glamourosa e teatral inspirada na vida no palco e na fama.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="musicas" class="py-20 text-center">

        <h2 class="text-4xl font-bold mb-10">
            Ouça as músicas
        </h2>

        <div class="flex flex-wrap justify-center gap-10">

            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/53iuhJlwXhSER5J2IYYv1W"
                width="300" height="80" allowfullscreen="" loading="lazy"></iframe>

            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/0V3wPSX9ygBnCm8psDIegu"
                width="300" height="80" allowfullscreen="" loading="lazy">
            </iframe>

            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/3yWuTOYDztXjZxdE2cIRUa"
                width="300" height="80" allowfullscreen="" loading="lazy">
            </iframe>

            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/1BxfuPKGuaTgP7aM0Bbdwr"
                width="300" height="80" allowfullscreen="" loading="lazy">
            </iframe>

            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/0ug5NqcwcFR2xrfTkc7k8e"
                width="300" height="80" allowfullscreen="" loading="lazy">
            </iframe>

            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/4R2kfaDFhslZEMJqAFNpdd"
                width="300" height="80" allowfullscreen="" loading="lazy">

            </iframe>

            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/2OzhQlSqBEmt7hmkYxfT6m"
                width="300" height="80" allowfullscreen="" loading="lazy">

            </iframe>

            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/1R0a2iXumgCiFb7HEZ7gUE"
                width="300" height="80" allowfullscreen="" loading="lazy">

            </iframe>

            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/786NsUYn4GGUf8AOt0SQhP"
                width="300" height="80" allowfullscreen="" loading="lazy">

            </iframe>

            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/57w0Uyk2jJAkO2hMJ36xJZ"
                width="300" height="80" allowfullscreen="" loading="lazy">

            </iframe>

        </div>

    </section>

    <section class="py-28 text-center">

        <h2
            class="text-5xl font-extrabold mb-16 
    bg-gradient-to-r from-pink-500 to-purple-600 
    bg-clip-text text-transparent">

            Mapa das Eras

        </h2>

        <div class="grid md:grid-cols-5 sm:grid-cols-2 gap-6 max-w-6xl mx-auto">

            <div onclick="setEra('debut')" class="era bg-green-500">
                Debut
            </div>

            <div onclick="setEra('fearless')" class="era bg-yellow-400 text-black">
                Fearless
            </div>

            <div onclick="setEra('speaknow')" class="era bg-purple-600">
                Speak Now
            </div>

            <div onclick="setEra('red')" class="era bg-red-500">
                Red
            </div>

            <div onclick="setEra('1989')" class="era bg-sky-400">
                1989
            </div>

            <div onclick="setEra('reputation')" class="era bg-gray-900">
                Reputation
            </div>

            <div onclick="setEra('lover')" class="era bg-pink-400">
                Lover
            </div>

            <div onclick="setEra('folklore')" class="era bg-gray-400 text-black">
                Folklore
            </div>

            <div onclick="setEra('evermore')" class="era bg-amber-700">
                Evermore
            </div>

            <div onclick="setEra('midnights')" class="era bg-indigo-700">
                Midnights
            </div>

            <div onclick="setEra('ttpd')" class="era bg-stone-300 text-black">
                TTPD
            </div>

            <div onclick="setEra('showgirl')" class="era bg-orange-400">
                Showgirl
            </div>

        </div>

    </section>

    <!-- posts -->
    {{-- todo add os posts aq tirados do banco --}}
    <section id="posts" class="py-24">

        <h2 class="text-4xl font-bold text-center mb-16">
            The Life of the Swifties
        </h2>

        <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">


            <img src="https://image.stern.de/34908840/t/AU/v5/w1440/r1.7778/-/taylorswift.jpg"
                class="rounded-xl hover:scale-105 transition">

            <img src="https://s2-oglobo.glbimg.com/yMt5cSlX8RcKaIbuQTODJ9r_5p4=/0x0:1193x732/888x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_da025474c0c44edd99332dddb09cabe8/internal_photos/bs/2024/R/1/r9SaB3QXqA4LTto1cd8g/105475182-topshot-us-singer-songwriter-taylor-swift-arrives-for-the-81st-annual-golden-globe-a.jpg"
                class="rounded-xl hover:scale-105 transition">

            <img src="https://images.impresa.pt/expresso/2025-12-12-taylor-swift.jpg-a5ce4154/original"
                class="rounded-xl hover:scale-105 transition">

        </div>

    </section>

    <section id="qsn" class="relative py-32 overflow-hidden">

        <div class="absolute inset-0 animated-bg"></div>

        <div class="stars"></div>

        <div class="relative max-w-6xl mx-auto px-6">

            <h2 class="text-center text-4xl md:text-5xl font-bold text-white mb-6">
                Feito com my blood, sweat and tears for this
            </h2>

            <p class="text-center text-white/80 mb-16">
                Valeu ai pro Roger que não me xingou quando eu disse que ia fazer <i> outro </i> site da loirinha. (Ele
                xingou, eu que ignorei)
            </p>

            <!-- 🪩 Glass Card -->
            <div class="grid md:grid-cols-2 gap-10 items-center">

                <!-- TEXTO -->
                <div
                    class="backdrop-blur-xl bg-white/10 p-8 rounded-3xl shadow-2xl border border-white/20 animate-fade-in">

                    <h3 class="text-2xl font-bold text-white mb-4">
                        Sobre o Projeto
                    </h3>

                    <p class="text-white/80 leading-relaxed">
                        Esse site foi criado para reunir eras, álbuns e momentos icônicos.
                        Um espaço feito por fãs, para fãs
                    </p>

                    <!-- LINKS -->
                    <div class="flex gap-4 mt-6 flex-wrap">

                        <a href="https://github.com/lanasparremberger" target="_blank"
                            class="social-btn bg-orange-300/80 hover:bg-orange-300">
                            <i class="fa-brands fa-github"></i>
                        </a>

                        <a href="https://www.instagram.com/lana.sparremberger/" target="_blank"
                            class="social-btn bg-pink-500/80 hover:bg-pink-500">
                            <i class="fa-brands fa-instagram"></i>
                        </a>

                        <a href="https://x.com/evermorepeeta" target="_blank"
                            class="social-btn bg-blue-400/80 hover:bg-blue-400">
                            <i class="fa-brands fa-twitter" style="color: rgb(255, 255, 255);"></i>
                        </a>

                    </div>

                </div>

                <!-- FOTO -->
                <div class="flex justify-center items-center py-20">

                    <div class="card-3d">
                        <div class="card-content">

                            <img src="{{ asset('imgs/quemsomosnos/eunatheeras.jpg') }}" alt="Lana Sparremberger"
                                class="w-28 h-28 rounded-full mx-auto mb-4 border-4 border-pink-300 object-cover">

                            <h3 class="text-xl font-bold text-white text-center">
                                Lana Sparremberger
                            </h3>

                            <p class="text-white/70 text-center">
                                Desenvolvedora, <i> swiftie</i> e criadora deste site.
                            </p>

                        </div>

                        <!-- brilho -->
                        <div class="glare"></div>
                    </div>

                </div>

            </div>
        </div>


    </section>



    <script src="{{ asset('script/index.js') }}"></script>

</body>

</html>
