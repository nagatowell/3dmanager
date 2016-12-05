<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cores extends Model
{
    protected $table = 'cores';
    public $primaryKey = 'cores_id';
    public $timestamps = true;//Define as colunas create_at e update_at
	protected $fillable = array('nome_cor');//Valores que são aceitos pelo MassAssigment

	//protected $guarded = ['cpfCliente'];//Atributo não permitido pelo MassAssigment

	public function filamentos()
    {
        return $this->hasMany('App\Filamentos', 'cores_id');
    }

}
