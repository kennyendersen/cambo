<?php
  session_start();
  include("../php/verificalogin.php");
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
    <title>Bemol</title>
  </head>
  <body style="height:100vh; background: url(../assets/img/background.png); background-size:cover;">
    <header class="sticky-lg-top bg-info-subtle" data-bs-theme="dark">
      <nav class="navbar nav-underline navbar-expand-lg" id="navbarMain">
        <div class="container">
          <!-- Logo -->
          <a class="navbar-brand" href="../index.php">
            <img
              src="../assets/img/cambo_new.png"
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
                    <a class="dropdown-item" href="empresa0.php">Atack</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="empresa1.php">Bemol</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="empresa2.php">DB</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="empresa3.php">Honda</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="empresa4.php">Nova Era</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="empresa5.php">Samsung</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="empresa6.php">Senac</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="empresa7.php">Yamaha</a>
                  </li>
                </ul>
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
                    <a class="dropdown-item" href="../php/scriptlogout.php">Sair</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <!-- Barra de Outras Empresas -->
            <aside id="sidelinks" class="col-lg-2 col-0 " style="background: #0aaa9e;">
              <!-- Título -->
              <div class="text-center text-white pt-3 pb-3">
                <h2 style="font-size: 1.2rem; font-weight: 600">
                  Outras Empresas
                </h2>
              </div>
              <!-- Pesquisa + Items -->
              <div>
                <!-- Pesquisa -->
                <div>
                  <form class="pb-3" role="search">
                    <input id="pesquisa-box" class="form-control me-2" type="search" placeholder="Pesquisa..." aria-label="Search" onkeyup="search()">
                  </form>
                </div>
                <!-- Items -->
                <div id="items-empresas">
                  <!-- Attack -->
                  <div class="empresa container-fluid mb-1 bg-danger">
                    <a
                      href="empresa0.php"
                      style="
                        text-transform: uppercase;
                        font-size: 1rem;
                        font-weight: 600;
                      "
                      class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                      >Atack</a
                    >
                  </div>
                  <!-- Bemol -->
                  <div class="empresa container-fluid mb-1 bg-primary">
                    <a
                      href="empresa1.php"
                      style="
                        text-transform: uppercase;
                        font-size: 1rem;
                        font-weight: 600;
                      "
                      class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                      >Bemol</a
                    >
                  </div>
                  <!-- DB -->
                  <div class="empresa container-fluid mb-1 bg-success">
                    <a
                      href="empresa2.php"
                      style="
                        text-transform: uppercase;
                        font-size: 1rem;
                        font-weight: 600;
                      "
                      class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                      >DB</a
                    >
                  </div>
                  <!-- Honda -->
                  <div class="empresa container-fluid mb-1" style="background: #840000">
                    <a
                      href="empresa3.php"
                      style="
                        text-transform: uppercase;
                        font-size: 1rem;
                        font-weight: 600;
                      "
                      class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                      >Honda</a
                    >
                  </div>
                  <!-- Nova Era -->
                  <div class="empresa container-fluid mb-1 bg-warning">
                    <a
                      href="empresa4.php"
                      style="
                        text-transform: uppercase;
                        font-size: 1rem;
                        font-weight: 600;
                      "
                      class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                      >Nova Era</a
                    >
                  </div>
                  <!-- Samsung -->
                  <div class="empresa container-fluid mb-1 bg-primary-subtle" data-bs-theme="dark">
                    <a
                      href="empresa5.php"
                      style="
                        text-transform: uppercase;
                        font-size: 1rem;
                        font-weight: 600;
                      "
                      class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                      >Samsung</a
                    >
                  </div>
                  <!-- Senac -->
                  <div class="empresa container-fluid mb-1 bg-primary">
                    <a
                      href="empresa6.php"
                      style="
                        text-transform: uppercase;
                        font-size: 1rem;
                        font-weight: 600;
                      "
                      class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                      >Senac</a
                    >
                  </div>
                  <!-- Yamaha -->
                  <div class="empresa container-fluid mb-1 bg-danger"">
                    <a
                      href="empresa7.php"
                      style="
                        text-transform: uppercase;
                        font-size: 1rem;
                        font-weight: 600;
                      "
                      class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                      >Yamaha</a
                    >
                  </div>
                </div>
              </div>
            </aside>
            <!-- Conteúdo Principal -->
            <div class="col-lg-8 col-12">
              <!-- Título -->
              <div class="text-center pt-3 pb-lg-3 pb-0">
                <h1>BEMOL</h1>
              </div>
              <!-- Inicial -->
              <div class="row mb-3">
                <div class="col-lg-5 col-12 me-3 text-center text-lg-start">
                  <img
                    src="../assets/img/logos/bemol.png"
                    width="400rem"
                    alt=""
                    class="img-fluid"
                  />
                </div>
                <div
                  class="col-lg-6 col-12 mb-5 mb-lg-0 align-self-center d-flex justify-content-evenly align-items-center"
                >
                  <div class="row">
                    <ul
                      class="list-group text-start"
                      style="list-style-type: none"
                    >
                      <li class="d-flex flex-column">
                        <span>Ano de Fundação</span>
                        <strong style="font-size: 1rem">1942</strong>
                      </li>
                      <li class="d-flex flex-column">
                        <span>Fundador(a)</span>
                        <strong style="font-size: 1rem"
                          >Samuel Benchimol</strong
                        >
                      </li>
                      <li class="d-flex flex-column">
                        <span>Origem</span>
                        <strong style="font-size: 1rem">Amazonas</strong>
                      </li>
                      
                      <li class="pt-1 text-secondary">
                        <div class="dropdown">
                          <span
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                          >
                            <span class="text-secondary">Funcionários <i class='bx bx-expand-alt'></i></span>
                            
                          </span>
                          <ul class="dropdown-menu" style="width:300px">
                            <li><span class="dropdown-item text-center">Distribuição de Funcionários</span></li>
                            <li>
                              <span class="dropdown-item">
                                <img class="img-fluid" src="../assets/img/graficos/bemol.png" alt="Gráfico de Funcionarios do Atack">
                              </span>
                            </li>
                            <li><em class="dropdown-item text-center">Dados fictícios*</em></li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <!-- <div class="row pizza mb-2"></div> -->
                </div>
              </div>

              <!-- Historia -->
              <div id="historia" class="row">
                <div class="accordion mb-3" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button
                        class="accordion-button text-white"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseOne"
                        aria-expanded="true"
                        aria-controls="collapseOne"
                        style="font-size: 1.2rem; font-weight: 600; background: #0aaa9e"
                      >
                        História
                      </button>
                    </h2>
                    <div
                      id="collapseOne"
                      class="accordion-collapse collapse show"
                      data-bs-parent="#accordionExample"
                    >
                      <div class="accordion-body">
                        <p>
                          Fundada em 13 de agosto de 1942 por Samuel Benchimol e
                          seus irmãos Israel e Saul, a empresa atua em diversas
                          atividades, incluindo distribuição de gás de cozinha,
                          lojas de departamento, internet shopping center e
                          exportação de produtos naturais da Amazônia como
                          balsamo de copaíba e óleo de pau-rosa.
                        </p>
                        <p>
                          Atualmente a Bemol possui 26 lojas físicas na região
                          Norte e uma para vendas pela internet. É uma das
                          maiores vendedoras de GLP (gás de cozinha) no Acre,
                          Amazonas, Pará, Rondônia e Roraima.
                        </p>
                        <p>
                          Em 2016, a Bemol expandiu a atuação para o área de
                          farmácia, segmento ao qual já havia atendido em seus
                          primeiros anos de existência, criando a Bemol Farma.
                        </p>

                        <p>
                          Desde 1993, a Bemol se destaca como a maior
                          contribuinte de ICMS do estado do Amazonas no segmento
                          comercial.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Missão -->
              <div id="missao" class="row">
                <div class="accordion mb-3" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button
                        class="accordion-button collapsed text-white"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo"
                        aria-expanded="false"
                        aria-controls="collapseTwo"
                        style="font-size: 1.2rem; font-weight: 600; background: #0aaa9e"
                      >
                        Missão
                      </button>
                    </h2>
                    <div
                      id="collapseTwo"
                      class="accordion-collapse collapse"
                      data-bs-parent="#accordionExample"
                    >
                      <div class="accordion-body">
                        <p>
                          A missão da Bemol é proporcionar soluções de qualidade
                          para seus clientes, oferecendo produtos e serviços
                          variados com excelência, visando sempre superar as
                          expectativas e contribuir para o desenvolvimento das
                          comunidades onde está presente.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Visão -->
              <div id="visao" class="row">
                <div class="accordion mb-3" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button
                        class="accordion-button text-white collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseThree"
                        aria-expanded="false"
                        aria-controls="collapseThree"
                        style="font-size: 1.2rem; font-weight: 600; background: #0aaa9e"
                      >
                        Visão
                      </button>
                    </h2>
                    <div
                      id="collapseThree"
                      class="accordion-collapse collapse"
                      data-bs-parent="#accordionExample"
                    >
                      <div class="accordion-body">
                        <p>
                          A visão da Bemol é ser reconhecida como a melhor opção
                          de compra para seus clientes, destacando-se pela
                          variedade de produtos, atendimento personalizado e
                          compromisso com a satisfação do cliente.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Valores -->
              <div id="valores" class="row">
                <div class="accordion mb-3" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button
                        class="accordion-button text-white collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseFour"
                        aria-expanded="true"
                        aria-controls="collapseFour"
                        style="font-size: 1.2rem; font-weight: 600; background: #0aaa9e"
                      >
                        Valores
                      </button>
                    </h2>
                    <div
                      id="collapseFour"
                      class="accordion-collapse collapse"
                      data-bs-parent="#accordionExample"
                    >
                      <div class="row accordion-body d-lg-flex">
                        <!-- Card 1 -->
                        <div
                          class="mb-3 pb-3 pt-3"
                          style="border: 1px solid #e1e3e1; border-radius: 8px"
                        >
                          A Bemol busca a <strong>excelência</strong> em todos
                          os aspectos de suas operações, desde a seleção de
                          produtos até o atendimento ao cliente, garantindo a
                          qualidade e a satisfação em cada interação.
                        </div>
                        <!-- Card 2 -->
                        <div
                          class="mb-3 pb-3 pt-3"
                          style="border: 1px solid #e1e3e1; border-radius: 8px"
                        >
                          A empresa valoriza a <strong>inovação</strong>,
                          buscando constantemente novas maneiras de melhorar
                          seus produtos, processos e serviços para atender às
                          necessidades em constante evolução de seus clientes.
                        </div>

                        <!-- Card 3 -->
                        <div
                          class="mb-3 pb-3 pt-3"
                          style="border: 1px solid #e1e3e1; border-radius: 8px"
                        >
                          <strong>Compromisso com o cliente:</strong> A Bemol
                          tem um forte compromisso com a satisfação do cliente,
                          priorizando suas necessidades e oferecendo um
                          atendimento personalizado e de alta qualidade.
                        </div>

                        <!-- Card 4 -->
                        <div
                          class="mb-3 pb-3 pt-3"
                          style="border: 1px solid #e1e3e1; border-radius: 8px"
                        >
                          <strong>Integridade</strong> A empresa opera com
                          integridade e transparência em todas as suas relações,
                          mantendo altos padrões éticos e agindo com honestidade
                          e responsabilidade em todas as situações.
                        </div>

                        <!-- Card 5 -->
                        <div
                          class="mb-3 pb-3 pt-3"
                          style="border: 1px solid #e1e3e1; border-radius: 8px"
                        >
                          <strong>Responsabilidade social:</strong> A Bemol se
                          preocupa com o bem-estar das comunidades onde opera,
                          contribuindo para o desenvolvimento social e econômico
                          por meio de iniciativas de responsabilidade social
                          corporativa.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Redes Sociais -->
              <div id="redes" class="row">
                <h2
                  style="font-size: 1.2rem; font-weight: 600"
                  class="text-center"
                >
                  Redes Sociais
                </h2>
                <div
                  class="row d-flex gap-3 mt-3 mb-3"
                  style="justify-content: center"
                >
                  <div
                    class="col-lg-3 col-5 text-center d-flex flex-column pt-3 pb-3"
                    style="
                      box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3),
                        0 1px 3px 1px rgba(60, 64, 67, 0.15);
                    "
                  >
                    <a href="https://www.instagram.com/bemolonline/"
                      ><i class="bx bxl-instagram" style="font-size: 3rem"></i
                    ></a>
                    <span>Visite o Instagram</span>
                  </div>
                  <!-- Zap -->
                  <div
                    class="col-lg-3 col-5 text-center d-flex flex-column pt-3 pb-3"
                    style="
                      box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3),
                        0 1px 3px 1px rgba(60, 64, 67, 0.15);
                    "
                  >
                    <a href="https://api.whatsapp.com/send/?phone=5592984522238&text&type=phone_number&app_absent=0&utm_campaign=whatsapp_de_vendas&utm_source=social">
                      <i class="bx bxl-whatsapp" style="font-size: 3rem"></i>
                    </a>

                    <span>Contate no WhatsApp</span>
                  </div>
                  <!-- Site -->
                  <div
                    class="col-lg-3 col-11 text-center d-flex flex-column pt-3 pb-3"
                    style="
                      box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3),
                        0 1px 3px 1px rgba(60, 64, 67, 0.15);
                    "
                  >
                    <a href="https://www.bemol.com.br/"
                      ><i class="bx bx-globe" style="font-size: 3rem"></i
                    ></a>

                    <span>Acesse o site oficial</span>
                  </div>
                </div>
              </div>
              <!-- Vagas -->
              <div class="card text-center mb-3">
                <div class="card-header text-white" style="font-size: 1.2rem; font-weight: 600; background: #0aaa9e">
                  Oportunidades
                </div>
                <div class="card-body">
                  <img src="../assets/img/logos/bemol.png" width="100rem" alt="Logomarca do Atack">
                  <p class="card-text">Visite a página de vagas!</p>
                  <a href="https://bemol.gupy.io" class="btn text-white" style="background:#0aaa9e">Acessar</a>
                </div>
              </div>
            </div>
            <!-- Sumario -->
            <div id="summary" class="col-lg-2 col-0 text-white" style="background: #0aaa9e;">
              <div class="text-center pt-3 pb-3">
                <h2
                  class="text-center"
                  style="font-size: 1.2rem; font-weight: 600"
                >
                  Sumário
                </h2>
                <!-- Historia Link -->
                <div>
                  <a
                    class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                    href="#historia"
                    >História</a
                  >
                </div>
                <!-- Missão Link -->
                <div>
                  <a
                    class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                    href="#missao"
                    >Missão</a
                  >
                </div>

                <!-- Visão Link -->
                <div>
                  <a
                    class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                    href="#visao"
                    >Visão</a
                  >
                </div>

                <!-- Valores Link -->
                <div>
                  <a
                    class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                    href="#valores"
                    >Valores</a
                  >
                </div>
                <!-- Sociais Link -->
                <div>
                  <a
                    class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                    href="#redes"
                    >Redes Sociais</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="container-fluid bg-info-subtle" data-bs-theme="dark">
        <!-- Coluna 1_Logo e Slogan -->
        <div class="container">
        <div class="row">
          <div class="col-12 text-center text-lg-center pt-3 text-white">
            <img src="../assets/img/cambo.svg" alt="Logomarca" width="124px" />
            <p>Comece sua história profissional aqui!</p>
          </div>
          <!-- Coluna 2 - Links rápidos -->
          <!-- <div
            class="col-12 text-center text-lg-center pt-2 text-center text-white pb-2"
          >
            <strong class="titulo">Links rápidos</strong>
            <ul
              class="nav nav-underline align-items-center justify-content-center"
            >
              <li class="nav-item">
                <a class="nav-link" href="#inicio">Inicio</a>
              </li>
            </ul>
          </div> -->
          <!-- Coluna 3 - Endereço e Contato -->
          <div class="col-12 text-center text-white">
            <p>
              &copy; 2024 CamboHistory. Todos os Direitos
              Reservados. Atualmente v0.1
            </p>
          </div>
        </div>
        </div>
      </footer>
    </main>

    <!-- Link de Scripts do Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <script src="../assets/js/pesquisa.js"></script>

  </body>
</html>
