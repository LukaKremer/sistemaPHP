<?php
include 'conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Meu primeiro Script </title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <style type="text/css">
        #tamanhoContainer {
            width: 500px;
        }

        #botao {
            background-color: #FF1168;
            color: white;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <div class="container" id="tamanhoContainer">
        <h4>Formulário de Cadastro</h4>
        <form action="_atualizar_produto.php" method="post" style="margin-top: 20px">
            <?php

            $sql = "SELECT * FROM estoque WHERE id=$id;";
            $busca = $pdo->query($sql);

            while ($array = $busca->fetch(PDO::FETCH_ASSOC)) {
                $id = $array['id'];
                $nroproduto = $array['nroproduto'];
                $nomeproduto = $array['nomeproduto'];
                $categoria = $array['categoria'];
                $quantidade = $array['quantidade'];
                $fornecedor = $array['fornecedor'];

            ?>

                <div class="form-group">
                    <label>Nro Produto</label>
                    <input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disabled>
                    <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">

                </div>

                <div class="form-group">
                    <label>Nome Produto</label>
                    <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">

                </div>
                <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-control" name="categoria">
                        <option>Periféricos</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Celulares</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Quantidade</label>
                    <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">

                </div>

                <div class="form-group">
                    <label>Fornecedor</label>
                    <select class="form-control" name="fornecedor">
                        <option>Forcedor A</option>
                        <option>Forcedor B</option>
                        <option>Forcedor C</option>
                    </select>
                </div>
                <div style="text-align: right;">
                    <button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
                </div>
            <?php } ?>
        </form>
    </div>

</body>

</html>