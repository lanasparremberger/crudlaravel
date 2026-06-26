@extends('components/header')
<div class="container">
    <h1 class="text-center">Listagem de musics</h1>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <a href='form'>
        <span class="material-icons"> add_box</span>
        Adicionar um novo music
    </a>
</div>
<div class="container">
    <br>
    <h2>Listagem dos musics cadastrados</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
        @foreach($musics as $music)
        <div class="col">
            <div class="card h-100">
                @if(isset($music['image']))
                <img
                    class="card-img-top" src='{{asset("storage/{$music->image}") }}' alt="{{$music->image}}"
                    style="height:300px">
                @else
                <img class="card-img-top"
                    src="{{asset('images/padrao.png') }}"
                    alt="{{$music->image}}" style="height:300px">
                @endif
                <div class="card-body">
                    <h3
                        class="card-title">{{$music['title']}}</h3>
                    <h5
                        class="card-text">{{$music['album']}}</h5>
                    <p>{{$music['artist']}} </p>
                    <a href="edita/{{$music['id']}}">
                        <span
                            class='material-icons'>edit</span>
                    </a>
                    <a href="apaga/{{$music['id']}}">
                        <span class='material-icons'>
                            delete </span>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {!! $musics->links() !!}
</div>