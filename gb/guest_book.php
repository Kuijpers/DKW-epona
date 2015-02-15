<?php
$dir_id = 'gb';
?>

<?php
include ('../templates/header.html');
include ('../includes/includes.php');
include ('../templates/overall_top.html');
?>
<div class="body">
	<div class="title">
	<h2><? echo "$guest"?></h2>
	<hr class="underline">
	</div>
	<div class="textfield">
<?php
include ('../guestbook/files/guestbook.php');
?>
	</div>
</div>



<?php
include ('../templates/overall_footer.html');

?>