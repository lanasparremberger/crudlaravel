<header id="mainHeader"
    class="fixed top-0 left-0 w-full bg-white/60 backdrop-blur-lg border-b border-pink-100 transition-all duration-300 z-50">

    <div class="max-w-7xl mx-auto flex items-center justify-between px-8 py-4">

        <!-- LOGO -->
        <p 
            clpss="text-3xl font-extrabold bg-gradient-to-r from-pink-400 to-purple-400 bg-clip-text text-transparent">
            Swiftly
        </p>

        <!-- NAV -->
        <nav class="flex items-center gap-8 text-gray-600 font-medium">

            <a href="{{route('listagem')}}" class="hover:text-purple-500 transition hover:scale-105">
                Feed
            </a>

            <a href="#posts" class="hover:text-indigo-500 transition hover:scale-105">
                Comentados
            </a>

            @auth
                <a href="#aa"
                    class="hover:text-purple-500 transition hover:scale-105">
                    + Música
                </a>

                <a href="{{ url('/dashboard') }}"
                    class="px-4 py-2 rounded-full bg-gradient-to-r from-pink-400 to-purple-400 text-white font-semibold hover:scale-105 transition">
                    Dashboard
                </a>
            @else
                @if (Route::has('login'))
                    <a href="{{ route('login') }}"
                        class="hover:text-pink-500 transition hover:scale-105">
                        Entrar
                    </a>
                @endif

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="px-4 py-2 rounded-full bg-gradient-to-r from-pink-400 to-purple-400 text-white font-semibold hover:scale-105 transition">
                        Registrar
                    </a>
                @endif
            @endauth

        </nav>

    </div>

</header>