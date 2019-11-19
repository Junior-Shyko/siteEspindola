@extends('layouts.site')

@section('title', ' - Erro 404')

@section('sidebar')
@parent
@endsection

@section('content')
<section class="subheader">
  <div class="container">
    <h1>Serviços</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> 
      <a href="#" class="current">Serviços</a></div>
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
            <br>
                Nam porttitor nunc volutpat, bibendum mauris quis, volutpat diam. Nullam vehicula urna id lectus commodo feugiat. Suspendisse sit amet pretium nisi, at placerat lorem. Nunc placerat sapien lectus. Maecenas in elit vitae lacus lacinia convallis sed non lectus. Integer blandit elementum ipsum, ornare porttitor nulla gravida at. 
                Maecenas maximus ac nisl sed euismod. Morbi fermentum augue vitae eleifend iaculis. Nulla egestas ullamcorper mi, id eleifend arcu dignissim vel.
            </p>
            			
          </div>
        </div><!-- end blog post -->
		
    </div><!-- end blog posts -->
    

    <div class="col-lg-4 col-md-4 sidebar">

        <div class="widget widget-sidebar recent-properties">
          <h4><span>Quick Search</span> <img src="images/divider-half.png" alt=""></h4>
          <div class="widget-content box">
            <form>
              <div class="form-block border">
                <label for="property-location">Location</label>
                <select id="property-location" class="border" style="display: none;">
                  <option value="">Any</option>
                  <option value="baltimore">Baltimore</option>
                  <option value="ny">New York</option>
                  <option value="nap">Annapolis</option>
                </select><div class="chosen-container chosen-container-single chosen-container-single-nosearch" style="width: 302px;" title="" id="property_location_chosen"><a class="chosen-single"><span>Any</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chosen-results"></ul></div></div>
              </div>

              <div class="form-block border">
                <label for="property-status">Property Status</label>
                <select id="property-status" class="border" style="display: none;">
                  <option value="">Any</option>
                  <option value="sale">For Sale</option>
                  <option value="rent">For Rent</option>
                </select><div class="chosen-container chosen-container-single chosen-container-single-nosearch" style="width: 302px;" title="" id="property_status_chosen"><a class="chosen-single"><span>Any</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chosen-results"></ul></div></div>
              </div>

              <div class="form-block border">
                <label for="property-type">Property Type</label>
                <select id="property-type" class="border" style="display: none;">
                  <option value="">Any</option>
                  <option value="family">Family Home</option>
                  <option value="apartment">Apartment</option>
                  <option value="apartment">Condo</option>
                </select><div class="chosen-container chosen-container-single chosen-container-single-nosearch" style="width: 302px;" title="" id="property_type_chosen"><a class="chosen-single"><span>Any</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chosen-results"></ul></div></div>
              </div>

              <div class="form-block">
                <input type="submit" class="button" value="Find Properties">
              </div>
            </form>
          </div><!-- end widget content -->
        </div><!-- end widget -->

       
      </div><!-- end sidebar -->

    </div>
    <section class="module team">
            <div class="container">
          
              <div class="module-header">
                <h2>Mais <strong>Serviços</strong></h2>
                <img src="images/divider.png" alt="">
                
              </div>
          
              <div class="row">
                <div class="col-lg-4 col-md-4">
                  <div class="team-member shadow-hover">
                    <div class="team-member-img">
                      <p><strong>Locação.</strong><br> A nossa equipe de locação experiente e comprometida está pronta para alugar o seu imóvel</p>
                      <div class="img-overlay"></div>
                      <div class="img-fade"></div>
                      <img src="https://www.deauville-sothebysrealty.com/datas/biens/images/117/117_00-2019-08-02-1134.jpeg" alt="" height="1350">
                    </div>
                    <div class="team-member-content">
                      <img class="hex" src="images/hexagon.png" alt="">
                      <h4>Locação</h4>
                      <p>A nossa equipe de locação experiente e comprometida está pronta para alugar o seu imóvel</p>
                    </div>
                  </div>
                </div>
          
                <div class="col-lg-4 col-md-4">
                  <div class="team-member shadow-hover">
                    <div class="team-member-img">
                      <p><strong>Administração de Imóveis.</strong><br> 
                        Fazemos toda a gestão da locação do seu imóvel até a sua desocupação no mesmo estado em que foi locado.  
                      <div class="img-overlay"></div>
                      <div class="img-fade"></div>
                      <img src="https://www.deauville-sothebysrealty.com/datas/biens/images/117/117_00-2019-08-02-1134.jpeg" alt="">
                    </div>
                    <div class="team-member-content">
                      <img class="hex" src="images/hexagon.png" alt="">
                      <h4>Avaliação Imobiliária</h4>
                     <p>Fazemos toda a gestão da locação do seu imóvel até a sua desocupação no mesmo estado em que foi locado.</p>
                    </div>
                  </div>
                </div>
          
                <div class="col-lg-4 col-md-4">
                  <div class="team-member shadow-hover">
                    <div class="team-member-img">
                      <p><strong>Avaliação Imobiliária</strong><br> Nec tellus a odiose tincidunt auctor a ornare odio sed non mauris vitae erat consequat auctor lorem ipsum.</p>
                      <div class="img-overlay"></div>
                      <div class="img-fade"></div>
                      <img src="https://www.deauville-sothebysrealty.com/datas/biens/images/117/117_00-2019-08-02-1134.jpeg" alt="">
                    </div>
                    <div class="team-member-content">
                      <img class="hex" src="images/hexagon.png" alt="">
                      <h4>Avaliação Imobiliária</h4>
                      <p>Nec tellus a odiose tincidunt auctor a ornare odio sed non mauris vitae erat consequat auctor lorem ipsum.</p>
                    </div>
                  </div>
                </div>
                
              </div><!-- end row -->
          
            </div><!-- end container -->
          </section>

        </div>
    </section>
    <section class="module cta image-bg">
            <div class="img-overlay blacker"></div>
            <div class="container">
              <h2>Listamos mais de <strong>2000 Propriedades</strong>.</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam gravida non metus.</p>
              
            </div><!-- end container -->
          </section>
          @include('site.footer')
@endsection

