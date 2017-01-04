<?php if($module->show_title){?>
<section class="container info-tab">
    <center>
        <h1><?php echo $module->name; ?></h1>
        <?php if(isset($mod_data->content)){ if($mod_data->content != ''){?>
            <p class="info-details"><?php echo $mod_data->content; ?></p>
        <?php } }?> 
    </center>
</section>
<!--center><div class="border-below"></div></center-->
<?php }?>
<div id="carousel-<?php echo $module->id; ?>" class="featured-img carousel slide carousel-fade" data-ride="carousel" style="height:600px;">
    <div class="overlay-tab">
        <center>
            <div class="featured-details">
                <h2 style="color:white;"><?php echo $mod_data->caption;?></h2>
                <a href="<?php echo $mod_data->link;?>" style="margin-top:10px;" class="btn btn-secondary" ><?php echo $mod_data->btn_name;?></a>
            </div>
        </center>
    </div>    

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php $images =  $mod_data->item;?>
        <?php $active = 'active'; foreach($images as $image){ ?> 
            <div class="item <?php echo $active; ?>">
                <div class="fill" style="background-image:url(<?php echo base_url(); ?>includes/uploads/<?php echo $image; ?>)"></div> 
            </div>
        <?php $active='';} ?>  
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#carousel-<?php echo $module->id; ?>').carousel({
            pause: "false",
            interval: 5000
        });
        //$('.carousel').css({'height': 600});
        //$('.carousel').css({'margin': 0, 'width': $(window).outerWidth(), 'height': $(window).outerHeight()});
//        $('.carousel .item').css({'position': 'fixed', 'width': '100%', 'height': '100%'});
        //$('.carousel .item').css({'width': '100%', 'height': '100%'});
        $('.carousel-inner div.item img').each(function() {
            var imgSrc = $(this).attr('src');
            $(this).parent().css({'background': 'url('+imgSrc+') center center no-repeat', '-webkit-background-size': '100% ', '-moz-background-size': '100%', '-o-background-size': '100%', 'background-size': '100%', '-webkit-background-size': 'cover', '-moz-background-size': 'cover', '-o-background-size': 'cover', 'background-size': 'cover'});
            $(this).remove();
        });

//        $(window).on('resize', function() {
//            $('.carousel').css({'width': $(window).outerWidth(), 'height': $(window).outerHeight()});
//        });
    }); 
</script>