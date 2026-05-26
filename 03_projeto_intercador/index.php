<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <title>Página principal</title>
</head>

<body>

  <main>
    
    <?php include "inc-menu.php" ?>

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2e2e2e;">
      <div class="container-fluid">
        <a class="navbar-brand">
          <img src="/img/img/logo.png" width="32" height="32" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="#">Contato</a>
            <a class="nav-link" href="#">Sobre</a>
            <a class="nav-link" href="#">Sistema</a>
          </div>
        </div>
      </div>
    </nav>
    <div class="container text-center">
      <div class="row row-cols-4">
        <div class="col">Column</div>
        <div class="col">Column</div>
        <div class="col">Column</div>
        <div class="col">Column</div>
      </div>
    </div>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2500">
          <img src="/img/img/polo.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2500">
          <img src="/img/img/Corolla e Celica.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2500">
          <img src="/img/img/Fusca.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>

  </main>

  <footer class="bg-black text-white d-flex flex-wrap justify-content-between align-items-center py-3 mt-auto">
    <div class="container d-flex flex-wrap justify-content-between align-items-center">

      <p class="col-md-4 mb-0 text-white-50">&copy; 2026 Minha Empresa, Inc</p>

      <a href="#" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto">
        <img src="logo.svg" alt="Logo" width="30" height="24">
      </a>

      <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="#" class="nav-link px-2 link-light">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 link-light">Contato</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 link-light">Sobre</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 link-light">Sistema</a></li>
      </ul>

    </div>
  </footer>


</body>

</html>