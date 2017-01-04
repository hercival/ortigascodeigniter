
<?php $seo = json_decode($page_details->metatags); ?>    
<section class="container info-tab">
    <center>
        <h1><?php echo $page_details->title; ?></h1>
        <p class="info-details"><?php echo $seo->description; ?></p>
    </center>
</section>

<center><div class="border"></div></center>

<div class="container-fluid news-tab">
   <?php foreach($details as $news){ ?>
        <div class="col-sm-6 col-lg-4 column-img">
            <a href="#"><img class="img-responsive" src="<?php echo base_url();?>includes/uploads/<?php echo $news->featured_image;?>">
            </a>
            <div style="border: 1px solid #d7d7d7; padding: 16px;">
                <h3><?php echo $news->title;?></h3>
                <?php echo $news->content;?>
                <div class="button-right btn-center-mobile">
                    <a href="<?php echo base_url();?>news/<?php echo $news->alias;?>" class="btn btn-primary">READ MORE</a>
                </div>
            </div>
        </div>
    <?php } ?>                                         
</div>