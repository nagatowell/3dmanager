<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filamento extends Model
{
    protected $table = 'filamentos';
    public $primaryKey = 'filamentos_id';
    public $timestamps = true;//Define as colunas create_at e update_at
	protected $fillable = array('valor', 'materiais_id', 'cores_id', 
        'fornecedores_id', 'peso');//Valores que são aceitos pelo MassAssigment

	//protected $guarded = ['cpfCliente'];//Atributo não permitido pelo MassAssigment

	public function impressoes()
    {
        return $this->hasMany('App\Impressao', 'impressao_id');
    }

    public function cores()
    {
        return $this->belongsTo('App\Cores', 'cores_id');
    }
    public function material()
    {
        return $this->belongsTo('App\Material', 'materiais_id');
    }
    public function fornecedor()
    {
        return $this->belongsTo('App\Fornecedor', 'fornecedores_id');
    }
}
