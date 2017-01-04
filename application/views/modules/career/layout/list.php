<?php
    $column = $mod_data->column;
    $listcount = $mod_data->listcount;
    $careers = module_career($listcount);
?>
<?php if($module->show_title){?>
<section class="container-fluid">
    <div class="row title-tab">
        <center><h1><?php echo $module->name; ?></h1></center>
        <center><div class="border-below"></div></center>
    </div>
</section>
<?php }?>

<div class="container-fluid career-list">
    <div class="row">
        <?php if($careers){ foreach($careers as $row){ ?>
        <div class=" col-md-<?php echo $column;?> career-list-panel">
            <div style="background-color: #eeeeee; padding: 20px;">
                <h3><?php echo $row->title;?></h3>
                <h6><?php echo date('F d, Y',strtotime($row->date_publish));?></h6>
                <br>
                <p><?php echo readmore_cutter($row->content, 50); ?></p>
                <br>
                <a href="<?php echo base_url();?>career/<?php echo $row->alias; ?>" class="btn btn-primary" style="margin-top:10px;">VIEW JOB</a>
            </div>    
        </div>
        <?php } }?>
    </div>    
</div>