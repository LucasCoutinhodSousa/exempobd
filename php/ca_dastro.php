<?php
include('conexao.php');
    echo '<pre>';
    print_r($_POST);
    echo '<pre>';

    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $quantidade = $_POST['quantidade'];

    echo '<br>';
    echo $nome;
    echo '<br>';
    echo $valor;
    echo '<br>';
    echo $quantidade;

    echo '<br>';

    $query = $dbh->prepare('insert into produtos (nome, valor, quantidade) values(:nome, :valor, :quantidade)');

    $query->execute(array(
        ':nome' => $nome,
        ':valor' => $valor,
        ':quantidade' => $quantidade
    ));

    print_r($dbh);
?>