<?php
$dsn ="pgsql:dbname=curso_estoque host=localhost"; //padrão - server local
$username = "postgres"; //padrão - root
$password = "postgres"; //senha de conexão do banco de dados.
$pdo= new PDO($dsn, $username, $password);
// create connection