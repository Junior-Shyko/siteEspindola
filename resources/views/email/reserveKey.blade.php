<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reserva de Chave - Imóvel {{ $title }}</title>
</head>

<body style="background: #e4e4e4; max-width: 633px;">
	<table style="width: 580px; background: #fff; border-radius: 5px; margin:20px">
		<thead>
			<tr style="padding: 10px; margin: 5px;">
				<td style="width: 140px; padding: 5px; margin: 0;">Reserva <br> de chave</td>
				<td style="width: 300px; text-align: center; padding: 5px; margin: 0;" ><img src="http://espindolaimobiliaria.com.br/public/img/site/logo.png"></td>
				<td style="width: 140px;  padding: 5px; margin: 0;">Agência {{ $contact->agency }}</td>
			</tr>
		</thead>
	</table>

	<table style="width: 580px; background: #fff; border-radius: 5px; margin: 20px; font-family:Arial, Helvetica, sans-serif">
		<tbody>
			<tr style="padding: 10px; margin: 5px;">				
				<td style="width: 600px; text-align: center; padding: 5px; margin: 0;" >
					<h2>Olá equipe {{ $contact->agency }}</h2 >
					<h4>Mais uma reserva de chave</h4>
				</td>				
			</tr>
			<tr style="padding: 10px; margin: 5px;">				
				<td style="width: 500px; text-align: left; padding: 5px; margin: 0; border: 3px solid #c3c3c3; background: #d9edf7;" >
					<ul>
                      	<li><b>Código do Imóvel:</b> {{ $contact->keys_cod_immobile }}</li>
                      	<li><b>Codigo da Chave: {{ $contact->keys_code }}</b></li>
                      	<li><b>Para:</b> {{ $contact->name_reserve }}</li>
                      	<li><b>Fone de Contato:</b> {{ $contact->phone_reserve }}</li>
                      	<li><b>E-mail:</b> {{ $contact->email_reserve }}</li>
                      	<li><b>Data de Agendadmento</b>
							<ul>
								<li>{{ $contact->date_prev }}</li>
								<li>{{ $contact->date_entr }}</li>
							</ul>
                      	</li>

                      </ul>
				</td>				
			</tr>
			<tr>
				<td>
					<p><strong>Imóvel reservado:</strong><br>
					
						Endereço: {{ $immobile->immobiles_address }} , Nº {{ $immobile->immobiles_number }}. <br>
						Bairro: {{ $immobile->immobiles_district }} ,  {{ $immobile->immobiles_state }} <br>
						Valor de Locação: {{ number_format($immobile->immobiles_rental_price, 2 , ',' , '.') }}
					</p>
				</td>
			</tr>
		</tbody>
	</table>

	<table style="width: 633px; background: #fff; border-radius: 5px; margin-top: 10px;">
		<thead>
			<tr style="padding: 10px; margin: 5px;">				
				<td style="width: 600px; text-align: center; padding: 5px; margin: 0;" >
					<p> Desenvolvido por Espindola Imobiliaria</p>
				</td>				
			</tr>

		</thead>
	</table>
</body>
</html>