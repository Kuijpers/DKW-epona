<?php
$dir_id = 'nl';
?>

<?php
include ('../templates/header.html');
include ('../includes/includes.php');
include ('../templates/overall_top.html');
?>
<div class="body">
	<div class="title">
	<h2><?echo"$contact"?></h2>
		<hr class="underline">
	</div>
	<div class="contact">
			<div class="info"><?echo"$stable"?></div><div class="info"><?echo"$naam"?></div>
			<div class="info"><?echo"$owner"?></div><div class="info"><?echo"$eigenaar"?></div>
			<div class="info"><?echo"$adress"?></div><div class="info"><?echo"$adres"?></div>
			<div class="info"><?echo"$zipcode"?></div><div class="info"><?echo"$postcode"?></div>
			<div class="info"><?echo"$city"?></div><div class="info"><?echo"$plaats"?></div>
			<div class="info"><?echo"$country"?></div><div class="info"><?echo"$land"?></div>
			<div class="info"><?echo"$telep"?></div><div class="info"><?echo"$tel"?></div>
			<div class="info"><?echo"$faxnr"?></div><div class="info"><?echo"$fax"?></div>
			<div class="info"><?echo"$celp"?></div><div class="info"><?echo"$cela"?></div>
			<div class="info"><?echo"$email_name"?></div><div class="info"><?echo"$email"?></div>
			<div class="info"><?echo"$web_name"?></div><div class="info"><?echo"$weburl"?></div>
	</div>
	<div class="contactform">
<?php

include("../includes/contact_form.php");

?>
<?echo"$fields"?>

<div class="name"><?echo"$name"?></div><div class="fill_in"><input class="input" type="text" size="38" name="1name"></div>

<div class="name"><?echo"$email_name"?></div><div class="fill_in"><input class="input" type="text" size="38" name="1email"></div>

<div class="name"><?echo"$sub"?></div><div class="fill_in"><input class="input" type="text" size="38" name="1sub"></div>

<div class="fill_in"><?echo"$req"?></div>

<TEXTAREA class="input" wrap="virtual" name="1request" rows=10 cols=50 MAXLENGTH=100></TEXTAREA>

<input class="button" type=reset value="<?echo"$resreq"?>">&nbsp;&nbsp;&nbsp;<input class="button" type="submit" value="<?echo"$sendreq"?>">
	
	</div>
</div>



<?php
include ('../templates/overall_footer.html');

?>