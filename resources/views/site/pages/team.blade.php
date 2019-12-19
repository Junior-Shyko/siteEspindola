@extends('layouts.site')
@section('title', 'Espíndola Imobiliária')
@section('sidebar')
@parent
@endsection
@section('content')
<section class="subheader">
    <div class="container">
        <h1>Equipe Espíndola</h1>
        <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> 
            <a href="#" class="current">Time</a>
        </div>
        <div class="clear"></div>
    </div>
</section>
<section class="module">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- 
                    <div class="property-listing-header">
                        <span class="property-count left">8 agents found</span>
                        <form action="#" method="get" class="right">
                            <select name="sort_by" onchange="this.form.submit();" style="display: none;">
                                <option value="date_desc">New to Old</option>
                                <option value="date_asc">Old to New</option>
                                <option value="price_desc">Properties (High to Low)</option>
                                <option value="price_asc">Properties (Low to High)</option>
                            </select><div class="chosen-container chosen-container-single chosen-container-single-nosearch" style="width: 204px;" title=""><a class="chosen-single"><span>New to Old</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chosen-results"></ul></div></div>
                        </form>
                        <div class="property-layout-toggle right">
                            <a href="agent-listing-grid-sidebar.html" class="property-layout-toggle-item"><i class="fa fa-th-large"></i></a>
                            <a href="agent-listing-row-sidebar.html" class="property-layout-toggle-item active"><i class="fa fa-bars"></i></a>
                        </div>
                        <div class="clear"></div>
                    </div>end agent listing header -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="agent agent-row agent-row-sidebar shadow-hover">
                            <a href="#" class="agent-img">
                                <div class="img-fade"></div>
                                <img src="img/site/bernadete.jpg" alt="">
                            </a>
                            <div class="agent-content">
                                <div class="agent-details">
                                    <h4><a href="#">Bernadete Espíndola</a></h4>
                                    <p><i class="fa fa-tag icon"></i>Diretora</p>
                                    <p><i class="fa fa-phone icon"></i>(85) 3461-1166</p>
                                </div>
                                <div class="agent-text">
                                    <p> Especialista em Direito Imobiliário pela Universidade de Fortaleza – UNIFOR (2006). 
                                      Graduada em Direito pela Universidade de Fortaleza (1986). Conselheira efetiva do CRECI/CE (2016/2018). 
                                      Vice-presidente do Secovi-CE. Ex-diretora de relações públicas da AADIC (2016/2017). 
                                      Membro da Comissão de Direito Imobiliária da OAB/CE. 
                                      Corretora de Imóveis e Advogada do escritório de advocacia Itamar Espíndola Adv. Associados.
                                    </p>
                                </div>
                                <div class="agent-footer center">
                                    <ul class="social-icons circle">
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                    
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="agent agent-row agent-row-sidebar shadow-hover">
                            <a href="#" class="agent-img">
                                <div class="img-fade"></div>
                                <img src="img/site/cristiano.jpg" alt="">
                            </a>
                            <div class="agent-content">
                                <div class="agent-details">
                                    <h4><a href="#">Cristiano Espíndola</a></h4>
                                    <p><i class="fa fa-tag icon"></i>Gestor Executivo</p>
                                    <p><i class="fa fa-phone icon"></i>(123) 456-6789</p>
                                </div>
                                <div class="agent-text">                                
                                  Possui MBA em Gestão de Negócios. Graduado em Direito pela Universidade de Fortaleza.
                                  Ex-membro da Comissão de Políticas Urbanas e Direito Urbanístico da OAB/CE (2010/2012).
                                  Advogado inscrito na OAB/CE sob o nº 22.750.
                                </div>
                                <div class="agent-footer center">
                                    <ul class="social-icons circle">
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                    
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <h4>Agência Aldeota.</h4>
                        <img src="img/site/divider-half-blue.png" alt=""><br><br>
                        <div class="agent agent-row agent-row-sidebar shadow-hover">
                            <a href="#" class="agent-img">
                                <div class="img-fade"></div>
                                <img src="img/site/yara.jpg" alt="">
                            </a>
                            <div class="agent-content">
                                <div class="agent-details">
                                    <h4><a href="#">Yara Pereira</a></h4>
                                    <p><i class="fa fa-tag icon"></i>Gerente Agência Aldeota</p>
                                    <p><i class="fa fa-phone icon"></i>(85) 3461-1166</p>
                                </div>
                                <div class="agent-text">
                                    Responsável pela gerência da Espíndola Aldeota, administra a carteira de imóveis com o desafio de intermediar a 
                                    relação entre inquilinos e proprietários. 
                                    ormada em Gestão de Recursos Humanos, com Pós-Graduação em Gestão Empresarial pela Faculdade Farias Brito.
                                </div>
                                <div class="agent-footer center">
                                    <ul class="social-icons circle">
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                    
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="agent agent-row agent-row-sidebar shadow-hover">
                            <a href="#" class="agent-img">
                                <div class="img-fade"></div>
                                <img src="img/site/jessyca.jpg" alt="">
                            </a>
                            <div class="agent-content">
                                <div class="agent-details">
                                    <h4><a href="#">Gessica Costa</a></h4>
                                    <p><i class="fa fa-tag icon"></i>Administrativo & Financeiro</p>
                                    <p><i class="fa fa-phone icon"></i>(85) 3461-1166</p>
                                </div>
                                <div class="agent-text">
                                    Graduanda em Ciências Contábeis, é responsável por auxiliar na resolução dos assuntos 
                                    administrativos e financeiros.
                                </div>
                                <div class="agent-footer center">
                                    <ul class="social-icons circle">
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                   
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="agent agent-row agent-row-sidebar shadow-hover">
                            <a href="#" class="agent-img">
                                <div class="img-fade"></div>
                                <img src="img/site/karine.jpg" alt="">
                            </a>
                            <div class="agent-content">
                                <div class="agent-details">
                                    <h4><a href="#">Ana Karine Sousa </a></h4>
                                    <p><i class="fa fa-tag icon"></i>Administrativo & Financeiro</p>
                                    <p><i class="fa fa-phone icon"></i>(85) 3461-1166</p>
                                </div>
                                <div class="agent-text">
                                    Graduada em Administração, é responsável por auxiliar principalmente na gestão da carteira de imóveis, 
                                    estando sempre disponível para ajudar nosso clientes e inquilinos. 
                                </div>
                                <div class="agent-footer center">
                                    <ul class="social-icons circle">
                                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    {{-- AGENCIA fÁTIMA --}}
                    <div class="col-lg-12">
                        <h4>Agência Fátima.</h4>
                        <img src="img/site/divider-half-blue.png" alt=""><br><br>
                        <div class="agent agent-row agent-row-sidebar shadow-hover">
                            <a href="#" class="agent-img">
                                <div class="img-fade"></div>
                                <img src="img/site/yohana.jpg" alt="">
                            </a>
                            <div class="agent-content">
                                <div class="agent-details">
                                    <h4><a href="#">Yohana Martins</a></h4>
                                    <p><i class="fa fa-tag icon"></i>Comercial</p>
                                    <p><i class="fa fa-phone icon"></i>(85) 3038-0014</p>
                                </div>
                                <div class="agent-text">
                                    Pós-graduanda em Gestão de Negócios, Graduada em Design de Interiores, e com Curso Técnica em Transações Imobiliárias (2019), 
                                    já possui excelente experiência na área comercial e está pronta para ajudar nossos clientes a alugarem ou venderem seus imóveis.
                                </div>
                                <div class="agent-footer center">
                                    <ul class="social-icons circle">
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                    
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="agent agent-row agent-row-sidebar shadow-hover">
                            <a href="#" class="agent-img">
                                <div class="img-fade"></div>
                                <img src="img/site/sandy.jpg" alt="">
                            </a>
                            <div class="agent-content">
                                <div class="agent-details">
                                    <h4><a href="#">Sandy Melo </a></h4>
                                    <p><i class="fa fa-tag icon"></i>Administrativo & Financeiro</p>
                                    <p><i class="fa fa-phone icon"></i>(85) 3038-0014</p>
                                </div>
                                <div class="agent-text">
                                    Graduada em Finanças pela Universidade Federal do Ceará (2019), 
                                    é responsável pela gestão das contas, além de auxiliar em todos os assuntos relacionados com administrativo e o financeiro.
                                </div>
                                <div class="agent-footer center">
                                    <ul class="social-icons circle">
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <h4>
                            Equipe Jurídico.
                        </h4>
                        <img src="img/site/divider-half-blue.png" alt=""><br><br>
                        <div class="agent agent-row agent-row-sidebar shadow-hover">
                            <a href="#" class="agent-img">
                                <div class="img-fade"></div>
                                <img src="img/site/adriano.jpg" alt="">
                            </a>
                            <div class="agent-content">
                                <div class="agent-details">
                                    <h4><a href="#">Adriano Espindola</a></h4>
                                    <p><i class="fa fa-tag icon"></i>Jurídico</p>
                                </div>
                                <div class="agent-text">
                                    Doutorando em Direito Civil pela Universidade de Salamanca-Espanha. Mestre e especialista em Direito Civil. 
                                    Especialista em Direito Público Municipal. Graduado em Direito pela Universidade de Fortaleza (2009). 
                                    Atualmente é responsável pelas demandas jurídicas da carteira de imóveis da nossa agência do bairro Aldeota, bem como pelos casos estratégicos. 
                                </div>
                                <div class="agent-footer center">
                                    <ul class="social-icons circle">
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                    
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="agent agent-row agent-row-sidebar shadow-hover">
                          <a href="#" class="agent-img">
                              <div class="img-fade"></div>
                              <img src="img/site/aline.jpg" alt="">
                          </a>
                          <div class="agent-content">
                              <div class="agent-details">
                                  <h4><a href="#">Aline Costa </a></h4>
                                  <p><i class="fa fa-tag icon"></i>Jurídico</p>
                                 
                              </div>
                              <div class="agent-text">
                                  Graduada em Direito pela Estácio (2018), iniciou suas atividades conosco no ano de 2015 na qualidade de estagiária, onde desde então adquiriu muita experiência na área imobiliária e sucessória. 
                                  Atualmente é responsável pelas demandas jurídicas da carteira de imóveis da nossa agência do bairro de Fátima e assessora a nossa equipe de vendas.
                              </div>
                              <div class="agent-footer center">
                                  <ul class="social-icons circle">
                                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                  </ul>
                                  
                              </div>
                          </div>
                          <div class="clear"></div>
                      </div>
                  </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end col -->
            {{-- <div class="col-lg-4 col-md-4 sidebar">
                <div class="widget widget-sidebar recent-properties">
                    <div class="widget-content box">
                        <h4><span>Procure por imóvel</span> <img src="img/site/divider-half.png" alt=""></h4>
                        <div class="widget-content">
                            <div class="recent-property">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <a href="http://138.68.230.108:3060/todos-os-tipos/apartamento"><img src="http://nightshiftcreative.co/static/homely/images/property-img1.jpg" alt=""></a>
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
                                        <a href="http://138.68.230.108:3060/todos-os-tipos/casa"><img src="http://nightshiftcreative.co/static/homely/images/property-img1.jpg" alt=""></a>
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
                                        <a href="http://138.68.230.108:3060/todos-os-tipos/sala"><img src="http://nightshiftcreative.co/static/homely/images/property-img1.jpg" alt=""></a>
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
                                        <a href="http://138.68.230.108:3060/todos-os-tipos/loja"><img src="http://nightshiftcreative.co/static/homely/images/property-img1.jpg" alt=""></a>
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
            </div> --}}
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
@include('site.footer')
@endsection