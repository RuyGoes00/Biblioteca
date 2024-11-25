<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Conta - Livraria Online</title>
    <link rel="stylesheet" href="style/perfil.css">
</head>
<body>
    <?php 
    include "header.php";
    ?>

    <main>
        <section class="profile">
            <h2>Meu Perfil</h2>
            <div class="profile-info">
                <img src="profile-placeholder.jpg" alt="Foto de perfil">
                <div>
                    <h3>Nome do Usuário</h3>
                    <p>Email: usuario@email.com</p>
                    <p>Telefone: (11) 99999-9999</p>
                    <p>Endereço: Rua X, nº Y, Cidade, Estado</p>
                </div>
            </div>
            <a href="#" class="btn">Editar Perfil</a>
        </section>

        <section class="pedidos">
            <h2>Meus Pedidos</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID do Pedido</th>
                        <th>Data do Pedido</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>12345</td>
                        <td>2023-10-26</td>
                        <td>Em andamento</td>
                        <td><a href="#">Ver Detalhes</a></td>
                    </tr>
                    <!-- Mais linhas de pedidos -->
                </tbody>
            </table>
        </section>

        <section class="wishlist">
            <h2>Minha Lista de Desejos</h2>
            <ul>
                <li>Livro 1 <a href="#">Adicionar ao Carrinho</a></li>
                <li>Livro 2 <a href="#">Adicionar ao Carrinho</a></li>
                <li>Livro 3 <a href="#">Adicionar ao Carrinho</a></li>
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Livraria Online. Todos os direitos reservados.</p>
    </footer>
</body>
</html>