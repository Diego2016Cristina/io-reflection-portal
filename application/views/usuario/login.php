<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/site/200619pr2331.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/loginUsuario/allStyle.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/loginUsuario/login.css'); ?>">
  </head>
  <body>
    <div class="container">
      <div class="row" id="total_bloco">
        <div class="col-sm-12 col-md-12" style="height: 512px">
          <div class="bl-interno">
            <p id="titulo-bl-0"><?= $titulo ?></p>
            <div class="row" id="bl-titulo">
              <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" id="bloco-um">
                <div class="row">
                  <div class="col-sm-12">
                    <p class="titulo-bl-1">
                      Não perca tempo e acesse, se caso ainda não tenha uma conta
                      crie hoje mesmo é rápido e gratuíto.
                      Clique: <a href="#" style="color: #003300">Criar minha conta</a>
                    </p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <img src="<?= base_url('assets/img/logo-exemp.jpg'); ?>" id="img-bl-1">
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <form action="" method="post" id="formulario">
                  <div class="form-group">
                    <h2 style="color: #fff" id="tituloT">Entre com seus dados</h2>
                    <label for="exampleInputEmail1" style="color: #fff">Email/ Usuário</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1" style="color: #fff">Senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1" style="color: #fff">Manter-me conectado</label>
                  </div>
                  <button type="submit" class="btn btn-primary">Acessar</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
