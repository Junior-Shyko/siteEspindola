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
                        <div class="blog-post service-post-creative shadow-hover">
                            <a href="#" class="service-post-img">
                                <div class="img-fade"></div>
                                <div class="img-overlay">
                                    <i class="fa fa-file-text"></i>
                                </div>
                                <div class="blog-post-date white-date"><span>10</span>FEB</div>
                                <img src="{{'https://i.imgur.com/UHIWiz2.jpg'}}" alt="Extrato de Repasse">
                            </a>
                            <div class="content blog-post-content content_fixed">
                                <h3 class="text-center">Extrato de Repasse</h3>
                                <p class="text-center">
                                    Entre em contato conosco para receber seu extrato via e-mail ou solicite sua 2ª via.
                                </p>
                                <div class="form-block text-center">
                                    <p>
                                        <a href="https://espindolaimobil.superlogica.net/clients/areadofornecedor" class="saiba-mais" target="_blank">
                                            Acessar Repasse
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4" style="position: absolute; left: 0px; top: 0px;">
                            <div class="blog-post service-post-creative shadow-hover">
                                <a href="#" class="service-post-img">
                                    <div class="img-fade"></div>
                                    <div class="img-overlay">
                                        <i class="fa fa-key"></i>
                                    </div>
                                    <div class="blog-post-date white-date"><span>10</span>FEB</div>
                                    <img src="{{'https://i.imgur.com/UHIWiz2.jpg'}}" alt="Reserva de chaves">
                                </a>
                                <div class="content blog-post-content content_fixed">
                                    <h3 class="text-center">Reserva de chaves</h3>
                                    <p class="text-center">
                                        Reserve as chaves para visitar o imóvel escolhido.
                                    </p>
                                    <div class="form-block text-center">
                                        <p>
                                            <a href="https://api.whatsapp.com/send?phone=5585988101166&text=Ol%C3%A1,%20eu%20estou%20com%20uma%20d%C3%BAvida,%20poderia%20me%20ajudar?" class="saiba-mais" target="_blank">
                                                Reservar pelo Whatsapp
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-lg-4 col-md-4" style="position: absolute; left: 0px; top: 0px;">
                        <div class="blog-post service-post-creative shadow-hover">
                            <a href="#" class="service-post-img">
                                <div class="img-fade"></div>
                                <div class="img-overlay">
                                    <i class="fa fa-share-square"></i>
                                </div>
                                <div class="blog-post-date white-date"><span>10</span>FEB</div>
                                <img src="{{'https://i.imgur.com/UHIWiz2.jpg'}}" alt="Delivery">
                            </a>
                            <div class="content blog-post-content content_fixed">
                                <h3 class="text-center">Delivery</h3>
                                <p class="text-center">
                                    Agende sua visita que nós levamos a chave para você!
                                </p>
                                <div class="form-block text-center">
                                    <p>
                                        <a href="https://api.whatsapp.com/send?phone=5585988101166&text=Ol%C3%A1,%20eu%20estou%20com%20uma%20d%C3%BAvida,%20poderia%20me%20ajudar?" class="saiba-mais" target="_blank">
                                            Agendar
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4" style="position: absolute; left: 0px; top: 0px;" style="height:194px;">
                        <div class="blog-post service-post-creative shadow-hover">
                            <a href="#" class="service-post-img">
                                <div class="img-fade"></div>
                                <div class="img-overlay">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </div>
                                <div class="blog-post-date white-date"><span>10</span>FEB</div>
                                <img src="{{'https://i.imgur.com/UHIWiz2.jpg'}}" alt="Proposta para locação">
                            </a>
                            <div class="content blog-post-content content_fixed">
                                <h3 class="text-center">
                                        Proposta para locação
                                </h3>
                                <p class="text-center">
                                    Gostou de algum imóvel? Faça sua proposta aqui...
                                </p>
                                <div class="form-block text-center">
                                    <p>
                                        <a href="http://espindolaimobiliaria.com.br/escolhaazul/" class="saiba-mais" target="_blank">
                                            Fazer proposta
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4" style="position: absolute; left: 0px; top: 0px;">
                        <div class="blog-post service-post-creative shadow-hover">
                            <a href="#" class="service-post-img">
                                <div class="img-fade"></div>
                                <div class="img-overlay">
                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                </div>
                                <div class="blog-post-date white-date"><span>10</span>FEB</div>
                                <img src="{{'https://i.imgur.com/UHIWiz2.jpg'}}" alt="Boleto do Aluguel">
                            </a>
                            <div class="content blog-post-content content_fixed">
                                <h3 class="text-center">Boleto do Aluguel</h3>
                                <p class="text-center">
                                    Caso não tenha recebido seu boleto, solicite sua 2ª via aqui.
                                </p>
                                <div class="form-block text-center">
                                    <p>
                                        <a href="https://espindolaimobil.superlogica.net/clients/areadocliente/" class="saiba-mais" target="_blank">
                                            2ª via de boleto
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4" style="position: absolute; left: 0px; top: 0px;">
                        <div class="blog-post service-post-creative shadow-hover">
                            <a href="#" class="service-post-img">
                                <div class="img-fade"></div>
                                <div class="img-overlay">
                                    <i class="fa fa-file-o" aria-hidden="true"></i>
                                 </div>
                                 <div class="blog-post-date white-date"><span>10</span>FEB</div>
                                <img src="{{'https://i.imgur.com/UHIWiz2.jpg'}}" alt="IPTU 2021">
                            </a>
                            <div class="content blog-post-content content_fixed">
                                <h3 class="text-center">IPTU 2021</h3>
                                <p class="text-center">
                                    Acompanhe aqui as regras e procedimentos para 2021.
                                </p>
                                <div class="form-block text-center">
                                    <p>
                                        <a href="https://www.sefin.fortaleza.ce.gov.br/iptu/" class="saiba-mais" target="_blank">
                                            Iptu 2021
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4" style="position: absolute; left: 0px; top: 0px;">
                        <div class="blog-post service-post-creative shadow-hover">
                            <a href="#" class="service-post-img">
                                <div class="img-fade"></div>
                                <div class="img-overlay">
                                    <i class="fa fa-handshake-o" aria-hidden="true"></i>
                                 </div>
                                 <div class="blog-post-date white-date"><span>10</span>FEB</div>
                                 <img src="{{'https://i.imgur.com/UHIWiz2.jpg'}}" alt="Indique um amigo">
                            </a>
                            <div class="content blog-post-content content_fixed">
                                <h3 class="text-center">Indique um amigo</h3>
                                <p class="text-center">
                                    Preparamos neste ano uma promoção especial para você cliente. Confira! 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4" style="position: absolute; left: 0px; top: 0px;">
                        <div class="blog-post service-post-creative shadow-hover">
                            <a href="#" class="service-post-img">
                                <div class="img-fade"></div>
                                <div class="img-overlay">
                                    <i class="fa fa-building-o" aria-hidden="true"></i>
                                 </div>
                                 <div class="blog-post-date white-date"><span>10</span>FEB</div>
                                 <img src="{{'https://i.imgur.com/UHIWiz2.jpg'}}" alt="Indique um amigo">
                            </a>
                            <div class="content blog-post-content content_fixed">
                                <h3 class="text-center">Inspeção Predial</h3>
                                <p class="text-center">
                                    Acesse aqui para saber mais sobre a lei de inspeção predial da cidade de Fortaleza.
                                </p>
                                <div class="form-block text-center">
                                    <p>
                                        <a href="https://portal.seuma.fortaleza.ce.gov.br/fortalezaonline/portal/listaservicos.jsf?hash=inspecoes_prediais/" target="_blank">
                                            Acessar
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4" style="position: absolute; left: 0px; top: 0px;">
                            <div class="blog-post service-post-creative shadow-hover">
                                <a href="#" class="service-post-img">
                                    <div class="img-fade"></div>
                                    <div class="img-overlay">
                                    <i class="fa fa-wrench" aria-hidden="true"></i>
                                 </div>
                                 <div class="blog-post-date white-date"><span>10</span>FEB</div>
                                 <img src="{{'https://i.imgur.com/UHIWiz2.jpg'}}" alt="Indique um amigo">
                                </a>
                                <div class="content blog-post-content content_fixed">
                                    <h3 class="text-center">Reformas e Reparos</h3>
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
