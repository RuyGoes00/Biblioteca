<head>
    <link rel="stylesheet" href="style/header.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="style/assets/favicon.ico" type="image/x-icon">
</head>
<header>
    <script>
        function home() {
            document.location.href = "home.php";
        }
    </script>
    <div class="logo">
        <img src="style/assets/BookOn - 2.png" alt="Logo do BookOn" onclick="home()" style="cursor: pointer;" />
    </div>
    <div class="pesquisa">
        <form action="catalogo.php" method="get" style="display: flex; width: 300px;">

            <button type="submit" style="border: none; background: none; cursor: pointer;">
                <i class="fa-solid fa-magnifying-glass"></i>

            </button>
            <input type="text" name="search" placeholder="Procure por um Livro ou Autor" require />
        </form>
    </div>
    <nav>
        <a href="home.php">Home</a>
        <a href="catalogo.php?search=Harry-Potter ">Catálogo</a>
        <a href="sobre.html">Sobre</a>
        <a href="Conta.php">Minha Conta</a>
    </nav>
    <div class="shop-cart">
        <i class="fa-solid fa-book" onclick="minhaEstante()"></i>
    </div>
    <script>
        function minhaEstante() {
            document.location.href = "minhaEstante.php"
        }
    </script>
</header>