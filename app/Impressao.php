<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Impressao extends Model
{
    protected $table = 'impressoes';
    public $primaryKey = 'impressao_id';
    public $timestamps = true;//Define as colunas create_at e update_at
	protected $fillable = array('camada_impressao', 'infill', 'suporte', 'peso_impressao', 'tempo_impressao', 'peca_id', 'sucesso', 'filamento_id'
	'pedido_id', 'quant_impressao');//Valores que são aceitos pelo MassAssigment

	//protected $guarded = ['cpfCliente'];//Atributo não permitido pelo MassAssigment

	public function peca()
    {
        return $this->belongsTo('App\Peca', 'peca_id');
    }
    public function pedido()
    {
        return $this->belongsTo('App\Pedidos', 'pedido_id');
    }
}
