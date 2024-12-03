<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Catálogo de livros onde você pode procurar e filtrar por título, autor ou categoria.">
    <meta name="keywords" content="livros, catálogo, autores, gêneros, loja, livros online">
    <title>Catálogo</title>
    <link rel="stylesheet" href="style/minhaEstante.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="style/assets/favicon.ico" type="image/x-icon">
</head>

<body>
    <?php include "header.php"; ?>
    <section class="estante-card">
        <h1 style="text-align: center;">Minha Estante</h1>
        <div class="estante">
            <?php
            include "config.php";
            $query = "SELECT count(*) FROM favoritos";
            $biblioteca = $conn->query($query);
            $quant_favs = mysqli_fetch_array($biblioteca);
            //  echo $quant_favs[0];
            if ($quant_favs > 0) {

                for ($i = 1; $i <= $quant_favs[0]; $i++) {
                    $query_books = "SELECT codigo FROM favoritos where id = $i";
                    $mysqli = $conn->query($query_books);
                    $data = mysqli_fetch_array($mysqli);
                    if (isset($data[0])) {
                        $codigo = $data[0];
                        $page = file_get_contents("https://www.googleapis.com/books/v1/volumes/$codigo?key=AIzaSyDipEexZymPc2FvmqFCT9gbUcbHBp0TwbE");
                        if (isset($page)) {
                            $dados = json_decode($page, true);
                            if (isset($dados)) {
                                if (isset($dados['id'])) {
                                    $id = $dados['id'];
                                } else {
                                    $id = "indefinida";
                                }
                                if (isset($dados['volumeInfo']['title'])) {
                                    $nome = $dados['volumeInfo']['title'];
                                } else {
                                    $nome = "indefinida";
                                }
                                if (isset($dados['volumeInfo']['publishedDate'])) {
                                    $dataLançamento = $dados['volumeInfo']['publishedDate'];
                                } else {
                                    $dataLançamento = "indefinida";
                                }

                                if (isset($dados['volumeInfo']['authors'][0])) {
                                    $autor = $dados['volumeInfo']['authors'][0];
                                } else {
                                    $autor = "indefinida";
                                }

                                if (isset($dados['volumeInfo']['industryIdentifiers'][0]['identifier'])) {
                                    $isbn = $dados['volumeInfo']['industryIdentifiers'][0]['identifier'];
                                } else {
                                    $isbn = "indefinida";
                                }
                                if (isset($dados['volumeInfo']['imageLinks'])) {
                                    $capa = $dados['volumeInfo']['imageLinks']['thumbnail'];
                                    $objeto = '<div class="livro">
                  <a href="produto.php?id=' . $id . '"><img
                  src="' . $capa . '"
                  alt="Capa do livro"  style="width: 250px;"/></a>
                  <div class="info-livro" style= "width: 250px">
                  <h3>' . $nome . '</h3>
                  <h4>' . $autor . '</h4>
                  <h5>' . $dataLançamento . '</h5>
                  </div>
                  </div>';
                                    echo $objeto;
                                }
                            }
                        } else {
                        }
                    }
                }
            }
            ?>
        </div>
    </section>
    <?php
    include "footer.php";
    ?>
</body>

</html>