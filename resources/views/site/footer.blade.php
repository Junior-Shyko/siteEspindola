

  <div class="container">
    @php $site = \SiteEspindola\Site::getInfoSite();  @endphp
  </div><!-- end container -->


<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 widget footer-widget text-center">
                <a class="footer-logo" href="#"><img src="https://i.imgur.com/orVOsad.png" alt="Homely" /></a>
                <p><strong>Espíndola Imobiliária</strong>- CRECI/CE 847J<br>CNPJ: 09.652.345/0001-02</p>
                <div class="divider"></div>
                <ul class="social-icons circle">
                    <li><a href="https://www.facebook.com/espindolaimobiliaria" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/espindolaimobiliaria/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/c/espindolaimobiliariafortaleza" target="_blank"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="https://pt.linkedin.com/company/espíndola-imobiliária" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                </ul>
                <ul class="social-icons">
                    <li>
                        <br>
                        <a href="{{url('sync')}}" target="_blank">Sincronizar</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 widget footer-widget from-the-blog  text-center">
                <h4><span>Comercial</span> <img src="{{ url('/img/site/divider-half.png') }}" alt="" /></h4>
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
           
            {{-- <div class="col-lg-4 col-md-4 col-sm-4 widget footer-widget text-center">
                <a href="https://www.cactoscoworking.com.br/" target="_blank"><img src="https://static.wixstatic.com/media/224bc3_b3f675c182484cd49ea69a6480fc9dfb~mv2.png/v1/fill/w_98,h_79,al_c,q_85,usm_0.66_1.00_0.01/02.webp" alt="Cactos" /></a>
                <p>  <br><strong>Cactos Coworking</strong><br>
                    Rua Ari Barroso, 70 - Sala 212, Torre 1 <br>
                    Papicu, Fortaleza - CE <br>
                    contato@cactoscoworking.com.br <br>
                    (85) 4042.0042 | 9.8800.4200 <br>
                </p>
                <div class="divider"></div>
                <ul class="social-icons circle">
                    <li><a href="https://www.google.com/maps?cid=18358593563149671868" target="_blank" title="Localização do cactos coworking"><i class="fa fa-map-marker"></i></a></li>
                    <li><a href="https://www.instagram.com/cactoscoworking/" title="instagram do cactos coworking" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.cactoscoworking.com.br/" title="Site do cactos coworking" target="_blank"><i class="fa fa-globe"></i></a></li>
                </ul>
            </div> --}}
        </div><!-- end row -->
    </div><!-- end footer container -->
</footer>

<div class="bottom-bar">
    <div class="container">
    © 2018  |  Espíndola Imobiliária LTDA. |  Todos os direitos reservados.
    </div>
</div>