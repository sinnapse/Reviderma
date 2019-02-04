<?php 
/* Template Name: Blog */
get_header('intern'); ?>

  <!-- INICIO SLIDER -->
  <div class='slider intern owl-carousel owl-theme'>
    <div class="item post" style="background: url('<?php echo get_template_directory_uri(); ?>/img/bg-tratamento-facial.png'); background-position: center center; background-size: cover;">
      <div class="container">
        <div class="alinha">
          <h2>Blog</h2>
        </div><!-- /alinha -->
      </div><!-- /container -->
    </div><!-- /item -->
  </div><!-- /slider -->
  <!-- FIM SLIDER -->
</header>
<!-- FIM HEADER -->

<!-- INICIO MAIN -->
<main>

  <!-- INICIO BLOG -->
  <div class='blog-page'>
    <div class='container'>
      <div class='row no-gutters'>

        <div class="blog__esq">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="item-post">
              <a href="<?php the_permalink(); ?>">
                <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                <div class="descricao">
                  <span>
                    <p><?php the_time('j \d\e F, Y') ?></p>
                    
                    <p class='titulo'><?php the_title(); ?></p>
                    <p class='desc'><?php echo excerpt(30); ?></p>
                  </span>
                </div>
              </a>
            </div><!-- /item-post -->
          <?php endwhile; else: ?>
            <p><?php _e('Desculpa, Não há posts.'); ?></p>
          <?php endif; ?>

          <div class="navegacao">
            <?php wp_pagenavi(); ?>
          </div><!-- /navegacao -->
        
        </div><!-- /.blog__esq -->

        <div class="blog__dir">
          <?php get_search_form(); ?>

          <div class="categorias">
            <h3>Categorias</h3>
            <ul>
            <?php 
              $args = array (
                'parent' => 0,
              );

              $categories = get_categories($args);


              foreach($categories as $category) {
                echo '<li id="'. $category->slug .'"> <a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
              }

            ?>
            </ul>
          </div><!-- /categorias -->

          <div class="facebook">
            <h3>Facebook</h3>

            <div class="facebook__conteudo">
              <div class="fb-page" data-href="https://www.facebook.com/reviderma/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/reviderma/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/reviderma/">Reviderma</a></blockquote></div>
            </div><!-- /.facebook__conteudo -->
          </div><!-- /.facebook -->

        </div><!-- /.blog__dir -->

      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /blog -->
  <!-- FIM BLOG -->

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