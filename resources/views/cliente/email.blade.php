@extends('layouts.email')
@section('content')
              <div style="Margin-left: 20px;Margin-right: 20px;">
      <h1 class="size-36" style="Margin-top: 0;Margin-bottom: 0;font-style: normal;font-weight: normal;color: #9f1b32;font-size: 30px;line-height: 38px;text-align: center;" lang="x-size-36">O Cliente {{$dadosCliente->nomeCliente}} CPF {{$dadosCliente->cpfCliente}} anexou um documento. 
        <a href="{{action('AgrupadorController@documentosDownload', $documento->cpfDocID)}}">{{$documento->nomeDocumento}}</a>

      </h1>

    </div>
            
              <div style="Margin-left: 20px;Margin-right: 20px;">
      <div style="line-height:20px;font-size:1px">&nbsp;</div>
    </div>
            
              <div style="Margin-left: 20px;Margin-right: 20px;">
      <div class="divider" style="display: block;font-size: 2px;line-height: 2px;Margin-left: auto;Margin-right: auto;width: 40px;background-color: #ccc;Margin-bottom: 20px;">&nbsp;</div>
    </div>
            
              <div style="Margin-left: 20px;Margin-right: 20px;">
      <div style="line-height:10px;font-size:1px">&nbsp;</div>
    </div>
            
            </div>
          <!--[if (mso)|(IE)]></td><td class="layout__edges">&nbsp;</td></tr></table><![endif]-->
@endsection