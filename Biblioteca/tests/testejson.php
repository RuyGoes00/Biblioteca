<?php 
    $json = json_decode(file_get_contents("destaque.json"), true);
    var_dump($json["destaques"]);

?>