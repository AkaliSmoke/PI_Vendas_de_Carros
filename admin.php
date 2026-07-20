<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>veiculos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
 
</head>
<body>
<main class="container">
   <?php
   $titulo_da_pagina= "admin";
    include "inc-menu.php"; ?>

    <h1 class="text-center text-success mt-5"<i class="bi bi-veiculos"></h1>
    
    <div class="row">
        <div class="col">
            <a href="veiculos-formulario.php" class="btn btn-success">Novos veiculos</a>
        </div>
    </div>
</main>

<footer class="bg-dark p-3 text-center text-light fw-light">
    <p class="pt-2">
       LEANDRO ANDRADE PEREIRA - lelepepe50@gmail.com 
       <br>
       <a href="https//github.com/lelepepe50-droid"></a>
       <a href="https://https://linkedin.com/in/leandroandrade"><i class="bi bi-linkedin text-light m-2"></i></a>
</footer>
</body>
</html>