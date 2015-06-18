<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Bebida;
use App\PedidoBebida;
use App\Http\Requests\BebidasRequest;
use Illuminate\Http\Request;

class BebidasController extends AdminController {

    public function index()
    {
        $nomeForm = 'Bebidas';

        $bebidas = Bebida::all();

        return view('admin.bebidas.index', compact('nomeForm', 'bebidas'));
    }

    public function create()
    {
        $nomeForm = 'Bebidas';

        return view('admin.bebidas.create', compact('nomeForm'));
    }

    public function store(BebidasRequest $request)
    {
        $dadosBebida = $request->all();

        Bebida::create($dadosBebida);

        flash()->success('Bebida cadastrada com sucesso');

        return redirect('admin/bebidas');
    }

    public function show(Bebida $bebida)
    {
        $nomeForm = 'Bebidas';

        return view('admin.bebidas.show', compact('nomeForm', 'bebida'));
    }

    public function edit(Bebida $bebida)
    {
        $nomeForm = 'Bebidas';

        return view('admin.bebidas.edit', compact('nomeForm', 'bebida'));
    }

    public function update(Bebida $bebida, BebidasRequest $request)
    {
        $bebida->update($request->all());

        flash()->success('Bebida atualizada com sucesso');

        return redirect('admin/bebidas');
    }

    public function destroy(Bebida $bebida)
    {
        $c = count(PedidoBebida::where('id_bebida', $bebida->id)->get());

        if($c > 0)
        {
            flash()->error("A Bebida $bebida->descricao não pode ser excluída!");

            return redirect('admin/bebidas');
        }
        else
        {
            $bebida->delete();

            flash()->success('Bebida excluída com sucesso');

            return redirect('admin/bebidas');
        }
    }
}

