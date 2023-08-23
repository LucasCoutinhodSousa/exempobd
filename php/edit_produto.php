
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Cadastro</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="../style/estilo.css">
    </head>
    <body>
        <div class="plincipal">
            <form action="../php/ca_dastro.php" method="post">
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