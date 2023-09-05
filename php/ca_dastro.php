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
        $categoria = $_POST['categoria'];
    }else{
        echo 'Variaveis nao definidas';
        die();
    }
    }catch(PDOExcpetion $e){
        throw new MyDatabaseException( $Exception->getMessage( ) , (int)$Exception->getCode( ) );
    }

    /*echo '<br>';
    echo $nome;
    echo '<br>';
    echo $valor;
    echo '<br>';
    echo $quantidade;*/

    echo '<br>';

    $query = $dbh->prepare('INSERT INTO produtos (nome, valor, quantidade, cat) VALUES(:nome, :valor, :quantidade, :cat)');

    $query->execute(array(
        ':nome' => $nome,
        ':valor' => $valor,
        ':quantidade' => $quantidade,
        ':cat' => $categoria
    ));

    //print_r($dbh);
    echo 'Inseridos com sucesso';
?>