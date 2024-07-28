<?php
    $server = "mysql:host=localhost;dbname=empresa";
    $user = "root";
    $pass = "";

    try{
        $conn = new PDO($server, $user, $pass );
        echo "conectado";
    } catch (PDOException $e){
        echo "Nao foi possivel conectar ao banco de dados";
    }


