<?php 
get_header();
?>

        <div class="page">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
             <div class="page_title"><?php the_title(); ?></div>

                  <div class="page_content"><?php the_content(); ?></div>

                   <?php endwhile; endif; ?>
        </div>
		
	<header>
				<a href="#" id="logo"></a>
				<nav>
					<a href="#" id="menu-icon"></a>
					<ul>
						<li><a href="<?php echo get_home_url(); ?>/" class="ding">Home</a></li>
						<li><a href="<?php echo get_home_url(); ?>/Info" class="current">Info</a></li>
						<li><a href="<?php echo get_home_url(); ?>/Contact" class="ding">Contact</a></li>
						<li><a href="<?php echo get_home_url(); ?>/Vids" class="ding">Onze video's</a></li>
						<li><a href="<?php echo get_home_url(); ?>/Updates" class="ding">Updates</a></li>
									
					</ul>
				</nav>
		</header>	
		
<?php get_footer(); ?>

