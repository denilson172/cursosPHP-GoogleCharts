<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background: #f3f3f3;">
	<div class="container-fluid">
		<div class="row">

			<div class="col md-4">
				<div class="card text-white bg-info mb-3" style="max-width: 18rem;">
					<div class="card-header" style="text-align: center;">Total de Clientes | Ano</div>
				  	<div class="card-body">
				    	<h5 class="card-title" style="text-align: center; font-size: 40px;">
							<?php
								include 'conexao/conexao.php';
								$sql = "SELECT SUM(quantidade) AS total_clientes FROM clientes";
								$consulta = mysqli_query($conexao,$sql);
								$dados = mysqli_fetch_array($consulta);
								echo $dados['total_clientes'];
							?>
							<span style="font-size: 15px;">| UND</span>
						</h5>
					</div>
				</div>
			</div>

			<div class="col md-4">
				<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
					<div class="card-header" style="text-align: center;">Faturamento | Ano</div>
				  	<div class="card-body">
				    	<h5 class="card-title" style="text-align: center; font-size: 40px;">
							<?php
								include 'conexao/conexao.php';
								$sql = "SELECT SUM(valor_venda) AS total_venda FROM vendas";
								$consulta = mysqli_query($conexao,$sql);
								$dados = mysqli_fetch_array($consulta);
								$total = $dados['total_venda'];
								echo 'R$ '.number_format($total,2,'.','');
							?>
							<span style="font-size: 15px;">| BRL</span>
						</h5>
					</div>
				</div>
			</div>

			<div class="col md-4">
				<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
					<div class="card-header" style="text-align: center;">Total de Vendas | Ano</div>
				  	<div class="card-body">
				    	<h5 class="card-title" style="text-align: center; font-size: 40px;">
							<?php
								include 'conexao/conexao.php';
								$sql = "SELECT SUM(quantidade_venda) AS total_quantidade FROM vendas";
								$consulta = mysqli_query($conexao,$sql);
								$dados = mysqli_fetch_array($consulta);
								echo $dados['total_quantidade'];
							?>
							<span style="font-size: 15px;">| QTD</span>
						</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>