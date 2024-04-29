<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/styles.css" />
    <link
      rel="shortcut icon"
      href="../assets/img/cambo.svg"
      type="image/x-icon"
    />
    <!-- Link do CSS - Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <title>Cadastro</title>
  </head>
  <body style="background: url(../assets/img/background.png)">
    <main>
      <section class="position-relative container-fluid" style="height: 100vh">
        <div
          class="container position-absolute top-50 start-50 translate-middle d-flex flex-column align-items-center"
        >
          <img
            src="../assets/img/cambo_new.png"
            alt="Logo do CamboHistory"
            width="150rem"
            class="img-fluid"
          />
          <h1 class="text-center text-success">Cadastro</h1>
          <div
            class="row me-3 me-lg-0 ms-3 ms-lg-0 bg-success-subtle p-3 col-lg-6 col-12 text-success"
            style="border-radius: 8px"
          >
            <div class="col-lg-12 col-12">
              <?php
                if(isset($_SESSION['not_cad'])):
              ?>
                <span style='color: red'>Erro ao efetuar cadastro</span>
              <?php
                 endif;
                    unset($_SESSION['not_cad']);
              ?>
              <form
                class="row mt-3 mb-3"
                action="../php/scriptcadastro.php"
                method="post"
              >
                <div class="col-lg-6 col-12 d-flex flex-column mb-3">
                  <label
                    class="form-label text-center text-lg-start"
                    for="inputUser"
                    >Nome de Usuário</label
                  >
                  <input
                    id="inputUser"
                    class="form-control"
                    type="text"
                    name="nome"
                    required
                    
                  />
                </div>

                <div class="col-lg-6 col-12 d-flex flex-column mb-3">
                  <label
                    class="form-label text-center text-lg-start"
                    for="inputEmail"
                    >E-mail</label
                  >
                  <input
                    id="inputEmail"
                    class="form-control"
                    type="email"
                    name="email"
                    required
                  />
                </div>

                <div class="col-lg-6 col-12 d-flex flex-column mb-3 pt-3">
                  <label
                    class="form-label text-center text-lg-start"
                    for="inputPassword"
                    >Senha</label
                  >
                  <input
                    id="inputPassword"
                    class="form-control"
                    type="password"
                    name="senha"
                    required
                  />
                </div>

                <div class="col-lg-6 col-12 d-flex flex-column mb-3 pt-3">
                  <label
                    class="form-label text-center text-lg-start"
                    for="ReinputPassword"
                    >Confirmar Senha</label
                  >
                  <input
                    id="ReinputPassword"
                    class="form-control"
                    type="password"
                    name="cosenha"
                    required
                  />
                </div>

                <div
                  class="col-lg-8 col-12 text-lg-end text-center align-self-end"
                >
                  Possui uma conta?
                  <a href="login.php">Faça Login</a>
                </div>

                <div class="col-lg-4 col-12 text-end mt-3">
                  <input
                    type="submit"
                    value="Cadastrar"
                    class="btn btn-success w-100"
                  />
                </div>
              </form>
            </div>
          </div>
          <div class="col-6 mt-3 text-center">
            <a href="../index.html" class="btn btn-outline-success">Voltar</a>
          </div>
        </div>
      </section>
    </main>
    <footer></footer>
  </body>
</html>
