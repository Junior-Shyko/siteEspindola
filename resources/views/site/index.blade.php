@extends('layouts.site')
@section('title', '')
@section('sidebar')
@parent
@endsection
@section('content')

<style type="text/css">
   .optWrapper {
   top: 55px !important;
   display: block;
   }
   .select-all.partial > span i{
   background-color: #68b4e8 !important;
   }
   .chosen-container-multi .chosen-choices {
    position: relative;
    overflow: hidden;
    margin: 0;
    padding: 0 5px;
    width: 100%;
    height: 40px !important;
    border: none;
    box-shadow: none;
    border-radius: 3px;
    background-color: #fff;
    background-image: -webkit-gradient(linear,50% 0,50% 100%,color-stop(1%,#eee),color-stop(15%,#fff));
    background-image: -webkit-linear-gradient(#eee 1%,#fff 15%);
    background-image: -moz-linear-gradient(#eee 1%,#fff 15%);
    background-image: -o-linear-gradient(#eee 1%,#fff 15%);
    background-image: linear-gradient(#eee 1%,#fff 15%);
    cursor: text;
}   

.chosen-container-multi .chosen-choices li.search-choice span {
    word-wrap: break-word;
    font-weight: bold !important;
}
</style>
<section class="subheader simple-search">
   <div class="container">
   <h1>Ache seu imóvel novo agora</h1>
   <div class="col-md-12">
      <p>Anúncios com mais informações e imagens, menos burocracia e mais segurança na hora de alugar e comprar.</p>
   </div>
   <div class="">
      @include('site.tabs-search')  
      <div class="col-md-12 jumbotron visible-xs" id="code-mobile">
         <div class="container">
            <a href="#" class="visible-xs"> 
            <i class="fa fa-search"></i>
            Busca por Código </a>
            {{ Form::open(['url' => 'searchCode', 'method' => 'GET']) }}
            <input type="text" name="immobiles_code" class="select-form" id="input-code-mobile" style="width: 82.5% !important; color:black !important;" placeholder='Digite o código. (Ex: CA0001,CA0002)'>
            <button type="submit" class="btn btn-success btn-buscar"> Buscar </button>                           
            {{ Form::close() }}
         </div>
      </div>
   </div>
   <!-- end container -->
   <div class="whatsapp-fixo">
      <a href="https://api.whatsapp.com/send?phone=5585988101166&text=Olá, eu estou com uma dúvida, poderia me ajudar?"
         data-toggle="tooltip" data-placement="right"  title="Fale agora com nossos atendentes." >
		<img src="{{url('public/img/site/whatsapp.png')}}" width="54" height="54" > 
      </a>
   </div>
</section>
@include('site.immobileAdvanced')
@include('site.services')
<section class="module no-padding properties featured">
   <div class="container">
      <div class="module-header">
         <h2><strong>Destaques</strong></h2>
         <img src="images/divider.png" alt="" />
      </div>
   </div>
   <div class="slider-nav slider-nav-properties-featured">
      <span class="slider-prev"><i class="fa fa-angle-left"></i></span>
      <span class="slider-next"><i class="fa fa-angle-right"></i></span>
   </div>
   <div class="slider-wrap">
      <div class="slider slider-featured">
         @foreach($immobile_all as $immobiles)
         @if($immobiles->immobiles_type_publication == '2' || $immobiles->immobiles_type_publication == '3')
         <div class="property property-hidden-content slide" style="background: url({{ SiteEspindola\Immobile::getPhotoFeatured($immobiles->immobiles_code) }});background-size: 338px 230px;margin: auto;background-repeat: no-repeat;    min-height: 225px;">
            <a href="{{ url('imovel/'.$immobiles->immobiles_code) }}" class="property-content" title="{{ $immobiles->immobiles_property_title }}">
               <div class="property-title">
                  <h4>{{ $immobiles->immobiles_property_title }}</h4>
                  <p class="property-address"><i class="fa fa-map-marker icon"></i>{{ substr($immobiles->immobiles_address.' , '.$immobiles->immobiles_number. ' , '.$immobiles->immobiles_district. ' , '.$immobiles->immobiles_city, 0, 48)}}...</p>
               </div>
               <table class="property-details">
                  <tr>
                     <td><i class="fa fa-bed"></i> {{ $immobiles->immobiles_qtd_dormitory }} Qtos</td>
                     <td><i class="fa fa-tint"></i> {{ $immobiles->immobiles_qtd_toilet }} WC </td>
                     <td><i class="fa fa-expand"></i> {{ $immobiles->immobiles_total_area}} </td>
                  </tr>
               </table>
            </a>
            <a href="#" class="property-img">
               <div class="img-fade"></div>
               {{-- 
               <div class="property-tag button alt featured">Featured</div>
               --}}
               @if ($immobiles->immobiles_selling_price > 0)
               <div class="property-tag button status">Venda</div>
               <div class="property-price">R$ {{ number_format($immobiles->immobiles_selling_price, 0, ',' , '.') }}</div>
               @else
               <div class="property-tag button status">Locação</div>
               <div class="property-price">R$ {{ number_format($immobiles->immobiles_rental_price, 0, ',' , '.') }}</div>
               @endif                 
               <div class="property-color-bar"></div>
               <img src="images/1837x1206.png" alt="" />
            </a>
         </div>
         @endif
         @endforeach
      </div>
      <!-- end slider -->
   </div>
   <!-- end slider wrap -->
</section>
<section class="module property-categories">
      <div class="container">
    
        <div class="module-header">
          <h2>Uma busca melhor por um tipo<strong> específico de imóvel</strong></h2>
          <img src="images/divider.png" alt="">
          <p>Você poderá buscar todos os imóveis de acordo com o tipo que você escolher, não diferenciando
             cidade, bairro, locação ou venda. Basca clicar no que você desejar.
          </p>
        </div>
    
        <div class="row">
          <div class="col-lg-8 col-md-8">
         <a href="{{url('/todos-os-tipos/apartamento')}}" class="property-cat property-cat-apartments">
              <h3>Apartamento</h3>
              <div class="color-bar"></div>
              <span class="button small">Ver Todos</span>
            </a>
          </div>
          <div class="col-lg-4 col-md-4">
            <a href="{{url('/todos-os-tipos/casa')}}" class="property-cat property-cat-houses">
              <h3>Casa</h3>
              <div class="color-bar"></div>
              <span class="button small">Ver Todos</span>
            </a>
          </div>
        </div><!-- end row -->
    
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <a href="{{url('/todos-os-tipos/sala')}}" class="property-cat property-cat-condos">
              <h3>Sala Comercial</h3>
              <div class="color-bar"></div>
              <span class="button small">Ver Todos</span>
            </a>
          </div>
          <div class="col-lg-4 col-md-4">
            <a href="{{url('/todos-os-tipos/loja')}}" class="property-cat property-cat-waterfront">
              <h3>Loja</h3>
              <div class="color-bar"></div>
              <span class="button small">Ver Todos</span>
            </a>
          </div>
          <div class="col-lg-4 col-md-4">
            <a href="{{url('search?opcao=alugar&region-immobile=')}}" class="property-cat property-cat-cozy">
              <h3>Todos os imóveis</h3>
              <div class="color-bar"></div>
              <span class="button small">Ver todas as locações</span>
            </a>
          </div>
        </div><!-- end row -->
    
      </div><!-- end container -->
    </section>
@endsection
@section('footer')
@include('site.footer')
@endsection