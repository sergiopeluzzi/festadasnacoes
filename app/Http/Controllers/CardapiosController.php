<?php namespace App\Http\Controllers;

use App\Cardapio;
use App\CardapioPrato;
use App\Evento;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CardapiosRequest;
use App\Nacao;
use App\Prato;
use Illuminate\Http\Request;

class CardapiosController extends Controller {

    public function index()
    {
        $nomeForm = 'Cardápios';

        $cardapios = Cardapio::all();

        $evento = new Evento;

        return view('admin.cardapios.index', compact('nomeForm', 'cardapios', 'evento'));
	}

    public function create()
    {
        $nomeForm = 'Cardápios';

        $eventos = Evento::all()->toArray();

        $pratos = Prato::all()->toArray();

        foreach($eventos as $key => $values)
        {
            $evento[$values['id']] = $values['nome'];
        }

        foreach ($pratos as $key => $values)
        {
            $prato[$values['id']] = Nacao::where('id', $values['id_nacao'])->first()->nome . ' - ' . $values['descricao'];
        }

        return view('admin.cardapios.create', compact('nomeForm', 'evento', 'prato'));
    }

    public function store(CardapiosRequest $request)
    {
        $dados = $request->all();

        $id_prats = explode(',', $dados['id_prats']);

        Cardapio::create($dados);

        foreach($id_prats as $carprat)
        {
            $cardapio = new CardapioPrato();

            $cardapio->id_cardapio = Cardapio::latest()->first()->id;

            $cardapio->id_prato = $carprat;

            $cardapio->save();
        }

        flash()->success('Cardápio cadastrado com sucesso');

        return redirect('admin/cardapios');
    }

    public function show(Cardapio $cardapio)
    {
        $nomeForm = 'Cardápios';

        $evento = new Evento;

        $prato = new Prato;

        $cardapioprato = CardapioPrato::all()->where('id_cardapio', $cardapio->id);

        return view('admin.cardapios.show', compact('nomeForm', 'cardapio', 'evento', 'cardapioprato', 'prato'));
    }

    public function edit(Cardapio $cardapio)
    {
        $nomeForm = 'Cardápios';

        $eventos = Evento::all()->toArray();

        $pratos = Prato::all()->toArray();

        foreach($eventos as $key => $values)
        {
            $evento[$values['id']] = $values['nome'];
        }

        foreach ($pratos as $key => $values)
        {
            $prato[$values['id']] = Nacao::where('id', $values['id_nacao'])->first()->nome . ' - ' . $values['descricao'];
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
        $c = count(CardapioPrato::where('id_cardapio', $cardapio->id)->get());

        if($c > 0)
        {
            flash()->error("O Cardápio $cardapio->descricao não pode ser excluído!");

            return redirect('admin/cardapios');
        }
        else
        {
            $cardapio->delete();

            flash()->success('Cardápio excluído com sucesso');

            return redirect('admin/cardapios');
        }


    }

}
