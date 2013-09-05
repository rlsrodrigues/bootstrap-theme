		</div>
		<div class="container-footer"></div>
			<footer class="footer relative">
				<div class="navi-footer relative">
                    <?php
                    wp_nav_menu(array('theme_location' => 'menu_rodape', 'container' => false, 'menu_id' => 'nav-footer', 'echo' => true, 'fallback_cb' => 'cec_default_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'depth' => 0));
                    ?>
                </div>
                <div class="endereco">
                	AV. CÂNDIDO DE ABREU, 427 - CJ 1110 - A - CENTRO CÍVICO | CURITIBA/PR | 41 3079-6565 OU 41 3025-6567
                </div>
                <div class="logo-planos absolute">
                	<a href="http://www.muitomaisdigital.com.br" alt="Desenvolvimento e otimização de sites em Curitiba" title="Desenvolvimento e otimização de sites em Curitiba">
                		<img src="<?php bloginfo('template_url') ?>/imagens/logo-planos.png"/>
                	</a>
                </div>	
			</footer>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>