<!DOCTYPE html>
<html lang="pt-br">
   <head>
       <meta charset="utf-8"/>
       <title>Teste</title>
         <link rel="stylesheet" href="{{ mix('/css/all.css') }}" type="text/css" media="all" >
  {{ Html::style('assets/multiple-select/multiple-select.css') }}

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
   </head>
   <body>
	<div class="container">
<div class="form-group">
	<select multiple="multiple" id="ms" class="form-control">
	@foreach($immobile as $immobiles)
	<option>{{$immobiles->immobiles_district}}</option>

	@endforeach
</select>
</div>
	</div>
       <!-- JavaScript file links -->
{{ Html::script('js/jquery-3.1.1.min.js') }}
{{ Html::script('assets/jquery-ui-1.12.1/jquery-ui.min.js') }}
{{ Html::script('js/bootstrap.min.js') }}
{{ Html::script('assets/slick-1.6.0/slick.min.js') }}

{{ Html::script('js/isotope.min.js') }}
{{ Html::script('js/wNumb.js') }}
{{ Html::script('js/nouislider.min.js') }}
{{ Html::script('js/global.js') }}

{{ Html::script('assets/multiple-select/multiple-select.js') }}

<script type="text/javascript">
	$("#district").click(function(){
		alert('mostrar bairros');
	});
	$("#ms").multipleSelect({
            width: '100%'
        });
</script>
   </body>
</html>