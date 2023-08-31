<?php
    include('conector.php');

    if(isset(
        $_POST['nome'],$_POST['idade'],$_POST['sexo']
    ) && $_POST['nome'] !='' &&$_POST['idade']!=''){
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $sexo = $_POST['sexo'];
    }else{
        echo 'Variaveis nao definidads';
        die();
    }

    $query = $dbh->prepare('INSERT INTO pessoa(nome, idade, sexo) VALUES(:nome, :idade, :sexo)');

    $query->execute(array(
        ':nome' => $nome,
        ':valor' => $idade,
        ':sexo' = $sexo
    ));

    echo 'Inseridos'
?>