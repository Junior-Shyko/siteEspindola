@extends('layouts.site')

@section('title', '')

@section('sidebar')
@parent
@endsection

@section('content')
<section class="module no-padding property-listing-map">
	<div class="property-listing-map-left">
		<div id="map-canvas"></div>
	</div><!-- end left col -->
	<div class="property-listing-map-right">

		<div class="property-listing-header">			
			<h5 class="property-count left">{{ $info_total_immobile }} imóveis encontrado(s)</h5>			
			@if($info_total_immobile == 0)
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-2"></div>
					<div class="col-md-8 text-center">
						<i class="fa fa-search fa-3x"></i>
						<p>Tente alterar os filtros ou a localização da sua busca.</p>
						<a href="{{ '/' }}" class="button button-icon"><i class="fa fa-angle-right"></i>Voltar para o início.</a>
					</div>
					<div class="col-md-2"></div>
				</div>

				<div class="col-md-12">
					<br>
					<br>
					<h5>Nossos Imóveis...</h5>
				</div>
			</div>
			@endif
			<!--
			<div class="col-md-4 pull-right">
				{{Form::open(['url' => \Request::fullUrl() , 'method' => 'get'])}}
				<select name="orderSearch" id="orderSearch" onchange="this.form.submit();" class="form-control">
					<option value="">Ordenar por</option>
					<option value="1">Menor area</option>
					<option value="2">Maior area</option>
					<option value="3">Menor valor</option>
					<option value="4">Maior valor</option>
				</select>
				{{-- {{Form::hidden('opcao', $_GET['opcao'])}}  --}}
				@if( isset($_GET['typeImmobile']) )
					@foreach ($_GET['typeImmobile'] as $item => $value_type)
					<input type="hidden" name="typeImmobile[]" value="{{$value_type}}">
					@endforeach					
				@endif
				{{-- {{Form::hidden('region-immobile', $_GET['region-immobile'])}}  --}}
				{{Form::close()}}
			</div> -->
			<div class="clear"></div>
		</div><!-- end property listing header -->

		<div class="row">
			@foreach($immobile as $immobiles)
			<div class="col-lg-6 col-md-6">
				<div class="property shadow-hover">
					<a href="{{ url('imovel/'.$immobiles->immobiles_code) }}" class="property-img">
						<div class="img-fade"></div>
						@php 
						switch ($immobiles->immobiles_type_offer) {
							case '2':
							echo '<div class="property-tag button alt featured"> Destaque</div>';
							break;
							case '3':
							echo '<div class="property-tag button alt featured"> Destaque</div>';
							break;									
						}
						@endphp
						
						<div class="property-tag button status">{{ SiteEspindola\Immobile::infoPublication($immobiles->immobiles_type_publication) }}</div>	

						@if($immobiles->immobiles_rental_price == 0.00)
							<div class="property-price">R$ {{ number_format($immobiles->immobiles_selling_price, 2 , ',' , '.') }}
						@elseif($immobiles->immobiles_selling_price == 0.00)
							<div class="property-price">R$ {{ number_format($immobiles->immobiles_rental_price, 2 , ',' , '.') }}
							<span>Por Mês</span>
							@else
							<div class="property-price">R$ {{ number_format($immobiles->immobiles_selling_price, 2 , ',' , '.') }}
								<span>Aluguel {{ number_format($immobiles->immobiles_rental_price, 2 , ',' , '.')  }}</span>
						@endif
						</div>

						<div class="property-color-bar"></div>

							<img src="{{SiteEspindola\Immobile::getPhotoFeatured($immobiles->immobiles_code) }}" alt="" class="img-responsive img_property"  />
						</a>

						<div class="property-content">
							<div class="property-title">
								<h4><a href="#" title="{{ $immobiles->immobiles_property_title }}">{{ $immobiles->immobiles_property_title }}</a></h4>
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
									, <br/>
									@if($len_district > 9)
									{{ substr($immobiles->immobiles_district, 0 , 9) }}...
									@else 
									{{ $immobiles->immobiles_district }}
									@endif
								</p>
							</div>

							<table class="property-details">
								<tr>
									<td><i class="fa fa-bed"></i> {{ $immobiles->immobiles_qtd_dormitory }} Dorm.</td>
									<td><i class="fa fa-car"></i> 
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
							<span class="left"><i class="fa fa-home"></i> {{ $immobiles->immobiles_code }} </span>
							<span class="right">
							{{-- <a href="#"><i class="fa fa-heart-o icon"></i></a>
							<a href="#"><i class="fa fa-share-alt"></i></a> --}}
						</span>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			@endforeach


		</div><!-- end row -->

		<div class="pagination">
			<div class="center">
            {{-- <ul>
              <li><a href="#" class="button small grey"><i class="fa fa-angle-left"></i></a></li>
              <li class="current"><a href="#" class="button small grey">1</a></li>
              <li><a href="#" class="button small grey">2</a></li>
              <li><a href="#" class="button small grey">3</a></li>
              <li><a href="#" class="button small grey"><i class="fa fa-angle-right"></i></a></li>
          </ul> --}}
          {{--       {{ $immobile->links() }} --}}
      </div>
      <div class="clear"></div>

  </div>

</div><!-- end right col -->
@endsection

@push('scripts')
<script type="text/javascript">

immobile = '{{ $immobile }}';

</script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBisdaSyLJ4WC4bFxEFA5rdhGq_8B1B52I&sensor=false"></script>

{{ Html::script('public/js/map.js') }}
@endpush