<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste IMG</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }

        section{
            background-color: rgb(123,104,238,.4);
            width:70%;
            margin: auto;
        }
        input,label,textarea{
            display:block;
            width:100%;
            height: 30px;
        }
        label{
            line-height: 30px;
            margin-top: 10px;
        }
        textarea{
            height: 150px;
        }
        form{
            width: 60%;
            margin: auto;
            box-sizing: border-box;
            padding: 20px;
        }

        #botao{
            margin-bottom: 10px;
            width: 50%;
            background-color: rgb(0,0,0.8);
            color: white;
            height: 40px;
            cursor: pointer;
            border: none;
            font-size: 15pt;
        }
        h1{
            text-align: center;
        }
        #foto{
            margin-top: 20px;
            margin-bottom: 20px; 
        }
        a{
            background-color: rgb(0,255,127);
            display: block;
            width: 220px;
            height: 50px;
            color: black;
            text-decoration: none;
            float: right;
            text-align: center;
            line-height: 50px;
            margin: 20px;
            border: 1px:solid;
        }
    </style>
</head>
<body>
    <section>
        <a href="produtos.php">Ver todos os produtos</a>
        <form action="<?php echo base_url("index.php/produtos/validarCadastroItens");?>" method="POST" id="CadastroItens" enctype="multipart/form-data">
            <h1>Envio de Imagens</h1>
            <label for="nome">Nome do Produto</label>
            <input type="text" name="nomeItem" id="nomeItem">
            <label for="des">Descrição</label>
            <textarea name="descricao" id="descricao"></textarea>
            <label class="preco">Preço</label>
            <input type="text" class="form-control" name="preco" id="preco">
            <input type="file" name="foto[]" multiple id="foto">
            <input type="submit" id="botao">
        </form>
    </section>
</body>
</html>