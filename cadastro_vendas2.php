<?php

include 'conexao/conexao.php';

$mes = $_POST['mes'];
$quantidade = $_POST['quantidade'];
$valor = $_POST['valor'];

$sql = "INSERT INTO vendas (mes_venda, quantidade_venda, valor_venda) VALUES ('$mes',$quantidade, $valor)";

$inserir = mysqli_query($conexao,$sql);

echo '<div class="alert alert-success" role="alert">';
echo '  Venda cadastrada com sucesso!';
echo '</div>';
header('Location: dashboard.php?pagina=vendas');
