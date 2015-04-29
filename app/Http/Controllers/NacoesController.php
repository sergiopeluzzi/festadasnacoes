<?php namespace App\Http\Controllers;

use App\Evento;
use App\EventoNacao;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\NacoesRequest;
use App\Nacao;
use Illuminate\Http\Request;

class NacoesController extends Controller {

    public function index()
    {
        $nomeForm = 'Nações';

        $nacoes = Nacao::all();

        return view('admin.nacoes.index', compact('nomeForm', 'nacoes'));
	}

    public function create()
    {
        $nomeForm = 'Nações';

        $eventos = Evento::all()->toArray();

        foreach($eventos as $key => $values)
        {
            $evento = [$values['id'] => $values['descricao']];
        }

        return view('admin.nacoes.create', compact('nomeForm', 'evento'));
    }

    public function store(NacoesRequest $request)
    {
        $dados = $request->all();

        Nacao::create($dados);

        $dados['id_nacao'] = Nacao::latest()->first()->id;

        EventoNacao::create($dados);

        flash()->success('Nação cadastrada com sucesso');

        return redirect('admin/nacoes');
    }

    public function show(Nacao $nacao)
    {
        $nomeForm = 'Nações';

        return view('admin.nacoes.show', compact('nomeForm', 'nacao'));
    }

    public function edit(Nacao $nacao)
    {
        $nomeForm = 'Nações';

        $eventos = Evento::all()->toArray();

        foreach($eventos as $key => $values)
        {
            $evento = [$values['id'] => $values['descricao']];
        }

        return view('admin.nacoes.edit', compact('nomeForm', 'nacao', 'evento'));
    }

    public function update(Nacao $nacao, NacoesRequest $request)
    {
        $nomeForm = 'Nações';

        $nacao->update($request->all());

        flash()->success('Nação atualizada com sucesso');

        return redirect('admin/nacoes');
    }

    public function destroy(Nacao $nacao)
    {
        $eventonacao = EventoNacao::where('id_nacao', $nacao->id)->latest();

        $eventonacao->delete();

        $nacao->delete();

        flash()->success('Nação excluída com sucesso');

        return redirect('admin/nacoes');
    }
}
