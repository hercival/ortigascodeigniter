<?php 
	$url = isset($bg_image) ? base_url().'includes/uploads/'.$bg_image : ''; 
	$div_class = isset($f_image) && $f_image != '' ? '' : 'section-no-img';
	$height = isset($block_height) ? $block_height : 'dynamic-height';
	$div_id = 'block-'.$id;
?>
<section id="<?=@$section_id?>" class="<?=@$block_theme . ' ' . @$div_class . ' ' . @$height?> block-section block-center" <?php if($url != ''): ?>style="background: url('<?php echo $url; ?>') no-repeat; background-size: cover; background-position:center;" <?php endif; ?>>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-push-3 vcenter vcenter-x">
				<div class="vcenter-content text-center">
					<h3><?=str_replace('</p>', '', str_replace('<p>', '', $title))?></h3>
					<h4 lang="jp"><?php echo $jap_subtitle; ?></h4>
					<p><?php
						if($description){
							echo '<p>'.$description.'</p>';
						}
					?></p>
					<?php if ($btn_text): ?>
						<a href="<?php echo $btn_link; ?>" class="btn btn-primary btn-lg" style="background-color: <?php echo $btn_bgcolor; ?>;border-color: <?php echo $btn_border_color; ?>;"><?php echo $btn_text; ?></a>
					<?php endif ?>								
				</div>
			</div>
		</div>
	</div>
</section>