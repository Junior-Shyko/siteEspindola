@extends('layouts.site')
@section('title', 'Espíndola Imobiliária')
@section('sidebar')
@parent
@endsection
@section('content')
<section class="subheader_page">
    <div class="container">
        <h1>Contato</h1>
        <div class="clear"></div>
    </div>
    <div class="container">
        <div>
            Home <i class="fa fa-angle-right"></i> 
            <a href="#" class="">A Espíndola</a>
            <i class="fa fa-angle-right"></i>
            <a href="#" class="">Equipe Espíndola</a>
        </div>
        <div class="clear"></div>
    </div>
</section>
<section class="module contact-details">
    <div class="container">
  
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="contact-item">
            <i class="fa fa-envelope"></i>
            <h4>E-mail</h4>
            <p>meajuda@espindolaimobiliaria.com.br</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="contact-item">
            <i class="fa fa-phone"></i>
            <h4>Contato</h4>
            <p>Fixo: (85) 3038-0014</p>
            <p>Celular: (85) 98970-4899</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="contact-item">
            <i class="fa fa-map-marker"></i>
            <h4>Endereço</h4>
            <p>Rua Monsenhor Otávio de Castro, 781 <br>
                Fátima - Fortaleza - Ceará</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="contact-item">
            <i class="fa fa-whatsapp"></i>
            <h4>Whatsapp</h4>
            <p>
                <a href="https://api.whatsapp.com/send?phone=5585989704899&text=Olá, eu gostaria de algumas informações." class="btn btn-success" target="_blank">Fale agora com nosso atendente</a>
            </p>
            
          </div>
        </div>
      </div><!-- end row -->
  
    </div>
  </section>

@include('site.footer')
@endsection