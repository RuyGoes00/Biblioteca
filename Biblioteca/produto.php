<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php
  $id = $_GET['id'];
  $page = file_get_contents("https://www.googleapis.com/books/v1/volumes/$id");
  $dados = json_decode($page, true);
  echo $dados['volumeInfo']['title'];
  ?></title>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style/produto.css" />
  <link rel="stylesheet" href="style/header.css" />
  <link rel="shortcut icon" href="style/assets/favicon.ico" type="image/x-icon">
</head>

<body>
  <?php
if (!isset($_GET['id']) || empty($_GET['id'])) {
  //  echo "<script>alert('Não foi pssivel encontrar esse id!! Tente novamente!!')</script>";
  header("Location: home.php?error=id-nao-fornecido");
  exit;
} else {

}
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
    <article style="width: 500px;">
      <h1><?= $nome ?></h1>
      <p class="nome-autor"><?= $autor ?></p>
      <p class="nome-editora"><?= $editora ?></p>
      <p class="isbn"><?= $isbn ?></p>
      <p class="descricao">
        <?= $descricao ?>
      </p>
    </article>
    <div class="checkout" style="width: 400px;">
      <article class="infos">
        <img src="http://books.google.com/books/content?id=<?= $id ?>&printsec=frontcover&img=1&zoom=5&edge=curl&source=gbs_api" alt="" class="livro-mini" />
        <div class="infos-mini">
          <h1><?= $nome ?></h1>
          <p class="nome-autor"><?= $autor ?></p>
          <p class="nome-editora"><?= $editora ?></p>
          <p class="isbn"><?= $isbn ?></p>
          <?php 
          $id_visualização = "";
          $isRead = $dados['accessInfo']['epub']['acsTokenLink'];
          if (isset($isRead)){
            $id_visualização = $id;
          } else {
            echo "<script>Alert('Este livro não está disponivel para leitura!!')</script>";
          }
          
          ?>
          <script>
            function redirectAddFav(){
              document.location.href = "add_favorito.php?id=<?= $id ?>";
              
            }
            function visualizacao(){
              document.location.href = "bookView.php?id=<?=$id_visualização?>";
            }
            </script>
        </div>
      </article>
      <!--<div class="paragraf">
        <p>/ // $descricao </p>
      </div>-->
      <div class="buttons" style="width: 100%; margin-top: 20px; ">
        <button onclick="redirectAddFav()" style="padding: 10px; cursor: pointer; width: 100%;"><i class="fa-solid fa-heart"></i>Adicionar a minha Estante</button>
        <button name="vizualização" style=" padding:10px ;text-align: center; cursor: pointer; width: 100%;" onclick="visualizacao()"><i class="fa-solid fa-book-open-reader"></i> Pré-visualização</button>
        </div>
    </div>
  </section>
  <?php 
  include "footer.php";
  ?>
</body>

</html>