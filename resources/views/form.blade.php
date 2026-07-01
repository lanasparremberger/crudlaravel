@extends('template')

@section('conteudo')
    <div class="max-w-3xl mx-auto">

        <div class="bg-white rounded-3xl shadow-soft border border-white p-8">

            <h1 class="text-3xl font-display font-bold text-wine mb-2">
                Cadastrar Música
            </h1>

            <p class="text-plum/70 mb-8">
                Preencha as informações da música.
            </p>

            <form method="POST" action="{{ route('music.salvar') }}" enctype="multipart/form-data">
                @csrf

                {{-- Título --}}
                <div class="mb-6">
                    <label for="title" class="block mb-2 font-medium text-plum">
                        Título
                    </label>

                    <input type="text" id="title" name="title" value="{{ old('title') }}" required
                        class="w-full rounded-2xl border border-petal bg-blush px-4 py-3 focus:outline-none focus:ring-2 focus:ring-rose @error('title') border-red-500 @enderror">

                    @error('title')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Artista --}}
                <div class="mb-6">
                    <label for="artist"  class="block mb-2 font-medium text-plum">
                        Artista
                    </label>

                    <input type="text" id="artist" name="artist" value="{{ old('artist') }}" required
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

                    <input type="text" id="album" name="album" value="{{ old('album') }}" required
                        class="w-full rounded-2xl border border-petal bg-blush px-4 py-3 focus:outline-none focus:ring-2 focus:ring-rose">
                </div>

                {{-- Gênero --}}
                <div class="mb-6">
                    <label for="genre" class="block mb-2 font-medium text-plum">
                        Gênero
                    </label>

                    <select id="genre" name="genre" required
                        class="w-full rounded-2xl border border-petal bg-blush px-4 py-3 focus:outline-none focus:ring-2 focus:ring-rose @error('genre') border-red-500 @enderror">

                        <option value="">Selecione um gênero</option>

                        <option value="Pop" {{ old('genre') == 'Pop' ? 'selected' : '' }}>Pop</option>
                        <option value="Rock" {{ old('genre') == 'Rock' ? 'selected' : '' }}>Rock</option>
                        <option value="Rap" {{ old('genre') == 'Rap' ? 'selected' : '' }}>Rap</option>
                        <option value="Hip Hop" {{ old('genre') == 'Hip Hop' ? 'selected' : '' }}>Hip Hop</option>
                        <option value="R&B" {{ old('genre') == 'R&B' ? 'selected' : '' }}>R&B</option>
                        <option value="MPB" {{ old('genre') == 'MPB' ? 'selected' : '' }}>MPB</option>
                        <option value="Sertanejo" {{ old('genre') == 'Sertanejo' ? 'selected' : '' }}>Sertanejo</option>
                        <option value="Pagode" {{ old('genre') == 'Pagode' ? 'selected' : '' }}>Pagode</option>
                        <option value="Funk" {{ old('genre') == 'Funk' ? 'selected' : '' }}>Funk</option>
                        <option value="Eletrônica" {{ old('genre') == 'Eletrônica' ? 'selected' : '' }}>Eletrônica</option>
                        <option value="K-Pop" {{ old('genre') == 'K-Pop' ? 'selected' : '' }}>K-Pop</option>
                        <option value="Jazz" {{ old('genre') == 'Jazz' ? 'selected' : '' }}>Jazz</option>
                        <option value="Blues" {{ old('genre') == 'Blues' ? 'selected' : '' }}>Blues</option>
                        <option value="Clássica" {{ old('genre') == 'Clássica' ? 'selected' : '' }}>Clássica</option>
                        <option value="Outro" {{ old('genre') == 'Outro' ? 'selected' : '' }}>Outro</option>
                    </select>

                    @error('genre')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Imagem --}}
                <div class="mb-8">
                    <label for="image" class="block mb-2 font-medium text-plum">
                        Imagem que lhe lembra a música
                    </label>

                    <input type="file" id="image" name="image" required
                        class="w-full rounded-2xl border border-petal bg-blush file:bg-gradient-to-r file:from-rose file:to-wine file:text-white file:border-0 file:px-5 file:py-3 file:mr-4 file:rounded-l-2xl @error('image') border-red-500 @enderror">

                    @error('image')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end gap-4">

                    <button type="reset" class="px-6 py-3 rounded-2xl border border-petal hover:bg-petal transition">
                        Limpar
                    </button>

                    <button type="submit"
                        class="px-8 py-3 rounded-2xl bg-gradient-to-r from-rose to-wine text-white font-semibold hover:opacity-90 transition">
                        Salvar Música
                    </button>

                </div>

            </form>

        </div>

    </div>
@endsection
