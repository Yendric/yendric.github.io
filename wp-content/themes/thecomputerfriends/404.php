<!DOCTYPE html>
<html>
<head> 
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/404.css">
<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/ICON.png">
</head>
</html>
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

		<!--start-wrap--->
		<div class="wrap">
			<!--start-content------>
			<div class="content">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/404.png" title="error">
				<p><span><label>O</label>hh.....</span>Deze pagina bestaat niet of is verplaatst.</p>
				<a href="<?php echo get_home_url(); ?>/">Ga naar "Home"</a>
				    <div class="copy-right">
				    Design door W3Layouts<p></p>
				    </div>
   			</div>
			<!--End-Cotent------>
		</div>
		<!--End-wrap--->
// <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<?php get_footer(); ?>

