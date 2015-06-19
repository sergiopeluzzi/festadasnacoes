<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Evento;
use App\EventoNacao;
use App\Http\Controllers\Controller;

use App\Http\Requests\EventosRequest;
use Illuminate\Http\Request;

class EventosController extends Controller {

    public function __construct()
    {
        $this->middleware('administrador');
    }

    public function index()
    {
        $nomeForm = 'Eventos';

        $eventos = Evento::all();

        return view('admin.eventos.index', compact('nomeForm', 'eventos'));
    }

    public function create()
    {
        $nomeForm = 'Eventos';

        return view('admin.eventos.create', compact('nomeForm'));
    }

    public function store(EventosRequest $request)
    {
        $dados = $request->all();

        Evento::create($dados);

        flash()->success('Evento cadastrado com sucesso');

        return redirect('admin/eventos');
    }

    public function show(Evento $evento)
    {
        $nomeForm = 'Eventos';

        return view('admin.eventos.show', compact('nomeForm', 'evento'));
    }

    public function edit(Evento $evento)
    {
        $nomeForm = 'Eventos';

        return view('admin.eventos.edit', compact('nomeForm', 'evento'));
    }

    public function update(Evento $evento, EventosRequest $request)
    {
        $nomeForm = 'Eventos';

        $evento->update($request->all());

        flash()->success('Evento atualizado com sucesso');

        return redirect('admin/eventos');
    }

    public function destroy(Evento $evento)
    {
        $c = count(EventoNacao::where('id_evento', $evento->id)->get());

        if ($c > 0)
        {
            flash()->error("O Evento $evento->nome não pode ser excluído!");

            return redirect('admin/eventos');
        }
        else
        {
            $evento->delete();

            flash()->success('Evento excluído com sucesso');

            return redirect('admin/eventos');
        }
    }
}
