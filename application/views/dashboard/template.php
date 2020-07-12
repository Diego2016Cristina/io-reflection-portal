<!-- SETANDO TITULO -->
<?php
  if(isset($titulo)) {
    echo "<title>".$titulo."</title>";
  } else {
    echo "<title>FullStack</title>";
  }
?>

<script type="text/javascript">
  window.onload = function() {
    document.getElementById('email').focus();
  }
</script>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Portal, Reflexões, mensagens, amor, pensamento, dia, coração, love">
    <meta name="author" content="Diego Xavier">
    <meta name="generator" content="">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/200619pr2331.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/AdminLTE.min.css'); ?>">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body>
    <!-- Base do template para todas as páginas seguintes -->
    <?php
      if(isset($pagina)) {
        $this->load->view($pagina);
      } else if(@$secundaria) {
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
</body>
