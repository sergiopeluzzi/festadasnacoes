<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Evento;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class EventosController extends Controller {

    public function __construct()
    {
        $this->middleware('administrador', ['except' => ['show', 'index']]);
    }

    public function index()
    {
        $nomeForm = 'Eventos';

        $eventos = Evento::all();

        return view('admin.eventos.index', compact('nomeForm', 'eventos'));
    }

}
