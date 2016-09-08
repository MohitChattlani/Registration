<?php if ($in):
	require_once(__DIR__."/../templates/mailer.php");
?>
	<p style="font-size:30px;font-family:georgia;">
	<?= $_GET["Name"] ?>,You have been Registered.</p>

<?php else:?>
	<p style="font-size:30px;font-family:georgia;">
	<?= $_GET["Name"] ?>,Your email is already registered with us.</p>
<?php endif;?>