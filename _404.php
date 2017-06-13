<?php
	define('ERROR404', TRUE);
	$title = '404';
	include_once('includes/include_header.php');
?>
	<div class="wrapper">
		<div class="header">PAGE NOT FOUND</div>
		<div>
			<i class="fa fa-file-excel-o"></i>
		</div>
		<div>
			Sorry, the page you requested could not be found.
		</div>
	</div>
	<div class="wrapper suggestion">
		<div class="header2">If you're not sure where to go, why not visit our homepage?</div>
		<a class="button" href="<?= $langpath; ?>">
			Go to Homepage
		</a>
	</div>
<?php
	include_once('includes/include_footer.php');
?>