@extends('layouts.site')

@section('title', ' - Erro 404')

@section('sidebar')
@parent
@endsection

@section('content')


<section class="module page-not-found">
  <div class="container">

    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <h2>404</h2>
        <h3>Página não encontrada</h3>
        <p>A página solicitada pode ter sido removida, renomeada ou está temporariamente indisponível..</p>
        <p>Tente voltar ou ir para página inicial e tentar novamente</p>
        <a href="{{ url('/') }}" class="button button-icon"><i class="fa fa-angle-right"></i>Inicio</a>
        @if (session('message'))
			    <div class="alert alert-box">
			        {{ session('message') }}
			    </div>
			@endif
      </div>
    </div><!-- end row -->

  </div>
</section>
@endsection

