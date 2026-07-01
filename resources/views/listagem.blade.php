@extends('template')

@section('conteudo')
    <div class="max-w-6xl mx-auto">

        <div class="flex flex-col md:flex-row items-center justify-between gap-4 mb-8">

            <div>
                <h1 class="text-4xl font-display font-bold text-wine">
                    Minhas músicas
                </h1>

                <p class="text-plum/70 mt-2">
                    Gerencie sua coleção de músicas favoritas.
                </p>
            </div>

            <a href="{{ route('form') }}"
                class="inline-flex items-center gap-2 px-6 py-3 rounded-2xl bg-gradient-to-r from-rose to-wine text-white font-semibold shadow-soft hover:scale-105 transition">

                <i class="fa-solid fa-plus"></i>
                Nova Música
            </a>

        </div>

        @if (session('success'))
            <div class="mb-6 rounded-2xl border border-green-200 bg-green-100 text-green-700 px-5 py-4">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="mb-6 rounded-2xl border border-red-200 bg-red-100 text-red-700 px-5 py-4">
                {{ session('error') }}
            </div>
        @endif


        @if ($musics->count())
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                @foreach ($musics as $music)
                    <div
                        class="bg-white rounded-3xl shadow-soft overflow-hidden border border-white hover:-translate-y-1 hover:shadow-xl transition">

                        @if ($music->image)
                            <img src="{{ asset('storage/' . $music->image) }}" alt="{{ $music->title }}"
                                class="w-full h-72 object-cover">
                        @else
                            <img src="{{ asset('images/padrao.gif') }}" alt="Sem imagem" class="w-full h-72 object-cover">
                        @endif

                        <div class="p-6">

                            <h2 class="font-display text-2xl text-wine font-bold">
                                {{ $music->title }}
                            </h2>

                            <p class="mt-2 text-plum">
                                <strong>Artista:</strong>
                                {{ $music->artist }}
                            </p>

                            <p class="text-plum">
                                <strong>Álbum:</strong>
                                {{ $music->album }}
                            </p>

                            <p class="text-plum">
                                <strong>Enviado por:</strong>
                                {{ $music->user->name }}
                            </p>

                            <div class="mt-4">
                                <span class="inline-block bg-petal text-wine px-4 py-1 rounded-full text-sm font-medium">
                                    {{ $music->genre }}
                                </span>
                            </div>

                            <div class="flex justify-end gap-3 mt-6">

                                @if (Auth::id() == $music->user_id)
                                    <a href="{{ route('music.edita', $music->id) }}"
                                        class="w-10 h-10 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>

                                    <a href="{{ route('music.apaga', $music->id) }}"
                                        class="w-10 h-10 rounded-xl bg-red-100 text-red-600 flex items-center justify-center">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                @endif

                            </div>

                        </div>

                    </div>
                @endforeach

            </div>

            <div class="mt-10">
                {{ $musics->links() }}
            </div>
        @else
            <div class="bg-white rounded-3xl shadow-soft p-16 text-center">

                <i class="fa-solid fa-music text-6xl text-rose mb-6"></i>

                <h2 class="text-2xl font-display text-wine font-semibold">
                    Nenhuma música cadastrada
                </h2>

                <p class="text-plum/70 mt-3">
                    Clique em <strong>Nova Música</strong> para adicionar a primeira.
                </p>

            </div>
        @endif

    </div>
@endsection
