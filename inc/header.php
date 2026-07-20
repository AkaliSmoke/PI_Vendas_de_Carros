<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main class="container py-4">
    <form method="post" action="carrinho.php" id="veiculos-formulario" class="text-end mb-3">
        <input type="hidden" name="veiculos" id="veiculos" value="">
        <button type="submit" class="btn btn-success">
            <i class="bi bi-cart"></i>
            <span class="badge text-bg-primary" id="numero_de_produtos">0</span>
        </button>
    </form>
