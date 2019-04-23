<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reserva de Chave - Imóvel  {{ $contact->keys_cod_immobile }}</title>
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
					<h2>Olá {{ $contact->name_reserve }}</h2 >
					<h4>Acabamos de fazer seu pré-agendamento para visitar o imóvel {{ $contact->keys_cod_immobile }}, e em breve entraremos em contato para confirmar sua reserva.</h4>
				</td>				
			</tr>
			<tr style="padding: 10px; margin: 5px;">	

			<td style="width: 500px; text-align: left; padding: 5px; margin: 0; border: 3px solid #c3c3c3;" >
				<label>
					Sua reserva para o imóvel do código  {{ $contact->keys_cod_immobile }} foi realizado com sucesso, gostariamos de lembrar que essa é um pré-agendamento, então ainda entrará em contato um agente de atendimento para confirmar a data e horário desejado da visita.
				</label>
			</td>			
			</tr>
			<tr>
				<td style="width: 500px; text-align: left; padding: 5px; margin: 0; border: 3px solid #c3c3c3; background: #d9edf7;" >
					<h3>INFORMAÇÕES GERAIS DA RESERVA</h3>
					<ul>
                      	<li>
                      		<b>Código do Imóvel:</b> {{ $contact->keys_cod_immobile }} , no endereço {{ $immobile->immobiles_address }} , Nº {{ $immobile->immobiles_number }}. <br>
						Bairro: {{ $immobile->immobiles_district }} ,  {{ $immobile->immobiles_state }} <br>

                      	</li>
                      	<li><b>Codigo da Chave: </b>{{ $contact->keys_code }}</li>
                      	<li><b>Local das chaves: </b>{{ $contact->agency }}</li>
                      	<li><b>Tipo de reserva: </b>Buscar Chaves na Imobiliária.</li>

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
				<td style="width: 500px; text-align: left; padding: 5px; margin: 0; border: 3px solid #c3c3c3; " >
					<p>
					Você realizou o agendamento da chave de um imóvel e gostariamos de lhe lembrar a seriedade desse compromisso para ir até a agência marcada para pegar a chave para visita ao imóvel.
					{{-- <strong>Foi enviado um e-mail para você como forma de comprovante de agendamento.</strong> --}}
					</p>
				</td>				
			</tr>
			<tr>
				<td>
					<p><strong>Regras: </strong><br>
					
						<ul>
							<li>O interessado escolhe dia e o horário que pretende buscar as chaves, o horário limite de devolução já deve ser definido automaticamente; </li>
							<li>Tempo máximo de permanência com as chaves é de 3h, devendo respeita o horário de funcionamento da Espíndola; </li>
							<li>As reservas para visitação somente poderão ser feitas até às 17h;</li>
							<li>Tipo de reserva de imóveis expostos à venda será exclusivamente feita com corretor sem custo para o cliente; </li>
							<li>Reserva de imóveis expostos à locação será exclusivamente feita por Delivery ou Buscar Chaves na Imobiliária; </li>
							<li>O tipo de reserva dos imóveis que possuem os dois tipos (locação e venda), será de acordo com a pretensão do interessado (venda ou locação?). Nesses casos, por enquanto deixa todas as opções livres para o interessado escolher. </li>
						</ul>
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