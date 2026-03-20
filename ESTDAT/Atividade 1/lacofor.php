<?php

/*

INFORMACAO ---POST--- RECEBIDA
USO DO LACO ---FOR---

*/

$numeroescolhido = "";
$saida = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeroescolhido = $_POST["numero"];

    for ($i = $numeroescolhido; $i >= 0; $i--) {
        $saida .= $i . " ";
    }

} else {
    echo "Por favor, escolha um numero";
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>


    <title>Jogue Far Cry 3</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <style>
        body {
        background-image: url("fc3jungle.jpg");
        background-color: rgb(0, 0, 0);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        }

        h3 {
        color: white; text-shadow: 3px 5px 5px black
        }

        .card-header {
        color: black;
        background-color: white;
        }
        .card {
        color: white;
        background-color: rgba(0, 0, 0, 0.8);
        border-color: white;
        }

        .btn-custom {
        background-color: #008f0c;
        color: white;
        border-color: white;
        width: 200px;
        height: 40px;
        font-size: 15px;
        }

        .btn-custom:hover {
        background-color: #00be0a;
        border-color: white;
        }

    </style>

</head>

<body>

    <div class="container" style="margin-top: 11vh;" >

    <h3 class= "text-center">Esse programa faz uma contagem regressiva!</h3>

    <div class="d-flex justify-content-center align-items-center" style="height: 58vh";>
    <div class="card w-100" style="max-width: 400px;">

    <div class="card-header">
        Esse foi o numero escolhido <b> <?php echo $numeroescolhido; ?> </b>
    </div>

    <div class="card-body">
    <form action="form.html" method="post">

        <div class="mb-3">
            <label class="form-label">Observe a decadencia</label>
        </div>

        <div class="d-flex justify-content-center align-items-center">
            <?php echo $saida; ?> 
        </div>

        <div class="d-flex justify-content-center align-items-center">
            <button class="btn btn-custom" type="submit">Voltar a tela inicial</button>
        </div>
    
    </form>
    </div>
    </div>
    </div>
    </div>
</body>
</html>