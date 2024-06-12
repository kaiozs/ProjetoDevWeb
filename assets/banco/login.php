<?php
session_start();

$db_path = '/home/runner/StyleFit-1/assets/banco/usuarios.db';

// Verifica se o arquivo do banco de dados existe
if (!file_exists($db_path)) {
    die("Erro: Arquivo do banco de dados não encontrado.");
}

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexão com o banco de dados SQLite
    $db = new SQLite3($db_path);

    // Verifica se os campos de email e senha foram preenchidos
    if (isset($_POST['email']) && isset($_POST['senha'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Prepara a consulta SQL para verificar se o usuário existe
        $stmt = $db->prepare('SELECT * FROM usuarios WHERE email = :email');
        $stmt->bindValue(':email', $email, SQLITE3_TEXT);

        // Executa a consulta
        $result = $stmt->execute();

        // Verifica se encontrou um usuário com o email fornecido
        if ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            // Verifica a senha usando password_verify
            if (password_verify($senha, $row['senha'])) {
                // Login bem-sucedido, armazena informações na sessão e redireciona
                $_SESSION['email'] = $row['email'];
                header("Location: /minhaconta.php");
                exit();
            } else {
                // Senha incorreta
                $_SESSION['error'] = "Senha incorreta.";
                header("Location: /login.html?cadastro=senha_incorreta");
                exit();
                exit();
            }
        } else {
            // Usuário não encontrado
            $_SESSION['error'] = "Usuário não encontrado.";
            header("Location: /login.html?cadastro=usuario_nao_encontrado");
            exit();
        }

        // Fecha a conexão com o banco de dados
        $db->close();
    } else {
        // Se os campos de email e senha não foram enviados, exibe uma mensagem de erro
        $_SESSION['error'] = "Por favor, preencha todos os campos.";
        header("Location: /login.html");
        exit();
    }
}
?>
