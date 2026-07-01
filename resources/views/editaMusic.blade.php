@extends('template')

@section('conteudo')

<div class="max-w-3xl mx-auto">

    <div class="bg-white rounded-3xl shadow-soft border border-white p-8">

        <h1 class="text-3xl font-display font-bold text-wine mb-2">
            Editar Música
        </h1>

        <p class="text-plum/70 mb-8">
            Atualize as informações da música.
        </p>

        <form method="POST"
              action="{{ route('music.atualiza', $music->id) }}"
              enctype="multipart/form-data">

            @csrf

            {{-- Título --}}
            <div class="mb-6">
                <label for="title" class="block mb-2 font-medium text-plum">
                    Título
                </label>

                <input
                    type="text"
                    id="title"
                    name="title"
                    value="{{ old('title', $music->title) }}"
                    required
                    class="w-full rounded-2xl border border-petal bg-blush px-4 py-3 focus:outline-none focus:ring-2 focus:ring-rose @error('title') border-red-500 @enderror">

                @error('title')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            {{-- Artista --}}
            <div class="mb-6">
                <label for="artist" class="block mb-2 font-medium text-plum">
                    Artista
                </label>

                <input
                    type="text"
                    id="artist"
                    name="artist"
                    value="{{ old('artist', $music->artist) }}"
                    required
                    class="w-full rounded-2xl border border-petal bg-blush px-4 py-3 focus:outline-none focus:ring-2 focus:ring-rose @error('artist') border-red-500 @enderror">

                @error('artist')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            {{-- Álbum --}}
            <div class="mb-6">
                <label for="album" class="block mb-2 font-medium text-plum">
                    Álbum
                </label>

                <input
                    type="text"
                    id="album"
                    name="album"
                    value="{{ old('album', $music->album) }}"
                    required
                    class="w-full rounded-2xl border border-petal bg-blush px-4 py-3 focus:outline-none focus:ring-2 focus:ring-rose">
            </div>

            {{-- Gênero --}}
            <div class="mb-6">
                <label for="genre" class="block mb-2 font-medium text-plum">
                    Gênero
                </label>

                <select
                    id="genre"
                    name="genre"
                    required
                    class="w-full rounded-2xl border border-petal bg-blush px-4 py-3 focus:outline-none focus:ring-2 focus:ring-rose">

                    <option value="Pop" @selected($music->genre == 'Pop')>Pop</option>
                    <option value="Rock" @selected($music->genre == 'Rock')>Rock</option>
                    <option value="Rap" @selected($music->genre == 'Rap')>Rap</option>
                    <option value="Hip Hop" @selected($music->genre == 'Hip Hop')>Hip Hop</option>
                    <option value="R&B" @selected($music->genre == 'R&B')>R&B</option>
                    <option value="MPB" @selected($music->genre == 'MPB')>MPB</option>
                    <option value="Sertanejo" @selected($music->genre == 'Sertanejo')>Sertanejo</option>
                    <option value="Pagode" @selected($music->genre == 'Pagode')>Pagode</option>
                    <option value="Funk" @selected($music->genre == 'Funk')>Funk</option>
                    <option value="Eletrônica" @selected($music->genre == 'Eletrônica')>Eletrônica</option>
                    <option value="K-Pop" @selected($music->genre == 'K-Pop')>K-Pop</option>
                    <option value="Jazz" @selected($music->genre == 'Jazz')>Jazz</option>
                    <option value="Blues" @selected($music->genre == 'Blues')>Blues</option>
                    <option value="Clássica" @selected($music->genre == 'Clássica')>Clássica</option>
                    <option value="Outro" @selected($music->genre == 'Outro')>Outro</option>

                </select>
            </div>

            {{-- Imagem atual --}}
            @if($music->image)
                <div class="mb-6">
                    <p class="font-medium text-plum mb-3">
                        Imagem atual
                    </p>

                    <img src="{{ asset('storage/'.$music->image) }}"
                        class="w-48 rounded-2xl border shadow">
                </div>
            @endif

            {{-- Nova imagem --}}
            <div class="mb-8">
                <label for="image" class="block mb-2 font-medium text-plum">
                    Nova imagem (opcional)
                </label>

                <input
                    type="file"
                    id="image"
                    name="image"
                    class="w-full rounded-2xl border border-petal bg-blush file:bg-gradient-to-r file:from-rose file:to-wine file:text-white file:border-0 file:px-5 file:py-3 file:mr-4 file:rounded-l-2xl">

                @error('image')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end gap-4">

                <a href="{{ route('listagem') }}"
                    class="px-6 py-3 rounded-2xl border border-petal hover:bg-petal transition">
                    Cancelar
                </a>

                <button
                    type="submit"
                    class="px-8 py-3 rounded-2xl bg-gradient-to-r from-rose to-wine text-white font-semibold hover:opacity-90 transition">
                    Salvar Alterações
                </button>

            </div>

        </form>

    </div>

</div>

@endsection