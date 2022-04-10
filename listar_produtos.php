<!DOCTYPE html>
<html>

<head>
    <title>Listagem de produtos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/6ddb335f77.js" crossorigin="anonymous"></script>
</head>

<body>



    <div class="container" style="margin-top: 40px;">
        <div style="text-align: right;">
            <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        </div>
        
        <h3>Lista de Produtos</h3>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nro Produto</th>
                    <th scope="col">Nome Produto</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>

            <tr>

                <?php
                //error_reporting(0);
                include 'conexao.php';
                $sql = "SELECT * FROM estoque;";
                $busca = $pdo->query($sql);

                while ($array = $busca->fetch(PDO::FETCH_ASSOC)) {
                    $id = $array['id'];
                    $nroproduto = $array['nroproduto'];
                    $nomeproduto = $array['nomeproduto'];
                    $categoria = $array['categoria'];
                    $quantidade = $array['quantidade'];
                    $fornecedor = $array['fornecedor'];


                ?>
            <tr>
                <td><?php echo $nroproduto ?></td>
                <td><?php echo $nomeproduto ?></td>
                <td><?php echo $categoria ?></td>
                <td><?php echo $quantidade ?></td>
                <td><?php echo $fornecedor ?></td>
                <td><a class="btn btn-warning btn-sm" style="color:white" href="editar_produto.php? id=<?php echo $id ?>" role="button"><i class="fa-solid fa-pen-to-square"></i>&nbsp;Editar</a>
                    <a class="btn btn-danger btn-sm" style="color:white" href="deletar_produto.php?id=<?php echo $id ?>" role="button"><i class="fa-solid fa-trash-can"></i>&nbsp;Deletar</a>
                </td>
            </tr>
        <?php } ?>

        </tr>

        </table>



    </div>
</body>

</html>