<?php 

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $url = "https://www.googleapis.com/books/v1/volumes/$id";
        $page = file_get_contents($url);
        $data = json_decode($page, true);
        $nome = $data['volumeInfo']['title'];
        echo "Nome do livro: ". $nome; 

    }else{
        echo "Não encontrado";
    }


?>