@extends('layouts.site')

@section('sidebar')
{{ Html::style('/assets/ion.rangeSlider-2.2.0/css/ion.rangeSlider.css') }}
{{ Html::style('/assets/ion.rangeSlider-2.2.0/css/ion.rangeSlider.skinHTML5.css') }}

@parent
@endsection
<style type="text/css">
.size-img{
	max-width: 1837px !important;
	max-height: 1206px !important;
}

.margin-right{
 padding-right: 15px;
}

</style>
@section('content')
<section class="module">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="col-md-2"></div>
				<div class="col-md-8 text-center">
					<h4>Não encontramos esse Imóvel</h4>
					<i class="fa fa-search fa-3x"></i>
					<p>Não foi encontrado o imóvel desse código, mas não vamos desistir, lhe daremos outras opções de imóveis ou reveja o código do imóvel.</p>
					<a href="{{ '/' }}" class="button button-icon"><i class="fa fa-angle-right"></i>Voltar para o início.</a>
				</div>
				<div class="col-md-2">

				</div>
			</div>
		</div>

		<div class="clear"><br> <br></div>

		<div class="row">
			<div class="col-lg-8 col-md-8"> 
				@foreach($immobile as $immobiles)
				<div class="property property-row property-row-sidebar shadow-hover">
					<a href="{{ url('/imovel/'.$immobiles->immobiles_code ) }}" class="property-img">
						<div class="img-fade"></div>
						<div class="property-tag button status">{{ SiteEspindola\Immobile::infoPublication($immobiles->immobiles_type_publication) }}</div>
						
						@if($immobiles->immobiles_selling_price == 0.00)
						<div class="property-price">R$ {{ number_format($immobiles->immobiles_rental_price, 2 , ',' , '.') }}
							<span>Por Mês</span>
							@else
							<div class="property-price">R$ {{ number_format($immobiles->immobiles_selling_price, 2 , ',' , '.') }}
								<span>Aluguel {{ number_format($immobiles->immobiles_rental_price, 2 , ',' , '.')  }}</span>	
								@endif
						</div>

						<div class="property-color-bar"></div>
						<img src="{{SiteEspindola\Immobile::getPhotoFeatured($immobiles->immobiles_code) }}" alt="" class="img-responsive"  style="max-height: 241px !important; margin: 0 auto;"   />
					</a>
					<div class="property-content">
						<div class="property-title">
							<h4><a href="{{ url('/imovel/'.$immobiles->immobiles_code ) }}" title="{{ $immobiles->immobiles_property_title }}">{{ $immobiles->immobiles_property_title }}</a></h4>
							<p class="property-address"><i class="fa fa-map-marker icon"></i>
								@php
								$len_address = strlen($immobiles->immobiles_address);
								$len_district= strlen($immobiles->immobiles_district);
								@endphp	
								@if($len_address > 21)
								{{ substr($immobiles->immobiles_address, 0 , 16) }}...
								@else
								{{ $immobiles->immobiles_address }}
								@endif
								, 
								@if($len_district > 11)
								{{ substr($immobiles->immobiles_district, 0 , 9) }}... , {{ $immobiles->immobiles_city }}
								@else 
								{{ $immobiles->immobiles_district }} , {{ $immobiles->immobiles_city }}
								@endif
							</p>
							<div class="clear"></div>
							<p class="property-text">{{ substr($immobiles->immobiles_ps, 0, 100) }} ...</p>
						</div>
						<table class="property-details">
							<tr>
								<td class="margin-right"><i class="fa fa-bed"> </i> {{ $immobiles->immobiles_qtd_dormitory }} Dorm. </td>
								<td><i class="fa fa-car"> </i> 
									@if($immobiles->immobiles_qtd_uncovered_jobs == "")
									0 
									@else
									{{ $immobiles->immobiles_qtd_uncovered_jobs }} 
									@endif
									Vg(s).
								</td>
								<td><i class="fa fa-expand"></i> {{ $immobiles->immobiles_total_area }} m²</td>
							</tr>
						</table>
					</div>
					<div class="property-footer">
						<span class="left"><i class="fa fa-home icon"></i> {{ $immobiles->immobiles_code }}</span>
						<span class="right">
							
							<a href="{{ url('/imovel/'.$immobiles->immobiles_code ) }}" class="button button-icon"><i class="fa fa-angle-right"></i>Detalhes</a>
						</span>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
				@endforeach

				<div class="pagination">
					{{ $immobile->links() }}
				</div>
			</div> <!-- FIM COLUNA 8 --> 


			<div class="col-lg-4 col-md-4 sidebar">
				@include('site.searchadvanced')

				@include('site.immobilerecents')
			</div>
			
		</div>

	</div>
</section>  
@endsection()

@section('footer')
@include('site.footer')
@endsection