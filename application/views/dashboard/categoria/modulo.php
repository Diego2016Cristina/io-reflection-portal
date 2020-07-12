<script type="text/javascript">//Ainda não está funcional, verificar isso + tarde.
    setTimeout(function() {
    $(".mark").fadeOut().empty();
    }, 5000);
</script>
  <div class="row margin-bottom-20" style="margin-bottom: 10px">
      <div class="col-sm-12 text-right">

          <a href="<?php echo base_url('categoria'); ?>" title="voltar" class="btn btn-success">
              <i class="fa fa-arrow-left"></i> Voltar
          </a>

      </div>
  </div>

  <form action="<?php echo base_url('core'); ?>" method="post" accept-charset="utf-8" class="form-horizontal">

      <?php

          errosValidacao();
          getMsg('msgCadastro');

      ?>

      <div class="form-group">
          <label class="col-sm-2 control-label">Nome categoria</label>
              <div class="col-sm-8">
                  <input type="text" name="nome" class="form-control" placeholder="Nome" value="<?php echo ($dados != NULL ? $dados->nome: set_value('nome')); ?>">
              </div>
          </div>

      <div class="form-group">
        <div class="form-group">
            <label class="col-sm-2 control-label">Ativo</label>
            <div class="col-sm-4">
                <select name="ativo" class="form-control">

                    <?php if ($dados) { //inicio do if?>
                         <option value="0" <?= ($dados->ativo == 0 ? 'selected=""' : '') ?>>Não</option>
                         <option value="1" <?= ($dados->ativo == 1 ? 'selected=""' : '') ?>>Sim</option>
                    <?php } else { ?>
                        <option value="0">Não</option>
                        <option value="1" selected="">Sim</option>
                    <?php  } //Fim do if ?>
                </select>
            </div>
        </div>
      </div>

      <?php  if ($dados) { ?>
          <input type="hidden" name="id_categoria" value="<?= $dados->id ?>" >
      <?php } //fim if ?>

      <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success">
                  <i class="fa fa-check-cicle-o"></i> Salvar
              </button>
          </div>
      </div>
  </form>

<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/jquery.min.js'); ?>"></script>
