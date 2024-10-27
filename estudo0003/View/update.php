<html>
<head>
    <!-- TAG que imprimi na tela o valor da variável $titulo usando echo -->
    <title><?php echo $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }

      /* Show it's not fixed to the top */
        body {
        min-height: 75rem;
        }

        .child {
          margin: 0 auto;
        }
    </style>

</head>
<!-- importação do bootstrap -->

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= $this->getCaminho() ?>/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= $this->getCaminho() ?>/showCadastro">Cadastro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= $this->getCaminho() ?>/listagem">Listagem</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
<div class="container">
<div class="child">
<form method="POST" action="<?= $this->getCaminho() ?>/update">
 <input type="hidden" name="id" value="<?= $id ?>">
  <div class="row">
    <div class="col-md-3 mb-3">
      <input type="text" name="nome" value="<?= $nome ?>" class="form-control" placeholder="Nome Completo">
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 mb-3">
      <input type="text" name="email" value="<?= $email ?>" class="form-control" placeholder="Email">
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 mb-3">
      <input type="text" name="whatsapp" value="<?= $whatsapp ?>" class="form-control" placeholder="WhatsApp">
    </div>
   </div>
  <div class="row">
    <div class="col-md-2 mb-2">
        <button class="btn btn-primary" type="submit">GRAVAR</button>
    </div>
  </div>

</form>
</div></div>
</body>
</html>