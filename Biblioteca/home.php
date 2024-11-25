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
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style/home.css">

  </head>
  <body>
    <?php include "header.php"?>
    <section class="categorias">
      <div class="categoria" id="categoria-1" onclick="categoria('romance')">
        <img src="style/assets/Livros de romance icon.png" alt="" />
        <h3>Romance</h3>
      </div>
      <div class="categoria" id="categoria-2" onclick="categoria('aventura')">
        <img src="style/assets/Aventura.png" alt="" />
        <h3>Aventura</h3>
      </div>
      <div class="categoria" id="categoria-3" onclick="categoria('Ficcao')">
        <img src="style/assets/Ficção.png" alt="" />
        <h3>Ficção</h3>
      </div>
      <div class="categoria" id="categoria-4"onclick="categoria('comedia')">
        <img src="style/assets/Livro de comédia icon.png" alt="" />
        <h3>Comédia</h3>
      </div>
      <div class="categoria" id="categoria-5" onclick="categoria('suspense')">
        <img src="style/assets/Livro de suspense icon.png" alt="" />
        <h3>Suspense</h3>
      </div>
      <div class="categoria" id="categoria-6" onclick="categoria('fantasia')">
        <img src="style/assets/Fantasia book cover.png" alt="" />
        <h3>Fantasia</h3>
      </div>
      <div class="categoria" id="categoria-7" onclick="categoria('biografia')">
        <img src="style/assets/Biografia.png" alt="" />
        <h3>Biografia</h3>
      </div>
      <div class="categoria" id="categoria-8" onclick="categoria('brasil')">
        <img src="style/assets/história do Brasil.png" alt="" />
        <h3>Brasil</h3>
      </div>
      <div class="categoria" id="categoria-9" onclick="categoria('geografia')">
        <img src="style/assets/geografia (1).png" alt="" />
        <h3>Geográfia</h3>
      </div>
      <div class="categoria" id="categoria-10" onclick="categoria('matematica')">
        <img src="style/assets/universo matemático.png" alt="" />
        <h3>Matemática</h3>
      </div>
      <div class="categoria" id="categoria-11" onclick="categoria('Letras')">
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
          <a href="#">Saiba Mais</a>
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
        include "config.php";
        for ($i=1; $i <=11 ; $i++) { 
          $query = "SELECT codigo FROM destaques where id = $i";
          
          
          $query2  = $conn->query($query);
            $result = mysqli_fetch_array($query2);
            $codigo = $result[0];
            $page = file_get_contents("https://www.googleapis.com/books/v1/volumes/$codigo");
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
                  <a href="produto.php?id='.$id.'"><img
                  src="' . $capa . '"
                  alt="Capa do livro"  style="width: 200px;"/></a>
                  <div class="info-livro" style= "width: 200px">
                  <h3>' . $nome . '</h3>
                  <h4>' . $autor . '</h4>
                  <h5>' . $dataLançamento . '</h5>
                  </div>
                  </div>';
                  echo $objeto;}
                  
                }
              } else {
              }
            }
              ?>
        </div>
      </div>
      <div class="destaques">
        <h3>Romance</h3>
        <div class="scroll">
        <?php
        if ($i = 11){

          include "config.php";
          for ($n=1; $n <=10 ; $n++) { 
            # code...
            $query_romance = "SELECT codigo FROM romance where id = $n";
            
            
            $query2_romance  = $conn->query("SELECT codigo FROM romance where id = $n");
            $result_romance = mysqli_fetch_array($query2_romance);
            $codigo_romance = $result_romance[0];
            $page_romance = file_get_contents("https://www.googleapis.com/books/v1/volumes/$codigo_romance");
            if (isset($page_romance)) {
              
              $dados_romance = json_decode($page_romance, true);
              if (isset($dados)) {
                if (isset($dados_romance['id'])) {
                  $id_romance = $dados_romance['id'];
                } else {
                  $id_romance = "indefinida";
                }
                if (isset($dados_romance['volumeInfo']['title'])) {
                  $nome_romance = $dados_romance['volumeInfo']['title'];
                } else {
                  $nome_romance = "indefinida";
                }
                if (isset($dados_romance['volumeInfo']['publishedDate'])) {
                  $dataLançamento_romance = $dados_romance['volumeInfo']['publishedDate'];
                } else {
                  $dataLançamento_romance = "indefinida";
                }

                if (isset($dados_romance['volumeInfo']['authors'][0])) {
                  $autor_romance = $dados_romance['volumeInfo']['authors'][0];
                } else {
                  $autor_romance = "indefinida";
                }
                
                if (isset($dados_romance['volumeInfo']['industryIdentifiers'][0]['identifier'])) {
                    $isbn_romance = $dados_romance['volumeInfo']['industryIdentifiers'][0]['identifier'];
                  } else {
                    $isbn_romance = "indefinida";
                  }
                  if (isset($dados_romance['volumeInfo']['imageLinks'])) {
                  $capa_romance = $dados_romance['volumeInfo']['imageLinks']['thumbnail'];
                  $objeto_romance = '<div class="livro">
                  <a href="produto.php?id='.$id_romance.'"><img
                  src="' . $capa_romance . '"
                  alt="Capa do livro"  style="width: 200px;"/></a>
                  <div class="info-livro" style= "width: 200px">
                  <h3>' . $nome_romance . '</h3>
                  <h4>' . $autor_romance . '</h4>
                  <h5>' . $dataLançamento_romance . '</h5>
                  </div>
                  </div>';
                  echo $objeto_romance;}
                  
                }
              } else {
              }
            }
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
      function categoria(categoria){
        document.location.href =`catalogo.php?search=${categoria}`
      }
    </script>
  </body>
  </html>
