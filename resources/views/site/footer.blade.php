
<section class="module cta newsletter">
@php $site = \SiteEspindola\Site::getInfoSite();  @endphp
  <div class="container">
	<div class="row">
		<div class="col-lg-7 col-md-7">
            <div class="col-md-3">
                <br><img src="https://i.imgur.com/jydMhSR.png" alt="" class="pull-right">
            </div>
            <div class="col-md-9"  style="color: #002266;">
                <h3 style="color: #002266;">Inscreva-se para o nosso<strong> newsletter.</strong></h3>
                <p>Enviamos mensalmente as principais notícias e novidades do mercado imobiliário.</p>
            </div>
			
		</div>
		<div class="col-lg-5 col-md-5">
            {{ Form::open(['route' => 'create-news' , 'method' => 'post' , 'id' => 'newsletter-form' , 'class' => 'newsletter-form']) }}		
				<input type="email" name="newsletters_email" placeholder="Digite o seu e-mail" />
				<button type="submit" form="newsletter-form"><i class="fa fa-send"></i></button>
			{{ Form::close() }}
		</div>
	</div><!-- end row -->
  </div><!-- end container -->
</section>

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 widget footer-widget">
                <a class="footer-logo" href="index.html"><img src="https://i.imgur.com/orVOsad.png" alt="Homely" /></a>
                <p><strong>Espíndola Imobiliária</strong>- CRECI/CE 847J<br>CNPJ: 09.652.345/0001-02</p>
                <div class="divider"></div>
                <ul class="social-icons circle">
                    <li><a href="https://www.facebook.com/espindolaimobiliaria" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/espindolaimobiliaria/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://plus.google.com/u/0/100490517695208314633" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="https://www.youtube.com/c/espindolaimobiliariafortaleza" target="_blank"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="https://pt.linkedin.com/company/espíndola-imobiliária" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 widget footer-widget from-the-blog">
                <h4><span>Administração e Financeiro</span> <img src="{{ url('/img/site/divider-half.png') }}" alt="" /></h4>
                <b class="open-hours">Endereço</b><br/>
                <p>
                    {{$site[0]->sites_addressMatrix}}, 
                    {{$site[0]->sites_numberMatrix}}, 
                    {{$site[0]->sites_compMatrix}}<br>
                    {{$site[0]->sites_districtMatrix}} - 
                    {{$site[0]->sites_cityMatrix}} - 
                    {{$site[0]->sites_stateMatrix}} - 
                    <br>Brasil - 
                    CEP:{{$site[0]->sites_codePostalMatrix}}</p>
                <p>
                <b class="open-hours">Horário de Funcionamento</b><br/>
                Segunda à Quinta: 8h às 18h<br/>
                Sexta: 8h às 17h30<br/>
                Sábado: 9h às 13h</p>
                <p class="footer-phone"><i class="fa fa-phone icon"></i> 
                    +55 {{$site[0]->sites_phoneFixed}}</p>
                <p class="footer-phone"><i class="fa fa-whatsapp"></i> 
                    +55 {{$site[0]->sites_phoneMobile}}</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 widget footer-widget">
                <h4><span>Comercial</span> <img src="{{ url('/img/site/divider-half.png') }}" alt="" /></h4>
                <b class="open-hours">Endereço</b><br/>
                <p>
                    {{$site[0]->sites_addressBranch}}, 
                    {{$site[0]->sites_numberBranch}}<br>
                    {{$site[0]->sites_districtBranch}} - 
                    {{$site[0]->sites_cityBranch}} - 
                    {{$site[0]->sites_stateBranch}}<br>
                    Brasil - 
                    CEP: {{$site[0]->sites_codePostalBranch}}</p>
                <p>
                <b class="open-hours">Horário de Funcionamento</b><br/>
                Segunda à Sexta: 8:00h às 17h<br/>
                </p>
                <p class="footer-phone"><i class="fa fa-phone icon"></i> 
                    +55 {{$site[0]->sites_phoneFixed}}</p>
                <p class="footer-phone"><i class="fa fa-whatsapp"></i> 
                    +55 {{$site[0]->sites_phoneMobile}}</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 widget footer-widget newsletter">
                <h4><span>Newsletter</span> <img src="{{ url('/img/site/divider-half.png') }}" alt="" /></h4>
                <p><b>Se inscreva em nossa newsletter!</b> Enviamos mensalmente as principais notícias e novidades do mercado imobiliário.</p>
                <form class="subscribe-form" method="post" action="#">
                    <input type="text" name="email" value="Seu e-mail" />
                    <input type="submit" name="submit" value="Enviar" class="button small alt" />
                </form>
            </div>
        </div><!-- end row -->
    </div><!-- end footer container -->
</footer>

<div class="bottom-bar">
    <div class="container">
    © 2018  |  Espíndola Imobiliária LTDA. |  Todos os direitos reservados.
    </div>
</div>