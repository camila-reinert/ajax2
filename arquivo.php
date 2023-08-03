<?php

    $matricula = $_POST["matricula"];
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    $alunos = [];

    $resposta =
    [
        "matricula" => $matricula,
        "nome" => $nome,
        "idade" => $idade
    ];

    array_push($alunos, $resposta);

    $json_texto = json_encode(["alunos" => $alunos]);
    echo($json_texto); 
    
    ?>

