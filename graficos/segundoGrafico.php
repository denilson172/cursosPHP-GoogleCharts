 
  <html>
  <head>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Cidade', 'População', { role: 'style' }],

          <?php
            include 'conexao.php';
            $sql = "SELECT * FROM cidades";
            $buscar = mysqli_query($conexao, $sql);

            while ($dados = mysqli_fetch_array($buscar)) {
              $cidade = $dados['cidade'];
              $populacao = $dados['populacao'];
            
              ?>
              ['<?php echo $cidade ?>',  <?php echo $populacao ?>, '#000'],

            <?php } ?>
        ]);

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
                         { calc: "stringify",
                           sourceColumn: 1,
                           type: "string",
                           role: "annotation" },
                        2]);

        var options = {
          title: "População das cidades",
          // width: 900,
          height: 400,
          bar: {groupWidth: "70%"},
          legend: { position: "top" },
        };
        var chart = new google.visualization.ColumnChart(document.getElementById("graficoColuna"));
        chart.draw(view, options);
      }
    </script>
  </head>
  <body>
    <center>
      <div id="graficoColuna" style="height:500px"></div>
    </center> 
  </body>
</html>
