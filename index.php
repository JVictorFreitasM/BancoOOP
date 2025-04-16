<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
</head>
<body><pre>
    <?php
    require_once 'Contabanco.php';
    $p1 = new Contabanco; // Pepe Freitas
    $p2 = new Contabanco; // Leo Jaime

    $p1->abrirConta("CC");
    $p1->setDono("Pepe Freitas");
    $p1->setnumConta(2019);
    $p1->Depositar(100);
    $p1->Sacar(20);
    print_r($p1);
    ?></pre>
</body>
</html>