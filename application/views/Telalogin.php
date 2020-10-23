<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PW-III Codelgniter - Login</title>
    <link rel="shortcut icon" href="<?php echo base_url("assets/imagens/logo.png.png")?>" type="image/x-png"/>
    <link rel="stylesheet" href="<?php echo base_url("assets/node_modules/bootstrap/dist/css/bootstrap.css"); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/csslogin.css"); ?>"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            background-color: #003791;
            /*background-image: url('../');
            background-size:cover;
            movimentar a img
            background-position-y: 200px*/
        }
        textarea:focus, input:focus{
            outline: none;
        }
    </style>
</head>
<body>

    <!-- As a heading -->
    <nav class="navbar navbar bg borda">
        <span class="navbar-brand mb-0 h1 logo"><a href="<?php echo base_url("index.php/Welcome/index"); ?>"><img src="<?php echo base_url("assets/imagens/logo.png.png")?>" alt=""></a></span>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("index.php/Welcome/index"); ?>">Início</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Produtos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("index.php/Welcome/cadastro");?>">Cadastro</a>
            </li>
        </ul>
    </nav>
    <div id="login-container">
        <h1>Login</h1>
        <form action="<?php echo base_url("index.php/login/validarLogin");?>" method="POST" id="login">
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" placeholder="Digite seu e-mail" autocomplete="off">
            <label for="password">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
            <a href="#" id="forgot-pass">Esqueceu a senha?</a>
            <input type="submit" value="Login"> 
        </form>
        <div id="social-container">
            <p>Ou entre pelas suas redes sociais</p>
            <a href="#"><i class="fa fa-facebook-f"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <!--<i class="fa fa-instagram"></i>-->
        </div>
        <div id="register-container">
            <p>Ainda não tem uma conta?</p>
            <a href="<?php echo base_url("index.php/Welcome/cadastro");?>">Registrar</a>
        </div>
    </div>

<script type="text/javascript" src="<?php echo base_url("assets/node_modules/popper.js/dist/umd/popper.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/node_modules/jquery/dist/jquery.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/node_modules/jquery/dist/jquery.mask.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/javascript/validar.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/node_modules/sweetalert2/dist/sweetalert2.all.js"); ?>"></script>

</body>
</html>