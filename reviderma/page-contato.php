<?php 
/* Template Name: Contato */
get_header('intern'); ?>

  <!-- INICIO SLIDER -->
  <div class='slider intern owl-carousel owl-theme'>
    <div class="item contato">
      <div class="container">
        <div class="alinha">
          <h2>CONTATO</h2>
        </div><!-- /alinha -->
      </div><!-- /container -->
    </div><!-- /item -->
  </div><!-- /slider -->
  <!-- FIM SLIDER -->
</header>
<!-- FIM HEADER -->

<!-- INICIO MAIN -->
<main style='padding-top: 2rem'>

  <!-- INICIO CONTATO -->
  <div class='page-contato'>
    <div class='container'>
      <div class='row no-gutters'>

        <div class="page-contato__icones">
          <div class="row no-gutters">

            <div class="item-contato">
              <img src="<?php echo get_template_directory_uri(); ?>/img/icone-whats.png" alt="Icone Whats">
              <p>Whatsapp</p>
              <span>(19) 9999-9999</span>
            </div><!-- /item-contato -->

            <div class="item-contato">
              <img src="<?php echo get_template_directory_uri(); ?>/img/icone-telefone.png" alt="Icone Telefone">
              <p>Telefone</p>
              <span>(19) 9999-9999</span>
            </div><!-- /item-contato -->

            <div class="item-contato">
              <img src="<?php echo get_template_directory_uri(); ?>/img/icone-email.png" alt="Icone E-mail">
              <p>E-mail</p>
              <span>contato@reviderma.com.br</span>
            </div><!-- /item-contato -->

          </div><!-- /.row no-gutters -->
        </div><!-- /.page-contato__icones -->
      </div><!-- /row -->
    </div><!-- /container -->

    <!-- INICIO MOMENTO UNICO -->
		<section>
			<div class='momento-unico'>
					<div class='row no-gutters'>
						<div class="momento-unico__foto">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14625.542152304739!2d-46.65222661094282!3d-23.5905022901898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5a290fa984cd%3A0xe6824b3e26dd2921!2sVila+Mariana%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1548947468254" width="100%" height="473px" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div><!-- /momento-unico__foto -->

						<div class="momento-unico__conteudo">
							<span style='width: 100%;'>
								<div class="item-infos">
										<span>
											<div class="titulo-destaque">
												<h3>ENDEREÇO 1</h3>
												<span>ENDEREÇO 1</span>
											</div><!-- /titulo-destaque -->

											<ul>
												<li>Rua, número, bairro, cidade, estado</li>
												<li>telefone</li>
												<li>e-mail</li>
											</ul>

											<a href="javascript:void(0)">
												Traçar a rota
											</a>
										</span>
									</div><!-- /item-infos -->
								</span>
						</div><!-- /.momento-unico__conteudo -->

					</div><!-- /row -->
			</div><!-- /momento-unico -->
		</section>
		<!-- FIM MOMENTO UNICO -->
  </div><!-- /page-contato -->
  <!-- FIM CONTATO -->

  <!-- INICIO DEIXE SUA MENSAGEM -->
  <div class='deixe-sua-mensagem'>
    <div class='container'>
      <div class='row no-gutters'>

        <div class="deixe-sua-mensagem__titulo">
          <h2>Envie sua mensagem</h2>
        </div><!-- /.deixe-sua-mensagem__titulo -->

        <div class="deixe-sua-mensagem__conteudo">
          <?php echo do_shortcode('[contact-form-7 id="10" title="Envie sua Mensagem"]'); ?>
        </div><!-- /.deixe-sua-mensagem__conteudo -->

      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /deixe-sua-mensagem -->
  <!-- FIM DEIXE SUA MENSAGEM -->

</main>
<!-- FIM MAIN -->

<?php get_footer(); ?>