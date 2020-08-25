<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PW-III Codelgniter - Cadastro</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/node_modules/bootstrap/dist/css/bootstrap.css"); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/csscadastro.css"); ?>"/>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function () { 
        $("#CPF").mask("000.000.000-00", {reverse: true})
        $("#Nascimento").mask("00/00/0000")
        $("#RG").mask("00.000.000-00")
        $("#Celular").mask("(00)00000-0000")
    });
</script>

</head>
<body>
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
                <a class="nav-link" href="<?php echo base_url("index.php/Welcome/login"); ?>">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Cadastro</a>
            </li>
        </ul>
    </nav>
	<section>
    <div class="container">
        <div class="=col-lg-9 text-center mr-auto ml-auto">
            <br><br>
            <h1 class="display-4 texto titulo">CADASTRA-SE</h1>
            <br><br>
            <form action="../controller/validarCadastro.php" method="POST" id="Cadastro" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col">
                        <label for="inputNome" class="texto"><h3>Nome</h3></label>
                        <br>
                        <input type="text" class="form-control mx-sm-3" id="Nome" placeholder="Digite seu Nome" name="Nome" autocomplete="off">
                    </div>
                    <div class="col">
                        <label for="" class="texto"><h3>Sobrenome</h3></label>
                        <br>
                        <input type="text" class="form-control mx-sm-3" id="Sobrenome" placeholder="Digite seu Sobrenome" name="Sobrenome" autocomplete="off">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <br>
                        <label for="inputNomedeUsuario" class="texto"><h3>Nome de Usuario</h3></label>
                        <br>
                        <input type="text" class="form-control mx-sm-3" id="NomedoUsuario" placeholder="Digite seu Nome de Úsuario" name="NomedoUsuario" autocomplete="off">
                    </div>
                    <div class="form-group col-md-6">
                        <br>
                        <label for="inputCpf" class="texto"><h3>CPF</h3></label>
                        <br>
                        <input type="text" class="form-control mx-sm-3" id="CPF" placeholder="Digite seu CPF" name="CPF" autocomplete="off">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputNascimento" class="texto"><h3>Nascimento</h3></label>
                        <br>
                        <input type="text" class="form-control mx-sm-3" id="Nascimento" placeholder="Digite sua Data de nascimento" name="Nascimento" autocomplete="off">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputRG" class="texto"><h3>RG</h3></label>
                        <br>
                        <input type="text" class="form-control mx-sm-3" id="RG" placeholder="Digite seu RG" name="RG" autocomplete="off">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="texto"><h3>Email</h3></label>
                        <br>
                        <input type="email" class="form-control mx-sm-3" id="Email" placeholder="Digite Seu Email" name="Email" autocomplete="off">
                    </div>  
                    <div class="form-group col-md-6">
                        <label for="inputCelular" class="texto"><h3>Celular</h3></label>
                        <input type="telefone" id="Celular" class="form-control mx-sm-3" placeholder="Digite seu numero de Celular" name="Celular" autocomplete="off">
                    </div>  
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEndereco" class="texto"><h3>Endereço</h3></label>
                        <br>
                        <input type="text" class="form-control mx-sm-3" id="Endereco" placeholder="Digite Seu Endereço" name="Endereco">
                    </div>  
                    <div class="form-group col-md-6">
                        <label for="inputNumero" class="texto"><h3>Numero</h3></label>
                        <input type="text" id="Numero" class="form-control mx-sm-3" placeholder="Digite o numero do seu endereço" name="Numero">
                    </div>  
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPassword6" class="texto"><h3>Senha</h3></label>
                        <input type="password" id="Senha" class="form-control mx-sm-3" placeholder="Digite sua senha" aria-describedby="passwordHelpInline" name="Senha">
                    </div>  
                    <div class="form-group col-md-6">
                        <label for="inputPassword6" class="texto"><h3>Confime sua Senha</h3></label>
                        <input type="password" id="Confisenha" class="form-control mx-sm-3" placeholder="Digite confirme sua senha" aria-describedby="passwordHelpInline" name="Confisenha">
                    </div>  
                </div>
                <div class="form-row col-10 mx-auto mt-5 mb-5">
                    <input class="form-control btn-primary col-5 mx-auto" type="submit" value="CADASTRA-SE">
                </div>
            </form>
        </div>
    </div>
	</section>

<script type="text/javascript" src="<?php echo base_url("assets/node_modules/jquery/dist/jquery.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/node_modules/jquery/dist/jquery.mask.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/node_modules/bootstrap.js"); ?>"></script>
</body>
</html>