<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acesso extends Model
{
    protected $table = 'acessos';
    public $primaryKey = 'acesso_id';
    public $timestamps = true;//Define as colunas create_at e update_at
	protected $fillable = array('nome_acesso');//Valores que são aceitos pelo MassAssigment

	//protected $guarded = ['cpfCliente'];//Atributo não permitido pelo MassAssigment

	public function usuarios()
    {
        return $this->hasMany('App\User', 'acesso_id');
    }
}
