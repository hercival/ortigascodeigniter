<?php if(isset($mod_data->item)){ ?>
<?php $images = $mod_data->item; ?>
<div id="carousel-<?php echo $module->id; ?>" class="featured-img-inner carousel slide carousel-fade carousel-news" data-ride="carousel"> 
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
       <?php $active = 'active'; foreach($images as $image){ ?>
            <div class="item <?php echo $active; ?>">
                <div class="fill-news" style="background-image:url(<?php echo base_url(); ?>includes/uploads/<?php echo $image; ?>)"></div> 
            </div>
        <?php $active='';} ?>               
    </div>
    <!-- Indicators -->
    <?php if(count($images) > 1){ ?>
    <ol class="carousel-indicators">
       <?php $active = 'active'; $image_counter = 0 ;foreach($images as $image){ ?>
            <li data-target="#carousel-<?php echo $module->id; ?>" data-slide-to="<?php echo $image_counter; ?>" class="<?php echo $active; ?>"></li>
        <?php $active=''; $image_counter++; } ?>
    </ol>
    <?php } ?>        
</div>


<script>
    $(document).ready(function() {
        $('#carousel-<?php echo $module->id; ?>').carousel({
            pause: "false",
            interval: 5000
        });

        //$('.carousel-<?php echo $module->id; ?>').css({'margin': 0, 'width': $(window).outerWidth(), 'height': $(window).outerHeight()});
        //$('.carousel-<?php echo $module->id; ?> .item').css({'position': 'fixed', 'width': '100%', 'height': '100%'});
        //$('.carousel-<?php echo $module->id; ?> .item').css({ 'width': '100%', 'height': '100%'});
        $('.carousel-inner div.item img').each(function() {
            var imgSrc = $(this).attr('src');
            $(this).parent().css({'background': 'url('+imgSrc+') center center no-repeat', '-webkit-background-size': '100% ', '-moz-background-size': '100%', '-o-background-size': '100%', 'background-size': '100%', '-webkit-background-size': 'cover', '-moz-background-size': 'cover', '-o-background-size': 'cover', 'background-size': 'cover'});
            $(this).remove();
        });

        $(window).on('resize', function() {
            $('.carousel-<?php echo $module->id; ?>').css({'width': $(window).outerWidth(), 'height': $(window).outerHeight()});
        });
    }); 
</script>
 <?php } ?>