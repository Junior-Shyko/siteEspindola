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
.chosen-container-multi .chosen-choices li.search-field input[type=text] {
    margin-top: 5px;
    padding: 0;
    height: 25px;
    outline: 0;
    border: 0!important;
    background: transparent!important;
    box-shadow: none;
    color: #999;
    font-size: 1em;
    line-height: normal;
    border-radius: 0;
    font-family: Arial,Helvetica,sans-serif !important;
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
@include('site.pages.top_footer')
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
        <a href="{{url('/todos-os-tipos/apartamento')}}" target="_blank" class="property-cat property-cat-apartments">
            <h3>Apartamento</h3>
            <div class="color-bar"></div>
            <span class="button small">Ver Todos</span>
          </a>
        </div>
        <div class="col-lg-4 col-md-4">
          <a href="{{url('/todos-os-tipos/casa')}}" target="_blank" class="property-cat property-cat-houses">
            <h3>Casa</h3>
            <div class="color-bar"></div>
            <span class="button small">Ver Todos</span>
          </a>
        </div>
      </div><!-- end row -->
  
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <a href="{{url('/todos-os-tipos/sala')}}" target="_blank" class="property-cat property-cat-condos">
            <h3>Sala Comercial</h3>
            <div class="color-bar"></div>
            <span class="button small">Ver Todos</span>
          </a>
        </div>
        <div class="col-lg-4 col-md-4">
          <a href="{{url('/todos-os-tipos/loja')}}" target="_blank" class="property-cat property-cat-waterfront">
            <h3>Loja</h3>
            <div class="color-bar"></div>
            <span class="button small">Ver Todos</span>
          </a>
        </div>
        <div class="col-lg-4 col-md-4">
          <a href="{{url('search?opcao=alugar&region-immobile=')}}" target="_blank" class="property-cat property-cat-cozy">
            <h3>Todos os imóveis</h3>
            <div class="color-bar"></div>
            <span class="button small">Ver todas as locações</span>
          </a>
        </div>
      </div><!-- end row -->
  
    </div><!-- end container -->
  </section>
  <section class="module testimonials">
    <div class="container">
      <div class="module-header">
        <h2>Nossa <strong>Parceria</strong></h2>
        <img src="images/divider-white.png" alt="">
        <p>Conheça a história de amigos inquilinos e proprietários que já estão conosco ao longo do tempo.</p>
      </div>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>
        -->
        <!-- Wrapper for slides -->
        <div class="testimonial">
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <h3>"Pontualidade seriedade onestidade  credibilidade tudo que e dade"</h3>
              <div class="testimonial-details">
                <img class="testimonial-img" src="https://scontent-for1-1.xx.fbcdn.net/v/t1.0-1/p200x200/1469836_1391486527821579_3020469505130490578_n.jpg?_nc_cat=105&ccb=2&_nc_sid=7206a8&_nc_eui2=AeGDrnke4TJMCMaDj96JPon6cZ8xgsaqLwVxnzGCxqovBZ2Q4BeQqhe8rndCvQ28YyNlTGX-NI1olWb6oK8F6sFk&_nc_ohc=ngKMP23y_kwAX-kwBui&_nc_ht=scontent-for1-1.xx&tp=6&oh=38abd692cd5103b13ede7ec7b9163b95&oe=60464DB2" alt="">
                <p class="testimonial-name"><strong>Haroldo Freimanis</strong></p>
                {{-- <span class="testiomnial-title"><em>CEO at <a href="#" tabindex="0">Rype Creative</a></em></span> --}}
              </div>
            </div>
            <div class="item">
              <h3>"Empresa Parceira de Nosso projeto de Futsal . Venham conhecer essa imobiliaria de muito Sucesso."</h3>
              <div class="testimonial-details">
                <img class="testimonial-img" src="https://scontent-for1-1.xx.fbcdn.net/v/t1.0-1/p200x200/144013520_3489870001125006_1639300381676406809_o.jpg?_nc_cat=110&ccb=2&_nc_sid=7206a8&_nc_eui2=AeHMQa1A8xG0vLwnh5LoSesbo3tl3PBIvHmje2Xc8Ei8eblILNm6pEvZG-ljpEyYWBU1FxDzrgsTzqpZtXaXqe90&_nc_ohc=4jvgGLxPOzMAX_AM1en&_nc_ht=scontent-for1-1.xx&tp=6&oh=5724931dd6bbf1cd451de9e196d77fb0&oe=6044D9FB" alt="">
                <p class="testimonial-name"><strong>Daniel Alencar</strong></p>
                {{-- <span class="testiomnial-title"><em>CEO at <a href="#" tabindex="0">Rype Creative</a></em></span> --}}
              </div>
            </div>
            <div class="item">
              <h3>"Qualidade, simpatia e muita cordialidade no atendimento, com ferramentas que otimizam o tempo do cliente, e acima de tudo preços de compra e venda muito competitivos"</h3>
              <div class="testimonial-details">
                <img class="testimonial-img" src="https://scontent-for1-1.cdninstagram.com/v/t51.2885-19/s150x150/33229042_174358090071102_8619407894535733248_n.jpg?_nc_ht=scontent-for1-1.cdninstagram.com&_nc_ohc=NSVdl19XN-gAX_5wPsw&tp=1&oh=cf51f3e901e7179b8179ba1f8448c74e&oe=604797C2" alt="">
                <p class="testimonial-name"><strong>Ciro de Castro</strong></p>
                {{-- <span class="testiomnial-title"><em>CEO at <a href="#" tabindex="0">Rype Creative</a></em></span> --}}
              </div>
            </div>
          </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control-home" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="slider-prev slick-arrow">
            <i class="fa fa-angle-left"></i>
          </span>
        </a>
        <a class="right carousel-control-home" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="slider-next slick-arrow">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
  </section>
@endsection
@section('footer')
@include('site.footer')
@endsection