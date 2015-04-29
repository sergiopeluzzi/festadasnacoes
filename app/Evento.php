<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model {

    protected $table = 'eventos';

    protected $fillable = ['descricao', 'dataInicial', 'dataFim', 'dataLimite'];

    protected $dates = ['dataInicial', 'dataFim', 'dataLimite'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function nacao()
    {
        return $this->belongsToMany('App\Nacao');
    }

}
