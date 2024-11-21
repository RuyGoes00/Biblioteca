<head>
    <link rel="stylesheet" href="style/header.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
</head>
<header>
    <div class="logo">
        <img src="style/assets/BookOn - 2.png" alt="Logo do BookOn" />
    </div>
    <div class="pesquisa">
        <form action="catalogo.php" method="get" style="display: flex; width: 300px;">

            <button type="submit" style="border: none; background: none; cursor: pointer;">
                <i class="fa-solid fa-magnifying-glass"></i>
                
            </button>
            <input type="text" name="search" placeholder="Procure por um Livro ou Autor" require/>
        </form>
    </div>
    <nav>
        <a href="home.php">Home</a>
        <a href="catalogo.php ">Catálogo</a>
        <a href="sobre.php">Sobre</a>
        <a href="Conta.php">Minha Conta</a>
    </nav>
    <div class="shop-cart">
        <i class="fa-solid fa-book" onclick="minhaEstante()"></i>
    </div>
    <script>
        function minhaEstante(){
            document.location.href = "minhaEstante.php"
        }
    </script>
</header>
