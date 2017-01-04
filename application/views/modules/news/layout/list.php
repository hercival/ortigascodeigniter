<?php
    $column = $mod_data->column;
    $newscount = $mod_data->newscount;
    $news = module_latest_news($newscount);
?>
<?php if($module->show_title){?>
<section class="container-fluid">
    <div class="row title-tab">
        <center><h1><?php echo $module->name; ?></h1></center>
        <center><div class="border-below"></div></center>
    </div>
</section>
<?php }?>
<div class="container-fluid news-tab">
   <?php if($news){ foreach($news as $row){ ?>
    <div class="col-sm-<?php echo $column;?> col-lg-<?php echo $column;?> column-img">
        <a href="#"><img class="img-responsive" src="<?php echo base_url(); ?>includes/uploads/<?php echo $row->featured_image;?>"></a>
        <div style="border: 1px solid #d7d7d7; padding: 16px;">
            <h3><?php echo $row->title; ?></h3>
            <?php echo $row->content; ?>
            <div class="button-right">
                <a href="<?php echo base_url();?>news/<?php echo $row->alias; ?>" class="btn btn-primary">READ MORE</a>
            </div>
        </div>
    </div>
    <?php } }?>                                      
</div>