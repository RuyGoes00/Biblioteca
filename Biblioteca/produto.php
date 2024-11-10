<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nome do livro</title>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style/produto.css" />
  <link rel="stylesheet" href="style/header.css" />
</head>

<body>
  <?php

  if ($_GET['id']) {
    $id = $_GET['id'];
    $page = file_get_contents("https://www.googleapis.com/books/v1/volumes?q=$id");
    if (isset($page)) {

      $dados = json_decode($page, true);
      if (isset($dados)) {
        if (isset($dados['items'][0]['volumeInfo']['title'])) {
          $nome = $dados['items'][0]['volumeInfo']['title'];
        } else {
          $nome = "indefinida";
        }
        if (isset($dados['items'][0]['volumeInfo']['publishedDate'])) {
          $dataLançamento = $dados['items'][0]['volumeInfo']['publishedDate'];
        } else {
          $dataLançamento = "indefinida";
        }

        if (isset($dados['items'][0]['volumeInfo']['authors'][0])) {
          $autor = $dados['items'][0]['volumeInfo']['authors'][0];
        } else {
          $autor = "indefinida";
        }

        if (isset($dados['items'][0]['volumeInfo']['industryIdentifiers'][0]['identifier'])) {
          $isbn = $dados['items'][0]['volumeInfo']['industryIdentifiers'][0]['identifier'];
        } else {
          $isbn = "indefinida";
        }
        if (isset($dados['items'][0]['volumeInfo']['publisher'])) {
          $editora = $dados['items'][0]['volumeInfo']['publisher'];
        } else {
          $editora = "indefinida";
        }
        if (isset($dados['items'][0]['volumeInfo']['description'])) {
          $descricao = $dados['items'][0]['volumeInfo']['description'];
        } else {
          $descricao = "indefinida";
        }
        if (isset($data['items'][0]['volumeInfo']['imageLinks']['thumbnail'])) {
          $capa = $data['items'][0]['volumeInfo']['imageLinks']['thumbnail'];
          $id = $data['items'][0]['id'];
          echo $capa;
          echo "<a href='livro.php?id=$id'><img src='$capa' alt='Capa do Livro'></a>";
        }
      }
    }
  }
    // botão de favorito

  ?>
  <header>
    <div class="logo">
      <img src="style/assets/BookOn - 1.png" alt="" />
    </div>
    <div class="pesquisa">
      <i class="fa-solid fa-magnifying-glass"></i>
      <input
        type="text"
        name="search"
        placeholder="Procure por um Livro ou Autor" />
    </div>
    <nav>
      <a href="home.html">Home</a>
      <a href="catalogo.html">Estante</a>
      <a href="#">Sobre</a>
      <a href="#">Categorias</a>
      <a href="#">Minha Conta</a>
    </nav>
    <div class="shop-cart">
      <i class="fa-solid fa-cart-shopping"></i>
    </div>
  </header>
  <section class="produto">
    <div class="img-livro">
      <img src="http://books.google.com/books/content?id=<?= $id ?>&printsec=frontcover&img=1&zoom=5&edge=curl&source=gbs_api" alt=""/>
    </div>
    <article>
      <h1><?= $nome ?></h1>
      <p class="nome-autor"><?= $autor ?></p>
      <p class="nome-editora"><?= $editora ?></p>
      <p class="isbn"><?= $isbn ?></p>
      <p class="descricao">
        <?= $descricao ?>
      </p>
    </article>
    <div class="checkout">
      <div class="infos">
        <img src="http://books.google.com/books/content?id=LCqWEAAAQBAJ&printsec=frontcover&img=1&zoom=10&edge=curl&source=gbs_api" alt="" class="livro-mini" />
        <div class="infos-mini">
          <h1><?= $nome ?></h1>
          <p class="nome-autor"><?= $autor ?></p>
          <p class="nome-editora"><?= $editora ?></p>
          <p class="isbn"><?= $isbn ?></p>
          <div class="fav">

            <button ><i class="fa-regular fa-heart"></i> Adicionar à Minha Estante</button>
          </div>
        </div>
      </div>
      <div class="paragraf">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium sit, omnis laboriosam delectus fugiat saepe quibusdam minus modi nesciunt eos hic possimus officia nam, blanditiis corrupti expedita obcaecati accusantium culpa.</p>
      </div>
      <div class="buttons" >
        <button name="vizualização" style="text-align: center;"><i class="fa-solid fa-book-open-reader"></i> Pré-visualização</button>
      </div>
    </div>
  </section>
</body>

</html>