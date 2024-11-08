<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
        <input type="text" name="search">
        <button type="submit">Enviar</button>
    </form>
    <div style="display: flex; flex-wrap: wrap; margin: 30px;">

        <?php
        if ($_POST){

            $pesquisa = $_POST['search'];
            
            if (isset($pesquisa)){
    /*
    $toUrl = strtolower(urldecode($pesquisa));
    $require = file_get_contents("https://www.googleapis.com/books/v1/volumes?q=$toUrl");
    $biblioteca = json_decode($require, true);*/
    $livro_url = strtolower(urlencode($pesquisa));
    $page = file_get_contents("https://www.googleapis.com/books/v1/volumes?q=$livro_url");
    $data = json_decode($page, true);
    if (isset($data)){
        $quant_livros = count($data["items"]);
        #var_dump($data);
        for ($i=0; $i < $quant_livros; $i++) { 
            
            if (isset($data['items'][$i]['volumeInfo']['imageLinks']['thumbnail'])){
                $capa = "https://books.google.com/books/publisher/content?id=$id&printsec=frontcover&img=1&zoom=1&imgtk=AFLRE707XtYfMZb6kNCZVppyPmezOvwIY23IxFakd3IFCHrl4sNrZE2jVsA9qu5QqnT8dC11MhEaCjZbn4bdV27VlKCiyNomG8h8P3zDwIG77NTK1yTIPB_a-7PaA2BcD8TtRpwIW6wm&source=gbs_api";
                $id = $data['items'][$i]['id'];
                echo $id;
                echo "<a href='livro.php?id=$id'><img src='$capa' alt='Capa do Livro'></a>";
            }
        }
    }
}
}
?>
</div>
</body>
</html>














