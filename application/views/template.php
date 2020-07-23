<!-- SETANDO TITULO -->
<?php
  if(isset($titulo)) {
    echo "<title>".$titulo."</title>";
  } else {
    echo "<title>Portal Reflexões</title>";
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Portal, Reflexões, mensagens, amor, pensamento, dia, coração, love">
    <meta name="author" content="Diego Xavier">
    <meta name="generator" content="">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/site/200619pr2331.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/site/menu.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/site/main.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/site/style_all.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/site/article.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/site/aside.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/site/footer.css') ?>">
  </head>
  <body>
    <!-- Base do template para todas as páginas seguintes -->
    <?php
      if(isset($pagina)) {
        $this->load->view($pagina);
      } else if(@$secundaria) {
        echo "Página secundaria existe.";
        $this->load->view($secundaria);
      } else {
        echo "<html>
                    <div id='preloader'>
                        <div id='status'></div>
                    </div>

                    <h1>O erro 404 é um código de resposta HTTP que indica que o cliente pôde comunicar com o servidor, mas ou o servidor não pôde encontrar o que foi pedido, ou foi configurado para não cumprir o pedido e não revelar a razão, ou a página não existe mais.</h1>

                    <script type='text/javascript'>

                        $(window).on('load', function () {
                            $('#status').fadeOut();
                            $('#preloader').delay(350).fadeOut('slow');
                            $('body').delay(350).css({'overflow': 'visible'});
                        });

                    </script>
                  </html>
            ";
      }
      ?>
  </body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/js/20207121505.js'); ?>"></script>
