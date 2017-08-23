
<?php get_header(); ?>


<!DOCTYPE html>
<h3 class="page_title">Home</h3>																							
<h3>Onze Video's</h3>
<br />
<center>
<iframe width="280" height="180" src="https://www.youtube.com/embed/I8JtilB1xEk" frameborder="0" allowfullscreen=""></iframe>
<iframe width="280" height="180" src="https://www.youtube.com/embed/TUqeHeC5w6k" frameborder="0" allowfullscreen=""></iframe>
<iframe width="280" height="180" src="https://www.youtube.com/embed/aK7FZXFGBtU" frameborder="0" allowfullscreen=""></iframe>
<iframe width="280" height="180" src="https://www.youtube.com/embed/AUA9aQChp8Y" frameborder="0" allowfullscreen=""></iframe>
<iframe width="280" height="180" src="https://www.youtube.com/embed/FI-iBodj4GY" frameborder="0" allowfullscreen=""></iframe>
<iframe width="280" height="180" src="https://www.youtube.com/embed/uemioBEiBlo" frameborder="0" allowfullscreen=""></iframe>
<iframe width="280" height="180" src="https://www.youtube.com/embed/MX_gMlBgBPg" frameborder="0" allowfullscreen=""></iframe>
<iframe width="280" height="180" src="https://www.youtube.com/embed/diFqSkE69p8" frameborder="0" allowfullscreen=""></iframe>
<br />
<br />
<br />
<a href="https://www.youtube.com/channel/UCAB1tf9HshySNXDGlf98oEQ/videos" class="button">Meer weergeven</a></center>
<br /><h3>Updates</h3>

	<article>



		<?php // Display blog posts on any page @ https://m0n.co/l

		$temp = $wp_query; $wp_query= null;

		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=5' . '&paged='.$paged);

		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>


 	<?php if ( in_category( '3' ) ) : ?>
 		<div class="post-cat-three">
 	<?php else : ?>
 		<div class="post">
 	<?php endif; ?>


	<a class="title" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>

<div class="extrapost" style="margin-top:5px;color: darkgrey ;font-weight: 600;">
 	<small><a style="color: darkgrey ;" href="<?php the_permalink(); ?>" ><?php the_time('d/m/Y'); ?> </a>|  <?php the_category( ', ' ); ?>  | <a style="color: darkgrey ;" href="<?php the_permalink(); ?>" > <?php comments_number( 'Geen antwoorden', '1 antwoord', '% antwoorden' ); ?> </a></small>
</div>


 	<div class="entry">
 		<?php the_content(); ?>
 	</div>
</div>


		<?php endwhile; ?>



		<?php if ($paged > 1) { ?>



			<div class="prev"><a href="<?php echo get_home_url(); ?>/Updates/page/2/">Meer weergeven</a></div>

			<div class="next"><a href="<?php echo get_home_url(); ?>/Updates/page/2/">Meer weergeven</a></div>




		<?php } else { ?>


			<div class="prev"><a href="<?php echo get_home_url(); ?>/Updates/page/2/">Meer weergeven</a></div>



		<?php } ?>



		<?php wp_reset_postdata(); ?>



	</article>
 
		<header>
				<a href="#" id="logo"></a>
				<nav>
					<a href="#" id="menu-icon"></a>
					<ul>
						<li><a href="<?php echo get_home_url(); ?>/" class="current">Home</a></li>
						<li><a href="<?php echo get_home_url(); ?>/Info" class="ding">Info</a></li>
						<li><a href="<?php echo get_home_url(); ?>/Contact" class="ding">Contact</a></li>
						<li><a href="<?php echo get_home_url(); ?>/Vids" class="ding">Onze video's</a></li>
						<li><a href="<?php echo get_home_url(); ?>/Updates" class="ding">Updates</a></li>
									
					</ul>
				</nav>
		</header>	 
<?php get_footer(); ?>