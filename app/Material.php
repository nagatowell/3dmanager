<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'fornecedores';
    public $primaryKey = 'materiais_id';
    public $timestamps = true;//Define as colunas create_at e update_at
	protected $fillable = array('nome_material', 'temp_mesa', 'temp_bico');//Valores que são aceitos pelo MassAssigment

	//protected $guarded = ['cpfCliente'];//Atributo não permitido pelo MassAssigment

	public function filamentos()
    {
        return $this->hasMany('App\Filamentos', 'materiais_id');
    }
}
