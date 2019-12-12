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

</style>
@section('content')
<section class="subheader">
    <div class="container">
        <h1>Área do Cliente</h1>
        <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> 
            <a href="#" class="current">Cliente</a>
        </div>
        <div class="clear"></div>
    </div>
</section>
<section class="module">
    <div class="container">
       
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="blog-post">
                    <div class="content blog-post-content">
                        <h3><a href="#">Área do Cliente</a></h3>
                        <p>
                            <br>
                            <strong>A Espíndola</strong> não pensa apenas em alugar o seu imóvel, mas, também, em lhe proporcionar todo o suporte necessário para que você se 
                            sinta seguro e tranquilo na concretização dos seus negócios imobiliários. Estes são alguns dos serviços que a Espíndola tem a oferecer:
                        </p>
                        <p>
                            
                            Nam porttitor nunc volutpat, bibendum mauris quis, volutpat diam. Nullam vehicula urna id lectus commodo feugiat. Suspendisse sit amet pretium nisi, at placerat lorem. Nunc placerat sapien lectus. Maecenas in elit vitae lacus lacinia convallis sed non lectus. Integer blandit elementum ipsum, ornare porttitor nulla gravida at. 
                            Maecenas maximus ac nisl sed euismod. Morbi fermentum augue vitae eleifend iaculis. Nulla egestas ullamcorper mi, id eleifend arcu dignissim vel.
                        </p>
                    </div>
                </div>
                <!-- end blog post -->
            </div>
            <!-- end blog posts -->
            <div class="col-lg-4 col-md-4 sidebar">
                <div class="widget widget-sidebar recent-properties">
                    <div class="widget-content box">
                        <h4><span>Procure por imóvel</span> <img src="img/site/divider-half.png" alt=""></h4>
                        <div class="widget-content">
                            <div class="recent-property">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <a href="{{url('todos-os-tipos/apartamento')}}"><img src="http://nightshiftcreative.co/static/homely/images/property-img1.jpg" alt=""></a>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <h5><a href="#">Apartamento</a></h5>
                                        <p>Todos apartamentos.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-property">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <a href="{{url('todos-os-tipos/casa')}}"><img src="http://nightshiftcreative.co/static/homely/images/property-img1.jpg" alt=""></a>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <h5><a href="#">Casa</a></h5>
                                        <p>Todas casas.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-property">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <a href="{{url('todos-os-tipos/sala')}}"><img src="http://nightshiftcreative.co/static/homely/images/property-img1.jpg" alt=""></a>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <h5><a href="#">Sala comercial</a></h5>
                                        <p>Todas salas comerciais.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-property">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <a href="{{url('todos-os-tipos/loja')}}"><img src="http://nightshiftcreative.co/static/homely/images/property-img1.jpg" alt=""></a>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <h5><a href="#">Loja</a></h5>
                                        <p>Todas lojas.</p>
                                    </div>
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
        <section class="module">
            <div class="container">
                <div class="row grid-blog" style="position: relative; height: 1575px;">
                    <div class="col-lg-4 col-md-4" style="position: absolute; left: 0px; top: 0px;">
                        <div class="blog-post blog-post-creative shadow-hover">
                            <a href="#" class="blog-post-img">
                                <div class="img-fade"></div>
                                <div class="img-overlay green"><i class="fa fa-handshake-o"></i></div>
                                <img src="img/site/imagem01.jpg" alt="">
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
                                    <div class="img-overlay green"><i class="fa fa-handshake-o"></i></div>
                                    <img src="img/site/1400x595.png" alt="">
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
                                <div class="img-overlay green"><i class="fa fa-handshake-o"></i></div>
                                <img src="img/site/1400x595.png" alt="">
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
                                <div class="img-overlay green"><i class="fa fa-handshake-o"></i></div>
                                <img src="img/site/1400x595.png" alt="">
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
                                <div class="img-overlay green"><i class="fa fa-handshake-o"></i></div>
                                <img src="img/site/1400x595.png" alt="">
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
                                <div class="img-overlay green"><i class="fa fa-handshake-o"></i></div>
                                <img src="img/site/1400x595.png" alt="">
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
                                <div class="img-overlay green"><i class="fa fa-handshake-o"></i></div>
                                <img src="img/site/1400x595.png" alt="">
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
                                <div class="img-overlay green"><i class="fa fa-handshake-o"></i></div>
                                <img src="img/site/1400x595.png" alt="">
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
                                    <div class="img-overlay green"><i class="fa fa-handshake-o"></i></div>
                                    <img src="img/site/1400x595.png" alt="">
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
<section class="module cta image-bg">
    <div class="img-overlay blacker"></div>
    <div class="container">
        <h2>Listamos mais de <strong>2000 Propriedades</strong>.</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam gravida non metus.</p>
    </div>
    <!-- end container -->
</section>
@include('site.footer')
@endsection