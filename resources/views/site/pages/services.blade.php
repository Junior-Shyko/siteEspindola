@extends('layouts.site')
@section('title', 'Espíndola Imobiliária')
@section('sidebar')
@parent
@endsection
<style>
.content_fixed{
    height: 194px;
    overflow: hidden;
}

</style>
@section('content')
<section class="subheader">
    <div class="container">
        <h1>Serviços</h1>
        <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> 
            <a href="#" class="current">Serviços</a>
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
                        <h3><a href="#">Nossos serviços</a></h3>
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
                                <img src="img/site/1400x595.png" alt="">
                            </a>
                            <div class="content blog-post-content content_fixed">
                                <h3 class="text-center"><a href="#">Locação</a></h3>
                                <p class="text-center">
                                    A nossa equipe de locação experiente e comprometida está pronta para alugar o seu imóvel
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
                                <h3 class="text-center"><a href="#">Administração de Imóveis</a></h3>
                                <p class="text-center">
                                    Fazemos toda a gestão da locação do seu imóvel até a sua desocupação no mesmo estado em que foi locado.  
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
                                <h3 class="text-center"><a href="#">Avaliação Imobiliária</a></h3>
                                <p class="text-center">
                                    Avaliamos o seu imóvel.
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
                                <h3 class="text-center"><a href="#">Vistoria Imobiliária</a></h3>
                                <p class="text-center">
                                    Laudo de vistoria completo com imagens e detalhes de todos os ambientes do imóvel.
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
                                <h3 class="text-center"><a href="#">Aluguel Garantido</a></h3>
                                <p class="text-center">
                                    Garantimos até 03 meses de aluguel, condomínio e IPTU em caso de atraso no pagamento. Confira!
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
                                <h3 class="text-center"><a href="#">Compra e Venda de Imóveis</a></h3>
                                <p class="text-center">
                                    Você pode contar com os corretores e imobiliárias conveniados à Espíndola. Confira!
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
                    <div class="col-lg-4 col-md-4" style="position: absolute; left: 0px; top: 0px;">
                        <div class="blog-post blog-post-creative shadow-hover">
                            <a href="#" class="blog-post-img">
                                <div class="img-fade"></div>
                                <div class="img-overlay green"><i class="fa fa-handshake-o"></i></div>
                                <img src="img/site/1400x595.png" alt="">
                            </a>
                            <div class="content blog-post-content content_fixed">
                                <h3 class="text-center"><a href="#">Regularização Imobiliária</a></h3>
                                <p class="text-center">
                                    Problemas com a documentação do seu imóvel? Nós podemos lhe ajudar!
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
                                <h3 class="text-center"><a href="#">Assessoria Jurídica</a></h3>
                                <p class="text-center">
                                    A nossa equipe de locação experiente e comprometida está pronta para alugar o seu imóvel
                                </p>
                                <button type="button" class="btn btn-default btn-block read_services" 
                                data-container="body" data-toggle="popover" data-placement="top" 
                                id="read_services_juri">
                                    Saiba mais
                                  </button>
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