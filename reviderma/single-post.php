<?php 
/* Template Name: Tratamento Coporal */
get_header('intern'); ?>

  <!-- INICIO SLIDER -->
  <div class='slider intern owl-carousel owl-theme'>
    <div class="item post" style="background: url('<?= get_the_post_thumbnail_url(); ?>'); background-position: center center; background-size: cover;">
      <div class="container">
        <div class="alinha">
          <h2><?php the_field('titulo'); ?></h2>
          <span><?php the_field('sub_titulo'); ?></span>
          <p><?php the_time('j \d\e F, Y') ?></p>
        </div><!-- /alinha -->
      </div><!-- /container -->
    </div><!-- /item -->
  </div><!-- /slider -->
  <!-- FIM SLIDER -->
</header>
<!-- FIM HEADER -->

<!-- INICIO MAIN -->
<main style='padding-top: 2rem'>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <!-- INICIO CONTEUDO POST -->
  <section>
  <div class='conteudo-post'>
    <div class='container'>
      <div class='row no-gutters'>
        <?php the_content();?>
      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /conteudo-post -->
  </section>
  <!-- FIM CONTEUDO POST -->

<?php endwhile; else: ?>
<?php endif; ?>

  <!-- INICIO DEPOIMENTOS -->
  <section>
    <h2 class="logo_text">Depoimentos</h2>
    <div class='depoimentos' style='margin-top: 1rem;'>
      <div class='container'>

        <div class='lista-depoimentos owl-carousel owl-theme'>

          <div class="item">
            <div class="item-depoimento">

              <div id='no-owl' class="foto-destaque show">
                <img src="<?php echo get_template_directory_uri(); ?>/img/depo1.jpg" alt="Depoimento">
              </div><!-- /foto-destaque -->

              <div class="item-depoimento__nome">
                <p>Ana Helena Castro</p>
              </div><!-- /item-depoimento__nome -->

              <div class="item-depoimento__texto">
                <p>
                  Fiz o tratamento na Reviderma® com o ULTRA FEMME 360® e adorei, o processo é super rápido e não senti nenhuma dor ou desconforto, Super Recomendo !
                </p>

                <div class="aspas-cima"></div>
                <div class="aspas-baixo"></div>
              </div><!-- /.item-depoimento__texto -->

            </div><!-- /item-depoimento -->
          </div><!-- /.item -->
        
          <div class="item">
            <div class="item-depoimento">

              <div id='no-owl' class="foto-destaque show">
                <img src="<?php echo get_template_directory_uri(); ?>/img/depo2.jpg" alt="Depoimento">
              </div><!-- /foto-destaque -->

              <div class="item-depoimento__nome">
                <p>Luiza Mendonça</p>
              </div><!-- /item-depoimento__nome -->

              <div class="item-depoimento__texto">
                <p>
                  Fiz o tratamento na Reviderma® com o ULTRA FEMME 360® e adorei, o processo é super rápido e não senti nenhuma dor ou desconforto, Super Recomendo !
                </p>

                <div class="aspas-cima"></div>
                <div class="aspas-baixo"></div>
              </div><!-- /.item-depoimento__texto -->

            </div><!-- /item-depoimento -->
          </div><!-- /.item -->
        
          <div class="item">
            <div class="item-depoimento">

              <div id='no-owl' class="foto-destaque show">
                <img src="<?php echo get_template_directory_uri(); ?>/img/depo3.jpg" alt="Depoimento">
              </div><!-- /foto-destaque -->

              <div class="item-depoimento__nome">
                <p>Fernanda Oliveira</p>
              </div><!-- /item-depoimento__nome -->

              <div class="item-depoimento__texto">
                <p>
                  Fiz o tratamento na Reviderma® com o ULTRA FEMME 360® e adorei, o processo é super rápido e não senti nenhuma dor ou desconforto, Super Recomendo !
                </p>

                <div class="aspas-cima"></div>
                <div class="aspas-baixo"></div>
              </div><!-- /.item-depoimento__texto -->

            </div><!-- /item-depoimento -->
          </div><!-- /.item -->
        
          <div class="item">
            <div class="item-depoimento">

              <div id='no-owl' class="foto-destaque show">
                <img src="<?php echo get_template_directory_uri(); ?>/img/depo5.jpg" alt="Depoimento">
              </div><!-- /foto-destaque -->

              <div class="item-depoimento__nome">
                <p>Bruna Ferreira</p>
              </div><!-- /item-depoimento__nome -->

              <div class="item-depoimento__texto">
                <p>
                  Fiz o tratamento na Reviderma® com o ULTRA FEMME 360® e adorei, o processo é super rápido e não senti nenhuma dor ou desconforto, Super Recomendo !
                </p>

                <div class="aspas-cima"></div>
                <div class="aspas-baixo"></div>
              </div><!-- /.item-depoimento__texto -->

            </div><!-- /item-depoimento -->
          </div><!-- /.item -->


        </div><!-- /lista-depoimentos -->

      </div><!-- /container -->
    </div><!-- /depoimentos -->
  </section>
  <!-- FIM DEPOIMENTOS -->

</main>
<!-- FIM MAIN -->

<?php get_footer(); ?>