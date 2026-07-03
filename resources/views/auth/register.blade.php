<x-guest-layout>

    <div class="w-full max-w-md">

        <div class="bg-white rounded-3xl shadow-soft border border-white p-8">

            <div class="text-center mb-8">

                <div class="w-16 h-16 mx-auto rounded-2xl bg-gradient-to-r from-rose to-wine flex items-center justify-center text-white text-3xl mb-4">
                    <i class="fa-solid fa-user-plus"></i>
                </div>

                <h1 class="text-3xl font-display font-bold text-wine">
                    Criar Conta
                </h1>

                <p class="text-plum/70 mt-2">
                    Cadastre-se para salvar suas músicas favoritas.
                </p>

            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-5">
                    <x-input-label for="name" :value="__('Nome')" class="mb-2"/>
                    <x-text-input id="name"
                        class="block w-full rounded-2xl border-petal bg-blush focus:border-rose focus:ring-rose"
                        type="text"
                        name="name"
                        :value="old('name')"
                        required
                        autofocus/>
                    <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                </div>

                <div class="mb-5">
                    <x-input-label for="email" :value="__('Email')" class="mb-2"/>
                    <x-text-input id="email"
                        class="block w-full rounded-2xl border-petal bg-blush focus:border-rose focus:ring-rose"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required/>
                    <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                </div>

                <div class="mb-5">
                    <x-input-label for="password" :value="__('Senha')" class="mb-2"/>
                    <x-text-input id="password"
                        class="block w-full rounded-2xl border-petal bg-blush focus:border-rose focus:ring-rose"
                        type="password"
                        name="password"
                        required/>
                    <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                </div>

                <div class="mb-8">
                    <x-input-label for="password_confirmation" :value="__('Confirmar Senha')" class="mb-2"/>
                    <x-text-input id="password_confirmation"
                        class="block w-full rounded-2xl border-petal bg-blush focus:border-rose focus:ring-rose"
                        type="password"
                        name="password_confirmation"
                        required/>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
                </div>

                <x-primary-button
                    class="w-full justify-center rounded-2xl bg-gradient-to-r from-rose to-wine hover:opacity-90 py-3">

                    Criar Conta

                </x-primary-button>

                <p class="text-center mt-6 text-plum">

                    Já possui uma conta?

                    <a href="{{ route('login') }}"
                       class="text-rose font-semibold hover:text-wine">

                        Entrar

                    </a>

                </p>

            </form>

        </div>

    </div>

</x-guest-layout>