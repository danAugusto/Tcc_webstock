<?php
    include_once("seguranca.php");
    include_once("conexao_mysql.php");

    $codigo = $_POST["txtCodigo"];
    $produto = $_POST["txtProd"];
    $quantidade = $_POST["txtQuant"];
    $valor = $_POST["txtValor"];
   

    $query = mysqli_query($conexao, "INSERT INTO produto (codigo,produto,quantidade,valor) VALUES ('$codigo', '$produto', '$quantidade', '$valor')"); 
    echo '<script language="JavaScript" charset="utf-8">alert("Produto Cadastrado!")</script>';
?>


