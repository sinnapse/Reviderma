<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.min.css">

		<?php wp_head(); ?>
	</head>

	<body>
		<h1 class="logo_text">Reviderma</h1>

		<!-- INICIO HEADER -->
		<header>

      <!-- INICIO HEADING -->
      <div class='heading'>
        <div class='container-fluid'>
          <div class='row no-gutters'>
            <div class="logo">
              <a href="<?php echo bloginfo('url'); ?>">
                <img class='white' src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Reviderma">
                <img class='color' src="<?php echo get_template_directory_uri(); ?>/img/logo-color.png" alt="Reviderma">
              </a>
            </div>

            <div class="menu">
              <div class="hamburger-menu">
                <div class="bar"></div> 
                <span></span>
              </div><!-- /hamburger-menu -->

              <div class="content-menu">
                <ul>
                  <li class="item-hbg"><a href="javascript: void(0)">Sobre Nós</a></li>
                  <li class="item-hbg"><a href="javascript: void(0)">Tratamento Corporal</a></li>
                  <li class="item-hbg"><a href="javascript: void(0)">Tratamento Facial</a></li>
                  <li class="item-hbg"><a href="javascript: void(0)">Tratamento Capilar</a></li>
                  <li class="item-hbg"><a href="javascript: void(0)">Tratamento Íntimo</a></li>
                  <li class="item-hbg"><a href="javascript: void(0)">Blog</a></li>
                  <li class="item-hbg"><a href="javascript: void(0)">Contato</a></li>
                </ul>

                <div class="sociais">
                  <a href="#"><i class="fab fa-facebook"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                </div><!-- /sociais -->
              </div><!-- /content-menu -->
            </div><!-- /menu -->

          </div><!-- /row -->
        </div><!-- /container -->
      </div><!-- /heading -->
      <!-- FIM HEADING -->

			<!-- INICIO SLIDER -->
			<div class='slider owl-carousel owl-theme'>
        <div class="item slide1">
            <h2>Btl Hot Summer</h2>
            <span> Você pronta para o verão</span>

            <button>
              Eu quero <i class="fas fa-arrow-right"></i>
            </button>
        </div><!-- /item -->

        <div class="item slide2">
          <div class="container">
            <div>
              <h2>BTL VANQUISH</h2>
              <span> Reduza as medidas <br> e queime gordura</span>

              <button>
                Eu quero <i class="fas fa-arrow-right"></i>
              </button>
            </div>
          </div><!-- /container -->
        </div><!-- /item -->

        <div class="item slide3">
          <h2>BTL XWAVE</h2>
          <span>Diga adeus a celulite</span>

          <button>
            Eu quero <i class="fas fa-arrow-right"></i>
          </button>
        </div><!-- /item -->

        <div class="item slide4">
          <div class="container">
            <div>
              <h2>ULTRA FEMME 360º</h2>
              <span> Reduza as medidas <br> e queime gordura</span>

              <button>
                Eu quero <i class="fas fa-arrow-right"></i>
              </button>
            </div>
          </div><!-- /container -->
        </div><!-- /item -->

			</div><!-- /slider -->
			<!-- FIM SLIDER -->
		</header>
    <!-- FIM HEADER -->

   
    
  

