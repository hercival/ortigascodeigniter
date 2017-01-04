<?php if($module->show_title){?>
<div class="malls-tag align-center-mobile">
    <h3 class="txt-uppercase"><?php echo $module->name; ?></h3>
</div>      
<center><div class="border"></div></center>
<?php }?>

<?php if(isset($mod_data)){ ?>
<div class="container estates-malls-tab">
    <div class="col-md-7 col-md-push-5" style="">
        <img class="img-responsive" src="<?php echo base_url();?>includes/uploads/<?php echo $mod_data->image;?>">
    </div>         
    <div class="col-md-5 col-md-pull-7 estates-malls-tab-details">
        <div class="v-align-details">
            <h2><?php echo $mod_data->caption;?></h2>
            <?php echo $mod_data->content;?> 
            <?php if($mod_data->btn_link != '#'){ ?>
            <a href="<?php echo $mod_data->btn_link; ?>" class="btn btn-primary">LEARN MORE</a> 
            <?php }?>
            <a href="<?php echo $mod_data->btn_seeother; ?>"><p style="padding-top: 6px;">Find More</p></a>
        </div>
    </div>
</div>
<?php }?>