@extends('template')
@section('conteudo')
    <div class="container">
        <h1 class="text-center">Músicas inseridas</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <a href='{{route("form")}}'>
            <i class="fa-solid fa-plus" style="color: rgb(255, 255, 255);"></i>
            Adicionar uma nova música
        </a>
    </div>
    <div class="container">
        <br>
        <div class="row row-cols-1 row-cols-md-3 g-4
mb-3">
            @foreach ($musics as $music)
                <div class="col">
                    <div class="card h-100">
                        @if (isset($music['image']))
                            <img class="card-img-top"src='{{ asset("storage/{$music->image}") }}' alt="{{ $music->image }}"
                                style="height:300px">
                        @else
                            <img class="card-img-top" src="{{ asset('images/padrao.png') }}" alt="{{ $music->image }}"
                                style="height:300px">
                        @endif
                        <div class="card-body">
                            <h3 class="card-title">{{ $music['name'] }}</h3>
                            {{-- <h5 class="card-text">{{ $categorias[$music['categoria_id'] - 1]['nome'] }}</h5> --}}
                            <p>{{ $music['descricao'] }} </p>
                            <a href="edita/{{ $music['id'] }}">
                                <span class='material-icons'>edit</span>
                            </a>
                            <a href="apaga/{{ $music['id'] }}">
                                <i class="fa-solid fa-trash-can" style="color: rgb(255, 255, 255);"></i>
                                    delete 
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {!! $musics->links() !!}
    </div>
@endsection
