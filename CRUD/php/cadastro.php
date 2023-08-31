<?php
    include('cadastro.php');

    try{
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
    }catch(PDOExcpetion $e){
        throw new MyDatabaseException( $Exception->getMessage( ) , (int)$Exception->getCode( ) );
    }

    $query = $dbh->prepare('INSERT INTO pessoa(nome, idade, sexo) VALUES(:nome, :idade, :sexo)');

    $query->execute(array(
        ':nome' => $nome,
        ':idade' => $idade,
        ':sexo' => $sexo
    ));
?>