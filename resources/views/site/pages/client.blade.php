@extends('layouts.site')
@section('title', 'Espíndola Imobiliária')
@section('sidebar')
@parent
@endsection
<style>
.content_fixed{
    height: 194px;
    overflow: auto;
}
.circleOption{
    border: 4px solid #EAB208;
    opacity: 1;
    border-radius: 50%;
    width: 48px;
}

</style>
@section('content')
<section class="subheader_page">
    <div class="container">
        <h1>Área do Cliente</h1>
        <div class="clear"></div>
    </div>
    <div class="container">
        <div>Home <i class="fa fa-angle-right"></i> 
            <a href="#" class="">Cliente</a>
        </div>
        <div class="clear"></div>
    </div>
</section>
<section class="module">
    <div class="container">
       
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="blog-post">
                    <div class="content blog-post-content">
                        <h3><a href="#">Área do Cliente</a></h3>
                        <p>
                            <br>
                            <strong>A Espíndola</strong> não pensa apenas em alugar o seu imóvel, mas, também, em lhe proporcionar todo o suporte necessário para que você se 
                            sinta seguro e tranquilo na concretização dos seus negócios imobiliários. Estes são alguns dos serviços que a Espíndola tem a oferecer:
                        </p>
                        
                    </div>
                </div>
                <!-- end blog post -->
            </div>
            <!-- end blog posts -->
            <!-- 
            <div class="col-lg-4 col-md-4 sidebar">
                <div class="widget widget-sidebar recent-properties">
                    <div class="widget-content box">
                        <h4><span>Procure por imóvel</span> <img src="img/site/divider-half.png" alt=""></h4>
                        <div class="widget-content">
                            <div class="recent-property">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4  text-center">
                                        <a href="{{url('todos-os-tipos/apartamento')}}"><img src="img/site/hotel.svg" class="circleOption" alt=""></a>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <h5><a href="#">Apartamento</a></h5>
                                        <p>Todos apartamentos.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-property">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 text-center">
                                        <a href="{{url('todos-os-tipos/casa')}}"><img src="img/site/home.svg" class="circleOption" alt=""></a>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <h5><a href="#">Casa</a></h5>
                                        <p>Todas casas.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-property">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 text-center">
                                        <a href="{{url('todos-os-tipos/sala')}}"><img src="img/site/department.svg" class="circleOption" alt=""></a>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <h5><a href="#">Sala comercial</a></h5>
                                        <p>Todas salas comerciais.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-property">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 text-center">
                                        <a href="{{url('todos-os-tipos/loja')}}"><img src="img/site/front-business.svg" class="circleOption" alt=""></a>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <h5><a href="#">Loja</a></h5>
                                        <p>Todas lojas.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
               
            </div>
            end sidebar -->
        </div>
        <section class="module">
            <div class="container">
                <div class="row grid-blog" style="position: relative; height: 1575px;">
                    <div class="col-lg-4 col-md-4" style="position: absolute; left: 0px; top: 0px;">
                        <div class="blog-post blog-post-creative shadow-hover">
                            <a href="#" class="blog-post-img">
                                <div class="img-fade"></div>
                                <div class="img-overlay  blacker"> </div>
                                <img src="https://i.imgur.com/eD1jkT1.png" alt="">
                            </a>
                            <div class="content blog-post-content content_fixed">
                                <h3 class="text-center">
                                    <a href="#" target="_blank">Extrato de Repasse</a></h3>
                                <p class="text-center">
                                    Cadastre-se aqui para receber seu extrato via e-mail ou solicite sua 2ª via...  
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4" style="position: absolute; left: 0px; top: 0px;">
                            <div class="blog-post blog-post-creative shadow-hover">
                                <a href="#" class="blog-post-img">
                                    <div class="img-fade"></div>
                                    <div class="img-overlay  blacker"> </div>
                                    <img src="https://i.imgur.com/eD1jkT1.png" alt="">
                                </a>
                                <div class="content blog-post-content content_fixed">
                                    <h3 class="text-center"><a href="#">
                                        Reserva de chaves</a></h3>
                                    <p class="text-center">
                                        Reserve as chaves para visitar o imóvel escolhido.
                                    </p>
                                    
                                      
                                </div>
                            </div>
                        </div>
                    <div class="col-lg-4 col-md-4" style="position: absolute; left: 0px; top: 0px;">
                        <div class="blog-post blog-post-creative shadow-hover">
                            <a href="#" class="blog-post-img">
                                <div class="img-fade"></div>
                                <div class="img-overlay  blacker"> </div>
                                <img src="https://i.imgur.com/eD1jkT1.png" alt="">
                            </a>
                            <div class="content blog-post-content content_fixed">
                                <h3 class="text-center"><a href="#">Delivery</a></h3>
                                <p class="text-center">
                                    Agende sua visita que nós levamos a chave para você!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4" style="position: absolute; left: 0px; top: 0px;" style="height:194px;">
                        <div class="blog-post blog-post-creative shadow-hover">
                            <a href="#" class="blog-post-img">
                                <div class="img-fade"></div>
                                <div class="img-overlay  blacker"> </div>
                                <img src="https://i.imgur.com/eD1jkT1.png" alt="">
                            </a>
                            <div class="content blog-post-content content_fixed">
                                <h3 class="text-center"><a href="http://espindolaimobiliaria.com.br/escolhaazul/proposta/" target="_blank">
                                        Proposta para locação</a></h3>
                                <p class="text-center">
                                    Gostou de algum imóvel? Faça sua proposta aqui...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4" style="position: absolute; left: 0px; top: 0px;">
                        <div class="blog-post blog-post-creative shadow-hover">
                            <a href="#" class="blog-post-img">
                                <div class="img-fade"></div>
                                <div class="img-overlay  blacker"> </div>
                                <img src="https://i.imgur.com/eD1jkT1.png" alt="">
                            </a>
                            <div class="content blog-post-content content_fixed">
                                <h3 class="text-center"><a href="https://espindolaimobil.superlogica.net/clients/areadocliente"  target="_blank">Boleto do Aluguel</a></h3>
                                <p class="text-center">
                                        Caso não tenha recebido seu boleto, solicite sua 2ª via aqui.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4" style="position: absolute; left: 0px; top: 0px;">
                        <div class="blog-post blog-post-creative shadow-hover">
                            <a href="#" class="blog-post-img">
                                <div class="img-fade"></div>
                                <div class="img-overlay  blacker"> </div>
                                <img src="https://i.imgur.com/eD1jkT1.png" alt="">
                            </a>
                            <div class="content blog-post-content content_fixed">
                                <h3 class="text-center"><a href="https://www.espindola.imb.br/iptu2019" target="_blank">
                                        IPTU 2019</a></h3>
                                <p class="text-center">
                                        Acompanhe aqui as regras e procedimentos para 2019.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4" style="position: absolute; left: 0px; top: 0px;">
                        <div class="blog-post blog-post-creative shadow-hover">
                            <a href="#" class="blog-post-img">
                                <div class="img-fade"></div>
                                <div class="img-overlay  blacker"> </div>
                                <img src="https://i.imgur.com/eD1jkT1.png" alt="">
                            </a>
                            <div class="content blog-post-content content_fixed">
                                <h3 class="text-center"><a href="https://www.espindola.imb.br/indique-um-amigo">
                                        Indique um amigo</a></h3>
                                <p class="text-center">
                                    Preparamos neste ano uma promoção especial para você cliente. Confira! 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4" style="position: absolute; left: 0px; top: 0px;">
                        <div class="blog-post blog-post-creative shadow-hover">
                            <a href="#" class="blog-post-img">
                                <div class="img-fade"></div>
                                <div class="img-overlay  blacker"> </div>
                                <img src="https://i.imgur.com/eD1jkT1.png" alt="">
                            </a>
                            <div class="content blog-post-content content_fixed">
                                <h3 class="text-center"><a href="https://www.espindola.imb.br/inspeo-predial">Inspeção Predial</a></h3>
                                <p class="text-center">
                                        Acesse aqui para saber mais sobre a lei de inspeção predial da cidade de Fortaleza.
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4" style="position: absolute; left: 0px; top: 0px;">
                            <div class="blog-post blog-post-creative shadow-hover">
                                <a href="#" class="blog-post-img">
                                    <div class="img-fade"></div>
                                    <div class="img-overlay  blacker"> </div>
                                    <img src="https://i.imgur.com/eD1jkT1.png" alt="">
                                </a>
                                <div class="content blog-post-content content_fixed">
                                    <h3 class="text-center"><a href="#">Reformas e Reparos </a></h3>
                                    <p class="text-center">
                                        Com o intuito de agilizar o processo de locaçao, adiministramos pequenas reformas e reparos.
                                    </p>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
    </div>
</section>
@include('site.pages.top_footer')
@include('site.footer')
@endsection