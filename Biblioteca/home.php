<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style/home.css" />
  <link rel="shortcut icon" href="style/assets/favicon.ico" type="image/x-icon">

</head>

<body>
  <?php include "header.php"; ?>
  <section class="categorias">
    <div class="categoria" id="categoria-1" onclick="Romance()">
      <img src="style/assets/Livros de romance icon.png" alt="" />
      <h3>Romance</h3>
    </div>
    <div class="categoria" id="categoria-2" onclick="Aventura()">
      <img src="style/assets/Aventura.png" alt="" />
      <h3>Aventura</h3>
    </div>
    <div class="categoria" id="categoria-3" onclick="Ficcao()">
      <img src="style/assets/Ficção.png" alt="" />
      <h3>Ficção</h3>
    </div>
    <div class="categoria" id="categoria-4" onclick="Comedia()">
      <img src="style/assets/Livro de comédia icon.png" alt="" />
      <h3>Comédia</h3>
    </div>
    <div class="categoria" id="categoria-5" onclick="Suspense()">
      <img src="style/assets/Livro de suspense icon.png" alt="" />
      <h3>Suspense</h3>
    </div>
    <div class="categoria" id="categoria-6" onclick="Fantasia()">
      <img src="style/assets/Fantasia book cover.png" alt="" />
      <h3>Fantasia</h3>
    </div>
    <div class="categoria" id="categoria-7" onclick="Biografia()">
      <img src="style/assets/Biografia.png" alt="" />
      <h3>Biografia</h3>
    </div>
    <div class="categoria" id="categoria-8" onclick="Brasil()">
      <img src="style/assets/história do Brasil.png" alt="" />
      <h3>Brasil</h3>
    </div>
    <div class="categoria" id="categoria-9" onclick="geografia()">
      <img src="style/assets/geografia (1).png" alt="" />
      <h3>Geográfia</h3>
    </div>
    <div class="categoria" id="categoria-10" onclick="Matematica()">
      <img src="style/assets/universo matemático.png" alt="" />
      <h3>Matemática</h3>
    </div>
    <div class="categoria" id="categoria-11" onclick="Letras()">
      <img src="style/assets/Portuguese language (1).png" alt="" />
      <h3>Letras</h3>
    </div>
  </section>
  <main>
    <div class="transparente">
      <div class="content">
        <h1>Fantasia</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ullam
          aliquam sed deserunt eum sequi beatae, officia doloremque porro
          explicabo delectus, laboriosam architecto libero minima culpa
          expedita placeat eveniet ut?
        </p>
        <a href="catalogo.php?search=fantasia" >Saiba Mais</a>
      </div>
    </div>
  </main>
  <section class="mais-vendidos">
    <h1>Mais vendidos</h1>
    <span class="separar"></span>
    <div class="destaques">
      <h3>Destaques</h3>
      <div class="scroll">
        <?php
        if (isset($_GET['error'])){
          if ($_GET['error'] = "id-não-fornecido"){
            echo "<script>alert('Não foi pssivel encontrar esse id!! Tente novamente!!')</script>";
          }
        }
        function getLivro($info){
          return [
            "id" => $info['id']  ?? "indefinida",
            "nome" => $info['nome'] ?? "indefinida",
            "autor" => $info['autor'] ?? "indefinida",
            "isbn" => $info['isbn'] ?? "indefinida",
            "datalancamento" => $info['dataLançamento'] ?? "indefinida",
            "capa" => $info['capa'] ?? "indefinida"
          ];
        }
          $json = json_decode(file_get_contents("destaque.json"), true);
        for ($i = 0; $i < count($json["destaque"]); $i++) {
            $info = $json["destaque"][$i];
          $book = getLivro($info);
          $id = $book['id'];
          $nome = $book['nome'];
          $autor = $book['autor'];
          $isbn = $book['isbn'];
          $dataLançamento = $book['datalancamento'];
          $capa = $book['capa'];
          $objeto = '<div class="livro">
                  <a href="produto.php?id=' . $id . '"><img
                  src="' . $capa . '"
                  alt="Capa do livro"  style="width: 200px;"/></a>
                  </div>';
                  echo $objeto;
        }
        ?>
      </div>
    </div>
    <div class="destaques">
      <h3>Romance</h3>
      <div class="scroll">
        <?php

$json_romance = json_decode(file_get_contents("destaque.json"), true);
          for ($n = 0; $n < count($json_romance["romance"]); $n++) {

          $info_romance = $json_romance["romance"][$n];
          $book_romance = getLivro($info_romance);
          $id_romance = $book_romance['id'];
          $nome_romance = $book_romance['nome'];
          $autor_romance = $book_romance['autor'];
          $isbn_romance = $book_romance['isbn'];
          $dataLançamento_romance = $book_romance['datalancamento'];
          $capa_romance = $book_romance['capa'];
          $objeto_romance = '<div class="livro">
                  <a href="produto.php?id=' . $id_romance . '"><img
                  src="' . $capa_romance . '"
                  alt="Capa do livro"  style="width: 200px;"/></a>
                  </div>';
                  echo $objeto_romance;
        } 
        ?>
      </div>
    </div>
  </section>

  <section class="autores">
    <h1>Autores em Destaque </h1>
    <div class="exposicao">
      <div class="row-autores">

        <div class="autor">
          <a href=""><img src="style/assets/clarice_1peq.png" alt=""></a>
          <h1>Clarice Lispector</h1>
        </div>
        <div class="autor">
          <a href=""><img src="style/assets/nxMWV9YJInGirE6.jpg" alt=""></a>
          <h1>Bianca Santana</h1>
        </div>
        <div class="autor">
          <a href=""><img src="style/assets/machado_de_assis_real.jpg.webp" alt=""></a>
          <h1>Macahdo de Assis</h1>
        </div>
        <div class="autor">
          <a href=""><img src="style/assets/richard-russell-rick-riordan-jr.jpg" alt=""></a>
          <h1>Richard Russel</h1>
        </div>
        <div class="autor">
          <a href=""><img src="style/assets/jkrowling-facebook-skst82b7hrg1.webp" alt=""></a>
          <h1>J. K. Rowling</h1>
        </div>


      </div>
    </div>
  </section>
  <?php
  include "footer.php";
  ?>
  <script>
    function Romance() {
      document.location.href = "catalogo.php?search=Romance"
    }

    function Aventura() {
      document.location.href = "catalogo.php?search=Aventura"
    }

    function Ficcao() {
      document.location.href = "catalogo.php?search=Ficção"
    }

    function Comedia() {
      document.location.href = "catalogo.php?search=Comédia"
    }

    function Suspense() {
      document.location.href = "catalogo.php?search=Suspense"
    }

    function Fantasia() {
      document.location.href = "catalogo.php?search=Fantasia"
    }

    function Biografia() {
      document.location.href = "catalogo.php?search=Biografia"
    }

    function Brasil() {
      document.location.href = "catalogo.php?search=brasil"
    }

    function geografia() {
      document.location.href = "catalogo.php?search=Geografia"
    }

    function Matematica() {
      document.location.href = "catalogo.php?search=Matematica"
    }

    function Letras() {
      document.location.href = "catalogo.php?search=Letras"
    }
  </script>
</body>

</html>