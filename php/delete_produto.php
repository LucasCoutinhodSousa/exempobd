<?hphp
    include('conexao.php');
    if(isset($_GET[idProd])){
        $idProd = $_GET[idProd];
    }else{
        echo 'Variaveis nao definidas';
        die();
    }

    try{
        $query = $dbh->prepare('DELETE FROM produtos WHERE id=:idProd;');

        $query ->execute(array(
            ':idProd' => $idProd)
        );
        echo 'Produto excluido';
    }catch(PDOExcpetion $e){
        echo 'erro';
    }
?>