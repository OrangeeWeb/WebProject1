<?php $static_page = $static->get_static_content($base->get_id()); ?>
<div class="container">
	<div class="page-header">
		<h1><?= $base->get_name() ?> <small><?= $base->get_id() ?></small></h1>
	</div>
	
	<div class="row">
		<div class="col-12">
			<?= $formating->makeClickableLinks(strip_tags($static_page['html'])) ?>
		</div>
	</div>
</div>