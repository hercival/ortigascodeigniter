<?php if($module->show_title){?>
<section class="container-fluid">
    <div class="row title-tab">
        <center><h1><?php echo $module->name; ?></h1></center>
        <center><div class="border-below"></div></center>
    </div>
</section>
<?php }?>
<?php echo $mod_data->html; ?>