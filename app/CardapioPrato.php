<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CardapioPrato extends Model {

	protected $table = 'cardapios_pratos';

    protected $fillable = ['id_cardapio', 'id_prato'];

}
