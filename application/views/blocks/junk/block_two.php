			<?php $url = base_url().'includes/uploads/thumbnails/'.$bg_image ;?>
			<div id="section-stores" class="dark" style='background: url("<?php echo $url; ?>") no-repeat;background-size: cover;'>
				<div class="container">
					<div class="row">
						<div class="col-md-6 vcenter">
							<div class="vcenter-content">
								<h2><?php echo $title; ?></h2>
								<h4 lang="jp"><?php echo $jap_subtitle; ?></h4>
								<?php
									if($description){
										echo '<p>'.$description.'</p>';
									}
								?>
								<a href="<?php echo $btn_link; ?>" class="btn btn-lg" style="background-color: <?php echo $btn_bgcolor; ?>;border-color: <?php echo $btn_border_color; ?>;"><?php echo $btn_text; ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>