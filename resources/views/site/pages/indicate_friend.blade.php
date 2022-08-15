@extends('layouts.site')
@section('title', 'A Espíndola')
@section('sidebar')
@parent
@endsection
@section('content')
<section class="subheader_friend">
    <div class="container">
        <h1>Indique um amigo</h1>
        {{-- <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">A Espíndola</a></div> --}}
        <div class="clear"></div>
    </div>
</section>
<section class="module">
   <div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">

            <div class="blog-post">
              <a href="#" class="blog-post-img">
                <div class="img-fade"></div>
                
                <img src="https://onepercentbetter.com/wp-content/uploads/2019/08/group-friends-meeting-local-coffee-shop-find-out-who-your-friends-are-ss-FEATURED.jpg" alt="">
              </a>
              <div class="content blog-post-content">
                <h3><a href="#">Promoção Indique um Amigo</a></h3>
                {{-- <ul class="blog-post-details">
                  <li><i class="fa fa-folder-open-o icon"></i>Posted in <a href="#">News</a></li>
                  <li><i class="fa fa-comment-o icon"></i>6 Comments</li>
                  <li><i class="fa fa-share-alt icon"></i>Share</li>
                </ul> --}}
                <p>A Espíndola Imobiliária, especialista em Locação e Administração de Imóveis, preparou uma promoção especial para você cliente ou locatário que acredita e valoriza nosso trabalho!</p>
    
                <p>Veja como é fácil! <br>
                    Indique um amigo para a Espíndola e, se o negócio for fechado, você ganhará descontos incríveis.
                </p>
    
                <h5>Regulamento Promoção Indique um Amigo</h5>
                <p>A Espíndola Imobiliária, especialista em Locação e Administração de Imóveis, preparou uma promoção especial para você.</p>
                <p>
                    <label for="">1. CONSIDERAÇÕES GERAIS</label> <br>
                    A promoção será realizada no período de 01 de janeiro à 31 de dezembro de 2017, pela Espíndola Imobiliária LTDA, com sede na Av. Santos Dumont, 2828, Loja 12, Edifício Torre Santos Dumont – Aldeota - Fortaleza - CE, inscrita no CNPJ/MF sob o nº 09.652.345/0001-02.
                </p>
                <p>
                    <label for="">2. PARTICIPAÇÃO DA PROMOÇÃO</label> <br>
                    Podem participar da promoção todos os Locadores e Inquilinos da Espíndola Imobiliária, seja pessoa física, ou jurídica, que estejam com todas as suas obrigações em dia.
                </p>
                <p>
                    <label for="">3. MECÂNICA DA PROMOÇÃO - LOCADORES</label> <br>
                    <ul>
                        <li>Indique um amigo para a Espíndola e, se o negócio for fechado, você ganhará descontos que podem chegar a mais de 100%.</li>
                        <li>Os descontos são acumulativos, ou seja, quanto mais indicações, mais descontos você receberá.</li>
                        <li>Sua indicação precisa fechar um contrato de administração com a Espíndola Imobiliária.</li>
                        <li>O mês que será concedido o desconto, será estabelecido pela Espíndola.</li>
                        <li>O desconto será sob as taxas da imobiliária, podendo ficar um crédito para os meses subsequentes sempre que o valor do desconto for maior que essas taxas.</li>
                        <li>O valor do desconto é calculado com base no percentual de 30% do primeiro aluguel fixado para o imóvel indicado. Caso o imóvel indicado já esteja locado, o desconto corresponderá a 30% do valor do aluguel vigente.</li>
                        <li>Em caso de desistência do cliente indicado, o desconto não será devido.</li>
                    </ul>
                </p>
                <p>
                    <label for="">4. MECÂNICA DA PROMOÇÃO - INQUILINOS</label> <br>
                    <ul>
                        <li>Indique um amigo para a Espíndola e, se o negócio for fechado, nós pagamos até 100% do seu aluguel.</li>
                        <li>Os descontos serão dados em forma de créditos no aluguel concedidos pela Espíndola, além disso eles são acumulativos, ou seja, quanto mais indicações, mais créditos você receberá.</li>
                        <li>Sua indicação precisa fechar um contrato de administração com a Espíndola Imobiliária.</li>
                        <li>O mês que será concedido o desconto, será estabelecido pela Espíndola.</li>
                        <li>O valor do crédito que será concedido no seu aluguel é calculado com base no percentual de 30% do primeiro aluguel fixado para o imóvel indicado. Caso o imóvel indicado já esteja locado, o crédito corresponderá a 30% do valor do aluguel vigente.</li>
                        <li>O valor do crédito concedido por cada indicação NÃO poderá ultrapassar o valor do seu aluguel vigente.</li>
                        <li>Em caso de desistência do cliente indicado, o desconto não será devido.</li>
                    </ul>
                </p>
                <p>
                    <label for="">5. MECÂNICA DA PROMOÇÃO GERAL</label> <br>
                    Para participar, basta acessar a página da promoção e preencher o formulário de contato com a sua indicação. Nossa equipe comercial entrará em contato com a sua indicação!
                </p>
                <p>
                    <label for="">
                        6. CONSIDERAÇÕES FINAIS</label> <br>
                        <ul>
                            <li>Os participantes declaram ter lido e estarem de acordo com o presente regulamento da Promoção e de suas condições, que estão à disposição na Fan Page e no site da Espíndola Imobiliária.</li>
                            <li>Eventuais divergências ou omissões relacionadas à promoção serão solucionadas pela comissão organizadora do mesmo, composta por representantes da Espíndola Imobiliária, e sua decisão será irrecorrível.</li>
                            <li>A Espíndola Imobiliária reserva-se o direito de a qualquer momento alterar quaisquer partes deste regulamento caso julgue necessário, mas sem prejudicar o andamento da Promoção.</li>
                        </ul>
                </p>
                <div class="quote">
                    Para participar basta preenchar o formulário abaixo com os dados do seu amigo ou entrar em contato com a nossa equipe do comercial pelo e-mail <a href="mailto:contato@espindola.imb.br">contato@espindola.imb.br</a> ou pelo telefone <a href="tel:(85) 3461-1166">(85) 3461-1166</a> / <a href="tel:(85) 98810-1166">(85) 98810.1166</a>  
                </div>
                <div class="blog-post-share">
                    <div class="divider"></div>
                    <span class="left"><strong>Compartilhe:</strong> </span>
                    <ul class="social-icons circle">
                        <li>
                            <div class="fb-share-button" data-href="https://espindolaimobiliaria.com.br/indique-amigo" data-layout="button" data-size="small">
                                <a target="_blank" href="https://espindolaimobiliaria.com.br/indique-amigo" class="fb-xfbml-parse-ignore ">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </div>
                            
                        </li>
                        <li>
                            <a href="whatsapp://send?text=Olá gostaria de indicar um amigo - Ver mais https://espindolaimobiliaria.com.br/indique-amigo" data-action="share/whatsapp/share" target="_blank" class="btn_shared_social btn-block"> 
                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            </a> 
                        </li>
                    </ul>
                </div>
              </div>
            </div><!-- end blog post -->
        </div>
    </div>
   </div>
</section>
@include('site.footer')
@endsection