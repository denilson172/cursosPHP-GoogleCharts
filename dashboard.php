<!DOCTYPE html>
<!-- saved from url=(0056)https://getbootstrap.com.br/docs/4.1/examples/dashboard/ -->
<html lang="PT-BR"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com.br/favicon.ico">

    <title>Curso Chart.</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

 </head>

  <body style="background: #f3f3f3;">
    <nav class="navbar navbar-dark bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="?pagina">AShow Moura</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sair</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="?pagina">
                  Dashboard <span class="sr-only">(atual)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?pagina=pedidos">
                  Pedidos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?pagina=clientes">
                  Cadastrar Clientes
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?pagina=vendas">
                  Cadastrar Vendas
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <!-- conteudo -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
              </div>
            </div>
          </div>

          <?php
            if(isset($_GET['pagina'])){

              switch ($_GET['pagina']) {
                case 'pedidos':
                  include 'graficos/quartoGrafico.php';
                  break;

                case 'clientes':
                  include 'cadastro_cliente.php';
                  break;

                case 'vendas':
                  include 'cadastro_vendas.php';
                  break;

                default:
                  include 'painel.php';
                  include 'painel2.php';
                  break;
              }
            }else{
                include 'painel.php';
                include 'painel2.php';
              }
          ?>

        </main>
      </div>
    </div>

    <!-- Principal JavaScript do Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    

</body></html>