<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model {

    protected $table = 'clientes';

    protected $fillable = ['nome', 'cpf', 'telefone', 'email', 'password', 'id_user'];

    /**
     * Relacionamento User com Cliente 1 : 1
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User');
    }

}

