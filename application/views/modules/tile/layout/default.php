<?php if($module->show_title){?>
<section class="container info-tab">
    <center>
        <h1><?php echo $module->name; ?></h1>
        <?php if(isset($mod_data->description)){ ?>
            <p class="info-details"><?php echo $mod_data->description; ?></p>
        <?php } ?> 
    </center>
</section>
<center><div class="border-below"></div></center>
<?php }?>
<div class="container-fluid column-tab">
    <center>
        <?php if(isset($mod_data->item)){ foreach($mod_data->item as $image){ ?>
        <?php $item = explode(',', $image); ?>
        <div class="col-xs-6 col-sm-3 column-img">
            <a href="<?php echo base_url();?><?php echo $item[2];?>"><img class="img-responsive" src="<?php echo base_url(); ?>includes/uploads/<?php echo $item[0];?>">
                <div class="col-xs-12 col-sm-12 column-img-title truncate"><?php echo $item[1];?></div>
            </a>
        </div>
        <?php }} ?>               
    </center>
</div>