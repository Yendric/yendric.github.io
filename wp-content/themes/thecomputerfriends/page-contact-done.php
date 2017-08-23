<?php get_header(); ?>
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
<?php
if(isset($_POST['email'])) {
 
    $email_to = "thecomputerfriends@gmail.com";
    $email_subject = "TCF Contact FORM";
 
    function died($error) {
        echo "<center><h3>Sorry maar er is iets fout ingevuld: </h3></center>";
        echo $error."";
        echo "<center><h3>Ga terug om deze errors te fixen!</h3><br /><br /></center>";
		echo '<center><a href="/Updates" class="button">Ga terug</a></center>';
        die();
    }
 
 
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('<center><h3>Sorry, maar er is een probleem met onze servers.</h3></center>');       
    }
 
     
 
    $first_name = $_POST['first_name']; 
    $last_name = $_POST['last_name']; 
    $email_from = $_POST['email']; 
    $telephone = $_POST['telephone'];
    $comments = $_POST['comments']; 
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= '<center><h3 style="font-size: 35px;" >Het email adres dat u heeft ingevoerd is niet geldig!<h3/></center>';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= '<center><h3 style="font-size: 35px;">De voornaam die u heeft ingevoerd is niet geldig!<h3/></center>';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= '<center><h3 style="font-size: 35px;">De achternaam die u heeft ingevoerd is niet geldig!<h3/></center>';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= '<center><h3 style="font-size: 35px;">Het bericht dat u heeft ingevoerd is niet geldig!<h3/></center>';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details beneden:\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Voornaam: ".clean_string($first_name)."\n";
    $email_message .= "Achternaam: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telefoonnummer: ".clean_string($telephone)."\n";
    $email_message .= "Bericht: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 

<center>
<h3>Bedankt om ons te contacteren! We zullen binnenkort antwoorden!</h3>
<h3>Klik <a href="<?php echo get_home_url(); ?>">hier</a> om terug te gaan!</h3>
</center>
<br /><br /><br /><br /><br /><br /><br /><br /><br />
<?php
 
}
?>


