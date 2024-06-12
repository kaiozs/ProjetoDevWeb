<?php
try {
    // Cria uma nova conexão PDO com o banco de dados SQLite
    $db = new PDO('sqlite:usuarios.db');

    // Define o modo de erro do PDO para exceções
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Executa a instrução SQL para criar a tabela "usuarios" se ela não existir
    $db->exec("CREATE TABLE IF NOT EXISTS usuarios (
                id INTEGER PRIMARY KEY,
                nome TEXT,
                email TEXT,
                senha TEXT
              )");

    echo "Tabela 'usuarios' criada com sucesso.";
} catch (PDOException $e) {
    // Exibe a mensagem de erro caso ocorra uma exceção
    echo "Erro ao criar a tabela: " . $e->getMessage();
}
?>