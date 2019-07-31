@extends('layouts.site')

@section('title', '')

@section('sidebar')
@parent
@endsection

@section('content')
<section class="module login">
  <div class="container">

    <div class="row">

		<div class="col-md-3">
			@if (session('message'))
			    <div class="alert alert-box">
			        {{ session('message') }}
			    </div>
			@endif
		</div>
		<div class="col-md-6">
			<div class="alert-box text-center">
				<p><h3>Parabéns, agendamento realizado!</h3></p>
				<p>
					Você realizou o agendamento da chave de um imóvel e gostariamos de lhe lembrar a seriedade desse compromisso para ir até a agência marcada para pegar a chave para visita ao imóvel. <br>
					{{-- <strong>Foi enviado um e-mail para você como forma de comprovante de agendamento.</strong> --}}
				</p>
				<p>
					Qualquer dúvida pode entre em contato com nos fones.
					<ul>
						<li>
							<strong>Agência Aldeota:</strong> (85) 3461-1166 | 98810-1166
						</li>
						<li>
							<strong>Agência Fátima:</strong> (85) 3038-0014 | 98970-4899
						</li>
					</ul>
				</p>

			</div>
		</div>
		<div class="col-md-3"></div>

    </div><!-- end row -->

  </div>
</section>

@endsection
@section('footer')
@include('site.footer')
@endsection
