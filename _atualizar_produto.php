<?php

include 'conexao.php';

$id = $_POST['id'];
//$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

 $sql = "UPDATE estoque SET nomeproduto='$nomeproduto', categoria='$categoria', quantidade=$quantidade, fornecedor='$fornecedor' WHERE id=$id";

$pdo->exec($sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style="width: 400px;">
    <center>
        <h3>Atualizado com sucesso</h3>
        <div style="margin-top: 10px;">
            <a href="listar_produtos.php" class="btn btn-sm btn-warning" style="color:white">Voltar</a>
        </div>
    </center>
</div>