<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Catálogo de livros onde você pode procurar e filtrar por título, autor ou categoria.">
    <meta name="keywords" content="livros, catálogo, autores, gêneros, loja, livros online">
    <title>Catálogo</title>
    <link rel="stylesheet" href="style/catalogo.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
</head>

<body>
    <?php include "header.php"; ?>
    <section class="catalogo-card">
        <h1>Catálogo</h1>
        <div class="estante">
            <!--<div class="livro">
                <a href=""><img
                        src="http://books.google.com/books/content?id=LCqWEAAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api"
                        alt="Capa do livro" /></a>
                <div class="info-livro" >
                    <h3>Nome do Livro</h3>
                    <h4>Nome do Autor</h4>
                    <h5>Data de Lançamento</h5>
                </div>
            </div>-->
            <?php

            $search = '';
            $erro = '';
            if (!empty($_GET['search']) && isset($_GET['search'])) {
                $search = $_GET['search'];
                $nomeForUrl = strtolower(urlencode($search));
                $page = file_get_contents("https://www.googleapis.com/books/v1/volumes?q=$nomeForUrl");
                if (isset($page)) {

                    $dados = json_decode($page, true);
                    if (isset($dados)) {
                        $quant_livros = count($dados["items"]);
                        for ($i = 0; $i < $quant_livros; $i++) {
                            if (isset($dados['items'][$i]['id'])) {
                                $id = $dados['items'][$i]['id'];
                            } else {
                                $id = "indefinida";
                            }
                            if (isset($dados['items'][$i]['volumeInfo']['title'])) {
                                $nome = $dados['items'][$i]['volumeInfo']['title'];
                            } else {
                                $nome = "indefinida";
                            }
                            if (isset($dados['items'][$i]['volumeInfo']['publishedDate'])) {
                                $dataLançamento = $dados['items'][$i]['volumeInfo']['publishedDate'];
                            } else {
                                $dataLançamento = "indefinida";
                            }

                            if (isset($dados['items'][$i]['volumeInfo']['authors'][0])) {
                                $autor = $dados['items'][$i]['volumeInfo']['authors'][0];
                            } else {
                                $autor = "indefinida";
                            }

                            if (isset($dados['items'][$i]['volumeInfo']['industryIdentifiers'][0]['identifier'])) {
                                $isbn = $dados['items'][$i]['volumeInfo']['industryIdentifiers'][0]['identifier'];
                            } else {
                                $isbn = "indefinida";
                            }
                            if (isset($dados['items'][$i]['volumeInfo']['imageLinks'])) {
                                $capa = $dados['items'][$i]['volumeInfo']['imageLinks']['thumbnail'];
                                $objeto = '<div class="livro">
                <a href="produto.php?id='.$id.'"><img
                        src="' . $capa . '"
                        alt="Capa do livro"  style="width: 250px;"/></a>
                <div class="info-livro" style= "width: 250px">
                    <h3>' . $nome . '</h3>
                    <h4>' . $autor . '</h4>
                    <h5>' . $dataLançamento . '</h5>
                </div>
            </div>';
                                echo $objeto;}
                            
                        }
                    } else {
                    }
                } else {
                }
            } else {
                $erro = "Não foi encontrado";
            }

            ?>
        </div>
    </section>
</body>

</html>