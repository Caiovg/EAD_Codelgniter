<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PW-III Codelgniter - Inicio</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/node_modules/bootstrap/dist/css/bootstrap.css"); ?>"/>
    <link rel="shortcut icon" href="<?php echo base_url("assets/imagens/logo.png.png")?>" type="image/x-png"/>
	  <link rel="stylesheet" href="<?php echo base_url("assets/css/csshome.css"); ?>"/>
	  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
    </style>
</head>
<body>
	<nav class="navbar navbar bg borda">
        <span class="navbar-brand mb-0 h1 logo"><a href="<?php echo base_url("index.php/Welcome/index"); ?>"><img class="respo" src="<?php echo base_url("assets/imagens/logo.png.png")?>" alt=""></a></span>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" href="#">Início</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Produtos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="<?php echo base_url("index.php/Welcome/login"); ?>">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("index.php/Welcome/cadastro"); ?>">Cadastro</a>
            </li>
        </ul>
    </nav>
	<br><br>
	<!--<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">BEM VINDO</h1>
		<h1 class="display-4">AO NOSSO SITE</h1>
	<div>-->
	<main class="bd-masthead" id="content" role="main">
		<div class="container">
			<div class="row">
				<div class="col-6 mx-auto col-md-4 order-md-2">
				<img src="<?php echo base_url("assets/imagens/logo.png.png")?>" alt="" class="img-fluid mb-3 mb-md-0">
				</div>
			</div>
		</div>
	</main>
	<br><br>
	<section class="jumbotron text-center cor1">
    <div class="container cor">
      <h1>Quem Somos</h1>
      <p class="paragrafo">Somos uma companhia fundada em 1990 desde de sempre tentando ajudar esteticamente as pessoas, com exercios fisicos e aeróbico.</p>
    </div>
  </section>
	<br><br>
	<div class="album py-5 bg cor">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm cor2">
            <img class="bd-placeholder-img card-img-top imagem" src="<?php echo base_url("assets/imagens/exercicios-fisicos.jpg")?>">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
				</div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm cor2">
		  	<img class="bd-placeholder-img card-img-top imagem" src="<?php echo base_url("assets/imagens/exercicios-fisicos1.jpg")?>">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm cor2">
		  	<img class="bd-placeholder-img card-img-top imagem" src="<?php echo base_url("assets/imagens/exercicios-fisicos2.jpg")?>">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
		</div>
	</div>
	</div>			

<script type="text/javascript" src="<?php echo base_url("assets/node_modules/popper.js/dist/umd/popper.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/node_modules/jquery/dist/jquery.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/node_modules/jquery/dist/jquery.mask.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/node_modules/sweetalert2/dist/sweetalert2.all.js"); ?>"></script>

</body>
</html>