<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Impressao extends Model
{
    protected $table = 'impressoes';
    public $primaryKey = 'impressoes_id';
    public $timestamps = true;//Define as colunas create_at e update_at
	protected $fillable = array('camada_impressao', 'infill', 'suporte', 'peso_impressao', 'tempo_impressao', 'peca_id', 'status_imp_id', 'filamento_id' ,'observacoes',
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
    public function status()
    {
        return $this->belongsTo('App\StatusImpressao', 'status_imp_id');
    }
    public function filamento()
    {
        return $this->belongsTo('App\Filamento', 'filamento_id');
    }
}
