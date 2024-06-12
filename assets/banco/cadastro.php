<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Hash da senha antes de armazená-la no banco de dados
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    try {
        $db = new PDO('sqlite:/home/runner/StyleFit-1/assets/banco/usuarios.db');

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $db->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha_hash); // Insere a senha hashada
        $stmt->execute();

        header("Location: /login.html?cadastro=sucesso");
        exit();
    } catch (PDOException $e) {
        echo "Erro ao cadastrar o usuário: " . $e->getMessage();
    }
}
?>