<div class="container logo-details-holder">
    <div class="col-sm-4 col-md-4 logo">
        <center><img class="img-responsive "src="<?php echo base_url(); ?>includes/uploads/<?php echo $mod_data->logo; ?>"></center>
    </div>
    
    <div class="col-sm-8 col-md-8 details-holder align-center mobile">
        <div class="details">
            <h2><?php echo $mod_data->caption; ?></h2>
            <?php echo $mod_data->content; ?>
            <br>
            <?php if($mod_data->link != '#'){ ?>
            <a href="<?php echo $mod_data->link; ?>"><p>Learn more about <?php echo $mod_data->caption; ?> here</p></a>
            <br>
            <?php } ?>
            
            <a href="/ortigas/contact-us" class="btn btn-primary" style="margin-top:10px;"><span class="glyphicon glyphicon-earphone" style="padding-right: 10px;"></span>TALK TO US</a>
        </div>
    </div>
</div>