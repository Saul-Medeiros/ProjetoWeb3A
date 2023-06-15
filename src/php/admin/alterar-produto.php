<?php 
session_start();
// usuário não iniciou sessão
if (!isset($_SESSION['usuario_email'])) {
    header('Location: ../../index.php');
// usuário não é admin
} else if (!($_SESSION['usuario_email'] == "admin")) {
    header('Location: ../users/home.php');
}

$conexao = mysqli_connect("127.0.0.1", "root", "", "technostore");
if (mysqli_connect_errno()) {
    die("Falha de Conexão com o MySQL: " . mysqli_connect_error());
}

$nome = $_POST['nome'];
$row = mysqli_fetch_array(mysqli_query($conexao, "SELECT * FROM produtos WHERE nome='$nome'"));
$descricao = $row['descricao'];
$preco = $row['preco'];
?>

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
    <link rel="stylesheet" href="../../css/home-admin.css">
    <link rel="stylesheet" href="../../css/logout.css">
    <link rel="stylesheet" href="../../css/editar-produto.css">

    <!-- Script para ações na página -->
    <script defer src="../../js/logout.js"></script>
</head>
<body>
    <header>
        <h2>Administrador</h2>
        <nav class="navegacao">
            <a href="./listar-usuarios.php">Editar Usuários</a>
            <a href="#">Editar Produtos</a>
            <a href="./cadastrar-produto.php">Cadastrar Produto</a>
            <button class="btnlogout-popup">Logout</button>
        </nav>
    </header>

    <!-- popup de logout do usuário -->
    <div class="logout-popup">
        <div class="popup">
            <h2>Logout</h2>
            <hr>
            <span class="text-logout">Tem certeza de que deseja encerrar sua sessão?</span>
            <hr>
            <div class="botoes">
                <a href="../redirects/logout.php">
                    <button class="btnOK">OK</button>
                </a>
                <button class="btnFechar">Fechar</button>
            </div>
        </div>
    </div>
    
    <main>
        <div class="formulario-edicao">
            <div class="form-box produto">
                <h2>Alterar Produto</h2>
                <form action="../redirects/alterar-produto-redirect.php" method="POST">
                    <div class="input-box">
                        <span class="icones"><img src="../../images/hardware-chip.svg" alt=""></span>
                        <input type="text" name="nome" value="<?php echo $nome; ?>" required>
                        <label>Nome do Produto</label>
                    </div>
                    <div class="input-box">
                        <span class="icones"><img src="../../images/document-text.svg" alt=""></span>
                        <input type="text" name="descricao" value="<?php echo $descricao; ?>" required>
                        <label>Descrição</label>
                    </div>
                    <div class="input-box">
                        <span class="icones"><img src="../../images/pricetag.svg"></span>
                        <input type="number" name="preco" value="<?php echo $preco; ?>" step="0.01" required>
                        <label>Preço</label>
                    </div>
                    <div>
                        <input type="hidden" name="antigo_nome" value="<?php echo $nome; ?>">
                        <button type="submit" class="btn">Alterar</button>
                    </div>
                </form>
                <a href="./listar-produtos.php">
                    <button class="btn voltar">Voltar</button>
                </a>
            </div>
        </div>
    </main>

</body>
</html>