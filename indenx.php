<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar no jogo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="js/get_number.js"></script>
</head>

<body>
    <header class="jumbotron">
        <h1>Jogo do bicho! (ou Jogue na Mega-(Q)pena...)</h1>
    </header>
    <main class="container">
        <form action="sumario.php">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input class="form-control" type="text" name="apostadora" id="nome">
            </div>
            <label for="numeros">Números</label>
            <div id="numeros" class="form-group">
            
                <!-- <label for="numero">
                Número da sorte
            </label>
            <input class="form-control" type="number" 
            name="numero" id="numero"
            min="1" max="60"> -->
            </div>
            <div class="border border-dark"">
            <!-- Imprimir os 60 números -->
            <?php
            for ($i = 1; $i <= 60; $i++) :
            ?>
            <span class=" btn btn-primary m-3" onclick="getNumber(this);"><?= $i ?></span>
            <?php
            endfor;
            ?>

            </div>
            <input class="btn btn-success mt-2" type="submit" value="Seguinte">
        </form>
    </main>
</body>

</html>
