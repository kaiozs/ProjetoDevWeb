<?php
try {
    // Cria uma nova conexão PDO com o banco de dados SQLite
    $db = new PDO('sqlite:usuarios.db');

    // Define o modo de erro do PDO para exceções
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta todos os registros da tabela "usuarios"
    $result = $db->query('SELECT * FROM usuarios');

    // Exibe os registros da tabela "usuarios"
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>
            </tr>";

    foreach ($result as $row) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nome']}</td>
                <td>{$row['email']}</td>
                <td>{$row['senha']}</td>
              </tr>";
    }

    echo "</table>";
} catch (PDOException $e) {
    // Exibe a mensagem de erro caso ocorra uma exceção
    echo "Erro ao consultar a tabela: " . $e->getMessage();
}
?>