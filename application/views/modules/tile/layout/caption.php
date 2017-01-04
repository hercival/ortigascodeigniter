<?php if($module->show_title){?>
<div class="residences-tag align-center-mobile">
    <h3 class="txt-uppercase"><?php echo $module->name; ?></h3>
</div>
<center><div class="border"></div></center>
<?php }?>
<div class="container-fluid column-tab">
    <center>
        <?php if(isset($mod_data->item)){ foreach($mod_data->item as $image){ ?>
        <?php $item = explode('::', $image); ?>
            <div class="col-xs-6 col-sm-3 column-img">
                <a href="<?php echo base_url();?><?php echo $item[2];?>"><img class="img-responsive" src="<?php echo base_url(); ?>includes/uploads/<?php echo $item[0];?>">
                    <div class="col-xs-12 col-sm-12 column-img-title truncate"><?php echo $item[1];?></div>
                </a>
                <p class="paddingTop-50px"><?php echo $item[3];?></p>   
                <a href="<?php echo base_url();?><?php echo $item[2];?>" class="btn btn-primary">VIEW</a>                     
            </div>
        <?php } } ?>               
    </center>
</div> 