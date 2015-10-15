<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model {

	protected $table = 'contatos';

    protected $fillable = ['nome', 'email', 'assunto', 'comentario'];

}
