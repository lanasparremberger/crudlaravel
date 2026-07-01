<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Music;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class MusicController extends Controller
{
    public function salvar(Request $request)
    {
        $dados = $request->except('_token', 'submit');
        $dados['user_id'] = Auth::id();
        $musica = new Music();
        $request->validate($musica->rules, $musica->messages); // aplica regras de validação da model
        if ($request->hasFile('image')) { // testa se foi enviado um image no formulário
            $novoNome = $request->file('image')->store('images', 'public');
            $dados['image'] = $novoNome;
        }
        $insert = Music::create($dados);
        if ($insert)
            // Passa uma session flash success (sessão temporária)
            return redirect()->route('listagem')->with('success', 'musica inserido com sucesso!');
        else // Redireciona para a rota de cadstro com uma mensagem de erro
            return redirect()->route('form')->with(['error' => 'Falha ao inserir musica']);
    }


    public function index()
    {
        $musics = Music::paginate(9);

        return view('listagem', compact('musics'));
    }

    public function criar()
    {

        return view('form');
    }

    public function apaga($id)
    {
        $musica = Music::find($id);

    if ($musica->user_id != Auth::id()) {
        abort(403, 'Você não tem permissão para excluir esta música.');
    }
        if ($musica->getAttributes()['image'] != NULL) // testa se tinha um nome de arquivo no banco
            Storage::disk('public')->delete($musica->getAttributes()['image']);
        $delete = $musica->delete();
        if ($delete)
            return redirect()->route('listagem')->with('success', 'musica removido com sucesso!');
        else
            return redirect()->route('listagem', $id)->with(['erros' => 'Falha ao remover musica']);
    }

    public function atualiza(Request $request, $id)
    {
        $dados = $request->except('_token', 'submit');
        $musica = Music::find($id);
        if ($musica->user_id != Auth::id()) {
    abort(403);
}
        $request->validate($musica->rules, $musica->messages);
        if ($request->hasFile('image')) {
            if ($musica->getAttributes()['image'] != NULL)
                Storage::disk('public')->delete($musica->getAttributes()['image']);
            $novoNome = $request->file('image')->store('imagens', 'public');
            $dados['image'] = $novoNome;
        } else
            unset($dados['image']);
        $update = $musica->update($dados);
        if ($update)
            return redirect()->route('listagem')->with('success', 'musica atualizado com sucesso!');
        else
            return redirect()->route('editamusica', $id)->with(['erros' => 'Falha ao editar']);
    }

    public function edita($id)
    {
        $musica = Music::find($id);
        if ($musica->user_id != Auth::id()) {
    abort(403);
}
        return view('editaMusic', compact('musica'));
    }
}
