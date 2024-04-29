<?php
  session_start();
  include("php/verificalogin2.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="shortcut icon" href="assets/img/cambo.svg" type="image/x-icon" />
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
    <title>CamboHistory</title>
  </head>
  <body class="transicao" data-bs-target="#navId" data-bs-spy="scroll">
    <header class="sticky-lg-top bg-info-subtle" data-bs-theme="dark">
      <nav class="navbar nav-underline navbar-expand-lg" id="navbarMain">
        <div class="container">
          <!-- Logo -->
          <a class="navbar-brand" href="index.php">
            <img
              src="assets/img/cambo_new.png"
              width="60px"
              alt="Logo do CamboHistory"
            />
          </a>
          <!-- Botão de Collapse -->
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle link-opacity-75-hover"
                  data-bs-toggle="dropdown"
                  href="#empresas"
                  role="button"
                  aria-expanded="false"
                  >Empresas</a
                >
                <ul class="dropdown-menu bg-dark dropdown-cambo transicao">
                  <li>
                    <a class="dropdown-item" href="pages/empresa0.php">Atack</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pages/empresa1.php">Bemol</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pages/empresa2.php">DB</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pages/empresa3.php">Honda</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pages/empresa4.php">Nova Era</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pages/empresa5.php">Samsung</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pages/empresa6.php">Senac</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pages/empresa7.php">Yamaha</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sobre">Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sugestao" aria-disabled="true"
                  >Sugestão</a
                >
              </li>
            </ul>
            <div class="d-flex gap-1">
              <!-- <a class="btn btn-success" href="pages/login.php">Login</a>
              <a class="btn btn-outline-success" href="pages/cadastro.php"
                >Cadastre-se</a
              > -->
              <div class="dropdown">
                <a
                  type="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i
                    class="bx bxs-user-circle align-self-center"
                    style="font-size: 40px; color: aliceblue"
                  ></i>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <span class="dropdown-item" href="#"
                      >Seja Bem-vindo, 
                      <?php
                        if(isset($_SESSION['logado'])):
                        ?>
                        <strong> <?php echo $_SESSION['logado']; ?> </strong>
                        <?php
                        endif;
                      ?></span
                    >
                  </li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="php/scriptlogout.php">Sair</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <section id="inicio" class="container-fluid pt-5 pb-5">
        <div class="container">
          <div class="row pt-3 d-flex justify-content-center">
            <div
              class="col-lg-6 col-12 align-self-center text-white pb-lg-0 pb-2"
            >
              <div class="row">
                <div
                  class="col-12 align-self-center d-flex justify-content-center pb-3"
                >
                  <img src="assets/img/cambo_new.png" width="120px" alt="" />
                </div>
              </div>
              <div class="row text-dark text-center">
                <h1>CamboHistory</h1>
                <p>Comece sua história profissional aqui!</p>
              </div>
            </div>
            <div
              id="carouselExampleIndicators"
              class="carousel slide col-lg-6 col-12"
            >
              <div
                class="carousel-indicators"
                style="background: rgba(0, 0, 0, 0.1)"
              >
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="0"
                  class="active"
                  aria-current="true"
                  aria-label="Slide 1"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="1"
                  aria-label="Slide 2"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="2"
                  aria-label="Slide 3"
                ></button>
                <!-- <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="2"
                  aria-label="Slide 4"
                ></button> -->
              </div>
              <div class="carousel-inner" style="aspect-ratio: 16/9">
                <div class="carousel-item active text-center">
                  <a href="pages/empresa0.php">
                    <img
                      src="assets/img/carousel/ATACK.png"
                      class="d-block w-100"
                      alt="Entrada do Atack"
                      style="filter: brightness(80%)"
                    />
                  </a>
                  <div class="carousel-caption d-none d-md-block">
                    <h5
                      style="background: radial-gradient(#636363, transparent)"
                    >
                      Descubra mais sobre o Atack
                    </h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <a href="#">
                    <img
                      src="assets/img/carousel/SENAC.png"
                      class="d-block w-100"
                      alt="Entrada do Senac CEI"
                      style="filter: brightness(80%)"
                    />
                  </a>
                  <div class="carousel-caption d-none d-md-block">
                    <h5
                      style="background: radial-gradient(#636363, transparent)"
                    >
                      Serviço Nacional de Apredizagem Comercial
                    </h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <a href="#">
                    <img
                      src="assets/img/carousel/YAMAHA.png"
                      class="d-block w-100"
                      alt="Montadora Yamaha"
                      style="filter: brightness(80%)"
                    />
                  </a>
                  <div class="carousel-caption d-none d-md-block">
                    <h5
                      style="background: radial-gradient(#636363, transparent)"
                    >
                      Yamaha e sua história
                    </h5>
                  </div>
                </div>
                <!--<div class="carousel-item">
                 <a href="pages/empresa1.php">
                    <img
                      src="https://i0.wp.com/agenciacenarium.com.br/wp-content/uploads/2023/02/12-bemol-camapua-scaled-1.jpg?fit=2560%2C1699&ssl=1"
                      class="d-block w-100"
                      alt="..."
                    />
                </a>
                </div> -->
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </section>

      <section id="empresas" class="container-fluid pt-5 pb-5">
        <div class="container align-items-center">
          <h2 class="text-center">Todas as Empresas</h2>
          <div class="row emp-edit wrap">
            <!-- Item -->
            <div
              class="col-md-6 col-lg-3 col-12 text-center pb-4 mb-2"
              style="border-radius: 12px"
            >
              <img
                class="card-img-top"
                src="assets/img/logos/atack.png"
                width="280px"
                alt="..."
              />
              <h3>Atack</h3>
              <p>Hipermercado</p>
              <a class="btn btn-info" href="pages/empresa0.php">Saiba mais</a>
            </div>
            <!-- Item -->
            <div
              class="col-md-6 col-lg-3 col-12 text-center pb-4 mb-2"
              style="border-radius: 12px"
            >
              <img
                class="card-img-top"
                src="assets/img/logos/bemol.png"
                width="280px"
                alt="Logo da Bemol"
              />
              <h3>Bemol</h3>
              <p>Eletrônicos</p>
              <a class="btn btn-info" href="#">Saiba mais</a>
            </div>
            <!-- Item -->
            <div
              class="col-md-6 col-lg-3 col-12 text-center pb-4 mb-2"
              style="border-radius: 12px"
            >
              <img
                class="card-img-top"
                src="assets/img/logos/db.png"
                width="280px"
                alt="Logo do DB"
              />
              <h3>DB</h3>
              <p>Hipermercado</p>
              <a class="btn btn-info" href="#">Saiba mais</a>
            </div>
            <!-- Item -->
            <div
              class="col-md-6 col-lg-3 col-12 text-center pb-4 mb-2"
              style="border-radius: 12px"
            >
              <img
                class="card-img-top"
                src="assets/img/logos/honda.png"
                width="280px"
                alt="Logo da Honda"
              />
              <h3>Honda</h3>
              <p>Automobilismo</p>
              <a class="btn btn-info" href="#">Saiba mais</a>
            </div>
            <!-- Item -->
            <div
              class="col-md-6 col-lg-3 col-12 text-center pb-4 mb-2"
              style="border-radius: 12px"
            >
              <img
                class="card-img-top"
                src="assets/img/logos/novaera.png"
                width="280px"
                alt="Logo do Nova Era"
              />
              <h3>Nova Era</h3>
              <p>Hipermercado</p>
              <a class="btn btn-info" href="#">Saiba mais</a>
            </div>
            <!-- Item -->
            <div
              class="col-md-6 col-lg-3 col-12 text-center pb-4 mb-2"
              style="border-radius: 12px"
            >
              <img
                class="card-img-top"
                src="assets/img/logos/samsung.png"
                width="280px"
                alt="Logo da Samsung"
              />
              <h3>Samsung</h3>
              <p>Eletrônicos</p>
              <a class="btn btn-info" href="#">Saiba mais</a>
            </div>
            <!-- Item -->
            <div
              class="col-md-6 col-lg-3 col-12 text-center pb-4 mb-2"
              style="border-radius: 12px"
            >
              <img
                class="card-img-top"
                src="assets/img/logos/senac.png"
                width="280px"
                alt="Logo do Senac"
              />
              <h3>Senac</h3>
              <p>Educação</p>
              <a class="btn btn-info" href="#">Saiba mais</a>
            </div>
            <!-- Item -->
            <div
              class="col-md-6 col-lg-3 col-12 text-center pb-4 mb-2"
              style="border-radius: 12px"
            >
              <img
                class="card-img-top"
                src="assets/img/logos/yamaha.png"
                width="280px"
                alt="Logo da Yamaha"
              />
              <h3>Yamaha</h3>
              <p>Automobilismo</p>
              <a class="btn btn-info" href="#">Saiba mais</a>
            </div>
          </div>
        </div>
      </section>

      <section id="sobre" class="container-fluid pt-5 pb-5">
        <div class="container">
          <!-- Sobre -->
          <div class="row mb-3 mb-lg-0">
            <div class="col-lg-3 col-0"></div>
            <div class="col-lg-6 text-center align-self-center">
              <h2>Sobre o Projeto</h2>
              <p style="text-align: justify">
                O <strong>CamboHistory</strong> é, essencialmente, um site para
                publicar informações de empresas do polo comercial e industrial
                de Manaus, mas também visa auxiliar no ingresso profissional
                nestas mesmas empresas.
                <!-- Site para publicar histórias de empresas
                relacionada ao comercio e a indústria no Amazonas com objetivo
                de ajudar pessoas a se aproximarem dessas instituições e
                auxiliar a possível ingressão nas mesmas. -->
              </p>
            </div>
          </div>

          <!-- Pilares -->
          <div class="row mt-3 gap-5">
            <!-- Justificativa -->
            <div class="col-12">
              <div class="row">
                <div
                  class="col-lg-6 text-center align-self-center img-off-cell"
                >
                  <i class="bx bx-help-circle" style="font-size: 12rem"></i>
                </div>
                <div
                  class="col-lg-6 text-center text-lg-start align-self-center"
                >
                  <h3>Justificativa</h3>
                  <p style="text-align: justify">
                    A escassez e até a dificuldade de acesso às informações das
                    empresas que atuam na capital amazonense, estas que estão
                    inseridas em uma das regiões comerciais e industriais mais
                    importantes do Brasil.
                  </p>
                </div>
              </div>
            </div>
            <!-- Premissa -->
            <div class="col-12">
              <div class="row">
                <div
                  class="col-lg-6 text-center text-lg-start align-self-center over-direct"
                >
                  <h3>Premissa</h3>
                  <p style="text-align: justify">
                    Conectar o público a marcas presentes no cotidiano e
                    apresentar novas empresas para a população manauara.
                  </p>
                </div>
                <div
                  class="col-lg-6 text-center align-self-center img-off-cell"
                >
                  <i
                    class="bx bxs-user-detail testando"
                    style="font-size: 12rem"
                  ></i>
                </div>
              </div>
            </div>
            <!-- Objetivos -->
            <div class="col-12">
              <div class="row">
                <div
                  class="col-lg-6 text-center align-self-center img-off-cell"
                >
                  <i class="bx bxs-flag-checkered" style="font-size: 12rem"></i>
                </div>
                <div
                  class="col-lg-6 align-self-center text-center text-lg-start"
                >
                  <h3>Objetivo</h3>
                  <p style="text-align: justify">
                    O principal intuito do projeto é a apresentação de empresas, informações de contato e até uma
                    simples rede social para conexão de clientes e pessoas
                    interessadas em trabalhar em determinada entidade registrada
                    no nosso site.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <h3 class="text-center pt-5 pb-3">Equipe</h3>
          <div class="row d-flex justify-content-center gap-3">
            <!-- Card dos participantes da equipe -->
            <div class="card text-center" style="width: 18rem; border: none">
              <div class="card-body">
                <img
                  class="img-thumbnail mb-3 rounded-circle"
                  src="assets/img/bx-code-alt.svg"
                  alt=""
                  width="120px"
                />
                <h6 class="card-subtitle mb-2 text-body-secondary">
                  Ricardo Henrique
                </h6>
                <p class="card-text">Ensino Médio-Técnico</p>
                <a
                  href="https://www.instagram.com/onlyriquer"
                  class="card-link"
                  target="_blank"
                  ><i class="bx bxl-instagram icon-team"></i
                ></a>
                <a
                  href="https://github.com/Riquerzin"
                  class="card-link"
                  target="_blank"
                  ><i class="bx bxl-github icon-team"></i
                ></a>
              </div>
            </div>
            <div class="card text-center" style="width: 18rem; border: none">
              <div class="card-body">
                <img
                  class="img-thumbnail mb-3 rounded-circle"
                  src="assets/img/bx-code-alt.svg"
                  alt=""
                  width="120px"
                />
                <h6 class="card-subtitle mb-2 text-body-secondary">
                  Thiago Alvarenga gomes
                </h6>
                <p class="card-text">Ensino Médio-Técnico</p>
                <a
                  href="https://www.instagram.com/td_shaolintv1/"
                  target="_blank"
                  class="card-link"
                  ><i class="bx bxl-instagram icon-team"></i
                ></a>
                <a href="#" class="card-link"
                  ><i class="bx bxl-github icon-team"></i
                ></a>
              </div>
            </div>
            <div class="card text-center" style="width: 18rem; border: none">
              <div class="card-body">
                <img
                  class="img-thumbnail mb-3 rounded-circle"
                  src="assets/img/bx-code-alt.svg"
                  alt=""
                  width="120px"
                />
                <h6 class="card-subtitle mb-2 text-body-secondary">Kenny</h6>
                <p class="card-text">Descrição breve</p>
                <a
                  href="https://www.instagram.com/kennyofc"
                  class="card-link"
                  target="_blank"
                  ><i class="bx bxl-instagram icon-team"></i
                ></a>
                <a
                  href="https://github.com/kennyendersen"
                  class="card-link"
                  target="_blank"
                  ><i class="bx bxl-github icon-team"></i
                ></a>
              </div>
            </div>
            <div class="card text-center" style="width: 18rem; border: none">
              <div class="card-body">
                <img
                  class="img-thumbnail mb-3 rounded-circle"
                  src="assets/img/bx-code-alt.svg"
                  alt=""
                  width="120px"
                />
                <h6 class="card-subtitle mb-2 text-body-secondary">
                  Victor Wagner
                </h6>
                <p class="card-text">Descrição breve</p>
                <a href="#" class="card-link"
                  ><i class="bx bxl-instagram icon-team"></i
                ></a>
                <a href="#" class="card-link"
                  ><i class="bx bxl-github icon-team"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="sugestao" class="container-fluid pt-5 pb-5 text-white">
        <div class="container">
          <div class="row text-center pb-5">
            <h2>Sugestão</h2>
          </div>
          <div class="row">
            <div
              class="col-0 col-lg-6 d-flex justify-content-center align-items-center"
            >
              <!-- <i class="bx bx-scatter-chart icon-inicio"></i> -->
            </div>
            <div
              class="col-12 col-lg-6 p-3"
              style="
                border-radius: 8px;
                background: linear-gradient(#222831, transparent);
              "
            >
              <form action="./php/enviar-email.php" method="post">
                <div class="mb-3">
                  <label for="" class="form-label">Nome</label>
                  <input
                    type="name"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    name="nome"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    name="email"
                    required
                  />
                  <div div id="emailHelp" class="form-text text-white">
                    Não compartilhamos seu e-mail
                  </div>
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Escreva sua sugestão</label>
                  <textarea
                    rows="5"
                    class="form-control"
                    placeholder="Digite o nome da empresa e detalhes revelantes como contatos e etc."
                    id="floatingTextarea"
                    name="msg"
                    required
                  ></textarea>
                </div>
                <div class="text-end">
                  <button type="submit" class="col-12 col-lg-2 btn btn-primary">
                    Enviar
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer class="container-fluid bg-info-subtle" data-bs-theme="dark">
      <!-- Coluna 1_Logo e Slogan -->
      <div class="container">
        <div class="row">
          <div class="col-12 text-center text-lg-center pt-5 text-white">
            <img src="assets/img/cambo.svg" alt="Logomarca" width="124px" />
            <p>Comece sua história profissional aqui!</p>
          </div>
          <!-- Coluna 2 - Links rápidos -->
          <div
            class="col-12 text-center text-lg-center pt-2 text-center text-white pb-2"
          >
            <strong class="titulo">Links rápidos</strong>
            <ul
              class="nav nav-underline align-items-center justify-content-center"
            >
              <li class="nav-item">
                <a class="nav-link" href="#inicio">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#empresas">Empresas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sobre">Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sugestao">Sugestão</a>
              </li>
            </ul>
          </div>
          <!-- Coluna 3 - Endereço e Contato -->
          <div class="col-12 text-center text-white">
            <p>
              &copy; 2024 CamboHistory. Todos os Direitos Reservados. Atualmente
              v0.1
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Link de Scripts do Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
