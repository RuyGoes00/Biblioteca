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
      referrerpolicy="no-referrer"
    />
</head>
    <?php 
    
    if (isset($_GET['search']) ){
            $search = $_GET['search'];
            echo $search;
        }
    
    ?>
<body>
    <?php include "header.php";?>
    <section class="catalogo-card">
        <h1>Catálogo</h1>
        <div class="estante">
            <div class="livro">
                <a href=""><img
                        src="http://books.google.com/books/content?id=LCqWEAAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api"
                        alt="Capa do livro" /></a>
                <div class="info-livro" >
                    <h3>Nome do Livro</h3>
                    <h4>Nome do Autor</h4>
                    <h5>Data de Lançamento</h5>
                </div>
            </div>
        </div>
    </section>
</body>

</html>