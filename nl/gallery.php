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
	<h2><? echo "$gallery"?></h2>
	<hr class="underline">
	</div>
	<div class="textfield">
<?php
include ('../templates/gallery.html');
?>	
	</div>
</div>



<?php
include ('../templates/overall_footer.html');

?>