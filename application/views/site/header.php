<nav class="navbar navbar-expand-lg navbar-light" style="background: #ffcccc; border-bottom: 1px solid #fff; font-weight: bold">
    <a class="navbar-brand" href="#">Portal Reflexão</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Amor<span class="sr-only">(página atual)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Felicidades</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Aniversário
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Ação</a>
            <a class="dropdown-item" href="#">Outra ação</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Algo mais aqui</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="btn btn-success btn-sm mt-1" href="Teste">+ Adicionar frase</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="mr-sm" type="search" placeholder="Pesquisar" aria-label="Pesquisar" style="
        border: 1px solid #cccccc; padding: 2px;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
        color: #00cc99
        ">
        <button class="btn btn-light my-2 my-sm-0" type="submit" style="
        border: 1px solid #999;
        border-top-left-radius: 0px;
        border-bottom-left-radius: 0px;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
        ">
        <img src="<?= base_url('assets/icon/procurar.png'); ?>"></button>
      </form>
    </div>
</nav>
