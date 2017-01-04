			<?php
			 $url = isset($bg_image) && $bg_image != '' ? base_url().'includes/uploads/'.$bg_image : ''; 
				$div_class = isset($f_image) && $f_image != '' ? '' : 'section-no-img';
				$height = isset($block_height) ? $block_height : 'dynamic-height';
				$div_id = 'block-'.$id;
			?>
			<section id="<?=@$section_id?>" class="<?=@$block_theme . ' ' . @$div_class . ' ' . @$height?> block-section block-right" <?php if($url != ''): ?> style="background: url('<?php echo $url; ?>') no-repeat; background-size: cover; background-position: center;" <?php endif; ?>>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-6 vcenter vcenter-y">
							<div class="vcenter-content">
								<?php if (isset($f_image) && $f_image != ''): 
									responsive_image($f_image);
								endif ?>
							</div>
						</div>

						<div class="col-xs-12 col-md-6 vcenter vcenter-y">
							<div class="vcenter-content">
								<h2><?=str_replace('</p>', '', str_replace('<p>', '', $title))?></h2>
								<h4 lang="jp"><?php echo $jap_subtitle; ?></h4>
								<?php
									if($description){
										echo '<p>'.$description.'</p>';
									}
								?>
								<?php 
									if (@$btn_text): 
										$btn_url = strpos($btn_link, 'http://') === FALSE ? $btn_link : base_url().$btn_link;
								?>
									<a href="<?php echo $btn_link; ?>" class="btn btn-primary btn-lg" style="background-color: <?php echo $btn_bgcolor; ?>;border-color: <?php echo $btn_border_color; ?>;"><?php echo $btn_text; ?></a>
								<?php endif ?>								
							</div>
						</div>
					</div>
				</div>

			</section>