<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ProdutosRequest;
use App\Produto;
use App\Unidade;
use Illuminate\Http\Request;

class ProdutosController extends Controller {

    public function index()
    {
        $nomeForm = 'Produtos';

        $produtos = Produto::all();

        return view('admin.produtos.index', compact('nomeForm', 'produtos'));
    }

    public function create()
    {
        $nomeForm = 'Produtos';

        $unidades = Unidade::all();

        foreach($unidades as $key => $values)
        {
            $unidade[$values['id']] = $values['sigla'] . ' - ' .$values['descricao'];
        }

        return view('admin.produtos.create', compact('nomeForm', 'unidade'));
    }

    public function store(ProdutosRequest $request)
    {
        $dados = $request->all();

        Produto::create($dados);

        flash()->success('Produto cadastrado com sucesso');

        return redirect('admin/produtos');
    }

    public function show(Produto $produto)
    {
        $nomeForm = 'Unidades';

        return view('admin.produtos.show', compact('nomeForm', 'produto'));
    }

    public function edit(Produto $produto)
    {
        $nomeForm = 'Unidades';

        $unidades = Unidade::all();

        foreach($unidades as $key => $values)
        {
            $unidade[$values['id']] = $values['sigla'] . ' - ' .$values['descricao'];
        }

        return view('admin.produtos.edit', compact('nomeForm', 'produto', 'unidade'));
    }

    public function update(Produto $produto, ProdutosRequest $request)
    {
        $produto->update($request->all());

        flash()->success('Produto atualizado com sucesso');

        return redirect('admin/produtos');
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();

        flash()->success('Produto excluído com sucesso');

        return redirect('admin/produtos');
    }

}
