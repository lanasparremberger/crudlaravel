<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,500;0,600;0,700;1,500&family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="images/logo.png">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        blush: '#FFF3F6',
                        petal: '#FFD3E1',
                        rose: '#EC5A93',
                        wine: '#7A1F44',
                        plum: '#5C1638',
                        gold: '#D8A863',
                    },
                    fontFamily: {
                        display: ['Fraunces', 'serif'],
                        body: ['Inter', 'sans-serif'],
                    },
                    boxShadow: {
                        soft: '0 20px 45px -20px rgba(122,31,68,0.35)',
                    },
                }
            }
        }
    </script>

    <!-- Alpine.js (interatividade do menu, sem depender do Bootstrap JS) -->
    <script src="https://unpkg.com/alpinejs@3.13.5/dist/cdn.min.js" defer></script>

    <style>
        [x-cloak] {
            display: none !important;
        }

        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="antialiased text-plum bg-blush">

    <!-- glow de fundo -->
    <div class="fixed inset-0 -z-10 bg-gradient-to-br from-blush via-[#FFEAF1] to-petal"></div>
    <div class="fixed -top-32 -right-24 w-[420px] h-[420px] rounded-full bg-rose/10 blur-3xl -z-10"></div>

    <div id="app">

        <!-- ============ HEADER ============ -->
        <header x-data="{ mobileOpen: false, userMenu: false }" class="sticky top-0 z-40">
            <nav class="mx-3 mt-3 sm:mx-6 sm:mt-4">
                <div
                    class="max-w-6xl mx-auto flex items-center justify-between gap-4 bg-white/70 backdrop-blur-xl border border-white shadow-soft rounded-3xl px-4 sm:px-6 py-2.5">

                    <!-- Marca -->
                    <a href="{{ url('/') }}" class="flex items-center gap-2.5 shrink-0 group">
                        <span
                            class="w-9 h-9 rounded-2xl bg-gradient-to-br from-rose to-wine flex items-center justify-center text-blush text-sm shadow-sm group-hover:scale-105 transition-transform">♫</span>
                        <span
                            class="font-display font-semibold text-lg text-wine tracking-tight">{{ config('app.name') }}</span>
                    </a>

                    <!-- Links (desktop) -->
                    <div class="hidden md:flex items-center gap-1 bg-petal/40 rounded-full p-1">
                        <a href="{{ route('listagem') }}"
                            class="px-4 py-1.5 rounded-full text-sm font-medium text-plum/70 hover:text-wine hover:bg-white/80 transition-colors">Listar
                            Produtos</a>
                        <a href="{{ route('form') }}"
                            class="px-4 py-1.5 rounded-full text-sm font-medium text-plum/70 hover:text-wine hover:bg-white/80 transition-colors">Cadastrar
                            Produtos</a>
                    </div>

                    <!-- Área do usuário (desktop) -->
                    <div class="hidden md:flex items-center gap-3">
                        @auth
                            <div class="relative">
                                <button @click="userMenu = !userMenu" @click.outside="userMenu = false" type="button"
                                    class="flex items-center gap-2 pl-1.5 pr-3 py-1.5 rounded-full bg-white/80 border border-wine/10 hover:border-rose/40 transition-colors">
                                    <span
                                        class="w-7 h-7 rounded-full bg-wine text-blush text-xs font-semibold flex items-center justify-center">
                                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                                    </span>
                                    <span class="text-sm font-medium text-plum">{{ Auth::user()->name }}</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-plum/50"
                                        :class="userMenu && 'rotate-180'" style="transition:transform .2s"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.08 1.04l-4.25 4.25a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>

                                <div x-show="userMenu" x-cloak x-transition
                                    class="absolute right-0 mt-2 w-44 bg-white rounded-2xl shadow-soft border border-wine/5 p-1.5">
                                    <a href="profile"
                                        class="block px-3.5 py-2 rounded-xl text-sm text-plum hover:bg-petal/50 hover:text-wine transition-colors">Perfil</a>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit"
                                            class="w-full text-left px-3.5 py-2 rounded-xl text-sm text-plum hover:bg-petal/50 hover:text-wine transition-colors">Logout</button>
                                    </form>
                                </div>
                            </div>
                        @endauth
                        @guest
                            <a href="login"
                                class="px-4 py-1.5 rounded-full text-sm font-medium text-wine hover:bg-petal/40 transition-colors">Login</a>
                            <a href="register"
                                class="px-4 py-1.5 rounded-full text-sm font-medium text-blush bg-gradient-to-r from-rose to-wine hover:opacity-90 transition-opacity shadow-sm">Cadastro</a>
                        @endguest
                    </div>

                    <!-- Botão hambúrguer (mobile) -->
                    <button @click="mobileOpen = !mobileOpen" type="button" aria-label="{{ __('Toggle navigation') }}"
                        class="md:hidden relative w-9 h-9 flex items-center justify-center shrink-0">
                        <span class="absolute w-5 h-0.5 bg-wine rounded-full transition-all"
                            :class="mobileOpen ? 'rotate-45' : '-translate-y-1.5'"></span>
                        <span class="absolute w-5 h-0.5 bg-wine rounded-full transition-all"
                            :class="mobileOpen && 'opacity-0'"></span>
                        <span class="absolute w-5 h-0.5 bg-wine rounded-full transition-all"
                            :class="mobileOpen ? '-rotate-45' : 'translate-y-1.5'"></span>
                    </button>
                </div>

                <!-- Painel mobile -->
                <div x-show="mobileOpen" x-cloak x-transition
                    class="md:hidden max-w-6xl mx-auto mt-2 bg-white/90 backdrop-blur-xl border border-white shadow-soft rounded-3xl px-4 py-4 space-y-1">
                    <a href=""
                        class="block px-3 py-2.5 rounded-xl text-sm font-medium text-plum hover:bg-petal/40 hover:text-wine transition-colors">Listar
                        Produtos</a>
                    <a href=""
                        class="block px-3 py-2.5 rounded-xl text-sm font-medium text-plum hover:bg-petal/40 hover:text-wine transition-colors">Cadastrar
                        Produtos</a>

                    <div class="pt-2 mt-2 border-t border-wine/10">
                        @auth
                            <div class="flex items-center gap-2.5 px-3 py-2">
                                <span
                                    class="w-7 h-7 rounded-full bg-wine text-blush text-xs font-semibold flex items-center justify-center">
                                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                                </span>
                                <span class="text-sm font-medium text-plum">{{ Auth::user()->name }}</span>
                            </div>
                            <a href="profile"
                                class="block px-3 py-2.5 rounded-xl text-sm font-medium text-plum hover:bg-petal/40 hover:text-wine transition-colors">Perfil</a>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="w-full text-left px-3 py-2.5 rounded-xl text-sm font-medium text-plum hover:bg-petal/40 hover:text-wine transition-colors">Logout</button>
                            </form>
                        @endauth
                        @guest
                            <a href="login"
                                class="block px-3 py-2.5 rounded-xl text-sm font-medium text-plum hover:bg-petal/40 hover:text-wine transition-colors">Login</a>
                            <a href="register"
                                class="block mt-1 px-3 py-2.5 rounded-xl text-sm font-medium text-center text-blush bg-gradient-to-r from-rose to-wine">Cadastro</a>
                        @endguest
                    </div>
                </div>
            </nav>
        </header>

        <!-- ============ CONTEÚDO ============ -->
        <main class="max-w-6xl mx-auto px-4 sm:px-6 py-8 sm:py-10 min-h-[60vh]">
            @yield('conteudo')
        </main>

        <!-- ============ FOOTER ============ -->
        <footer class="mt-16">
            <div class="bg-gradient-to-r from-wine via-rose to-wine">
                <div
                    class="max-w-6xl mx-auto px-4 sm:px-6 py-5 flex flex-col sm:flex-row items-center justify-center gap-3">
                    <div class="flex items-end gap-[3px] h-4 opacity-70">
                        <span class="w-[2.5px] bg-blush rounded-full h-2 animate-pulse"></span>
                        <span class="w-[2.5px] bg-blush rounded-full h-3.5 animate-pulse"
                            style="animation-delay:.15s"></span>
                        <span class="w-[2.5px] bg-blush rounded-full h-2.5 animate-pulse"
                            style="animation-delay:.3s"></span>
                        <span class="w-[2.5px] bg-blush rounded-full h-4 animate-pulse"
                            style="animation-delay:.45s"></span>
                    </div>
                    <p class="text-blush/90 text-xs sm:text-sm font-medium tracking-wide text-center">
                        © 2025 Copyright: Programação para Internet III
                    </p>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
