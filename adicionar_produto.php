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

    <div class="container" id="tamanhoContainer" style="margin-top:20px;">
        <div style="text-align: right;">
            <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        </div>

        <h4>Formulário de Cadastro</h4>
        <form action="_inserir_produto.php" method="post" style="margin-top: 20px">
            <div class="form-group">
                <label>Nro Produto</label>
                <input type="number" class="form-control" name="nroproduto" placeholder="Insira o numero do produto" autocomplete="off" required>

            </div>

            <div class="form-group">
                <label>Nome Produto</label>
                <input type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do produto" autocomplete="off" required>

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
                <input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade do produto" autocomplete="off" required>

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

                
                <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>

            </div>

        </form>
    </div>

</body>

</html>