<div class="widget widget-sidebar recent-properties">
    <h4><span>Imóveis Recentes</span> <img src="{{ url('img/site/divider-half.png') }}" alt="" /></h4>
    <div class="widget-content">
        @foreach($recents as $recent)
        <div class="recent-property">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4"><a href="{{ url('imovel/'.$recent->immobiles_code) }}"><img src="{{SiteEspindola\Immobile::getPhotoFeatured($recent->immobiles_code) }}" alt="" /></a></div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <h5><a href="{{ url('imovel/'.$recent->immobiles_code) }}">{{ $recent->immobiles_property_title }}</a></h5>
                    <p>
                        @if($recent->immobiles_selling_price == 0.00)
                        <strong>{{ number_format($recent->immobiles_rental_price, 2 , ',' , '.') }}</strong> Por Mês
                        @else
                        <strong>R$ {{ number_format($recent->immobiles_selling_price, 2 , ',' , '.') }}</strong>
                        @endif
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- end widget content -->
</div>
<!-- end widget -->