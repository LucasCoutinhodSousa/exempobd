<?php
    include('conexao.php');
    
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    $login = $_POST['login'];
    $senha = md5($_POST['senha']);

    $query = $dbh->prepare('SELECT login, senha FROM login
    WHERE login=:login AND senha=:senha');

    $query->execute(array(
        ':login' => $login,
        ':senha' => $senha
    ));

    $usuario = $query->fetch();
    if(isset($usuario['login'])){
        echo 'sucesso';
    }else{
        echo 'Falha login';
    }
?>