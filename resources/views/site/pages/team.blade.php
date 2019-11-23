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
          
              <div class="col-lg-8 col-md-9">
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
                              
                              <img src="img/agent-img1.jpg" alt="">
                            </a>
                            <div class="agent-content">
                              <div class="agent-details">
                                <h4><a href="#">Bernadete Espíndola</a></h4>
                                <p><i class="fa fa-tag icon"></i>Diretora</p>
                                
                                <p><i class="fa fa-phone icon"></i>(85) 3461-1166</p>
                              </div>
                              <div class="agent-text">
                                   <p> Especialista em Direito Imobiliário pela Universidade de Fortaleza – UNIFOR (2006).
                                        Graduada em Direito pela Universidade de Fortaleza (19886)...
                           </p>     
                                </div>
                                <div class="agent-footer center">
                                        <ul class="social-icons circle">
                                         <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <a href="#" class="button button-icon right">
                                            <i class="fa fa-angle-right"></i>Ver detalhes</a>
                                      </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                      </div>
      
                      <div class="col-lg-12">
                        <div class="agent agent-row agent-row-sidebar shadow-hover">
                            <a href="#" class="agent-img">
                              <div class="img-fade"></div>
                              <img src="images/agent-img2.jpg" alt="">
                            </a>
                            <div class="agent-content">
                              <div class="agent-details">
                                <h4><a href="#">Cristiano Espíndola</a></h4>
                                <p><i class="fa fa-tag icon"></i>Gestor Executivo</p>
                                <p><i class="fa fa-phone icon"></i>(123) 456-6789</p>
                              </div>
                              <div class="agent-text">                                
                                Possui MBA em Gestão de Negócios. Graduado em Direito pela Universidade de Fortaleza. 
                                Ex-membro da Comissão de Políticas Urbanas e Direito...
                              </div>
                              <div class="agent-footer center">
                                <ul class="social-icons circle">
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                                <a href="#" class="button button-icon right">
                                    <i class="fa fa-angle-right"></i>Ver detalhes</a>
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
                              <img src="images/agent-img3.jpg" alt="">
                            </a>
                            <div class="agent-content">
                              <div class="agent-details">
                                <h4><a href="#">Yara Pereira</a></h4>
                                <p><i class="fa fa-tag icon"></i>Gerente Agência Aldeota</p>
                                <p><i class="fa fa-phone icon"></i>(85) 3461-1166</p>
                              </div>
                              <div class="agent-text">
                                Responsável pela gerência da Espíndola Aldeota, administra a carteira de imóveis com o desafio de
                                 intermediar a relação entre inquilinos e proprietário...
                            </div>
                              <div class="agent-footer center">
                                <ul class="social-icons circle">
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                                <a href="#" class="button button-icon right"><i class="fa fa-angle-right"></i>Ver detalhes</a>
                              </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                      </div>
      
                      <div class="col-lg-12">
                        <div class="agent agent-row agent-row-sidebar shadow-hover">
                            <a href="#" class="agent-img">
                              <div class="img-fade"></div>
                              <div class="button alt agent-tag">56 Properties</div>
                              <img src="images/agent-img4.jpg" alt="">
                            </a>
                            <div class="agent-content">
                              <div class="agent-details">
                                <h4><a href="#">Cassandra Smith</a></h4>
                                <p><i class="fa fa-tag icon"></i>Buying Agent</p>
                                <p><i class="fa fa-envelope icon"></i>csmith@homely.com</p>
                                <p><i class="fa fa-phone icon"></i>(123) 456-6789</p>
                              </div>
                              <div class="agent-text">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et...
                              </div>
                              <div class="agent-footer center">
                                <ul class="social-icons circle">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                                <a href="#" class="button button-icon right"><i class="fa fa-angle-right"></i>View Details</a>
                              </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                      </div>
      
                  </div><!-- end row -->

                  
              </div><!-- end col -->
              
              <div class="col-lg-4 col-md-4 sidebar">
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
                </div>
              
          </div><!-- end row -->
        </div><!-- end container -->
      </section>
@include('site.footer')
@endsection