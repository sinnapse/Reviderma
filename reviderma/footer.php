<!-- INICIO FOOTER -->
<footer>

	<!-- INICIO FOOTER MENU -->
	<div class='footer-menu'>
		<div class='container'>
			<div class='row no-gutters'>

				<div class="footer-menu__logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo-footer.png" alt="Logo Footer">
				</div><!-- /.footer-menu__logo -->

				<div class="footer-menu__menu">
					<ul>
						<div class="row no-gutters">
							<div class="item-menu">
								<li><a href="#">Sobre Nós</a></li>
								<li><a href="#">Tratamento Corporal</a></li>
								<li><a href="#">Tratamento Facial</a></li>
							</div><!-- /.item-menu -->

							<div class="item-menu">
								<li><a href="#">Tratamento de Pele</a></li>
								<li><a href="#">Tratamento Íntimo</a></li>
								<li><a href="#">Blog</a></li>
							</div><!-- /.item-menu -->

							<div class="item-menu">
								<li><a href="#">Contato</a></li>
								<li><a href="#">Newsletter</a></li>
								<li><a href="#">Redes Sociais</a></li>
							</div><!-- /.item-menu -->
						</div><!-- /.row no-gutters -->
					</ul>
				</div><!-- /.footer-menu__menu -->

			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /footer-menu -->
	<!-- FIM FOOTER MENU -->

	<!-- INICIO FOOTER COPYRIGHT -->
	<div class='footer-copyright'>
		<div class='container'>
		<hr>
			<div class='row no-gutters'>
				
				<div class="footer-copyright__empresa">
					<p>© Reviderma, 2018. Todos os direitos reservados</p>
				</div><!-- /.footer-copyright__empresa -->

				<div class="footer-copyright__dev">
					<p> Desenvolvido por: <a href="http://sinnapse.com.br" target='_blank'><img src="<?php echo get_template_directory_uri(); ?>/img/logo-sinnapse.png" alt="Sinnapse"></a> </p>
				</div><!-- /.footer-copyright__dev -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /footer-copyright -->
	<!-- FIM FOOTER COPYRIGHT -->

</footer>
<!-- FIM FOOTER -->

		<!-- Material button -->
		<button class="material-scrolltop" type="button"></button>
		
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/material-scrolltop.js"></script>

		<!-- Initialize -->
    <script>
			$(document).ready(function() {
				$('body').materialScrollTop();
			});
		</script>
		
		<?php wp_footer(); ?>
	</body>
</html>
