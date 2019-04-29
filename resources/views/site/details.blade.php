@extends('layouts.site')
@section('sidebar')
@parent
@endsection
@section('content')
<style type="text/css">


</style>
<section class="module">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="property-single-item property-main">
                    <div class="property-header">
                        <div class="property-title">
                            <h4>{{ $immobile->immobiles_property_title }}</h4>
                            @php
                            //PARA ATIVAÇÃO DAS ABAS DE FOTOS E TOUR VIRTUAL
                            if($immobile->immobiles_tour_virtual != ""){
                                $active_360 = "active";
                                $active_photo = "";
                            }else{
                                $active_360 = "";
                                $active_photo = "active";
                            }
                            if($immobile->immobiles_rental_price == 0)
                            {
                            $value_immobile = number_format($immobile->immobiles_selling_price, 2 , ',' , '.');
                            $info_value = 'Venda';
                            $info = 'Para Venda';
                            }else{
                            $value_immobile = number_format($immobile->immobiles_rental_price, 2 , ',' , '.');
                                
                                $info = 'Para Alugar';
                                $info_value = 'Por Mês';
                                $infoRent = 'Locação';
                                if($immobile->immobiles_type_rental == 2){
                                    $info_value = 'Por dia';
                                    $infoRent = 'Temporada';
                                }
                            }
                            @endphp                  
                            <p class="property-address">
                                <i class="fa fa-map-marker icon"></i>
                                {{ $immobile->immobiles_address.' , '.$immobile->immobiles_number. ' , '.$immobile->immobiles_district.' , '.$immobile->immobiles_city }}
                            </p>
                            @if ($immobile->immobiles_selling_price > 0)   
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label>Venda</label>                         
                                    <div class="property-price-single ">R$ {{ number_format($immobile->immobiles_selling_price, 0, ',' , '.') }}</div>
                                </div>
                                @if( $info_value == "Por Mês" || $info_value == "Por dia")
                                <div class="col-md-6">
                                    <label> {{$infoRent}} </label>    
                                    <div class="property-price-single ">R$ {{ number_format($immobile->immobiles_rental_price, 0 , ',' , '.') }} <label style="font-size: 14px;">{{ $info_value }}</label></div>
                                </div>
                                @endif
                            </div>
                            @else
                            <div class="property-price-single right">R$ {{ $value_immobile }} <span>{{ $info_value }}</span></div>
                            @endif
                            <div class="clear"></div>
                        </div>
                        <div class="property-single-tags">
                            @php 
                            $featured = SiteEspindola\Immobile::typeOffer($immobile->immobiles_type_offer);
                            @endphp
                            @if($featured == "Destaque")
                            <div class="property-tag button alt featured">{{ $featured }}</div>
                            @endif                            
                            <div class="property-tag button status">
                                {{ $info }}
                            </div>
                            <div class="property-type right">Finalidade: <a href="#">{{ $immobile->immobiles_finality }}</a></div>
                        </div>
                    </div>
                    <div class="property-single-item property-main">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist" style="">
                                <li role="presentation active" style="margin:5px;">
                                    <div class="button">                                    
                                        <a href="#home" aria-controls="home" style="color:#ffffff;" role="tab" data-toggle="tab">
                                        Fotos
                                        <i class="fa fa-image"  aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </li>
                               
                            @if(!empty($immobile->immobiles_tour_virtual))
                                
                                <li role="presentation" style="margin:5px;">
                                    <div class="button">
                                        <a href="#profile" aria-controls="profile" style="color:#ffffff;" role="tab" data-toggle="tab">
                                            360º <i class="fa fa-street-view" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </li>
                            @endif
                            </ul>
                          
                            <!-- Tab panes -->
                            <div class="tab-content">
                              <div role="tabpanel" class="tab-pane active" id="home">
                                    <table class="property-details-single">
                                            <tr>
                                                <td><i class="fa fa-bed"></i> <span>{{ $immobile->immobiles_qtd_dormitory }}</span> Quarto(s).</td>
                                                <td><i class="fa fa-shower"></i> <span>{{ $immobile->immobiles_qtd_toilet }}</span> WC.</td>
                                                <td><i class="fa fa-expand"></i> <span>{{ $immobile->immobiles_total_area }}</span> m²</td>
                                                <td><i class="fa fa-car"></i> <span>
                                                    @if( $immobile->immobiles_qtd_uncovered_jobs == "")
                                                    0
                                                    @else
                                                    {{ $immobile->immobiles_qtd_uncovered_jobs }}
                                                    @endif
                                                    </span> vaga.(s)
                                                </td>
                                            </tr>
                                        </table>
                                        <div class="property-gallery">
                                            <div class="slider-nav slider-nav-property-gallery">
                                                <span class="slider-prev"><i class="fa fa-angle-left"></i></span>
                                                <span class="slider-next"><i class="fa fa-angle-right"></i></span>
                                            </div>
                                            <div class="slide-counter"></div>
                                            <div class="slider slider-property-gallery">
                                                @foreach($photo_immobile as $photos)
                                                <div class="slide" style="background: #e7e7e7;">
                                                    <img src="{{ $photos->photo_immobiles_url }}" 
                                                    alt="{{ $photos->photo_immobiles_url }}" 
                                                    style="margin: 0 auto;"/>
                                                </div>
                                                @endforeach
                                            </div>
                                            <div class="slider property-gallery-pager">
                                                @foreach($photo_immobile as $photos)
                                                <a class="property-gallery-thumb">
                                                <img src="{{ $photos->photo_immobiles_url }}" alt="{{ $photos->photo_immobiles_url }}" />
                                                </a>
                                                @endforeach
                                            </div>
                                        </div>
                              </div>
                              <div role="tabpanel" class="tab-pane" id="profile">
                                  <iframe frameborder='0' height='465px' width='100%' scrolling='no'
                                  src="{{$immobile->immobiles_tour_virtual}}" allowfullscreen></iframe>
                                    <a href="{{$immobile->immobiles_tour_virtual}}" class="btn btn-block btn-primary" target="_blank">
                                     <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                     Expandir Tour Virtual
                                    </a>
                              </div>
                              
                            </div>                      
                          </div>
                </div>
                <!-- end property title and gallery -->
                <div class="widget property-single-item property-description content">
                    <h4>
                        <span>Descrição</span> 
                        <img class="divider-hex" src="{{ url('/img/site/divider-half.png') }}" alt="" />
                        <div class="divider-fade"></div>
                    </h4>
                    <p style="font-size: 14px;">
                        {{ $immobile->immobiles_ps }}
                    </p>
                    <div class="tabs">
                        <ul>
                            <li><a href="#tabs-1"><i class="fa fa-pencil icon"></i>Mais Detalhes</a></li>
                            {{--  
                            <li><a href="#tabs-2"><i class="fa fa-crop icon">  </i>Planta Baixa</a></li>
                            <li><a href="#tabs-3"><i class="fa fa-key icon"></i>Reservar Chaves</a></li>
                            --}}
                            @if($immobile->immobiles_finality == 'Comercial' )
                            <li><a href="#tabs-2"> Adequabilidade </a></li>
                            @endif
                        </ul>
                        <div id="tabs-1" class="ui-tabs-hide">
                            <ul class="additional-details-list">
                                <li>Código Imóvel: <span>{{ $immobile->immobiles_code }}</span></li>
                                <li>Condominio: <span>{{ substr($immobile->immobiles_name_condo, 0 , 26) }}</span></li>
                                <li>Tipo: <span>{{ $immobile->immobiles_type_immobiles }}</span></li>
                                <li>Aceita Negoc: <span>{{ $accept_negotiation }}</span></li>
                                <li>
                                    Venda:
                                    @if($immobile->immobiles_selling_price > 0)
                                    <span>R$ {{ number_format($immobile->immobiles_selling_price, 2 , ',' , '.')}}</span>
                                    @else
                                    <span>Indisponível</span>   
                                    @endif
                                </li>
                                <li>Aluguel                           
                                    @if($info_value == "Venda")      
                                    <span> Indisponível</span>
                                    @else
                                    @php
                                    if($immobile->immobiles_type_rental == 2){
                                        $infoRentDetail = "Diária";
                                    }elseif($immobile->immobiles_type_rental == 3){
                                        $infoRentDetail = "Mensal";
                                    }
                                    @endphp
                                            <span>         
                                        R$ {{ number_format($immobile->immobiles_rental_price, 2, ',' , '.') }} 
                                        {{$infoRentDetail}}
                                    </span>
                                    @endif
                                </li>
                                {{--  
                                <li>Preço de Venda: <span>{{ number_format($immobile->immobiles_selling_price, 2, ',' , '.') }}</span></li>
                                --}}
                                <li>Valor Condo: <span>R$ {{ number_format($immobile->immobiles_condominium_price, 2, ',' , '.') }}</span></li>
                                <li>Valor IPTU: 
                                   
                                    <button type="button" class="btn btn-default" title="IPTU" 
                                    data-toggle="popover" data-placement="top" data-content="Valor Mensal" 
                                    style="border-color: #fff; border-radius: 100px;"> 
                                    <i class="fa fa-question-circle" title="click para mais Informações"></i>
                                    </button>
                                     
                                    <span> 
                                    
                                    R$ {{ number_format($immobile->immobiles_iptu_price ,2, ',', '.') }}
                                    
                                    </span>
                                </li>
                                <li>Seguro Incêndio: 
                                    @if($info_value !== "Venda")
                                    <button type="button" class="btn btn-default" title="Seguro incêndio" 
                                    data-toggle="popover" data-placement="top" data-content="{{ $body_info_fire }}" 
                                    style="border-color: #fff; border-radius: 100px;"> 
                                    <i class="fa fa-question-circle" title="click para mais Informações"></i>
                                    </button>
                                    @endif    
                                    <span> 
                                    @if($info_value !== "Venda")
                                    R$ {{ number_format($insurance_fire_annual ,2, ',', '.') }}
                                    @else 
                                    ---    
                                    @endif    
                                    </span>
                                </li>
                                <li>Total Locação: 
                                    @if($info_value == "Venda")      
                                    <span> Indisponível</span>
                                    @else
                                    <span> R$ {{ number_format($immobile->immobiles_rental_price + $immobile->immobiles_condominium_price + $immobile->immobiles_iptu_price, 2, ',' , '.') }}</span>
                                    @endif
                                </li>
                            </ul>
                            <div class="row alert">
                                <div class="col-md-6 space_button">
                                    
                                </div>
                                <div class="col-md-6">
                                    <a href="#fazerproposta" data-toggle="modal" class="button"> 
                                    <i class="fa fa-edit" aria-hidden="true"></i> Fazer Proposta
                                    </a>
                                    <div class="modal fade"  id="fazerproposta"  tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title">Proposta para o imóvel Código - {{ $immobile->immobiles_code }}</h4>
                                                </div>
                                                {{ Form::open(['url' => 'escolhaazul/ver-proposta/', 'method' => 'GET'])}}
                                                <div class="modal-body">
                                                    <div class="row text-center">
                                                        <div class="col-md-12">
                                                            <p class="">Preencha os dados para Iniciar a proposta para esse imóvel</p>
                                                            <h5>Quem é o principal Inquilino?</h5>
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-8">
                                                                <div class="form-group">
                                                                    <select name="tipo" id="" class="form-control "   required >
                                                                        <option value="">--Selecione--</option>
                                                                        <option value="Pessoa Física">Pessoa Física</option>
                                                                        <option value="Pessoa Jurídica">Pessoa Jurídica</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" name="user_name" id="nome_cadastro" class="form-control" required="" placeholder="Nome completo ou razão Social">
                                                                    <input type="email" name="user_email" id="email_cadastro"  class="form-control" required="" placeholder="E-mail">
                                                                    <input type="text" id="fone_cadastro" name="user_phone" class="form-control" required="" placeholder="Fone de Contato">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Sair</button>
                                                    <button type="submit" class="btn btn-primary"> <i class="fa fa-file-text-o" aria-hidden="true"></i> Iniciar Proposta</button>
                                                </div>
                                                {{ Form::close() }}
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                </div>
                            </div>
                        </div>
                        <div id="tabs-2" class="ui-tabs-hide">
                            <h3>Consulta de Adequabilidade Online</h3>
                            <div class="col-md-12">
                                <a href="http://portal.seuma.fortaleza.ce.gov.br/fortalezaonline/portal/inicioconsultaviabilidade.jsf" target="_blank" class="button" title="Ir ao site"> 
                                <i class="fa fa-search" aria-hidden="true"></i> Consultar
                                </a>
                            </div>
                        </div>
                        <div id="tabs-3" class="ui-tabs-hide">
                            <div class="multi-page-form-content active">
                                <table class="property-submit-title">
                                    <tr>
                                        <td>
                                            <h4>Reservas</h4>
                                            <p>Dias de reserva: 26/03/2018 08:00 as 26/03/2018 as 12:00; 29/03/2018 15:30 as 23/03/2018 as 17:30; </p>
                                        </td>
                                    </tr>
                                </table>
                                <div class="form-block">
                                    <label>Nome Completo*</label>
                                    <input class="border required" type="text" name="property-title" />
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-block">
                                            <label>Celular*</label>
                                            <input class="border required" type="number" name="price" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-block">
                                            <label>Fone Fixo</label>
                                            <input class="border" type="text" name="price-post" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-block">
                                            <label>E-mail*</label>
                                            <input class="border" type="email" name="price-post" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-block">
                                            <label>Senha*</label>
                                            <input class="border required" type="number" name="price" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-block">
                                            <label>Repetir Senha*</label>
                                            <input class="border required" type="number" name="price" />
                                        </div>
                                    </div>
                                    <span class="button button-icon small right form-next"><i class="fa fa-angle-right"></i> Cadastrar Reserva</span>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end description -->
                <div class="widget property-single-item property-amenities">
                    <h4>
                    <span>Característica</span> <img class="divider-hex" src="{{url('img/site/divider-half.png')}}" alt="">
                        <div class="divider-fade"></div>
                    </h4>
                    <ul class="amenities-list">      
                        @if($immobile->immobiles_electronic_door == 1)  <li><i class="fa fa-check icon"></i> Portão Elet.</li> @else <li><i class="fa fa-close icon"></i>  Portão Elet.</li>@endif                    
                        @if($immobile->immobiles_front_sea == 1)        <li><i class="fa fa-check icon"></i> Frente Mar</li> @else <li><i class="fa fa-close icon"></i>  Frente Mar</li>@endif                    
                        @if($immobile->immobiles_sea_shore == 1)        <li><i class="fa fa-check icon"></i> Beira Mar</li> @else <li><i class="fa fa-close icon"></i>  Beira Mar</li>@endif                    
                        @if($immobile->immobiles_wine_house == 1)       <li><i class="fa fa-check icon"></i> Adega</li> @else <li><i class="fa fa-close icon"></i>  Adega</li>@endif                    
                        @if($immobile->immobiles_elevator > 0)          <li><i class="fa fa-check icon"></i> Elevador</li> @else <li><i class="fa fa-close icon"></i>  Elevador</li>@endif                    
                        @if($immobile->immobiles_barbecue_grill == 1)   <li><i class="fa fa-check icon"></i> Churrasqueira</li> @else <li><i class="fa fa-close icon"></i>  Churrasqueira</li>@endif                    
                        @if($immobile->immobiles_poll == 1)             <li><i class="fa fa-check icon"></i> Piscina</li> @else <li><i class="fa fa-close icon"></i>  Piscina</li>@endif                    
                        @if($immobile->immobiles_sports_court == 1)     <li><i class="fa fa-check icon"></i> Q. Poli Esportiva</li> @else <li><i class="fa fa-close icon"></i>Q. Poli Esportiva</li>@endif                    
                        @if($immobile->immobiles_soccer_field == 1)     <li><i class="fa fa-check icon"></i> Campo Futebol</li> @else <li><i class="fa fa-close icon"></i>  Campo Futebol</li>@endif                    
                        @if($immobile->immobiles_furnished == 1)        <li><i class="fa fa-check icon"></i> Mobiliado</li> @else <li><i class="fa fa-close icon"></i>  Mobiliado</li>@endif                    
                    </ul>
                </div>
                <div class="widget property-single-item property-location">
                    <h4>
                        <span>Localização</span> <img class="divider-hex" src="{{ url('/img/site/divider-half.png') }}" alt="" />
                        <div class="divider-fade"></div>
                    </h4>
                    <div id="map-single"></div>
                </div>
                <!-- end location -->
                <div class="widget property-single-item property-related">
                    <h4>
                        <span>Imóveis Relacionados</span> <img class="divider-hex" src="images/divider-half.png" alt="" />
                        <div class="divider-fade"></div>
                    </h4>
                    <div class="row">
                        <div class="bs-example" data-example-id="simple-carousel">
                            <div class="carousel slide" id="carousel-example-generic" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    @foreach ($other_immobile as $index => $value)
                                    <li data-target="#carousel-example-generic" data-slide-to="{{$index}}" class="active"></li>
                                    @endforeach
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    @foreach ($other_immobile as $index => $value)
                                    @php
                                    $active = "";
                                    if($index == 0){
                                    $active = "active";
                                    }else{
                                    $active = "";
                                    }
                                    @endphp
                                    <div class="item {{$active}}">
                                        <a href="{{url('imovel/'.$other_immobile[$index]['immobiles_code'])}}">
                                            <img src="{{ SiteEspindola\Immobile::getPhotoFeatured($other_immobile[$index]['immobiles_code'])}}" alt="First Slide" style="height:350px;margin: 0 auto;">
                                            <div class="carousel-caption">
                                                <h3 style="background: #dedbdb7d; padding: 5px; border-color: #c3c3c3;color: #fff; border-radius: 8px;">
                                                    {{$other_immobile[$index]['immobiles_district']}}
                                                </h3>
                                                <p style="background: #2d2a2a7d; padding: 5px;
                                                    border-color: #c3c3c3;
                                                    color: #eae7e3;
                                                    font-weight: 500;">
                                                    {{$other_immobile[$index]['immobiles_property_title']}}
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach                               
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end related properties -->
            </div>
            <!-- end col -->
            <div class="col-lg-4 col-md-4 sidebar sidebar-property-single">
                <div class="widget widget-sidebar advanced-search">
                    <h4><span>Busca Avançada</span> <img src="{{ url('public/img/site/divider-half-white.png') }}" alt="" /></h4>
                    <div class="widget-content box">
                        {{ Form::open(['url' => 'searchadvance']) }}
                        <div class="form-block border">
                            <label for="property-location">Tipo de Imóvel</label>
                            <select  class="select-form type-immobile" id="immobile-type-advanced" name="immobiles_type_immobiles[]"  data-placeholder="Tipo de imóvel" multiple="multiple" style=" width: 100% !important;">
                                @foreach($type as $types)
                                <option value="{{ $types->immobiles_type_immobiles }}">{{ $types->immobiles_type_immobiles }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-block border">
                            <label for="property-status">Bairros</label>
                            <select name="immobiles_district[]" class="select-form type-immobile" id="immobiles_district"  title="Escolha um ou mais de um bairro" data-placeholder="Escolha um ou mais de um" multiple="multiple">
                                @foreach($district as $districts)
                                <option value="{{ $districts->immobiles_district }}">{{ $districts->immobiles_district }} - {{ $districts->immobiles_city }}</option>
                                @endforeach   
                            </select>
                        </div>
                        <div class="form-block">
                            <label>Preço do aluguel</label>                               
                            <input type="text" id="input-range-prince" name="immobiles_rental_price">                                
                        </div>
                        <div class="form-block border">
                            <label>Dormitórios</label>
                            {{ Form::selectRange('immobiles_qtd_dormitory', 0, 10 , 2, ['class' => 'form-control', 'required' => 'true']) }}
                        </div>
                        <div class="form-block border">
                            <label>vagas</label>
                            {{ Form::selectRange('immobiles_qtd_uncovered_jobs', 0, 10 , 2, ['class' => 'form-control', 'required' => 'true']) }}
                        </div>
                        <div class="form-block">
                            <label>Area</label>
                            <input type="number" name="areaMin" class="area-filter border" placeholder="Min" />
                            <input type="number" name="areaMax" class="area-filter border" placeholder="Max" />
                            <div class="clear"></div>
                        </div>
                        <div class="form-block">
                            {{ Form::submit('Buscar!' , ['class' => 'button', 'id' => 'submitSearch']) }}
                        </div>
                        {{ Form::close() }}
                    </div>
                    <!-- end widget content -->
                </div>
                <!-- end widget -->
                @include('site.immobilerecents')
                <div class="widget widget-sidebar advanced-search">
                    <h4><span>Posts Recentes</span> <img src="{{ url('img/site/divider-half.png') }}" alt="" /></h4>
                    <div class="widget-content">
                        <div class="recent-property">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4"><a href="https://www.espindola.imb.br/single-post/2016/09/05/DICAS-PARA-LIMPAR-SUA-COZINHA-FACILMENTE"><img src="https://static.wixstatic.com/media/cffaeb_89082296362e423fb7d688fb85b42a59~mv2.jpg/v1/fill/w_549,h_458,al_c,q_80,usm_0.66_1.00_0.01/cffaeb_89082296362e423fb7d688fb85b42a59~mv2.webp" alt="DICAS PARA LIMPAR SUA COZINHA FACILMENTE" /></a></div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <h5><a href="https://www.espindola.imb.br/single-post/2016/09/05/DICAS-PARA-LIMPAR-SUA-COZINHA-FACILMENTE">DICAS PARA LIMPAR SUA COZINHA FACILMENTE</a></h5>
                                    <p><i class="fa fa-calendar-o"></i> 5 de Setembro</p>
                                </div>
                            </div>
                        </div>
                        <div class="recent-property">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4"><a href="https://www.espindola.imb.br/single-post/2016/08/30/12-ALIMENTOS-QUE-VOC%C3%8A-COMPRA-UMA-VEZ-E-REPLANTA-PARA-SEMPRE"><img src="https://static.wixstatic.com/media/cffaeb_997cac55522c4558a060a5150e931f52~mv2.jpg/v1/fill/w_630,h_479,al_c,q_80,usm_0.66_1.00_0.01/cffaeb_997cac55522c4558a060a5150e931f52~mv2.webp" alt="12 ALIMENTOS QUE VOCÊ COMPRA UMA VEZ E REPLANTA PARA SEMPRE" /></a></div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <h5><a href="https://www.espindola.imb.br/single-post/2016/08/30/12-ALIMENTOS-QUE-VOC%C3%8A-COMPRA-UMA-VEZ-E-REPLANTA-PARA-SEMPRE">12 ALIMENTOS QUE VOCÊ COMPRA UMA VEZ E REPLANTA PARA SEMPRE</a></h5>
                                    <p><i class="fa fa-calendar-o"></i> 30 de Agosto</p>
                                </div>
                            </div>
                        </div>
                        <div class="recent-property">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4"><a href="https://www.espindola.imb.br/single-post/2016/07/20/Quais-os-cuidados-voc%C3%AA-deve-ter-ao-alugar-um-im%C3%B3vel"><img src="https://static.wixstatic.com/media/c27506_b54d30dc36e34c6bb54f26277fb56548~mv2.jpg/v1/fill/w_630,h_371,al_c,q_80,usm_0.66_1.00_0.01/c27506_b54d30dc36e34c6bb54f26277fb56548~mv2.webp" alt="Qais os cuidados você deve ter ao alugar um imóvel?" /></a>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <h5><a href="https://www.espindola.imb.br/single-post/2016/07/20/Quais-os-cuidados-voc%C3%AA-deve-ter-ao-alugar-um-im%C3%B3vel">Quais os cuidados você deve ter ao alugar um imóvel?</a></h5>
                                    <p><i class="fa fa-calendar-o"></i> 20 de Julho</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end widget content -->
                </div>
                <!-- end widget -->
            </div>
            <!-- end sidebar -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
@endsection
@push('scripts')
<script type="text/javascript">
    lat     = '{{ $immobile->immobiles_latitude }}';
    log     = '{{ $immobile->immobiles_longitude }}';
    title   = '{{ $immobile->immobiles_property_title }}';
    address = '{{ $immobile->immobiles_address }}';
    district= '{{ $immobile->immobiles_district }}';
    city    = '{{ $immobile->immobiles_city }}';
    codeIm  = '{{ $immobile->immobiles_code }}';
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBisdaSyLJ4WC4bFxEFA5rdhGq_8B1B52I"></script>
{{ Html::script('public/js/map-single.js') }}
<script type="text/javascript">
    code_immobile = '{{ $immobile->immobiles_code }}';
    
    $(function () {
     $('[data-toggle="tooltip"]').tooltip();
     $('[data-toggle="popover"]').popover();
     //property-gallery-thumb
    
    
      
    })
</script>
@endpush
@section('footer')
@include('site.footer')
@endsection