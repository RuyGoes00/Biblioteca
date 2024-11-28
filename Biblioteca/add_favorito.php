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
        referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/add_favorito.css">
    <link rel="shortcut icon" href="style/assets/favicon.ico" type="image/x-icon">
</head>

<body>
    <?php

    include "config.php";

    if ($_GET['id']) {
        $codigo = $_GET['id'];
        $check = false;
        $objeto = '';
        $count = mysqli_fetch_array($conn->query("SELECT COUNT(*) FROM favoritos"));
        for ($i = 0; $i <= $count[0]; $i++) {
            $search = mysqli_fetch_assoc($conn->query("SELECT * FROM favoritos where id = $i"));
            // var_dump($search['id']);
            if (isset($search)) {

                if ($search['codigo'] == $codigo) {
                    $check = true;
                    $objeto = '<div class="card">
    <i class="fa-regular fa-circle-xmark" style="color: red;"></i>
    <h1>Parece que esse livro já está nos favoritos!!</h1>
    <p>Para lê-lo basta ir para a pagina <a href="minhaEstante.php">Minha Estante</a> e começar a ler!!</p>
    <button onclick="redirectMinhaEstante()"><i class="fa-solid fa-book"></i>Minha Estante</button>

    </div>';
                    break;
                }
            }
        }
        if (!$check) {

            $query = "INSERT INTO favoritos(codigo) VALUES ('$codigo')";

            $insert = $conn->query($query);
            $objeto = '<div class="card">
            <i class="fa-solid fa-star"></i>
            <h1>Seu livro foi adicionado aos favoritos</h1>
            <p>Para lê-lo basta ir para a pagina <a href="minhaEstante.php">Minha Estante</a> e começar a ler!!</p>
            <button onclick="redirectMinhaEstante()"><i class="fa-solid fa-book"></i>Minha Estante</button>

        </div>';
        }
    }
    include "header.php";
    ?>
    <section>
        <?php

        if (isset($objeto)) {
            echo $objeto;
        }
        ?>
    </section>
    <script>
        function redirectMinhaEstante() {
            document.location.href = "minhaEstante.php"
        }
    </script>
</body>

</html>