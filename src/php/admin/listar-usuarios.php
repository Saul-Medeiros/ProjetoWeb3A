<!-- Editar -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- favicon da página -->
    <link rel="shortcut icon" href="../../images/logo-white.png" type="image/x-icon">

    <title>TechnoStore</title>
    
    <!-- Estilização da página -->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/logout.css">
    <link rel="stylesheet" href="../../css/usuario.css">

    <!-- Script para ações na página -->
    <script defer src="../../js/home.js"></script>
</head>
<body>
    <header>
        <h2>TechnoStore<img class="logo" src="../../images/logo-white.png"></h2>
        <nav class="navegacao">
            <a href="#">Editar Usuários</a>
            <a href="">Editar Produtos</a>
            <a href="./cadastrar-produto.php">Cadastrar Produto</a>
            <a href="">Voltar</a>
            <button class="btnlogout-popup">Logout</button>
        </nav>
    </header>

    <!-- popup de logout do usuário -->
    <div class="form-box">
        <form action="">
            <div class="logout-popup">
                <div class="popup">
                    <h2>Logout</h2>
                    <hr>
                    <span class="text-logout">Tem certeza de que deseja encerrar sua sessão?</span>
                    <hr>
                    <div class="botoes">
                        <button class="btnOK">OK</button>
                        <button class="btnFechar">Fechar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- php Usuários -->
    <main>

        <div class="listagem-usuario">
            <div class="usuario">
                <img src="../../images/person.svg" alt="">
                <span>
                    <p>Usuário: Saul Medeiros da Silva</p>
                    <p>Email: usermail@mail.com</p>
                </span>
            </div>
            <button class="alterar">Alterar</button>
            <button class="remover">Remover</button>
        </div>
    
    </main>

</body>
</html>