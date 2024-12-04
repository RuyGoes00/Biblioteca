<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="style/assets/favicon.ico" type="image/x-icon">
    <style>
        body {
            font-family: Poppins;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
        }

        main {
            max-width: 100%;
            margin: var(--margin);
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        h2 {
            color: #4CAF50;
            margin-top: 30px;
        }

        main p {
            line-height: 1.6;
            margin-bottom: 15px;
        }

        figure {
            margin: 20px 0;
            text-align: center;
        }

        main img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        .social-links {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .social-links a {
            display: inline-block;
            margin: 0 10px;
            color: #333;
            text-decoration: none;
        }

        main button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        main button:hover {
            background-color: #0056b3;
        }

        .quote {
            font-style: italic;
            margin: 20px 0;
            padding: 10px;
            background-color: #e9f5e9;
            border-left: 4px solid #4CAF50;
        }
    </style>
</head>

<body>
    <?php
    include "header.php";
    ?>
    <main>
        <article>
            <figure>
                <img src="style/assets/Biblioteca.jpeg" alt="Biblioteca BookOn" style="height: 300px">
                <figcaption>A biblioteca BookOn</figcaption>
            </figure>
            <p>A biblioteca BookOn foi criada no ano de 1988. Seu criador, Ruy Alvares de Oliveira, era um vendedor ambulante que ia de bairro em bairro vendendo livros para crianças que, de vez em quando, pediam para Ruy ler com eles. Ruy já estava com 59 anos e não conseguia mais fazer seu trabalho como antigamente.</p>
            <p>Na quinta-feira, 5 de setembro, Ruy foi fazer suas vendas como normalmente fazia, mas achou estranho que não havia encontrado nenhuma das crianças. Quando ele chegou no último bairro, ele se surpreendeu ao ver as crianças e seus pais o esperando. Eles disseram a Ruy que sabiam o quanto ele tinha feito pelas crianças ao ensiná-las a ler.</p>
            <div class="quote">
                "A leitura é para a mente o que o exercício é para o corpo." – Joseph Addison
            </div>
            <p>Então, naquele dia, os pais das crianças deram a ideia de Ruy abrir uma biblioteca para que ele não precisasse ter que andar para ver as crianças. Ruy e os pais das crianças juntaram fundos o suficiente para criar a biblioteca BookOn. A biblioteca fez sucesso entre os moradores dos bairros que Ruy visitava.</p>
            <p>O tempo passou e, quando Ruy percebeu, a cidade inteira conhecia e frequentava sua biblioteca diariamente. Com o lucro obtido da biblioteca, Ruy desenvolveu e expandiu a sua tão amada biblioteca, até que nos dias de hoje acabou se tornando uma biblioteca online para as crianças desfrutarem da leitura sem precisar sair de casa.</p>
        </article>
        <figure>
            <center><img src="style/assets/Dono.jpeg">
                <p>Criador da Biblioteca BookOn</p>
                <p>Ruy Barbosa</p>
            </center>
        </figure>
    </main>
    <?php
    include "footer.php";
    ?>