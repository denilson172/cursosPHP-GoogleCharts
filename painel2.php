  <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!--init  grafico de linha -->
    <script type="text/javascript">
    	google.charts.load('current', {'packages':['corechart']});
    	google.charts.setOnLoadCallback(drawChart);

     	function drawChart() {
     		var data = google.visualization.arrayToDataTable([
        		['Mês', 'Quantidade'],

          		<?php

          			include 'conexao/conexao.php';
          		
          			$sql = "SELECT * FROM clientes";
          			$buscar = mysqli_query($conexao,$sql);

	          		while ($dados = mysqli_fetch_array($buscar)) {
	          			$mes = $dados['mes_cliente'];
	          			$quantidade = $dados['quantidade'];

				?>          
          		['<?php echo $mes ?>',<?php echo $quantidade ?>],

      			<?php } ?>
        	]);

	        var options = {
	          // title: 'Clientes Cadastrados',
	          // curveType: 'function',
	          legend: { position: 'bottom' }
	        };

	        var chart = new google.visualization.LineChart(document.getElementById('graficoLinha'));

	        chart.draw(data, options);
	      }
    </script>
    <!-- end grafico de linha -->
    <!-- init grafico de pizza -->
	<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Mês', 'Quantidade'],

          <?php
          	include 'conexao/conexao.php';

          	$sql = "SELECT * FROM vendas";
			$buscar = mysqli_query($conexao,$sql);

			while ($dados = mysqli_fetch_array($buscar)) {
				$mes = $dados['mes_venda'];
				$quantidade = $dados['quantidade_venda'];
		?>

        ['<?php echo $mes ?>', <?php echo $quantidade ?>],

         <?php } ?>
        ]);

        var options = {
          // title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('graficoPizza'));

        chart.draw(data, options);
      }
    </script>
    <!-- end grafico de pizza -->

  </head>
  <body>
  	<div class="container-fluid">
  		<div class="row">
  			<div class="col-md-8">
  				<h4 style="margin: 10px;">Gráfico de Clientes </h4>
    			<div id="graficoLinha"></div>
    		</div>
    		<div class="col-md-4">
  				<h4 style="margin: 10px;">Gráfico de Vendas </h4>
    			<div id="graficoPizza"></div>
    		</div>
    	</div>
    </div>
  </body>
</html>
