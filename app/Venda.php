<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $table = 'vendas';
    public $primaryKey = 'vendas_id';
    public $timestamps = true;//Define as colunas create_at e update_at
	protected $fillable = array('valor_venda', 'data_venda', 'data_postagem', 'valor_frete', 'cep_frete', 'pedido_id');//Valores que são aceitos pelo MassAssigment

	//protected $guarded = ['cpfCliente'];//Atributo não permitido pelo MassAssigment

}