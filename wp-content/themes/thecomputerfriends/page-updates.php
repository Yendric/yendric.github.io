
<?php 

/*

	Template Name: Blog

*/

?>

<?php get_header(); ?>
<center><h3>Updates</h3></center>


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



			<div class="prev"><?php next_posts_link('&laquo; Oudere berichten.'); ?></div>

			<div class="next"><?php previous_posts_link('Nieuwere berichten &raquo;'); ?></div>




		<?php } else { ?>


			<div class="prev"><?php next_posts_link('&laquo; Oudere berichten.'); ?></div>



		<?php } ?>



		<?php wp_reset_postdata(); ?>



	</article>


<?php get_footer(); ?>
 
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