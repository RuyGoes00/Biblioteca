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
    <link rel="stylesheet" href="style/home.css" />
    <link rel="stylesheet" href="style/header.css" />
  </head>
  <body>
    <?php include "header.php"?>
    <section class="categorias">
      <div class="categoria" id="categoria-1">
        <img src="style/assets/Livros de romance icon.png" alt="" />
        <h3>Romance</h3>
      </div>
      <div class="categoria" id="categoria-2">
        <img src="style/assets/Aventura.png" alt="" />
        <h3>Aventura</h3>
      </div>
      <div class="categoria" id="categoria-3">
        <img src="style/assets/Ficção.png" alt="" />
        <h3>Ficção</h3>
      </div>
      <div class="categoria" id="categoria-4">
        <img src="style/assets/Livro de comédia icon.png" alt="" />
        <h3>Comédia</h3>
      </div>
      <div class="categoria" id="categoria-5">
        <img src="style/assets/Livro de suspense icon.png" alt="" />
        <h3>Suspense</h3>
      </div>
      <div class="categoria" id="categoria-6">
        <img src="style/assets/Fantasia book cover.png" alt="" />
        <h3>Fantasia</h3>
      </div>
      <div class="categoria" id="categoria-7">
        <img src="style/assets/Biografia.png" alt="" />
        <h3>Biografia</h3>
      </div>
      <div class="categoria" id="categoria-8">
        <img src="style/assets/história do Brasil.png" alt="" />
        <h3>Brasil</h3>
      </div>
      <div class="categoria" id="categoria-9">
        <img src="style/assets/geografia (1).png" alt="" />
        <h3>Geográfia</h3>
      </div>
      <div class="categoria" id="categoria-10">
        <img src="style/assets/universo matemático.png" alt="" />
        <h3>Matemática</h3>
      </div>
      <div class="categoria" id="categoria-11">
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
          <div class="book" id="book-1">
            <a href=""
              ><img
                src="http://books.google.com/books/content?id=LCqWEAAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api"
                alt=""
            /></a>
              <div class="nome-book">
                <h3>Nome</h3>
              </div>
          </div>
        </div>
      </div>
      <div class="destaques">
        <h3>Romance</h3>
        <div class="scroll">
          <div class="book" id="book-1">
            <a href=""
              ><img
                src="http://books.google.com/books/content?id=LCqWEAAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api"
                alt=""
            /></a>
          </div>
        </div>
      </div>
    </section>
    <section class="galeria-fotos">
      <!-- Galeria de Fotos
       
      <div class="image-maior">
        <img src="style/assets/127262 (1).jpg" alt="" />
      </div>
      <div class="menor">

          <div class="img-1">
              <img src="style/assets/29660.jpg" alt="" />
            </div>
            <div class="img-2">
                <img src="style/assets/Fantasia book cover.png" alt="" />
            </div>
        </div>
    </section>
  -->
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
  </body>
  </html>
