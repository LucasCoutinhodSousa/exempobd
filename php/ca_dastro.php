<?php
include('conexao.php');
   /* echo '<pre>';
    print_r($_POST);
    echo '<pre>';*/


    try{
    if(isset($_POST['nome'],$_POST['valor'],$_POST['quantidade']) && $_POST['nome']!='' && $_POST['valor']!=''){
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        $quantidade = $_POST['quantidade'];
    }else{
        echo 'Variaveis nao definidas';
        die();
    }
    }catch(PDOExcpetion $e){
        throw new MyDatabaseException( $Exception->getMessage( ) , (int)$Exception->getCode( ) );
    }

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