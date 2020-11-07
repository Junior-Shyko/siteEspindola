@extends('layouts.site')
@section('title', 'Espíndola Imobiliária')
@section('sidebar')
@parent
@endsection
@section('content')
<section class="subheader_page">
    <div class="container">
        <h1>Sincronismo</h1>
        <div class="clear"></div>
    </div>
    <div class="container">
        <div>
            Home <i class="fa fa-angle-right"></i> 
            <a href="#" class="">Sincronismo</a>
        </div>
        <div class="clear"></div>
    </div>
</section>
<section class="module">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h3>Total de imoveis sincronizados</h3>
            </div>
            <div class="col-md-6 col-lg-6">
                <ul class="list-group">
                    <li class="list-group-item">
                        Total de imóveis: <strong> {{$sync[0]->settings_total_immobile_sync}}</strong>
                    </li>
                    <li class="list-group-item">
                        Syncronismo
                        @if ($sync[0]->settings_id_user_sync == 0)
                            <strong> feito pelo site</strong>
                        @else
                            <strong>feito pelo usuário</strong>
                        @endif
                    </li>
                    <li class="list-group-item">
                        Tempo de sincronismo:  
                        <strong>
                            @php
                                $hj = \Carbon\Carbon::now(); 
                                $dif = \Carbon\Carbon::parse($hj)->diffForHumans($sync[0]->settings_date_last_sync);
                                echo $dif;
                                @endphp
                        </strong>
                    </li>
                    <li class="list-group-item">
                        Data do ultimo sincronismo: 
                        @php
                            $dt = \Carbon\Carbon::parse($sync[0]->settings_date_last_sync)->format('d/m/Y H:i:s');
                            echo $dt;
                        @endphp
                    </li>
                  </ul>
            </div>
        </div>
    </div>
</section>

@include('site.footer')
@endsection