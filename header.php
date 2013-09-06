<?php $url = URL ?>
<!DOCTYPE html><!-- HTML 5 -->
<html <?php language_attributes(); ?>>
    <head>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="author" content="[team_name] - [developer name]" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <title><?php wp_title('|', true, 'right'); ?></title>     
        <!--[if lt IE 9]>
	        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="container-header relative">
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
                