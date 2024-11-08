<head>
    <link rel="stylesheet" href="style/header.css">
</head>
<header>
    <div class="logo">
        <img src="style/assets/BookOn - 1.png" alt="Logo do BookOn" />
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
        <a href="home.html">Home</a>
        <a href="catalogo.php ">Estante</a>
        <a href="#">Sobre</a>
        <a href="#">Categorias</a>
        <a href="#">Minha Conta</a>
    </nav>
    <div class="shop-cart">
        <i class="fa-solid fa-cart-shopping"></i>
    </div>
</header>