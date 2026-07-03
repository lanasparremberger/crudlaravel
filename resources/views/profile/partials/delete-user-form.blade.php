<section>

    <header class="mb-8">

        <h2 class="text-3xl font-display font-bold text-red-600">
            Excluir Conta
        </h2>

        <p class="mt-2 text-plum/70">
            Esta ação é permanente e removerá sua conta e todos os seus dados.
        </p>

    </header>

    <button
        x-data
        x-on:click.prevent="$dispatch('open-modal','confirm-user-deletion')"
        class="px-6 py-3 rounded-2xl bg-red-500 text-white font-semibold hover:bg-red-600 transition">

        Excluir Minha Conta

    </button>

    <x-modal
        name="confirm-user-deletion"
        :show="$errors->userDeletion->isNotEmpty()"
        focusable>

        <form method="POST"
            action="{{ route('profile.destroy') }}"
            class="p-8">

            @csrf
            @method('DELETE')

            <h2 class="text-2xl font-display font-bold text-red-600">

                Confirmar exclusão

            </h2>

            <p class="mt-3 text-plum">

                Digite sua senha para confirmar a exclusão definitiva da conta.

            </p>

            <div class="mt-6">

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    placeholder="Senha"
                    class="block w-full rounded-2xl border-petal bg-blush focus:border-red-500 focus:ring-red-500"/>

                <x-input-error
                    :messages="$errors->userDeletion->get('password')"
                    class="mt-2"/>

            </div>

            <div class="flex justify-end gap-3 mt-8">

                <x-secondary-button
                    x-on:click="$dispatch('close')">

                    Cancelar

                </x-secondary-button>

                <x-danger-button
                    class="rounded-2xl">

                    Excluir Conta

                </x-danger-button>

            </div>

        </form>

    </x-modal>

</section>