<section>

    <header class="mb-8">
        <h2 class="text-3xl font-display font-bold text-wine">
            Alterar Senha
        </h2>

        <p class="mt-2 text-plum/70">
            Escolha uma senha forte para proteger sua conta.
        </p>
    </header>

    <form method="POST" action="{{ route('password.update') }}" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <x-input-label for="update_password_current_password"
                value="Senha Atual"
                class="mb-2"/>

            <x-text-input
                id="update_password_current_password"
                name="current_password"
                type="password"
                class="block w-full rounded-2xl border-petal bg-blush focus:border-rose focus:ring-rose"/>

            <x-input-error
                :messages="$errors->updatePassword->get('current_password')"
                class="mt-2"/>
        </div>

        <div>
            <x-input-label
                for="update_password_password"
                value="Nova Senha"
                class="mb-2"/>

            <x-text-input
                id="update_password_password"
                name="password"
                type="password"
                class="block w-full rounded-2xl border-petal bg-blush focus:border-rose focus:ring-rose"/>

            <x-input-error
                :messages="$errors->updatePassword->get('password')"
                class="mt-2"/>
        </div>

        <div>
            <x-input-label
                for="update_password_password_confirmation"
                value="Confirmar Nova Senha"
                class="mb-2"/>

            <x-text-input
                id="update_password_password_confirmation"
                name="password_confirmation"
                type="password"
                class="block w-full rounded-2xl border-petal bg-blush focus:border-rose focus:ring-rose"/>

            <x-input-error
                :messages="$errors->updatePassword->get('password_confirmation')"
                class="mt-2"/>
        </div>

        <div class="flex items-center gap-4">

            <x-primary-button
                class="rounded-2xl bg-gradient-to-r from-rose to-wine hover:opacity-90 px-6 py-3">

                Salvar Senha

            </x-primary-button>

            @if (session('status') === 'password-updated')

                <span
                    x-data="{show:true}"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(()=>show=false,2000)"
                    class="text-green-600 font-medium">

                    Senha atualizada!

                </span>

            @endif

        </div>

    </form>

</section>