<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" href="<?php echo base_url('templates/css/principal/fichas.css'); ?>">-->
        <script src="<?php echo base_url('templates/jquery/jspdf.min.js') ?>"></script>
        <script src="<?php echo base_url('templates/jquery/jquery.min.js') ?>"></script>
		<title>Ficha</title>
		
	</head>
	<body>
		<div class="container">
			<table  width="100%">
				<tr>
					<td style="border-top: 1px solid black;" colspan="4">NOME DO PERSONAGEM</td>
					<td style="border-top: 1px solid black;" colspan="4">JOGADOR</td>
					<td rowspan="5"><img src="<?php echo base_url('templates/imagens/ficha.png') ?>"></td>

				</tr>
				<tr>
					<td colspan="8"></td>
				</tr>
				<tr>
					<td style="border-top: 1px solid black;" colspan="4">CLASSE E N&Iacute;VEL</td>
					<td style="border-top: 1px solid black;" colspan="2">RA&Ccedil;A</td>
					<td style="border-top: 1px solid black;">TEND&Ecirc;NCIA</td>
					<td style="border-top: 1px solid black;">DIVINDADE</td>
				</tr>
				<tr>
					<td colspan="8"></td>

				</tr>
				<tr>
					<td style="border-top: 1px solid black;">TAMANHO</td>
					<td style="border-top: 1px solid black;">IDADE</td>
					<td style="border-top: 1px solid black;">SEXO</td>
					<td style="border-top: 1px solid black;">ALTURA</td>
					<td style="border-top: 1px solid black;">PESO</td>
					<td style="border-top: 1px solid black;">OLHOS</td>
					<td style="border-top: 1px solid black;">CABELOS</td>
					<td style="border-top: 1px solid black;">PELE</td>
				</tr>
			</table>
			<div class="col-sm-1" style="border: 1px solid black">AQUI</div>
			<div class="col-sm-1" style="border: 1px solid black">AQUI</div>			
				<!--<table class="table">
					<tr>
						<td style="font-size: 5px">HABILIDADE</td>
						<td width="18%" style="font-size: 8px">VALOR</td>
						<td style="font-size: 5px">MOD. DE <br>HABILIDADE</td>
						<td style="font-size: 5px">VALOR<br>TEMPOR&Aacute;RIO</td>
						<td style="font-size: 5px">MOD. <br>TEMPOR&Aacute;RIO</td>
					</tr>
					<tr>
						<td class="titulo" style="background-color: black;color: white;text-align: center;font-size: 10px;">FOR<br>FOR&Ccedil;A</td>
						<td style="border: 1px solid black"></td>
						<td style="border: 1px solid black"></td>
						<td style="border: 1px solid black"></td>
						<td style="border: 1px solid black"></td>
					</tr>
					<tr>
						<td class="titulo" style="background-color: black;color: white;text-align: center;font-size: 10px;">DES<br>DESTREZA</td>
						<td style="border: 1px solid black"></td>
						<td style="border: 1px solid black"></td>
						<td style="border: 1px solid black"></td>
						<td style="border: 1px solid black"></td>
					</tr>
					<tr>
						<td class="titulo" style="background-color: black;color: white;text-align: center;font-size: 10px;">CON<br>CONSTITUI&Ccedil;&Atilde;O</td>
						<td style="border: 1px solid black"></td>
						<td style="border: 1px solid black"></td>
						<td style="border: 1px solid black"></td>
						<td style="border: 1px solid black"></td>
					</tr>
					<tr>
						<td class="titulo" style="background-color: black;color: white;text-align: center;font-size: 10px;">INT<br>INTELIG&Ecirc;NCIA</td>
						<td style="border: 1px solid black"></td>
						<td style="border: 1px solid black"></td>
						<td style="border: 1px solid black"></td>
						<td style="border: 1px solid black"></td>
					</tr>
					<tr>
						<td class="titulo" style="background-color: black;color: white;text-align: center;font-size: 10px;">SAB<br>SABEDORIA</td>
						<td style="border: 1px solid black"></td>
						<td style="border: 1px solid black"></td>
						<td style="border: 1px solid black"></td>
						<td style="border: 1px solid black"></td>
					</tr>
					<tr>
						<td class="titulo" style="background-color: black;color: white;text-align: center;font-size: 10px;">CAR<br>CARISMA</td>
						<td style="border: 1px solid black"></td>
						<td style="border: 1px solid black"></td>
						<td style="border: 1px solid black"></td>
						<td style="border: 1px solid black"></td>
					</tr>
				</table>-->
		</div>
	<button id="btGerarPDF">gerar PDF</button>
	</body>
</html>