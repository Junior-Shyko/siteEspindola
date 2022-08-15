@extends('layouts.site')
@section('title', 'A Espíndola')
@section('sidebar')
@parent
@endsection
@section('content')
<section class="subheader">
    <div class="container">
        <h1>A Espíndola</h1>
        {{-- <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">A Espíndola</a></div> --}}
        <div class="clear"></div>
    </div>
</section>
<section class="module content about-espindola">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <h3>A Espíndola Imobiliária.</h3>
                <img src="img/site/divider-half-blue.png" alt=""><br><br>
                <div class="col-md-2 pull-left">
                        <i class="fa fa-quote-left fa-3x pull-right" aria-hidden="true"></i>
                </div>
                <div class="col-md-10" style="text-align: justify;">
                        <p class="pull-left about-text-indent-p">A escolha do nome <strong>Espíndola</strong> representa uma justa homenagem ao meu tio e mentor 
                            <a href="http://espindolaimb.wix.com/itamarespindola" class="link" target="_blank" ><strong> Dr. Itamar de Santiago Espíndola</strong></a>, 
                            citado como um dos mais respeitados causídicos do Estado do Ceará, 
                            que se destacou, dentre outras coisas, como o mais importante estudioso da Lei do Inquilinato, compondo uma vasta produção jurídica sobre o assunto.
                          
                        </p>
                        <p class="about-text-indent-p">
                                Desde o início de nossas atividades, trabalhamos com locação e administração de imóveis, sempre tendo como filosofia a prestação de serviços especializados
                                e diferenciados, voltados para a satisfação e segurança dos nossos clientes, parceiros e colaboradores.   
                            </p>
                            <p  class="about-text-indent-p">
                                Acredito que a principal razão do sucesso da Espíndola Imobiliária seja a credibilidade adquirida ao longo de mais de 30 anos de dedicação aliada à 
                                tradição, ao profissionalismo e aos contínuos investimentos em tecnologia e qualidade.
                            </p>
                </div>
               
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12">
                
                <div class="col-md-12  col-xs-12">
                    <br><br><br>
                    <img src="https://static.wixstatic.com/media/cffaeb_187048c8d1c94401b88c7ca5859a2747~mv2.jpg/v1/crop/x_0,y_0,w_503,h_638/fill/w_131,h_170,al_c,q_80,usm_0.66_1.00_0.01/cffaeb_187048c8d1c94401b88c7ca5859a2747~mv2.webp" alt="">
                </div>  
                <div class="col-md-12 col-xs-12">
                    <br>
                    <h4 class="pull-left">Bernadete Espíndola</h4>
                </div>
                <div class="col-md-12 col-xs-12">                        
                    <span class="pull-left">Diretora</span>
                    <br>
                </div>              
                <div class="clear"></div>
            </div> 
        </div>
    </div>
</section>
<section class="module contact-espindola">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">
                    <span style="color: #fff;">
                        A Espíndola Imobiliária é reconhecida por prestar serviços de locação e vendas de imóveis no mais elevado padrão de qualidade. Tudo isto só é possível porque temos uma equipe de alto nível!
                    </span>
                </h3>
            </div>
        </div>
        <div class="row" align="center">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/RyjXjZp5tRk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div><!-- end row -->
  
    </div>
  </section>
{{-- <section class="module testimonials">

    <div class="container">
        <div class="module-header">
        <h2>Our <strong>Testimonials</strong></h2>
        <img src="images/divider-white.png" alt="">
        <p>Morbi accumsan ipsum velit nam nec tellus a odiose tincidunt auctor a ornare odio sed non mauris vitae erat consequat auctor</p>
        </div>
    </div>
    
    <div class="slider-nav slider-nav-testimonials">
        <span class="slider-prev slick-arrow" style=""><i class="fa fa-angle-left"></i></span>
        <span class="slider-next slick-arrow" style=""><i class="fa fa-angle-right"></i></span>
    </div>
    
    <div class="container">
        <div class="slider slider-testimonials slick-initialized slick-slider">
        <div aria-live="polite" class="slick-list draggable" style="height: 398px;"><div class="slick-track" role="listbox" style="opacity: 1; width: 4560px; transform: translate3d(-2280px, 0px, 0px);"><div class="testimonial slide slick-slide slick-cloned initialized" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 1140px;">
            <h3>"Homely helped us sell our house with minimal effort. Their team was efficient and always there to help! Homely helped us sell our house with minimal effort. Their team was efficient and always there to help!"</h3>
            <div class="testimonial-details">
            <img class="testimonial-img" src="images/testimonial-img.png" alt="">
            <p class="testimonial-name"><strong>John Doe</strong></p>
            <span class="testiomnial-title"><em>CEO at <a href="#" tabindex="-1">Rype Creative</a></em></span>
            </div>
        </div><div class="testimonial slide slick-slide initialized" data-slick-index="0" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide10" style="width: 1140px;">
            <h3>"Homely helped us sell our house with minimal effort. Their team was efficient and always there to help!"</h3>
            <div class="testimonial-details">
            <img class="testimonial-img" src="images/testimonial-img.png" alt="">
            <p class="testimonial-name"><strong>John Doe</strong></p>
            <span class="testiomnial-title"><em>CEO at <a href="#" tabindex="-1">Rype Creative</a></em></span>
            </div>
        </div><div class="testimonial slide slick-slide initialized slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide11" style="width: 1140px;">
            <h3>"Homely helped us sell our house with minimal effort. Their team was efficient and always there to help! Homely helped us sell our house with minimal effort. Their team was efficient and always there to help!"</h3>
            <div class="testimonial-details">
            <img class="testimonial-img" src="images/testimonial-img.png" alt="">
            <p class="testimonial-name"><strong>John Doe</strong></p>
            <span class="testiomnial-title"><em>CEO at <a href="#" tabindex="0">Rype Creative</a></em></span>
            </div>
        </div><div class="testimonial slide slick-slide slick-cloned initialized" data-slick-index="2" aria-hidden="true" tabindex="-1" style="width: 1140px;">
            <h3>"Homely helped us sell our house with minimal effort. Their team was efficient and always there to help!"</h3>
            <div class="testimonial-details">
            <img class="testimonial-img" src="images/testimonial-img.png" alt="">
            <p class="testimonial-name"><strong>John Doe</strong></p>
            <span class="testiomnial-title"><em>CEO at <a href="#" tabindex="-1">Rype Creative</a></em></span>
            </div>
        </div></div></div>
        
        </div><!-- end slider -->
    </div><!-- end container -->
</section> --}}

<section class="module content">
    <div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="">
                <div class="content blog-post-content">
                    
                    <h3>Somos Associados à AADIC</h3>
                    <img src="img/site/divider-half-blue.png" alt=""><br><br>
                    <div class="row">
                        <div class="col-md-6"  style="text-align: justify;">
                            <p >
                                No dia 02 de Abril de 1982 foi fundada a AADIC – <strong>Associação das Administradoras de Imóveis do Ceará</strong>.
                                Hoje, com 31 anos, é uma dessas organizações que luta pelo crescimento do seu setor. Durante todos esses anos, com o trabalho de várias diretorias, 
                                a AADIC teve papel extremamente importante na construção do mercado imobiliário cearense, que atualmente é, inclusive, reconhecido nacionalmente pela
                                qualidade dos serviços prestados pelas empresas que se dedicam à locação e à administração de imóveis, dentre elas podemos destacar 
                                a <strong>Espíndola Imobiliária</strong>.
                            </p>
                        </div>
                        <div class="col-md-6 hidden-xs">
                            <iframe width="460" height="315" src="https://www.youtube.com/embed/cDyn1vRPCOk" frameborder="0" 
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <br>
                            <div class="divider"></div>
                        </div>
                        <div class="clear">
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Quem já alugou com a Espíndola</h3>
                            <img src="img/site/divider-half-blue.png" alt=""><br><br>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="widget widget-sidebar recent-properties">
                                <div class="widget-content box">
                                    <ul class="bullet-list text-left">
                                        <li>Boteco</li>
                                        <li>BM Construtora</li>
                                        <li>Colégio Antares</li>
                                        <li>Couro & Cia</li>
                                        <li>Ethernus</li>
                                        <li>HC Pneus</li>
                                        <li>TIM (Teleceará Celular S/A)</li>
                                        <li>Sobrancelhas Design</li>
                                        <li>Distrivídeo</li>
                                    </ul>
                                </div>
                                <!-- end widget content -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="widget widget-sidebar recent-properties">
                                <div class="widget-content box">
                                    <ul class="bullet-list text-left">
                                        <li>Arquidiocese de Fortaleza</li>
                                        <li>Sodie Doces</li>
                                        <li>Escola Creche Cora Kids</li>
                                        <li>Fastjob</li>
                                        <li>Prestaserv</li>
                                        <li>Shalom</li>
                                        <li>5 à Sec</li>
                                        <li>Construtora Granito</li>
                                        <li>X da Mirian</li>
                                    </ul>
                                </div>
                                <!-- end widget content -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end blog posts -->
    </div>
</section>

@include('site.footer')
@endsection