<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro do Cliente</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body class="d-flex flex-column min-vh-100">

  <?php include "inc-menu.php"; ?>

  <main class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-sm p-4 border-0">

          <h1 class="text-center mb-4 h2 fw-normal text-dark">
            Cadastro do Cliente
          </h1>

          <form action="cliente-salvar.php" method="POST" enctype="multipart/form-data">

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="nome" class="form-label">Nome Completo</label>
                <input type="text" id="nome" name="nome" class="form-control"
                  placeholder="Digite o nome do cliente"
                  maxlength="100" minlength="3" required>
                <div class="invalid-feedback">
                  Informe o nome do cliente.
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" id="cpf" name="cpf" class="form-control"
                  placeholder="000.000.000-00"
                  maxlength="14" data-mask="cpf" required>
                <div class="invalid-feedback">
                  Informe um CPF com 11 números.
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control"
                  placeholder="exemplo@email.com"
                  maxlength="100" required>
                <div class="invalid-feedback">
                  Informe um email válido.
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" id="telefone" name="telefone" class="form-control"
                  placeholder="(11) 99999-9999"
                  maxlength="20" data-mask="telefone" required>
                <div class="invalid-feedback">
                  Informe um telefone válido.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="senha" class="form-label">Senha</label>
              <input type="password" id="senha" name="senha" class="form-control"
                placeholder="Crie uma senha segura"
                maxlength="225" minlength="4" required>
              <div class="invalid-feedback">
                A senha precisa ter pelo menos 4 caracteres.
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" id="endereco" name="endereco" class="form-control"
                  placeholder="Rua, Número, Bairro, Cidade - UF"
                  maxlength="250" required>
                <div class="invalid-feedback">
                  Informe o endereço.
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <label for="foto" class="form-label">Foto do Cliente</label>
                <input type="file" id="foto" name="foto" class="form-control"
                  accept="image/*" required>
                <div class="invalid-feedback">
                  Selecione a foto do cliente.
                </div>
              </div>
            </div>

            <div class="form-check mb-4">
              <input type="checkbox" class="form-check-input" id="termos" name="termos" value="aceito" required>
              <label class="form-check-label text-secondary" for="termos">
                Aceito os termos de uso
              </label>
            </div>

            <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold">
              Cadastrar
            </button>

          </form>

        </div>
      </div>
    </div>
  </main>

  <?php include "inc-footer.php"; ?>

</body>

</html>