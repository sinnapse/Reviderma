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

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2&appId=238372556544604&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

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
                  <li class="item-hbg"><a href="<?php echo bloginfo('url'); ?>">Sobre Nós</a></li>
                  <li class="item-hbg"><a href="<?php echo bloginfo('url'); ?>/tratamento-corporal/">Tratamento Corporal</a></li>
                  <li class="item-hbg"><a href="<?php echo bloginfo('url'); ?>/tratamento-facial-exilis/">Tratamento Facial</a></li>
                  <li class="item-hbg"><a href="<?php echo bloginfo('url'); ?>/tratamento-capilar/">Tratamento Capilar</a></li>
                  <li class="item-hbg"><a href="<?php echo bloginfo('url'); ?>/tratamento-intimo/">Tratamento Íntimo</a></li>
                  <li class="item-hbg"><a href="<?php echo bloginfo('url'); ?>/blog">Blog</a></li>
                  <li class="item-hbg"><a href="<?php echo bloginfo('url'); ?>/contato">Contato</a></li>
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

			
    
  

