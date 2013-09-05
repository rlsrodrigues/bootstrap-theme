<!DOCTYPE html><!-- HTML 5 -->
<html <?php language_attributes(); ?>>
    <head>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="author" content="Planos Muito Mais Digital - Renato" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel='stylesheet' href='/fonts/stylesheet.css' type='text/css' media='all' />      
        <!--[if lt IE 9]>
	        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]--> 
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.cycle.all.js"></script>
        <script type="text/javascript">
            $(window).load(function(){
                $('.slideshow').cycle({
                   fx: 'fade' // Inclua as outras opções se necessário
                });
            });
        </script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="container-header">
        	<header class="header relative">

        		<?php //LOGO Condicional se for a home ele mostra em h1 senão mostra em section ?>
	            <?php if (is_home() || is_front_page()): ?>
	                <a href="<?php bloginfo('siteurl') ?>">
	                    <h1 class="logo absolute">
	                        <?php wp_title('|', true, 'right'); ?>
	                    </h1>
	                </a>
	            <?php else: ?>
	                <a href="<?php bloginfo('siteurl') ?>">
	                    <section class="logo absolute">
	                        <?php wp_title('|', true, 'right'); ?>
	                    </section>
	                </a>
	            <?php endif; ?>
	            <?php //FIM LOGO ?>

	            <?php //MENU dinâmico setado pelo painel wordpress ?>
	            <div class="navi absolute">
                    <?php
                    wp_nav_menu(array('theme_location' => 'menu_cabecalho', 'container' => false, 'menu_id' => 'nav', 'echo' => true, 'fallback_cb' => 'cec_default_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'depth' => 0));
                    ?>
                </div>
                <?php //fim MENU dinâmico setado pelo painel wordpress ?>     
	        </header>  
        </div>
                  
        <div class="container-content relative">
            <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
                