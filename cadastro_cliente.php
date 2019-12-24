<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Clientes</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

	<div class="container">
			<h2>Cadastro de Cliente</h2>
			<form action="cadastro_cliente2.php" method="post">
				<div class="form-group">
					<label>Selecione o mês:</label>
					<select class="form-control" name="mes">
						<option>Jan</option>
						<option>Fev</option>
						<option>Mar</option>
						<option>Abr</option>
						<option>Mai</option>
						<option>Jun</option>
						<option>Jul</option>
						<option>Ago</option>
						<option>Set</option>
						<option>Out</option>
						<option>Nov</option>
						<option>Dez</option>
					</select>
				</div>

				<div class="form-group">
					<label>Digite a quantidade</label>
					<input class="form-control" type="number" name="quantidade" autocomplete="off">
				</div>

				<div style="text-align: right;">
					<button tyoe="submit" class="btn btn-success">Salvar</button>
				</div>
			</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html> 