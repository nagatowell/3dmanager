<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filamento extends Model
{
    protected $table = 'filamentos';
    public $primaryKey = 'filamentos_id';
    public $timestamps = true;//Define as colunas create_at e update_at
	protected $fillable = array('valor', 'material_id', 'cores_id', 
        'fornecedor_id', 'peso');//Valores que são aceitos pelo MassAssigment

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
        return $this->hasMany('App\Material', 'material_id');
    }
    public function fornecedor()
    {
        return $this->hasMany('App\BeneficioINSS', 'fornecedor_id');
    }
}
