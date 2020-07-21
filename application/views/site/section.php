<div role="main" class="container-fluid">
   <div class="row no-gutters">
     <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9" id="section_main">
       <div class="mt-3">
         <p class="h5 mb-3"> + compartilhados </p>
         <div class="row no-gutters"><!-- style="position: relative; left: -10px" -->
            <div class="col-xs-4 col-sm-6 col-md-4 col-lg-4 col-xl-2 mb-3 text-center tcc">
              <img src="<?= base_url('assets/img/tag_amor.jpg'); ?>" class="tag_img img-fluid">
              <p class="card-text tag_c">Amor</p>
            </div>
            <div class="col-xs-4 col-sm-6 col-md-4 col-lg-4 col-xl-2 mb-3 text-center tcc">
              <img src="<?= base_url('assets/img/tag_amizade.jpg'); ?>" class="tag_img img-fluid">
              <p class="card-text tag_c">Amizades</p>
            </div>
            <div class="col-xs-4 col-sm-6 col-md-4 col-lg-4 col-xl-2 mb-3 text-center tcc">
              <img src="<?= base_url('assets/img/tag_mae.jpg'); ?>" class="tag_img">
              <p class="card-text tag_c">Mãe</p>
            </div>
            <div class="col-xs-4 col-sm-6 col-md-4 col-lg-4 col-xl-2 mb-3 text-center tcc">
              <img src="<?= base_url('assets/img/tag_tempo.jpg'); ?>" class="tag_img">
              <p class="card-text tag_c">Tempo</p>
            </div>
            <div class="col-xs-4 col-sm-6 col-md-4 col-lg-4 col-xl-2 mb-3 text-center tcc">
              <img src="<?= base_url('assets/img/tag_pai.jpg'); ?>" class="tag_img">
              <p class="card-text tag_c">Pai</p>
            </div>
            <div class="col-xs-4 col-sm-6 col-md-4 col-lg-4 col-xl-2 mb-3 text-center tcc">
              <img src="<?= base_url('assets/img/tag_aniversario.jpg'); ?>" class="tag_img">
              <p class="card-text tag_c">Parabéns</p>
            </div>
         </div>
       </div>
       <?php
          include('article.php');
       ?>
   </div>
   <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
    <?php
      include('aside.php');
    ?>
   </div>
</div>
</div>
