<?php
    include('conexao.php');
    $query = $dbh->prepare('SELECT * FROM produtos');
    $query->execute();

    $produtos = $query->fetchAll();

    echo '<pre>';
    print_r($produtos);
    echo '<pre>';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tabela Produto</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>
    <body>
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
            </tbody>
        </table>
    </body>
</html>