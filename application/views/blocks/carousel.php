<!-- Section Home Carousel -->
<div id="home-carousel" class="carousel slide dark" data-ride="carousel">
	<!-- carousel slides -->
	<div class="carousel-inner" role="listbox">
		<?php 
			foreach($carousel as $k => $slider) { 
			$url = config_item('uploads_loc').$slider['bg_image'];

			$btn_link = strpos($slider['btn_link'], 'http') !== FALSE ? $slider['btn_link'] : base_url().$slider['btn_link'];
		?>
		<div class="<?php echo $k == 1 ? 'item': 'item active'?>">
			<div class="fill" style="background-image: url('<?php echo $url; ?>');">
				<div class="col-lg-12">
					<?=@$slider['description']?>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>

	<!-- carousel controls -->
	<a class="left carousel-control" href="#home-carousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>

	<a class="right carousel-control" href="#home-carousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>

	<!-- carousel indicators -->
	<ol class="carousel-indicators clearfix">
		<?php /*
			foreach($carousel as $k => $slider) { 
		?>
		<li data-target="#section-carousel" data-slide-to="" class="<?php echo $k == 1 ? 'item': 'item active'?>"></li>
		<?php } */?>
	</ol>
</div>
<!-- end home carousel -->