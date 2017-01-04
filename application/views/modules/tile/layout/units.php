<?php if($module->show_title){?>
<section class="container info-tab">
    <center>
        <h1><?php echo $module->name; ?></h1>
        <p class="info-details"><span style="font-weight: bold;">Lorem ipsum dolor sit amet</span>, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </center>
</section>
<?php }?>
<center><div class="border"></div></center>

<div class="container-fluid column-tab">
    <center>
        <?php foreach($mod_data->units as $image){ ?>
        <div class="col-xs-6 col-sm-3 column-img">
            <a href="#"><img class="img-responsive" src="img/filler.jpg">
                <div class="col-xs-12 col-sm-12 column-img-title truncate">The Explorer</div>
            </a>
            <p class="paddingTop-50px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do euismod tempor incididunt ut labore et dolore magna aliqua.</p>   
            <button type="submit" class="btn btn-primary">VIEW</button>                     
        </div>
        <?php } ?> 
    </center>
</div>    