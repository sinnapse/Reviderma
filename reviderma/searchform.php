<!-- INICIO PROCURAR -->
<div class='procurar'>
	<form role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>" >
		<input id="input" name="s" id="s" value="<?php the_search_query(); ?>" placeholder="O que você procura?" required/>
		<button id="button" type="submit" id="searchsubmit" value="Search"><i class="fa fa-search"></i></button>
  </form>
</div><!-- /procurar -->
<!-- FIM PROCURAR -->


