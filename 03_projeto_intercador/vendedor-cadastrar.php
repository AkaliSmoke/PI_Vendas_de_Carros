<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <title>Tela de Cadastro do Vendendor</title>
</head>

<body>
  <h1>Cadastro Vendedor</h1>

  <main class="container mt-5">

    <div class="row justify-content-center">

      <div class="col-md-8">

        <div class="card shadow p-4">

          <h2 class="text-center mb-4">
            Cadastro do Vendedor
          </h2>

          <form>

            <div class="row">

              <!-- Nome -->
              <div class="col-md-6 mb-3">

                <label class="form-label">
                  Nome Completo
                </label>

                <input
                  type="text"
                  class="form-control"
                  placeholder="Digite seu nome">

              </div>

              <!-- CPF -->
              <div class="col-md-6 mb-3">

                <label class="form-label">
                  CPF
                </label>

                <input
                  type="text"
                  class="form-control"
                  placeholder="000.000.000-00">

              </div>

            </div>

            <div class="row">

              <!-- Email -->
              <div class="col-md-6 mb-3">

                <label class="form-label">
                  E-mail
                </label>

                <input
                  type="email"
                  class="form-control"
                  placeholder="Digite seu e-mail">

              </div>

              <!-- Telefone -->
              <div class="col-md-6 mb-3">

                <label class="form-label">
                  Telefone
                </label>

                <input
                  type="tel"
                  class="form-control"
                  placeholder="(11) 99999-9999">

              </div>

            </div>

            <!-- Tipo vendedor -->
            <div class="mb-3">

              <label class="form-label">
                Tipo de vendedor
              </label>

              <select class="form-select">

                <option>
                  Particular
                </option>

                <option>
                  Loja
                </option>

              </select>

            </div>

            <!-- Senha -->
            <div class="mb-3">

              <label class="form-label">
                Senha
              </label>

              <input
                type="password"
                class="form-control"
                placeholder="Digite sua senha">

            </div>

            <!-- Checkbox -->
            <div class="form-check mb-4">

              <input
                type="checkbox"
                class="form-check-input"
                id="termos">

              <label
                class="form-check-label"
                for="termos">
                Aceito os termos de uso
              </label>

            </div>

            <!-- Botão -->
            <button class="btn btn-primary w-100">

              Cadastrar

            </button>

          </form>

        </div>

      </div>

    </div>

  </main>

</body>

</html>