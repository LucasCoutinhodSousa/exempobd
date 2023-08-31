<?php
    $dsn = 'mysql:dbname=pessoa;host=127.0.0.1;port=3307';
    $user = 'root';
    $password = '';

    try{
        $dbh = new PDO($dsn, $user, $password);
    }catch(PDOExcpetion $e){
        throw new MyDatabaseException( $Exception->getMessage('Con') , (int)$Exception->getCode( ) );
    }
?>