  <header class="header-default">
    <div  id="demo_loc"></div>
    <div class="container">

      <!-- navbar header -->
      <div class="navbar-header">

        <div class="header-details">
        
            <div class="header-item header-phone left">
              <table>
                <tr>
                  <td><i class="fa fa-phone"></i></td>
                  <td class="header-item-text">
                    <a href="tel:{{$site[0]->sites_phoneFixed}}">
                    Ligue<br/>
                    
                    <span style="font-size: 14px;">
                    {{$site[0]->sites_phoneFixed}}
                  </a>
                    </span>
                  </td>
                </tr>
              </table>
            </div>

          
            <div class="header-item header-phone left">
            <table>
              <tr>
                <td><i class="fa fa-whatsapp"></i></td>
                <td class="header-item-text">
                  <a href="https://api.whatsapp.com/send?phone=5585989704899&text=Ol%C3%A1,%20eu%20estou%20com%20uma%20d%C3%BAvida,%20poderia%20me%20ajudar?">
                  WhatsApp<br/>
                  <span style="font-size: 14px;">{{$site[0]->sites_phoneMobile}}</span>
                </a>
                </td>
              </tr>
            </table>
          </div>
          <div class="header-item header-phone left">
            <table>
              <tr>
                <td><i class="fa fa-envelope"></i></td>
                <td class="header-item-text">
                  E-mail<br/>
                <span style="font-size: 15px; color: black;">
                  <a href="mailto:{{$site[0]->sites_email}}">{{$site[0]->sites_email}}</a>
                  {{-- <a href="mailto: meajuda@espindolaimobiliaria.com.br">meajuda@espindolaimobiliaria.com.br</a> --}}
                </span>
                </td>
              </tr>
            </table>

          </div>
          
          <div class="clear"></div>
        </div>

        <a class="navbar-brand" href="{{'/'}}"><img src="https://i.imgur.com/3aULwmb.png" alt="Espindola imobiliária" /></a>
       
        <!-- nav toggle -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

      </div>

      <!-- main menu -->
      <div class="navbar-collapse collapse">
        <div class="main-menu-wrap">
          <div class="container-fixed">

            <div class="member-actions right">
              <a href="https://api.whatsapp.com/send?phone=5585988101166&text=Gostaria de anunciar o meu imóvel" target="_blank" data-action="share/whatsapp/share"  class="button small alt button-icon"><i class="fa fa-plus"></i>Anuncie seu imóvel</a>
            </div>
            <ul class="nav navbar-nav right">

              <li><a href="{{'/'}}">Home</a></li>

              <li>
                  <li class="menu-item-has-children">
                      <a href="#">A Espíndola</a>
                      <ul class="sub-menu">
                      <li><a href="{{url('espindola')}}">Sobre</a></li>
                        <li><a href="{{url('equipe')}}">Equipe Espíndola</a></li>
                        
                      </ul>
                    </li>
          </li>

          <li><a href="{{url('servicos')}}">Serviços</a></li>
          <li><a href="{{url('cliente')}}">Área do Cliente</a></li>        
          <li><a href="{{url('https://espindolaimb.zendesk.com/hc/pt-br')}}" target="_blank">Perguntas Frequentes</a></li>
          <li><a href="{{url('contato')}}">Contato</a></li>
          <li>
            <li class="menu-item-has-children">
                <a href="#">Corretor</a>
                <ul class="sub-menu">
                  <li>
                    <a href="https://espindolaimobiliaria.com.br/v1/public/login" target="_blank" class="top-bar-item" title="Login no EspindolaAdmin"><i class="fa fa-sign-in icon"></i> Login</a>
                  </li>
                  <li>
                    <a href="https://espindolaimobiliaria.com.br/admin/login" target="_blank" class="top-bar-item"><i class="fa fa-user-plus icon"></i> Vistoria</a>
                  </li>
                </ul>
              </li>
          </li>
        </ul>
        <div class="clear"></div>

      </div>

    </div><!-- end main menu wrap -->
  </div><!-- end navbar collaspe -->

</div><!-- end container -->
</header>
