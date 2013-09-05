<?php get_header(); ?>
	<div class="content">
		<div class="bem-vindo relative block">
			<?php query_posts('p=41'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	                    <h2 class="title-h2 absolute"><?php the_title(); ?></h2>
	                    <article class="entry page-entry">
	                        <?php the_content(); ?>
	                    </article>			
	            <?php endwhile; ?>
	        <?php endif; ?>
        </div>
        <div class="clear"></div>
        <div class="destaques-home relative block">  
        	<h3 class="title-h3 absolute">Destaques</h3>
        	<div class="block-destaques blocks">
	        	<?php //bloco 1 direito tributário ?>
	        	<div class="block n1 block-destaques left relative">
	        		<?php query_posts('page_id=13'); ?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		  
								<div class="title-destaques">
									<?php the_title(); ?>
								</div>
								<figure class="slideshow-home">
									<div class="slideshow">
						               	<img src="<?php bloginfo('template_url'); ?>/imagens/direito_tributario-1.png"/>
						                <img src="<?php bloginfo('template_url'); ?>/imagens/direito_tributario-2.png"/>
						                <img src="<?php bloginfo('template_url'); ?>/imagens/direito_tributario-3.png"/>		            
						            </div>
								</figure>
			                    <article class="entry page-entry">
			                        <?php echo excerpt(21); ?>
			                        <a href="<?php the_permalink(); ?>">Leia mais</a>
			                    </article>			
			            <?php endwhile; ?>
			        <?php endif; ?>
	        	</div>
	        	<?php //bloco 2 Direito Bancário ?>
	        	<div class="block n2 block-destaques left relative">
	        		<?php query_posts('page_id=15'); ?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		  
								<div class="title-destaques">
									<?php the_title(); ?>
								</div>
								<figure class="slideshow-home">
									<div class="slideshow">
						               	<img src="<?php bloginfo('template_url'); ?>/imagens/direito-bancario-1.png">
						                <img src="<?php bloginfo('template_url'); ?>/imagens/direito-bancario-2.png">
						                <img src="<?php bloginfo('template_url'); ?>/imagens/direito-bancario-3.png">            
						            </div>		
								</figure>
			                    <article class="entry page-entry">
			                        <?php echo excerpt(21); ?>
			                        <a href="<?php the_permalink(); ?>">Leia mais</a>
			                    </article>			
			            <?php endwhile; ?>
			        <?php endif; ?>
	        	</div>
	        	<?php //bloco 3 consultoria empresarial ?>
	        	<div class="block n3 block-destaques right relative">
	        		<?php query_posts('page_id=17'); ?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		  
								<div class="title-destaques">
									<?php the_title(); ?>
								</div>
								<figure class="slideshow-home">
									<div class="slideshow">
						               	<img src="<?php bloginfo('template_url'); ?>/imagens/consultoria-1.png">
						                <img src="<?php bloginfo('template_url'); ?>/imagens/consultoria-2.png">
						                <img src="<?php bloginfo('template_url'); ?>/imagens/consultoria-3.png">					            
						            </div>
								</figure>
			                    <article class="entry page-entry">
			                        <?php echo excerpt(21); ?>
			                        <a href="<?php the_permalink(); ?>">Leia mais</a>
			                    </article>			
			            <?php endwhile; ?>
			        <?php endif; ?>
	        	</div>
	        	<div class="n1 left block">
	        		<?php query_posts('cat=1&showposts=1&orderby=rand'); ?>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		  
								<h3>
									<?php the_title(); ?>
								</h3>
			                    <article class="entry page-entry">
			                        <?php echo excerpt(21); ?>
			                        <a href="<?php the_permalink(); ?>">Leia mais</a>
			                    </article>			
			            <?php endwhile; ?>
			        <?php endif; ?>
	        	</div>
	        	<div class="n2 left block">
	        		<?php query_posts('p=58'); ?>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		  
								<h3>
									<?php the_title(); ?>
								</h3>
			                    <article class="entry page-entry">
			                        <?php the_content(); ?>
			                    </article>			
			            <?php endwhile; ?>
			        <?php endif; ?>
	        	</div>
	        	<div class="n3 right block">
	        		<?php query_posts('p=60'); ?>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		  
								<h3>
									<?php the_title(); ?>
								</h3>
			                    <article class="entry page-entry">
			                        <?php the_content(); ?>
			                    </article>			
			            <?php endwhile; ?>
			        <?php endif; ?>
	        	</div>
	        	<div class="clear"></div>
        	</div><?php //fim blocos destaques ?>
        	
        </div><?php //fim destaques home ?>
	</div>
<?php get_footer(); ?>