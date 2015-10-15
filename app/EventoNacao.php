<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class EventoNacao extends Model {

	protected $table = 'eventos_nacoes';

    protected $fillable = ['id_evento', 'id_nacao'];

}
