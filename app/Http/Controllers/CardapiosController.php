<?php namespace App\Http\Controllers;

use App\Cardapio;
use App\Evento;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CardapiosRequest;
use Illuminate\Http\Request;

class CardapiosController extends Controller {

    public function index()
    {
        $nomeForm = 'Cardápios';

        $cardapios = Cardapio::all();

        return view('admin.cardapios.index', compact('nomeForm', 'cardapios'));
	}

    public function create()
    {
        $nomeForm = 'Cardápios';

        $eventos = Evento::all()->toArray();

        foreach($eventos as $key => $values)
        {
            $evento[$values['id']] = $values['descricao'];
        }

        return view('admin.cardapios.create', compact('nomeForm', 'evento'));
    }

    public function store(CardapiosRequest $request)
    {
        $dados = $request->all();

        Cardapio::create($dados);

        flash()->success('Cardápio cadastrado com sucesso');

        return redirect('admin/cardapios');
    }

    public function show(Cardapio $cardapio)
    {
        $nomeForm = 'Cardápios';

        return view('admin.cardapios.show', compact('nomeForm', 'cardapio'));
    }

    public function edit(Cardapio $cardapio)
    {
        $nomeForm = 'Cardápios';

        $eventos = Evento::all()->toArray();

        foreach($eventos as $key => $values)
        {
            $evento[$values['id']] = $values['descricao'];
        }

        return view('admin.cardapios.edit', compact('nomeForm', 'cardapio', 'evento'));
    }

    public function update(Cardapio $cardapio, CardapiosRequest $request)
    {
        $nomeForm = 'Cardápios';

        $cardapio->update($request->all());

        flash()->success('Cardápio atualizado com sucesso');

        return redirect('admin/cardapios');
    }

    public function destroy(Cardapio $cardapio)
    {
        $cardapio->delete();

        flash()->success('Cardápio excluído com sucesso');

        return redirect('admin/cardapios');
    }

}
