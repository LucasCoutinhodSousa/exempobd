<?php
    include('conexao.php');
    $query = $dbh->prepare('SELECT id, nome, valor, quantidade, categoria 
    from produtos INNER JOIN categoria on produtos.cat = categoria.cod;');
    $query->execute();

    $produtos = $query->fetchAll();

    $query = $dbh->prepare('SELECT * FROM categoria');
    $query->execute();
    
    $categoria = $query->fetchAll(PDO::FETCH_KEY_PAIR);

    /*echo '<pre>';
    print_r($produtos);
    echo '<pre>';*/
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tabela Produto</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="../style/estilo.css">
    </head>
    <body>
        <div class="principal">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Quantidade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Maca</td>
                        <td>8,99</td>
                        <td>28</td>
                    </tr>
                    <?php
                        foreach($produtos as $produtos){
                            echo '<tr>';
                            echo '<td>'.$produtos['id'].'</td>';
                            echo '<td>'.$produtos['nome'].'</td>';
                            echo '<td>'.$produtos['valor'].'</td>';
                            echo '<td>'.$produtos['quantidade'].'</td>';
                            echo '<td>'.$produtos['categoria'].'</td>';
                            echo '<td><a href="edit_produto.php?idProd='.$produtos['id'].'">Edit</a></td>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>