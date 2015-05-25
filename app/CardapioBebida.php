<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CardapioBebida extends Model {

	protected $table = 'cardapios_bebidas';

    protected $fillable = ['id_cardapio', 'id_bebida'];
}
