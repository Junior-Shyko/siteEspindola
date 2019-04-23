<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>E-mail de Contato</title>
	<style type="text/css">
		.space_td{
			padding: 10px;
		}
	</style>
</head>
<body>
	<table style="max-width: 500px;  font-family: Arial, Helvetica, sans-serif;">
		<thead>
			<tr style="">
				<td style="padding: 5px; border: 2px solid #c3c3c3;">
					<img style="float:left; padding: 10px; margin: 10px;" src="http://espindolaimobiliaria.com.br/public/img/site/logo.png">  <h2 style="float:left; color: #868585;">Nova mensagem</h2></td>
				
			</tr>
		</thead>
		<tbody style="background: #f7f4f4;">
			<tr>
				<td class="space_td"><p>Olá, Equipe Espíndola</p></td>				
			</tr>
			<tr>
				<td class="space_td"><p>Nós recebemos uma mensgem no nosso site</p></td>
				
			</tr>
			<tr>
				<td class="space_td"> 
					<blockquote>
						Mensagem de <strong>{{ $contact['name_contact'] }}</strong> <br>
						O e-mail dessa pessoa é: <strong> {{ $contact['email_contact'] }}</strong> <br>
						e o fone para contato é esse: {{  $contact['phone_contact'] }} <br>
						e sua mensagem foi: <strong> {{ $contact['message_contact'] }}</strong>
					</blockquote>
				</td>
			</tr>
			<tr>
				<td class="space_td">
					<p>
					Imóvel escolhido foi o {{ $immobile->immobiles_code }} <br>
					{{ $immobile->immobiles_address }} , Nº {{ $immobile->immobiles_number }} , {{ $immobile->immobiles_district }} .
					</p>
				</td>
			</tr>
			<tr>
				<td>
					<p>
						<small style="color: blue;"> Mensagem enviada diretamente do site Espindola Imobiliária. </small>
					</p>
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html>