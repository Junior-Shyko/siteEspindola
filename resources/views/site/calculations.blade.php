<!DOCTYPE html>

<html> 
<head>
	<title>Tutorial de HTML5</title>
	<meta name="description" content="Como usar as tags header, footer e article em HTML5">
	<meta charset="utf-8">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>

<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">

				<h1>Calculos Imobiliários</h1>


			</div>
		</div>
	</nav>
	<div class="container-fluid">

		<div class="row">
			<div class="col-md-12">
				<h2>Todos os cálculos disponíveis, separados por assunto</h2>
			</div>
			<div class="col-md-12"><h3><strong>LOCAÇÃO</strong></h3>
			<p><h4><strong>Multa contratual por rescisão antecipada</strong></h4></p>
			<p><h5>Vai desocupar o imóvel antes do prazo? Simule aqui o valor da multa compensatória correspondente a 03 meses de aluguel em vigor, e que deve ser reduzida proporcionalmente ao tempo do contrato já cumprido, na forma do artigo art.4º da Lei 8.245/91.</h5></p>
			<p><h4>Parâmetros para o cálculo: </h4></p>
			</div>
			<div class="col-md-12">
				<div class="mldc"><span><div class="block"><div class="clear"></div></div></span><span><div class="block"><span class="iptbl"><label for="valor">1.&nbsp;&nbsp;Valor do aluguel atual:</label></span><input name="valorCalculo" type="text" value="0,00" id="valorCalculo" class="ipt" testes=">num|0|O valor a ser atualizado deve ser maior que 0." default="0,00"><span><div class="clear"></div></span></div></span><span><div class="block"><span class="iptbl"><label for="valor">2.&nbsp;&nbsp;Data inicial do contrato::</label></span>
					<input type="text" name="dataInicial" id="dataInicial">


</select><span><div class="clear"></div></span></div></span><span><div class="block"><span class="iptbl"><label for="valor">3.&nbsp;&nbsp;Data final do contrato:</label></span>
<input type="text" name="dataFinal" id="dataFinal">


<span><div class="clear"></div></span></div></span><span>


	<div class="block"><label for="valor">4.&nbsp;&nbsp;Data prevista para desocupação:</label>
	<input type="text" name="dataPrevista" id="dataPrevista">

<br>
<button type="submit" class="btn btn-primary" id="calcular">Calcular</button>
				
			</div>
			<div class="col-md-12 text-info">
				<br><br>
				<strong><label>Resultado da simulação: </label></strong>
				
				<br>
				<p><label id="infoCalculo"></label><br>
<label id="infoMulta"></label><br>
<label>Desconto pelo período cumprido: R$0,00 (-) “ =multa contratual/prazo em dias x prazo da ocupação em dias”
</label><br>
<label>Valor da multa proporcional: = “valor da multa - o desconto pelo período cumprido”
</label><br>
</p>
			</div>
			

		</div>
		<div class="row">

		</div>
	</div>
</body>



<script
src="https://code.jquery.com/jquery-3.3.1.js"
integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
  integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://momentjs.com/downloads/moment.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/locale/pt-br.js"></script>
<script type="text/javascript" src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>

<script type="text/javascript">
	$("#calcular").click(function(){
		valorCalc = $("#valorCalculo").val();
		valorMulta = (valorCalc * 3);
		//alert("Valor do calculo" + valorCalc);
		$("#infoCalculo").html('Se você desocupar o imóvel no dia '+$( "#dataPrevista" ).val()+' você deverá pagar uma multa proporcional no valor de R$ “valor multa proporcional”');
		$("#infoMulta").html('Valor da multa: = '+valorMulta+',00');
		range = moment($( "#dataInicial" ).val()).preciseDiff($( "#dataFinal" ).val());
		console.log($( "#dataInicial" ).val());
		//console.log("diferenca de dias" + moment($( "#dataInicial" ).val(), "YYYYMMDD").fromNow());
		console.log("diferenca de dias" + range);
		console.log(range.diff('days'));
	})

	 $( function() {
    $( "#dataInicial" ).datepicker({
	   dateFormat: 'dd/mm/yy',
	   dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
	   dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
	   dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
	   monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
	   monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
	   nextText: 'Proximo',
	   prevText: 'Anterior'
	});

	    $( "#dataFinal" ).datepicker({
	   dateFormat: 'dd/mm/yy',
	   dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
	   dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
	   dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
	   monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
	   monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
	   nextText: 'Proximo',
	   prevText: 'Anterior'
	});

	    	    $( "#dataPrevista" ).datepicker({
	   dateFormat: 'dd/mm/yy',
	   dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
	   dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
	   dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
	   monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
	   monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
	   nextText: 'Proximo',
	   prevText: 'Anterior'
	});

  } );


</script>
	</html>