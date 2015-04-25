<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model {

    protected $table = 'eventos';

    protected $fillable = ['descricao', 'dataInicio', 'dataFim', 'dataLimite'];

    protected $dates = ['dataInicio', 'dataFim', 'dataLimite'];

}
