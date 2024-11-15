<?php 

    // conect mysql
    
    $host = 'localhost';
    $username = 'root';
    $senha = 'root';
    $bd = 'site_db';

    $conn = new mysqli($host, $username, $senha, $bd);
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }
    ?>