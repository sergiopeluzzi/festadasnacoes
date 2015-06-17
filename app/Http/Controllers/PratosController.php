<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\PratosRequest;
use App\Ingrediente;
use App\Nacao;
use App\Prato;
use App\Produto;
use Illuminate\Http\Request;

class PratosController extends Controller {

    public function index()
    {
        $nomeForm = 'Pratos';

        $pratos = Prato::all();

        $nacao = new Nacao;

        return view('admin.pratos.index', compact('nomeForm', 'pratos', 'nacao'));
	}

    public function create()
    {
        $nomeForm = 'Pratos';

        $nacoes = Nacao::all()->toArray();

        $produtos = Produto::all()->toArray();

        foreach($nacoes as $key => $values)
        {
            $nacao[$values['id']] = $values['nome'];
        }

        foreach($produtos as $key => $values)
        {
            $produto[$values['id']] = $values['descricao'];
        }

        return view('admin.pratos.create', compact('nomeForm', 'nacao', 'produto'));
    }

    public function store(PratosRequest $request)
    {
        $dadosPrato = $request->all();

        $id_prods = explode(',', $dadosPrato['id_prods']);

        foreach($id_prods as $cod => $qnt)
        {
            if ($qnt != "")
            {
                $ids[$cod] = $qnt;
            }
        }

        $dadosPrato['id_prods'] = $ids;

        Prato::create($dadosPrato);

        foreach($ids as $cod => $qnt)
        {
            $ingredientes = new Ingrediente();

            $ingredientes->id_prato = Prato::latest()->first()->id;

            $ingredientes->id_produto = $cod;

            $ingredientes->qnt = $qnt;

            $ingredientes->save();
        }

        flash()->success('Prato cadastrado com sucesso');

        return redirect('admin/pratos');
    }

    public function show(Prato $prato)
    {
        $nomeForm = 'Pratos';

        $nacao = new Nacao;

        $produto = new Produto;

        $ingrediente = Ingrediente::all()->where('id_prato', $prato->id);

        return view('admin.pratos.show', compact('nomeForm', 'prato', 'nacao', 'ingrediente', 'produto'));
    }

    public function edit(Prato $prato)
    {
        $nomeForm = 'Pratos';

        $nacoes = Nacao::all()->toArray();

        $produtos = Produto::all()->toArray();

        foreach($nacoes as $key => $values)
        {
            $nacao[$values['id']] = $values['nome'];
        }

        foreach($produtos as $key => $values)
        {
            $produto[$values['id']] = $values['descricao'];
        }

        return view('admin.pratos.edit', compact('nomeForm', 'prato', 'nacao', 'produto'));
    }

    public function update(Prato $prato, PratosRequest $request)
    {
        $prato->update($request->all());

        flash()->success('Prato atualizado com sucesso');

        return redirect('admin/pratos');
    }

    public function destroy(Prato $prato)
    {
        $prato->delete();

        flash()->success('Prato excluído com sucesso');

        return redirect('admin/pratos');
    }

}
