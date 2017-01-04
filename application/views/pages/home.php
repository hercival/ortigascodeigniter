<?php $this->load->view('blocks/carousel', $data['carousel'] = $carousel); ?>

<div id="skip"></div>

<?php
	if(isset($page_blocks) && !empty($page_blocks)){
		foreach($page_blocks as $block_info){ 
			if(!empty($block_info)){
				$this->load->view('blocks/block_'.$block_info['block_layout'], $block_info);
			}
		}
	}
?>

<!-- <div id="section-news"> -->
<div id="home-updates" class="block-section dark section">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<center>
					<h3><span class="red">News</span> and Events</h3>
					<h4 lang="jp">ニュースやイベント</h4>
					<p>Watch out for more features of your favorite Japanese meals only in Tokyo Tokyo</p>
				</center>
			</div>
		

		<!-- news thumbs -->
		<!-- <div class="row"> -->
	        <div class="col-md-12">
	            <div class="gallery">
	                <?php if(isset($new_products) && !empty($new_products)): foreach ($new_products as $row): ?>
	                    <div class="gallery-cell"  style="background: url('<?=base_url().config_item('uploads_loc').$row['f_image']?>') no-repeat; background-size: cover;">
	                        <div class="caption">
	                        	<!-- <a href="<?php echo base_url().'main/view_content/product_news/'.$row['id'];?>" class="fancybox-media"> -->
	                        	<a href="<?php echo site_url('whats-new/'.$row['slug']);?>">
	                                <!-- <button type="button" class="btn-unstyled" data-toggle="modal" data-target="#modal-products"> -->
	                                <button type="button" class="btn-unstyled">
	                                    <p><?=character_limiter($row['description'], 155)?></p>
	                                </button>
	                            	<small><time datetime="<?=date("Y-m-d", strtotime($row['date_created']))?>"><?=date("Y-m-d", strtotime($row['date_created']))?></time></small>
	                            </a>
	                            
	                        </div>
	                    </div>
	                <?php endforeach; endif; ?>
	            </div>
	        </div>
	    <!-- </div> -->

	    </div>
	</div>
</div>
<!-- end of news section -->