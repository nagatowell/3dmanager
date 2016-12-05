<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peca extends Model
{
    protected $table = 'pecas';
    public $primaryKey = 'peca_id';
    public $timestamps = true;//Define as colunas create_at e update_at
	protected $fillable = array('nome_peca', 'link_thing', 'quant_peca');//Valores que são aceitos pelo MassAssigment

	//protected $guarded = ['cpfCliente'];//Atributo não permitido pelo MassAssigment

	public function impressoes()
    {
        return $this->hasMany('App\Impressao', 'peca_id');
    }

}
