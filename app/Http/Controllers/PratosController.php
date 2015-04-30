<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\PratosRequest;
use App\Nacao;
use App\Prato;
use Illuminate\Http\Request;

class PratosController extends Controller {

    public function index()
    {
        $nomeForm = 'Pratos';

        $pratos = Prato::all();

        return view('admin.pratos.index', compact('nomeForm', 'pratos'));
	}

    public function create()
    {
        $nomeForm = 'Pratos';

        $nacoes = Nacao::all()->toArray();

        foreach($nacoes as $key => $values)
        {
            $nacao[$values['id']] = $values['nome'];
        }

        return view('admin.pratos.create', compact('nomeForm', 'nacao'));
    }

    public function store(PratosRequest $request)
    {
        $dados = $request->all();

        Prato::create($dados);

        flash()->success('Prato cadastrado com sucesso');

        return redirect('admin/pratos');
    }

    public function show(Prato $prato)
    {
        $nomeForm = 'Pratos';

        return view('admin.pratos.show', compact('nomeForm', 'prato'));
    }

    public function edit(Prato $prato)
    {
        $nomeForm = 'Pratos';

        $nacoes = Nacao::all()->toArray();

        foreach($nacoes as $key => $values)
        {
            $nacao[$values['id']] = $values['nome'];
        }

        return view('admin.pratos.edit', compact('nomeForm', 'prato', 'nacao'));
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
