@extends('template')

@section('conteudo')
    <section class="py-12">

        <div class="grid lg:grid-cols-2 gap-12 items-center">

            <div>

                <span class="inline-flex items-center px-4 py-2 rounded-full bg-petal text-wine font-medium mb-6">
                    <i class="fa-solid fa-guitar" style="color: rgb(236, 90, 147);"></i>  Organize sua coleção musical
                </span>

                <h1 class="text-5xl lg:text-6xl font-display font-bold text-wine leading-tight">
                    Suas músicas
                    <span class="text-rose">favoritas</span>
                    em um só lugar.
                </h1>

                <p class="mt-6 text-lg text-plum/70 leading-relaxed">
                    Cadastre artistas, álbuns, gêneros e capas das suas músicas favoritas.
                    Um sistema simples, bonito e organizado para gerenciar toda a sua coleção.
                </p>

                <div class="flex flex-wrap gap-4 mt-10">

                    @auth
                        <a href="{{ route('listagem') }}"
                            class="px-8 py-4 rounded-2xl bg-gradient-to-r from-rose to-wine text-white font-semibold shadow-soft hover:scale-105 transition">
                            Ver minhas músicas
                        </a>

                        <a href="{{ route('form') }}"
                            class="px-8 py-4 rounded-2xl border border-wine text-wine font-semibold hover:bg-petal transition">
                            Cadastrar música
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="px-8 py-4 rounded-2xl bg-gradient-to-r from-rose to-wine text-white font-semibold shadow-soft">
                            Entrar
                        </a>

                        <a href="{{ route('register') }}"
                            class="px-8 py-4 rounded-2xl border border-wine text-wine font-semibold hover:bg-petal transition">
                            Criar conta
                        </a>
                    @endauth

                </div>

            </div>

            <div class="relative">

                <div class="absolute -top-8 -left-8 w-40 h-40 bg-rose/10 rounded-full blur-3xl"></div>

                <div class="bg-white rounded-[35px] shadow-soft border border-white p-10">

                    <div class="flex justify-center text-8xl mb-8">
                        <i class="fa-regular fa-headphones" style="color: rgba(236, 90, 147, 1);"></i>
                    </div>

                    <div class="space-y-5">

                        <div class="flex justify-between items-center bg-blush rounded-2xl px-5 py-4">
                            <div>
                                <p class="font-semibold text-wine">Cadastrar músicas</p>
                                <p class="text-sm text-plum/60">Salve seus artistas favoritos.</p>
                            </div>

                            <i class="fa-solid fa-plus text-rose text-xl"></i>
                        </div>

                        <div class="flex justify-between items-center bg-blush rounded-2xl px-5 py-4">
                            <div>
                                <p class="font-semibold text-wine">Organizar por gênero</p>
                                <p class="text-sm text-plum/60">Pop, Rock, Jazz e muito mais.</p>
                            </div>

                            <i class="fa-solid fa-music text-rose text-xl"></i>
                        </div>

                        <div class="flex justify-between items-center bg-blush rounded-2xl px-5 py-4">
                            <div>
                                <p class="font-semibold text-wine">Adicionar capa</p>
                                <p class="text-sm text-plum/60">Faça upload da imagem da música.</p>
                            </div>

                            <i class="fa-solid fa-image text-rose text-xl"></i>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="mt-24">

        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-white rounded-3xl shadow-soft p-8 text-center">
                <div class="text-5xl mb-5"><i class="fa-solid fa-music" style="color:rgba(236, 90, 147, 1);"></i></div>
                <h3 class="font-display text-2xl text-wine mb-2">Cadastre</h3>
                <p class="text-plum/70">
                    Adicione título, artista, álbum, gênero e capa da música.
                </p>
            </div>

            <div class="bg-white rounded-3xl shadow-soft p-8 text-center">
                <div class="text-5xl mb-5"><i class="fa-solid fa-compact-disc" style="color: rgba(236, 90, 147, 1);"></i></div>
                <h3 class="font-display text-2xl text-wine mb-2">Organize</h3>
                <p class="text-plum/70">
                    Visualize todas as músicas em cartões modernos e responsivos.
                </p>
            </div>

            <div class="bg-white rounded-3xl shadow-soft p-8 text-center">
                <div class="text-5xl mb-5"><i class="fa-regular fa-heart" style="color: rgb(236, 90, 147);"></i></div>
                <h3 class="font-display text-2xl text-wine mb-2">Gerencie</h3>
                <p class="text-plum/70">
                    Edite ou exclua músicas sempre que desejar.
                </p>
            </div>

        </div>

    </section>
@endsection
