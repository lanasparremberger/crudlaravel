<section>

    <header class="mb-8">
        <h2 class="text-3xl font-display font-bold text-wine">
            Meu Perfil
        </h2>

        <p class="mt-2 text-plum/70">
            Atualize suas informações pessoais.
        </p>
    </header>

    <form id="send-verification" method="POST" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="POST" action="{{ route('profile.update') }}" class="space-y-6">
        @csrf
        @method('PATCH')

        {{-- Nome --}}
        <div>
            <x-input-label
                for="name"
                :value="__('Nome')"
                class="mb-2 text-plum font-medium"/>

            <x-text-input
                id="name"
                name="name"
                type="text"
                class="block w-full rounded-2xl border-petal bg-blush focus:border-rose focus:ring-rose"
                :value="old('name', $user->name)"
                required
                autofocus
                autocomplete="name"/>

            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        {{-- Email --}}
        <div>
            <x-input-label
                for="email"
                :value="__('Email')"
                class="mb-2 text-plum font-medium"/>

            <x-text-input
                id="email"
                name="email"
                type="email"
                class="block w-full rounded-2xl border-petal bg-blush focus:border-rose focus:ring-rose"
                :value="old('email', $user->email)"
                required
                autocomplete="username"/>

            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())

                <div class="mt-4">

                    <p class="text-sm text-plum">

                        Seu e-mail ainda não foi verificado.

                        <button
                            form="send-verification"
                            class="text-rose font-semibold hover:text-wine underline">

                            Reenviar e-mail de verificação

                        </button>

                    </p>

                    @if (session('status') === 'verification-link-sent')

                        <p class="mt-3 text-green-600 font-medium">
                            Um novo e-mail de verificação foi enviado.
                        </p>

                    @endif

                </div>

            @endif

        </div>

        <div class="flex items-center gap-4">

            <x-primary-button
                class="rounded-2xl bg-gradient-to-r from-rose to-wine hover:opacity-90 px-6 py-3">

                Salvar Alterações

            </x-primary-button>

            @if (session('status') === 'profile-updated')

                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-green-600 font-medium">

                    Alterações salvas!

                </p>

            @endif

        </div>

    </form>

</section>