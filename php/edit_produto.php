
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>atualizar Produto</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="../style/estilo.css">
    </head>
    <body>
        <div class="plincipal">
            <h1>Atualizar Produtos</h1>
            <form action="" method="post">
                <input type="hidden" name="idProd" value="<?php echo $_GET['idProd']; ?>">
                <label for="">Nome produto</label>
                <input type="text" name="nome"><br>

                <label for="">Valor</label>
                <input type="text" name="valor" id=""><br>

                <label for="">Quantidade</label>
                <input type="number" name="quantidade" id=""><br>
                <br>
                <input type="submit" value="Cadastrar"><br>
            </form>
        </div>
    </body>
</html>