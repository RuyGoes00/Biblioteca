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
    
    $query = "SELECT codigo FROM destaques where id = 1";


          $query2  = $conn->query($query);
          $result = mysqli_fetch_array($query2);
          $codigo = $result[0];

