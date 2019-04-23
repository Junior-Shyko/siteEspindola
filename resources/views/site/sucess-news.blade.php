@extends('layouts.site')

@section('title', '')

@section('sidebar')
@parent
@endsection

@section('content')

<section class="module">
  <div class="container">

    <div class="row">
    	<div class="col-lg-2 col-md-2">
    	</div>

      <div class="col-lg-8 col-md-8">
        <div>
         
          <h4>Cadastro de Newsletter realizado com sucesso!</h4>
          
        </div>
      </div>
          	<div class="col-lg-2 col-md-2">
    	</div>

    </div><!-- end row -->

  </div>
</section>
@endsection
@section('footer')
@include('site.footer')
@endsection