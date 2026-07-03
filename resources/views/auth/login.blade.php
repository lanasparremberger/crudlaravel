<x-guest-layout>

    <div class="w-full max-w-md">

        <div class="bg-white rounded-3xl shadow-soft border border-white p-8">

            <div class="text-center mb-8">
                <div
                    class="w-16 h-16 mx-auto rounded-2xl bg-gradient-to-r from-rose to-wine flex items-center justify-center text-white text-3xl mb-4">
                    <i class="fa-solid fa-music"></i>
                </div>

                <h1 class="text-3xl font-display font-bold text-wine">
                    Entrar
                </h1>

                <p class="text-plum/70 mt-2">
                    Faça login para acessar sua biblioteca de músicas.
                </p>
            </div>

            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-5">
                    <x-input-label for="email" :value="__('Email')" class="mb-2" />

                    <x-text-input id="email"
                        class="block w-full rounded-2xl border-petal bg-blush focus:border-rose focus:ring-rose"
                        type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />

                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="mb-5">
                    <x-input-label for="password" :value="__('Senha')" class="mb-2" />

                    <x-text-input id="password"
                        class="block w-full rounded-2xl border-petal bg-blush focus:border-rose focus:ring-rose"
                        type="password" name="password" required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="flex items-center justify-between mb-6">

                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="remember" class="rounded border-petal text-rose focus:ring-rose">

                        <span class="text-sm text-plum">
                            Lembrar de mim
                        </span>
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-rose hover:text-wine transition">
                            Esqueceu a senha?
                        </a>
                    @endif

                </div>

                <x-primary-button
                    class="w-full justify-center rounded-2xl bg-gradient-to-r from-rose to-wine hover:opacity-90 py-3">

                    Entrar

                </x-primary-button>

                <p class="text-center mt-6 text-plum">

                    Não possui uma conta?

                    <a href="{{ route('register') }}" class="text-rose font-semibold hover:text-wine">

                        Cadastre-se

                    </a>

                </p>

            </form>

        </div>

    </div>

</x-guest-layout>
