<!-- <div id="section-whatsnew-blurb" class="dark wood-dark">
    <?php
        // if(isset($page_blocks) && !empty($page_blocks)){ 
        //     foreach($page_blocks as $block_info){ 
        //         if(!empty($block_info)){
        //             $this->load->view('blocks/block_'.$block_info['block_layout'], $block_info);
        //         }
        //     }
        // }
    ?>
</div> -->
<?php if(isset($info) && !empty($info)) {
    $this->load->view('blocks/block_header', $info); 
} ?>

<?php
    if(isset($page_blocks) && !empty($page_blocks)){
        $i = 0;
        foreach($page_blocks as $block_info){ 
            if(!empty($block_info)){
                if($i == 0){
                    if(!isset($info)){
                        $this->load->view('blocks/block_header', $block_info);
                    }
                } else {
                    $this->load->view('blocks/block_'.$block_info['block_layout'], $block_info);
                }
            }

            $i++;
        }
    }
?>

<?php $this->load->view('blocks/block_breadcrumbs'); ?>

<section id="whatsnew-content" class="light">
    <section id="section-whatsnew-newproducts">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-uppercase red"><?=@$descriptions['new-featured-products']['title']?></h3>
                    <p><?=@$descriptions['new-featured-products']['description']?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="gallery">
                        <?php if(isset($new_products) && !empty($new_products)): foreach ($new_products as $row): ?>
                            <div class="gallery-cell"  style="background: url('<?=base_url().config_item('uploads_loc').$row['f_image']?>') no-repeat; background-size: cover;">
                                <div class="caption">
                                    <!--<a href="<?php echo base_url().'main/view_content/product_news/'.$row['id'];?>" class="fancybox-media">-->
                                    <a href="<?php echo site_url('whats-new/'.$row['slug']);?>">
                                        <!-- <button type="button" class="btn-unstyled" data-toggle="modal" data-target="#modal-products"> -->
                                        <button type="button" class="btn-unstyled">
                                            <p><?=character_limiter($row['description'], 155)?></p>
                                        </button>
                                    </a>
                                    <small><time datetime="<?=date("Y-m-d", strtotime($row['date_created']))?>"><?=date("Y-m-d", strtotime($row['date_created']))?></time></small>
                                </div>
                            </div>
                        <?php endforeach; endif; ?>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="section-whatsnew-tvcommercials">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-uppercase red"><?=@$descriptions['new-commercials']['title']?></h3>
                    <p><?=@$descriptions['new-commercials']['description']?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="gallery">
                        <?php if(isset($new_commercials) && !empty($new_commercials)): foreach ($new_commercials as $row): ?>
                            <div class="gallery-cell"  style="background: url('<?=base_url().config_item('uploads_loc').$row['thumb']?>') no-repeat; background-size: cover;">
                                <div class="caption">
									<!-- <a href="<?php echo $row['video_url'];?>" class="fancybox-media"> -->
                                    <!-- <a href="<?php echo base_url().'main/view_video/'.$row['id'];?>" class="fancybox-media"> -->
                                    <a href="<?php echo base_url().'video/commercial/'.$row['slug'];?>" class="">
                                    <button type="button" class="btn-unstyled" data-toggle="modal" data-target="#modal-products">
                                        <p><?=character_limiter($row['description'], 155)?></p>
                                    </button>
									</a>
                                    <small><time datetime="<?=date("Y-m-d", strtotime($row['date_created']))?>"><?=date("Y-m-d", strtotime($row['date_created']))?></time></small>
                                </div>
                            </div>
                        <?php endforeach; endif; ?>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="section-whatsnew-instructional">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-uppercase red"><?=@$descriptions['instructional-videos']['title']?></h3>
                    <p><?=@$descriptions['instructional-videos']['description']?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="gallery">
                        <?php if(isset($instructional) && !empty($instructional)): foreach ($instructional as $row): ?>
                            <div class="gallery-cell"  style="background: url('<?=base_url().config_item('uploads_loc').$row['thumb']?>') no-repeat; background-size: cover;">
                                <div class="caption">
                                    <!-- <a href="<?php echo base_url().'main/view_video/'.$row['id'];?>" class="fancybox-media"> -->
                                    <a href="<?php echo base_url().'video/instructional/'.$row['slug'];?>" class="">
                                    <!-- <button type="button" class="btn-unstyled" data-toggle="modal" data-target="#modal-products"> -->
                                    <button type="button" class="btn-unstyled">
                                        <p><?=character_limiter($row['description'], 155)?></p>
                                    </button>
                                    </a>
                                    <small><time datetime="<?=date("Y-m-d", strtotime($row['date_created']))?>"><?=date("Y-m-d", strtotime($row['date_created']))?></time></small>
                                </div>
                            </div>
                        <?php endforeach; endif; ?>
                    </div>
                </div>
            </div>

        </div>
    </section>
</section>