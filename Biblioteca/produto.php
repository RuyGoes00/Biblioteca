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
    $page = file_get_contents("https://www.googleapis.com/books/v1/volumes/$id");

    if (isset($page)) {

      $dados = json_decode($page, true);
      if (isset($dados)) {
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
        if (isset($dados['volumeInfo']['publisher'])) {
          $editora = $dados['volumeInfo']['publisher'];
        } else {
          $editora = "indefinida";
        }
        if (isset($dados['volumeInfo']['description'])) {
          $descricao = $dados['volumeInfo']['description'];
        } else {
          $descricao = "indefinida";
        }
        if (isset($data['volumeInfo']['imageLinks']['thumbnail'])) {
          $capa = $data['volumeInfo']['imageLinks']['thumbnail'];
          $id = $data['id'];
          echo $capa;
          echo "<a href='livro.php?id=$id'><img src='$capa' alt='Capa do Livro'></a>";
        }
      }
    }
  }
  // botão de favorito

  ?>
  <?php 
  include "header.php";
  ?>
  <section class="produto">
    <div class="img-livro">
      <img src="http://books.google.com/books/content?id=<?= $id ?>&printsec=frontcover&img=1&zoom=5&edge=curl&source=gbs_api" alt="" />
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
    <div class="checkout" style="width: max-content;">
      <div class="infos">
        <img src="http://books.google.com/books/content?id=<?= $id ?>&printsec=frontcover&img=1&zoom=5&edge=curl&source=gbs_api" alt="" class="livro-mini" />
        <div class="infos-mini">
          <h1><?= $nome ?></h1>
          <p class="nome-autor"><?= $autor ?></p>
          <p class="nome-editora"><?= $editora ?></p>
          <p class="isbn"><?= $isbn ?></p>
          <div class="add-fav">
            
            <div class="buttons" style="flex-direction: wrap
            ;">
            <button onclick="redirectAddFav()" style="padding: 10px; cursor: pointer;"><i class="fa-solid fa-heart"></i>Adicionar a minha Estante</button>
              <button name="vizualização" style="text-align: center; cursor: pointer;" onclick="visualizacao()"><i class="fa-solid fa-book-open-reader"></i> Pré-visualização</button>
            </div>
            <script>
              function redirectAddFav(){
                document.location.href = "add_favorito.php?id=<?= $id ?>";
                
              }
              function visualizacao(){
                document.location.href = "bookView.php?id=<?=$id?>";
              }
              </script>
              </div>
        </div>
      </div>
      <div class="paragraf">
        <p><?= $descricao ?></p>
      </div>
    </div>
  </section>
  <?php 
  include "footer.php";
  ?>
</body>

</html>