<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedores';
    public $primaryKey = 'fornecedores_id';
    public $timestamps = true;//Define as colunas create_at e update_at
	protected $fillable = array('nome_fornecedor', 'site_fornecedor');//Valores que são aceitos pelo MassAssigment

	//protected $guarded = ['cpfCliente'];//Atributo não permitido pelo MassAssigment

	public function filamentos()
    {
        return $this->hasMany('App\Filamento', 'fornecedores_id');
    }
}
