<?php get_header(); ?>
<div class="row">
	
	<div class="col-xs-12 col-sm-8">
		
		<?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
					<?php the_title('<h1 class="title">','</h1>' ); ?>

<div class="extrapostSINGLE">
 	<small><a style="" href="<?php the_permalink(); ?>" ><?php the_time('d/m/Y'); ?> </a>|  <?php the_category( ', ' ); ?>  | <a style="" href="<?php the_permalink(); ?>" > <?php comments_number( 'Geen antwoorden', 'Éen antwoord', '% antwoorden' ); ?> </a></small>
</div>
					
					<?php if( has_post_thumbnail() ): ?>
						
						<div class="thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
				
					<?php endif; ?>
					
					<div class="entrySINGLE">
					<?php the_content(); ?>
					</div>
			
					
					<div class="row">
						<div class="text-left"><?php previous_post_link( '« Vorige bericht: %link' ); ?></div>
						<div class="text-right"><?php next_post_link( 'Volgende bericht: %link »' ); ?></div>
					</div>
					
					<?php 
						if( comments_open() ){ 
							comments_template(); 
						} else {
							echo '<h5 class="text-center">Sorry, reacties zijn uitgeschakeld op dit bericht!</h5>';
						}
						
					 ?>
				
				</article>

			<?php endwhile;
			
		endif;
				
		?>
	
	</div>
	
		<header>
				<a href="#" id="logo"></a>
				<nav>
					<a href="#" id="menu-icon"></a>
					<ul>
						<li><a href="<?php echo get_home_url(); ?>/" class="ding">Home</a></li>
						<li><a href="<?php echo get_home_url(); ?>/Info" class="ding">Info</a></li>
						<li><a href="<?php echo get_home_url(); ?>/Contact" class="ding">Contact</a></li>
						<li><a href="<?php echo get_home_url(); ?>/Vids" class="ding">Onze video's</a></li>
						<li><a href="<?php echo get_home_url(); ?>/Updates" class="current">Updates</a></li>
									
					</ul>
				</nav>
		</header>	
	
</div>

<?php get_footer(); ?>




