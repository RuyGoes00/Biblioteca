<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style/add_favorito.css">
</head>
<body>
    <?php 
    
        include "config.php";

        if ($_GET['id']){
            $codigo = $_GET['id'];
            $query = "INSERT INTO favoritos(codigo) VALUES ('$codigo')";

            $insert = $conn->query($query);
            $_GET['id'] = null;
        }
        include "header.php";
    ?>
    <section>
        <div class="card">
    <i class="fa-solid fa-star"></i>
    <h1>Seu livro foi adicionado aos favoritos</h1>
    <p>Para lê-lo basta ir para a pagina <a href="">Minha Estante</a> e começar a ler!!</p>
    <button><i class="fa-solid fa-book"></i>Minha Estante</button>

    </div>
    </section>
</body>
</html>