@extends('template')
@section('conteudo')
    <form method="POST" action="../atualiza/{{ $music['id'] }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group"> <label for="nome">Nome:</label>
            <input type="text" class="form-control @error('nome') is-invalid @enderror" id='nome'name="nome"
                value="{{ $music['nome'] }}">
            @error('nome')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group"> <label for="categoria">Categoria:</label>
            <select class="form-control" name="categoria_id" id='categoria'>
                @for ($i = 0; $i < count($categorias); $i++)
                    <option value="{{ $categorias[$i]['id'] }}" @selected($categorias[$i]['id'] == $music['categoria_id'])>
                        {{ $categorias[$i]['nome'] }}
                    </option>
                @endfor
            </select>
        </div>
        <div class="form-group"> <label for="descricao">Descrição:</label>
            <textarea id='descricao' class="form-control @error('descricao') is-invalid @enderror" name="descricao" rows="5"
                cols="33">{{ $music['descricao'] }}</textarea>
            @error('descricao')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group"> <label for="imagem">Imagem:</label>
            <input id='imagem' type="file" class="form-control @error('imagem') is-invalid @enderror" name="imagem">
            @error('imagem')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <input class='btn btn-secondary' type="reset" value="Limpar">
        <input class='btn btn-primary' type="submit" name="submit" value="Enviar">
    </form>
@endsection
