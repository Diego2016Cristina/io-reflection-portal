
<style>
.no-gutters {
  margin-right: 0;
  margin-left: 0;

  > .col,
  > [class*="col-"] {
    padding-right: 0;
    padding-left: 0;
  }
}
img {
    width: 100%;
    height: 100%;
  }
</style>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" href="assets/css/200619pr2331.min.css">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row no-gutters" style="height: 100%">
        <div class="col-md-4 col-sm-4">
          <img src="<?= base_url('assets/img/bannerTeste.jpg'); ?>" alt="" />
        </div>
        <div class="col-sm-8">
          <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
              <div class="row"></div>
              <div class="row">
                <div class="col-sm-12">
                  <form class="mt-5" style="background: #999999; padding: 10px">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Endereço de email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                      <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Senha</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                    </div>
                    <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                  </form>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12"></div>
              </div>
            </div>
            <div class="col-sm-2"></div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
