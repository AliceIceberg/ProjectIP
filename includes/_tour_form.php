
<form enctype="multipart/form-data" action="admin.php?<?=$action?>=tour" method="POST" class="form-horizontal" role="form">
	<div class="form-group col-xs-12 has-<?= $TourError['name']['class']?>">
		<label class="control-label col-xs-2" for="Tour[name]">Name</label>
		<div class="col-xs-10">
			<input class="form-control" id="Tour[name]" name="Tour[name]"  value="<?= isset($Tour) ? $Tour['name'] : ''?>"/>
		</div>
		<?php if($TourError['name']['append']):?>
		<span class="glyphicon glyphicon-remove form-control-feedback"></span>
		<div class="alert alert-<?=$TourError['name']['class']?> fade in col-xs-12">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<?= $TourError['name']['message']?>
		</div>
		<?php endif;?>
	</div>
	<div class="form-group col-xs-12 has-<?= $TourError['title']['class']?>">
		<label class="control-label col-xs-2" for="Tour[title]">Title</label>
		<div class="col-xs-10">
			<input class="form-control" id="Tour[title]" name="Tour[title]"  value="<?= isset($Tour) ? $Tour['title'] : ''?>"/>
		</div>
		<?php if($TourError['name']['append']):?>
		<span class="glyphicon glyphicon-remove form-control-feedback"></span>
		<div class="alert alert-<?=$TourError['name']['class']?> fade in col-xs-12">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<?= $TourError['name']['message']?>
		</div>
		<?php endif;?>
	</div>
	<div class="form-group col-xs-12 has-<?= $TourError['description']['class']?>">
		<label class="control-label col-xs-2" for="Tour[description]">Description</label>
		<div class="col-xs-10">
			<textarea class="form-control" id="Tour[description]" name="Tour[description]" ><?= isset($Tour) ? $Tour['description'] : ''?></textarea>
		</div>
		<?php if($TourError['description']['append']):?>
		<span class="glyphicon glyphicon-remove form-control-feedback"></span>
		<div class="alert alert-<?=$TourError['description']['class']?> fade in col-xs-12">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<?= $TourError['description']['message']?>
		</div>
		<?php endif;?>
	</div>
	<div class="form-group col-xs-12 has-<?= $TourError['cost_per_day']['class']?>">
		<label class="control-label col-xs-2" for="Tour[cost_per_day]">Cost</label>
		<div class="col-xs-10">
			<input class="form-control" id="Tour[cost_per_day]" name="Tour[cost_per_day]"  value="<?= isset($Tour) ? $Tour['cost_per_day'] : ''?>"/>
		</div>
		<?php if($TourError['cost_per_day']['append']):?>
		<span class="glyphicon glyphicon-remove form-control-feedback"></span>
		<div class="alert alert-<?=$TourError['cost_per_day']['class']?> fade in col-xs-12">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<?= $TourError['cost_per_day']['message']?>
		</div>
		<?php endif;?>
	</div>
	<div class="form-group col-xs-12 has-<?= $TourError['image']['class']?>">
		<label class="control-label col-xs-2" for="Tour[image]">Image</label>
		<div class="col-xs-10">
			<input class="form-control" id="Tour[image]" name="tour_image" type="file" />
		</div>
		<?php if($TourError['image']['append']):?>
		<span class="glyphicon glyphicon-remove form-control-feedback"></span>
		<div class="alert alert-<?=$TourError['image']['class']?> fade in col-xs-12">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<?= $TourError['image']['message']?>
		</div>
		<?php endif;?>
	</div>
	<div class="form-group col-xs-12 text-center">
		<input type="submit" class="btn btn-success" value="Добавить" />
	</div>
</form>