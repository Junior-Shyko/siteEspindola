<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="description" content="Espindola Imobiliária, site de divulgação de imóveis para alugar ou comprar">
      <meta name="author" content="Excellence Soft">
      <meta name="keywords" content="imóveis, fortaleza, aluguel, alugar, comprar imóvel, vender imóvel, imobiliária" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <link rel="icon" href="{{ url('/img/site/favicon.png') }}">
      <meta property="og:url" content="{{ $meta_site['url'] }}" />
      <meta property="og:title" content="{{ $meta_site['title'] }}" />
      <meta property="og:type" content="{{ $meta_site['type'] }}" />
      <meta property="og:description" content="{{ $meta_site['description'] }}" />
      <meta property="og:image" content="{{ $meta_site['image'] }}" />
      <meta property=”og:site_name” content="Espíndola imobiliária"/>
      <title>{{ $page_title or "Site" }} @yield('title')</title>
      <!-- CSS file links -->
      <link rel="stylesheet" href="{{ url('css/all.css') }}" type="text/css" media="all" >
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
      {{ Html::style('/assets/pnotify/dist/pnotify.css') }}
      {{ Html::style('/assets/pnotify/dist/pnotify.buttons.css') }}

      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
      {{ Html::style('/assets/jquery-ui/jquery-ui.min.css') }}
      {{ Html::style('/assets/ion.rangeSlider-2.2.0/css/ion.rangeSlider.css') }}
      {{ Html::style('/assets/ion.rangeSlider-2.2.0/css/ion.rangeSlider.skinHTML5.css') }}
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
      {{ Html::style('/assets/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css') }}
      <style type="text/css">
         #names_distinct{
         -webkit-columns: 100px 3; /* Chrome, Safari, Opera */
         -moz-columns: 100px 3; /* Firefox */
         columns: 100px 3;
         }
         .whatsapp-fixo {
         position: fixed;
         bottom:10px;
         left:30px;
         z-index: 999;
         float: right;
         }
         .whatsapp-fixo > a > i{
         border-color: green;
         background: green;
         color: #fff;
         border-radius: 30px;
         }
      </style>
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
      <!-- Start of espindola Zendesk Widget script -->
      <script>
         /*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(e){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var e=this.createElement("script");n&&(this.domain=n),e.id="js-iframe-async",e.src="https://assets.zendesk.com/embeddable_framework/main.js",this.t=+new Date,this.zendeskHost="espindola.zendesk.com",this.zEQueue=a,this.body.appendChild(e)},o.write('<body onload="document._l();">'),o.close()}();
         /*]]>*/
         
         //GLOBALIZANDO URL
         var project_survey = ':3000/';
         domin  =  window.location.protocol + "//" + window.location.hostname;
         var domain_complet = domin + project_survey; 
         var url = window.location.origin;
         //window.onscroll = function() {scrollFunction()};

            console.log(domain_complet);

      </script>
      <!-- End of espindola Zendesk Widget script -->
   </head>
   <body>
      @section('sidebar')
      @include('layouts.header_site')
      @show
      @yield('content')
      @yield('footer')
   </body>
   <!-- JavaScript file links -->
   {{ Html::script('/js/jquery-3.1.1.min.js') }}
   {{ Html::script('/assets/jquery-ui/jquery-ui.min.js') }}
   {{ Html::script('/js/bootstrap.min.js') }}
   {{-- {{ Html::script('/assets/jquery.serializeJSON/jquery.serializejson.min.js') }} --}}
   {{ Html::script('/assets/slick-1.6.0/slick.min.js') }}
   {{ Html::script('/js/isotope.min.js') }}
   {{ Html::script('/js/wNumb.js') }}
   {{ Html::script('/js/nouislider.min.js') }}
   {{ Html::script('/js/global.js') }}
   {{-- {{ Html::script('/assets/pnotify/dist/pnotify.js') }}
   {{ Html::script('/assets/pnotify/dist/pnotify.animate.js') }} --}}
   {{ Html::script('/assets/ion.rangeSlider-2.2.0/js/ion-rangeSlider/moment-with-locales.js') }}
   {{ Html::script('/assets/ion.rangeSlider-2.2.0/js/ion-rangeSlider/ion.rangeSlider.min.js') }}
   {{ Html::script('/assets/sumoselect/jquery.sumoselect.min.js') }}
   <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
   
   {{ Html::script('/assets/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.min.js') }}
   {{ Html::script('/assets/bootstrap-datetimepicker-master/js/locales/bootstrap-datetimepicker.pt-BR.js') }}
   {{ Html::script('/js/all.js') }}
   {{ Html::script('/assets/chosen-1.6.2/chosen.jquery.min.js') }}
   <script type="text/javascript">
      $('[data-toggle="tooltip"]').tooltip();
         //PEGANDO O IP DE ONDE ACESSAR
         ip = '{{ $_SERVER['REMOTE_ADDR'] }}' ;
         //ROTA POR ONDE ESTÁ PASSANDO PELO SITE
         route_loc = '{{ url()->full() }}';
         //ARRAY PARA GUARDAR AS CORRDENADAS
         coordenadas = [];
         //DATA ATUAL
         date_time = '{{ Date('Y-m-d H:i:s') }}';
         //TOKEN DE ACESSO
         token = "{{ csrf_token() }}";
   </script>
   {{ Html::script('/js/location.js') }}
   <script type="text/javascript">
      $(function() {
                
      });
      $(document).ready(function () {
         getLocation();    
         $('.slide').addClass('initialized');
    $('.slider.slider-testimonials').slick({
		prevArrow: $('.slider-nav-testimonials .slider-prev'),
		nextArrow: $('.slider-nav-testimonials .slider-next'),
		adaptiveHeight: true
	});
      });
   </script>
   @stack('scripts')
   </body>
</html>