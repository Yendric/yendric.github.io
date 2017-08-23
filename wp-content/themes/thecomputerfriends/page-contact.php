<?php get_header(); ?>
<form name="contactform" method="post" action="<?php echo get_home_url(); ?>/contact-done" class="form">
<table width="150px">
<tr>
 <td valign="top">
  <label for="first_name">Voornaam *</label>
 </td>
</tr>
<tr>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30" required placeholder="Jan">
 </td>
</tr>
<tr>
 <td valign="top"">
  <label for="last_name">Achternaam *</label>
 </td>
</tr>
<tr>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30" required placeholder="De Mosselman">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">Email Adres *</label>
 </td>
</tr>
<tr>
 <td valign="top">
  <input  type="email" name="email" maxlength="80" size="30" required placeholder="jan.de.mosselman@gmail.com">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telefoon nummer</label>
 </td>
</tr>
<tr>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Bericht *</label>
 </td>
</tr>
<tr>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6" required placeholder="Bericht"></textarea>
 </td>
</tr>
<p class="submit">
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Ga verder">   
 </td>
</tr>
</p>
</table>
</form>

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

<br /><br /><br /><br />
	<header>
				<a href="#" id="logo"></a>
				<nav>
					<a href="#" id="menu-icon"></a>
					<ul>
						<li><a href="<?php echo get_home_url(); ?>/" class="ding">Home</a></li>
						<li><a href="<?php echo get_home_url(); ?>/Info" class="ding">Info</a></li>
						<li><a href="<?php echo get_home_url(); ?>/Contact" class="current">Contact</a></li>
						<li><a href="<?php echo get_home_url(); ?>/Vids" class="ding">Onze video's</a></li>
						<li><a href="<?php echo get_home_url(); ?>/Updates" class="ding">Updates</a></li>
									
					</ul>
				</nav>
		</header>	
<?php get_footer(); ?>