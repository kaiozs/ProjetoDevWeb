<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Style Fit</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/img/icone.png" type="image/png">
</head>
<body>

    <!--INICIO DO BANNER -->
    <div class="banner">
        <!-- INICIO DO CONTAINER-->
        <div class="container">
            <!--INICIO DA NAVEGAÇÃO TOPO-->
            <div class="navbar">
                <div class="logo">
                    <a href="index.html">
                        <img src="assets/img/logo.png" alt="STYLEFIT">
                    </a>
                </div>

                <!-- INICIO DO MENU DE NAVEGAÇÃO -->

                <nav>
                    <ul id="MenuItens">
                        <li><a href="index.html" title="">Inicio</a></li>
                        <li><a href="produtos.html" title="">Produtos</a></li>
                        <li><a href="empresa.html" title="">Empresa</a></li>
                        <li><a href="login.html" title="">Login</a></li>
                        <li><a href="minhaconta.php" title="">Minha conta</a></li>
                    </ul>
                </nav>
                <!-- FIM DO MENU DE NAVEGAÇÃO -->
                <img src="assets/img/menu.png" alt="" class="menu-celular" onclick="menucelular()">
            </div>
            <!--FIM DA NAVEGAÇÃO TOPO-->
        </div>
        <!-- FIM DO CONTAINER-->
    </div>

    <!-- FIM DO BANNER -->     
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <div class="">
        <div class="corpo-categorias">
            <div class="linha">

                <?php
                if (isset($_SESSION['email'])) {
                    // O usuário está logado, exibe uma mensagem de boas-vindas
                    echo '<br><br>';
                    echo '<div class="alert alert-info custom-alert" role="alert">Bem-vindo, ' . $_SESSION['email'] . '!</div>';
                    echo '<br> <a href="assets/banco/logout.php" class="btn btn-danger">Sair</a>';
                } else {
                    // O usuário não está logado, exibe uma mensagem informando-o para fazer login
                    echo '<br><br>';
                    echo '<div class="alert alert-info custom-alert" role="alert">Por favor, faça login para continuar.</div>';
                    echo '<br> <a href="/login.html" class="btn btn-danger">Fazer login</a>';
                }
                ?>
                
            </div>
        </div>
    </div>
    
    


    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- INICIO RODAPÉ -->
    <footer class="rodape">
        <div class="container">
            <div class="linha">
                <div class="rodape-col-1">
                    <h3>Baixe o nosso app</h3>
                    <p>Baixe nosso aplicativo nas melhores plataformas.</p>
                    <div class="app-logo">
                        <img src="assets/img/google.png" alt="">
                        <img src="assets/img/apple.png" alt="">
                    </div>
                </div>
                <div class="rodape-col-2">
                    <img src="assets/img/logo.png" alt="">
                    <p>Conquiste seu melhor com estilo e performance</p>
                </div>
                <div class="rodape-col-3">
                    <h3>Mais informações</h3>
                    <ul>
                        <li>Cupons</li>
                        <li>Blog</li>
                        <li>Política de privacidade</li>
                        <li>Contatos</li>
                    </ul>
                </div>
                <div class="rodape-col-4">
                    <h3>Redes Sociais</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                        <li>Twitter</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="direitos">
                &#169; Todos os direitos reservados
            </p>
        </div>
    </footer>
    <!-- FIM RODAPÉ -->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>
