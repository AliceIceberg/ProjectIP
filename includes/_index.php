<?php
// include('config.php');


if(isset($_GET['viewTour'])){
	$id = mysql_real_escape_string($_GET['viewTour']);
	$query = mysql_query("SELECT * FROM tour WHERE `id` = ".$id);
}

?>
<div class="container">
<div class="row">
	<div class="col-md-5">
	<?php include('_tour_form.php'); ?>
	</div>
	<div class="col-md-7">
	<?php include('_tour_index.php');?>
	</div>
</div>
</div>