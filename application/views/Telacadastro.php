<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PW-III Codelgniter - Cadastro</title>
    <link rel="shortcut icon" href="<?php echo base_url("assets/imagens/logo.png.png")?>" type="image/x-png"/>
    <link rel="stylesheet" href="<?php echo base_url("assets/node_modules/bootstrap/dist/css/bootstrap.css"); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/csscadastro.css"); ?>"/>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () { 
        $("#CPF").mask("000.000.000-00", {reverse: true})
        $("#Nascimento").mask("00/00/0000")
        $("#RG").mask("00.000.000-00")
        $("#Celular").mask("(00) 00000-0000")
    
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
            <form action="<?php echo base_url("index.php/cadastro/validarCadastro");?>" method="POST" id="Cadastro" enctype="multipart/form-data">
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
                <div class="row mb-3">
                    <div class="col-4 themed-grid-col">
                        <br>
                        <label for="inputNomedeUsuario" class="texto"><h3>Username</h3></label>
                        <br>
                        <input type="text" class="form-control mx-sm-3" id="NomedoUsuario" placeholder="Digite seu Nome de Úsuario" name="NomedoUsuario" autocomplete="off">
                    </div>
                    <div class="col-4 themed-grid-col">
                        <br>
                        <label for="inputCpf" class="texto"><h3>CPF</h3></label>
                        <br>
                        <input type="text" class="form-control mx-sm-3" id="CPF" placeholder="Digite seu CPF" name="CPF" autocomplete="off">
                    </div>
                    <div class="col-4 themed-grid-col">
                        <br>
                        <label for="inputRG" class="texto"><h3>RG</h3></label>
                        <br>
                        <input type="text" class="form-control mx-sm-3" id="RG" placeholder="Digite seu RG" name="RG" autocomplete="off">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">                      
                        <label for="inputNascimento" class="texto"><h3>Nascimento</h3></label>
                        <br>
                        <input type="text" class="form-control mx-sm-3" id="Nascimento" placeholder="Data de nascimento" name="Nascimento" autocomplete="off">
                    </div>
                    <div class="col">
                        <label for="inputCelular" class="texto"><h3>Celular</h3></label>
                        <input type="telefone" id="Celular" class="form-control mx-sm-3" placeholder="Numero de Celular" name="Celular" autocomplete="off">
                    </div>
                    <div class="col">
                        <label for="inputEmail4" class="texto"><h3>Email</h3></label>
                        <br>
                        <input type="email" class="form-control mx-sm-3" id="Email" placeholder="Digite Seu Email" name="Email" autocomplete="off">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-lg-2 themed-grid-col">
                        <label for="inputCEP" class="texto"><h3>CEP</h3></label>
                        <br>
                        <input type="text" class="form-control mx-sm-3" id="cep" placeholder="Digite Seu CEP" name="cep">
                    </div>
                    <div class="col">
                        <label for="inputEndereco" class="texto"><h3>Endereço</h3></label>
                        <br>
                        <input type="text" class="form-control mx-sm-3" id="logradouro" placeholder="Digite Seu Endereço" name="logradouro">
                    </div>       
                </div>
                <div class="form-row">
                    <div class="col">                      
                        <label for="inputNumero" class="texto"><h3>Numero</h3></label>
                        <br>
                        <input type="text" class="form-control mx-sm-3" id="Numero" placeholder="Digite seu numero" name="Numero" autocomplete="off">
                    </div>
                    <div class="col">
                        <label for="inputBairro" class="texto"><h3>Bairro</h3></label>
                        <input type="text" id="bairro" class="form-control mx-sm-3" placeholder="Digite seu Bairro" name="bairro" autocomplete="off">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="inputCidade" class="texto"><h3>Cidade</h3></label>
                        <br>
                        <input type="text" class="form-control mx-sm-3" id="localidade" placeholder="Digite Seu Cidade" name="localidade" autocomplete="off">
                    </div>
                    <div class="col-lg-2 themed-grid-col">
                        <label for="inputUF" class="texto"><h3>UF</h3></label>
                        <br>
                        <input type="text" class="form-control mx-sm-3" id="uf" placeholder="Digite a UF" name="uf" autocomplete="off">
                    </div>
                </div>
            
                <div class="form-row">
                    <div class="col">
                        <label for="inputPassword6" class="texto"><h3>Senha</h3></label>
                        <input type="password" id="Senha" class="form-control mx-sm-3" placeholder="Digite sua senha" aria-describedby="passwordHelpInline" name="Senha">
                    </div>  
                    <div class="col">
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

<script type="text/javascript" src="<?php echo base_url("assets/node_modules/popper.js/dist/umd/popper.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/node_modules/jquery/dist/jquery.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/node_modules/jquery/dist/jquery.mask.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/node_modules/sweetalert2/dist/sweetalert2.all.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/javascript/validar.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/javascript/main.js"); ?>"></script>


</body>
</html>