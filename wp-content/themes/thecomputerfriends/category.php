<?php get_header(); ?> 

<?php 


if ( have_posts() ) : ?>
<div class="category_title">Categorie: <?php single_cat_title(); ?></div>

<?php

if ( category_description() ) : ?>
<div class="category_desc"><?php echo category_description(); ?></div>
<?php endif; ?>

<?php

while ( have_posts() ) : the_post(); ?>

 	<?php if ( in_category( '3' ) ) : ?>
 		<div class="post-cat-three">
 	<?php else : ?>
 		<div class="post">
 	<?php endif; ?>


	<a class="title" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>

<div class="extrapost" style="margin-top:5px;color: darkgrey ;font-weight: 600;">
 	<small><a style="color: darkgrey ;" href="<?php the_permalink(); ?>" ><?php the_time('d/m/Y'); ?> </a>|  <?php the_category( ', ' ); ?>  | <a style="color: darkgrey ;" href="<?php the_permalink(); ?>" > <?php comments_number( 'Geen antwoorden', 'Éen antwoord', '% antwoorden' ); ?> </a></small>
</div>


 	<div class="entry">
 		<?php the_content(); ?>
 	</div>
</div>

<?php endwhile; 
else: ?>
<p>Er zijn geen posts in deze categorie.</p>
<?php endif; ?>

 
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
 

<?php get_footer(); ?>