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
<style>
  /* Responsividade para telas médias */
@media (max-width: 1024px) {
  :root {
    --padding-lados: 30px;
    --margin: 15px 30px;
  }

  .produto {
    flex-direction: column;
    align-items: center;
    margin: var(--margin);
  }

  .img-livro img {
    height: 300px;
  }

  article h1 {
    font-size: 24px;
    text-align: center;
  }

  article p {
    text-align: justify;
    font-size: small;
  }

  .checkout {
    min-width: 100%;
    margin-top: 20px;
  }

  .infos {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  .infos img {
    height: 150px;
  }

  .infos-mini {
    margin-left: 0;
    margin-top: 10px;
  }

  .buttons button {
    width: 100%;
  }
}

/* Responsividade para telas pequenas */
@media (max-width: 768px) {
  :root {
    --padding-lados: 20px;
    --margin: 10px 20px;
  }

  .produto {
    gap: 10px;
  }

  .img-livro img {
    height: 200px;
  }

  article h1 {
    font-size: 20px;
  }

  article p {
    font-size: small;
  }

  .checkout {
    padding: 15px;
  }

  .buttons {
    gap: 5px;
  }

  .buttons button {
    height: 35px;
    font-size: smaller;
  }
}

/* Responsividade para telas muito pequenas */
@media (max-width: 480px) {
  :root {
    --padding-lados: 10px;
    --margin: 5px 10px;
  }

  .produto {
    margin: var(--margin);
  }

  .img-livro img {
    height: 150px;
  }

  article h1 {
    font-size: 18px;
  }

  article p {
    font-size: x-small;
  }

  .checkout {
    padding: 10px;
  }

  .infos img {
    height: 100px;
  }

  .infos-mini p {
    font-size: x-small;
  }

  .buttons button {
    height: 30px;
    font-size: x-small;
  }

  .butao button {
    width: 100%;
  }
}

</style>
<body>
  <?php
if (!isset($_GET['id']) || empty($_GET['id'])) {
  echo "<script>alert('Não foi pssivel encontrar esse id!! Tente novamente!!')</script>";
  header("Location: home.php?error=id-nao-fornecido");
  exit;
} else {

}
if ($_GET['id']) {
    $id = $_GET['id'];
    $page = file_get_contents("https://www.googleapis.com/books/v1/volumes/$id?key=AIzaSyDipEexZymPc2FvmqFCT9gbUcbHBp0TwbE");

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