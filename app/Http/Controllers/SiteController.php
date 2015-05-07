<?php namespace App\Http\Controllers;

use App\Evento;
use App\Http\Requests;
use App\Nacao;
use App\Prato;

class SiteController extends Controller {

    public function index()
    {
        $evento = Evento::latest()->first();

        $nacoes = Nacao::all();

        $pratos = Prato::all();

        return view('site.index', compact('evento', 'nacoes', 'pratos'));
	}

    public function cadastrar()
    {
        return view('site.cadastrar');
    }

    public function minhaconta()
    {
        return view('site.minhaconta');
    }

    public function meuspedidos()
    {
        return view('site.meuspedidos');
    }

    public function meucarrinho()
    {
        return view('site.meucarrinho');
    }

    public function finalizar()
    {
        return view('site.finalizar');
    }

    public function contato()
    {
        return view('site.contato');
    }
}
