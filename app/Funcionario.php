<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model {

    protected $table = 'funcionarios';

    protected $fillable = ['nome', 'cpf', 'telefone', 'email', 'id_user'];

    /**
     * Relacionamento User com Funcionario 1 : 1
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User');
    }

}
