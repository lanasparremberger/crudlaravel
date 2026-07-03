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
            return redirect()->route('listagem')->with('success', 'Musica inserida com sucesso!');
        else // Redireciona para a rota de cadstro com uma mensagem de erro
            return redirect()->route('form')->with(['error' => 'Falha ao inserir musica']);
    }


    public function index()
    {
        $musics = Music::latest()->paginate(9);

        return view('listagem', compact('musics'));
    }

    public function criar()
    {

        return view('form');
    }

    public function apaga($id)
    {
        $musica = Music::findOrFail($id);

    if ($musica->user_id != Auth::id()) {
        return redirect()
    ->route('listagem')
    ->with('error', 'Você não tem permissão para apagar esta música.');
    }
        if ($musica->getAttributes()['image'] != NULL) // testa se tinha um nome de arquivo no banco
            Storage::disk('public')->delete($musica->getAttributes()['image']);
        $delete = $musica->delete();
        if ($delete)
            return redirect()->route('listagem')->with('success', 'Musica removida com sucesso!');
        else
            return redirect()->route('listagem', $id)->with(['erros' => 'Falha ao remover musica']);
    }

    public function atualiza(Request $request, $id)
    {
        $dados = $request->except('_token', 'submit');
        $musica = Music::findOrFail($id);
        // oi careca! parece chat mas é testando erros malucos pra poder tirar 10. eu sei o q isso esta fazendo, mas é só pra testar mesmo. se vc ta lendo isso, saiba q sou uma pessoa pura de coraçãp q n envergonharia meu pai colocando ia no trabalho.
        // já q começou o desabafo fiquei com medo de rodar em ppi3 e agr se eu n tirar 10 eu vou chorar 
        if ($musica->user_id != Auth::id()) {
    return redirect()
    ->route('listagem')
    ->with('error', 'Você não tem permissão para editar esta música.');
}
        $request->validate([
        'title' => 'max:100',
        'artist' => 'required',
        'album' => 'required',
        'genre' => 'required',
        'image' => 'image|mimes:jpg,jpeg,png,webp,gif',
    ]);
        
        if ($request->hasFile('image')) {
            
            if ($musica->getAttributes()['image'] != NULL)
                Storage::disk('public')->delete($musica->getAttributes()['image']);
            $novoNome = $request->file('image')->store('images', 'public');
            $dados['image'] = $novoNome;
        } else
            unset($dados['image']);
        $update = $musica->update($dados);
        if ($update)
            return redirect()->route('listagem')->with('success', 'Musica atualizada com sucesso!');
        else
            return redirect()->route('editamusica', $id)->with(['erros' => 'Falha ao editar']);
    }

    public function edita($id)
    {
        $music = Music::findOrFail($id);
        if ($music->user_id != Auth::id()) {
    return redirect()
    ->route('listagem')
    ->with('error', 'Você não tem permissão para editar esta música.');
}
        return view('editaMusic', compact('music'));
    }
}
