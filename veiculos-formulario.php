<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Veículos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>
 
<body class="bg-gradient">
   
    <main class="conteudo-principal">
      <?php
      $titulo_da_pagina = "cadastro de veículos";
      include "inc-menu.php";
      ?>
       
        <h1>Cadastro de Veículos</h1>
 
        <form action="veiculos-salvar.php" method="post">
 
            <div class="campo-formulario">
                <label for="marca">Marca:</label>
                <input type="text" name="marca" id="marca" placeholder="Digite a marca:">
            </div>
 
            <div class="campo-formulario">
                <label for="modelo">Modelo:</label>
                <input type="text" name="modelo" id="modelo" placeholder="Digite o modelo:">
            </div>
 
            <div class="campo-formulario">
                <label for="ano">Ano:</label>
                <input type="number" name="ano" id="ano">
            </div>
 
            <div class="campo-formulario">
                <label for="quilometragem">Quilometragem:</label>
                <input type="number" name="quilometragem" id="quilometragem">
            </div>
 
            <div class="campo-formulario">
                <label for="combustivel">Combustível:</label>
                <input type="text" name="combustivel" id="combustivel">
            </div>

            <div class="campo-formulario">
                <label for="cor">Cor:</label>
                <input type="text" name="cor" id="cor">
            </div>

            <div class="campo-formulario">
                <label for="preco">Preço:</label>
                <input type="decimal" name="preco" id="preco">
            </div>
 
            <div class="campo-formulario">
                <label for="foto">Foto:</label>
                <input type="text" name="foto" id="foto">
            </div>
 
            <div class="container-botoes">
                <button type="submit">Salvar</button>
                <button type="reset">Limpar</button>
            </div>
 
        </form>
 
    </main>

    <footer class="bg-dark p-3 text-center text-light fw-light">
        <p class="pt-2">
            LEANDRO ANDRADE PEREIRA - lelepepe50@gmail.com
            <br>
            <a href="https//github.com/lelepepe50-droid"></a>
            <a href="https://https://linkedin.com/in/leandroandrade">
                <i class="bi bi-linkedin text-light m-2"></i>
            </a>
        </p>
    </footer>

</body>
</html>