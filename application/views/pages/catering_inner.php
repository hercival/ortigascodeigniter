    <?php
        if(isset($info) && !empty($info)){
            $this->load->view('blocks/block_header', $info);
        }
    ?>
    <?php $this->load->view('blocks/block_breadcrumbs'); ?>


<section id="catering-inner-content" class="light">
    <div class="container">
    <?php if(isset($items) && !empty($items)):
        foreach ($items as $row) :
    ?>
        <div class="catering-menu">
            <div class="row">
                <div class="col-md-10 col-md-push-1">
                    <?php if (isset($row['f_image']) && $row['f_image'] != ''):  ?>
                        <center><img src="<?=base_url()?>includes/uploads/<?=$row['f_image']?>" class="img-responsive"></center>
                    <?php endif; ?>

                    <center><h2><span class="red"><strong><?=$row['title']?></strong></span></h2></center>
                    <center><h4><strong><?=$row['price']?></strong></h4></center>
                    <center><?=$row['description']?></center>
                    <hr>
                </div>
            </div>
            <div class="row">
                <?php foreach($row['inclusions'] as $inclusion): ?>
                    <div class="col-md-2 col-md-push-1">
                    <?=$inclusion?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; endif; ?>
    </div>

    <div class="container-fluid" style="background: #e1e1e1; color:#888; padding: 3% 0;">
        <div class="col-md-6 col-md-push-3 text-center">
            <h3><strong>All packages include the following:</strong></h3>

            <ul class="list-unstyled">
                <li>Plus 10% service charge</li>
                <li>Standard buffet set-up including roll-top chafing dishes with centerpiece</li>
                <li>Complete set-up which includes plates, cutlery and glassware</li>
                <li>Efficient service from our trained and uniformed waiters with close supervision by our catering manager</li>
                <li>Freshly cooked food on-site.</li>
            </ul>
        </div>
    </div>
</section>

<!-- <div id="catering-gallery" class="gallery">
    <?php if(isset($items) && !empty($items)): foreach ($items as $row): ?>
        <div class="gallery-cell">
            <img src="<?=base_url().config_item('thumbs_loc').$row['f_image']?>">
        </div>
    <?php endforeach; endif; ?>
</div> -->
