<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $table = 'pedidos';
    public $primaryKey = 'pedidos_id';
    public $timestamps = true;//Define as colunas create_at e update_at
	protected $fillable = array('nome_comprador', 'data_pedido', 'venda_id', 'detalhes_pedido');//Valores que são aceitos pelo MassAssigment

	//protected $guarded = ['cpfCliente'];//Atributo não permitido pelo MassAssigment

    public function impressao()
    {
        return $this->hasMany('App\Impressao', 'pedido_id');
    }
}
