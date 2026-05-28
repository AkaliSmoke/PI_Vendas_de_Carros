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

<body class="d-flex flex-column min-vh-100 bg-light">

  <main>

    <?php include "inc-menu.php" ?>

    <div class="container text-center">
      <div class="row row-cols-4">
        <div class="col">Column</div>
        <div class="col">Column</div>
        <div class="col">Column</div>
        <div class="col">Column</div>
      </div>
    </div>



   <div class="card" style="width: 18rem;">
  <img src="/img/img/dodger challeger.jpg" class="card-img-top" alt="200">
  <div class="card-body">
    <h5 class="card-title">Dodge</h5>
    <p class="card-text">O Dodge Challenger nasceu em 1970 para rivalizar no segmento dos pony cars. Ao longo das décadas, o modelo evoluiu de um clássico motor V8 para um cupê compacto na década de 1980, até retornar às suas raízes como um muscle car moderno e de alto desempenho na era contemporânea.</p>
    <a href="#" class="btn btn-primary">Dodge challenger 2015</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="/img/img/Chevrolet Camaro Wallpaper.jpg" class="card-img-top" alt="200">
  <div class="card-body">
    <h5 class="card-title">Chevrolet</h5>
    <p class="card-text">O Chevrolet Camaro SS (Super Sport) nasceu em 1967 como a resposta da GM ao Ford Mustang. Famoso pelo potente motor V8 e visual agressivo, o modelo evoluiu ao longo de seis gerações, transformando-se em um ícone de desempenho tanto nas pistas quanto na cultura pop.</p>
    <a href="#" class="btn btn-primary">Camaro SS</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="/img/img/BMW M3" class="card-img-top" alt="200">
  <div class="card-body">
    <h5 class="card-title">BMW</h5>
    <p class="card-text">O BMW M3 nasceu em 1986 com um propósito claro: homologar o Série 3 para as pistas do campeonato de turismo Grupo A. O que começou como uma exigência de 5.000 unidades de rua transformou-se no sedã esportivo mais icônico do mundo, construindo uma linhagem lendária ao longo de seis gerações.</p>
    <a href="#" class="btn btn-primary">BMW M3</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="/img/img/Skyline R34" class="card-img-top" alt="200">
  <div class="card-body">
    <h5 class="card-title">nissan</h5>
    <p class="card-text">O Nissan Skyline GT-R R34, lançado no Japão em 1999, é um dos maiores ícones automotivos do mundo. Conhecido como "Godzilla", o superesportivo destacou-se pela tração integral ATTESA E-TS e pelo lendário motor biturbo 6 cilindros em linha \(RB26DETT\), que entregava \(280\) cavalos de potência.</p>
    <a href="#" class="btn btn-primary">Nissan Skyline GT-R R34</a>
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

  <?php include "inc-footer.php"?>


</body>

</html>