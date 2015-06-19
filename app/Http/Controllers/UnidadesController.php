<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\UnidadesRequest;
use App\Unidade;
use App\Produto;
use Illuminate\Http\Request;

class UnidadesController extends Controller {

    public function __construct()
    {
        $this->middleware('administrador');
    }

    public function index()
    {
        $nomeForm = 'Unidades';

        $unidades = Unidade::all();

        return view('admin.unidades.index', compact('nomeForm', 'unidades'));
    }

    public function create()
    {
        $nomeForm = 'Unidades';

        return view('admin.unidades.create', compact('nomeForm'));
    }

    public function store(UnidadesRequest $request)
    {
        $dados = $request->all();

        Unidade::create($dados);

        flash()->success('Unidade cadastrada com sucesso');

        return redirect('admin/unidades');
    }

    public function show(Unidade $unidade)
    {
        $nomeForm = 'Unidades';

        return view('admin.unidades.show', compact('nomeForm', 'unidade'));
    }

    public function edit(Unidade $unidade)
    {
        $nomeForm = 'Unidades';

        return view('admin.unidades.edit', compact('nomeForm', 'unidade'));
    }

    public function update(Unidade $unidade, UnidadesRequest $request)
    {
        $nomeForm = 'Cardápios';

        $unidade->update($request->all());

        flash()->success('Unidade atualizada com sucesso');

        return redirect('admin/unidades');
    }

    public function destroy(Unidade $unidade)
    {
        $c = count(Produto::where('id_unidade', $unidade->id)->get());

        if($c > 0)
        {
            flash()->error("Unidade $unidade->sigla não pode ser excluída!");

            return redirect('admin/unidades');
        }
        else
        {
            $unidade->delete();

            flash()->success('Unidade excluída com sucesso');

            return redirect('admin/unidades');
        }

    }

}
