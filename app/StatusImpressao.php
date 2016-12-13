<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusImpressao extends Model
{
    protected $table = 'status_impressoes';
    public $primaryKey = 'status_imp_id';
    public $timestamps = true;//Define as colunas create_at e update_at
	protected $fillable = array('nome_status', 'user_id' ,'descricao_status');//Valores que são aceitos pelo MassAssigment

	//protected $guarded = ['cpfCliente'];//Atributo não permitido pelo MassAssigment

    public function impressao()
    {
        return $this->hasMany('App\Impressao', 'status_imp_id');
    }
}
