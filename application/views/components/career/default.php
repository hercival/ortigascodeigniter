<!--ol class="breadcrumb">
      <li class="active">Careers</li>
</ol-->    
<center><div class="border"></div></center>
<?php $seo = json_decode($page_details->metatags); ?>    
<section class="container info-tab">
    <center>
        <h1><?php echo $page_details->title; ?></h1>
        <p class="info-details"><?php echo $seo->description; ?></p>
    </center>
</section>

<center><div class="border"></div></center>

<div class="container-fluid career-list">
    <div class="row">
        <?php foreach($details as $career){ ?>
        <div class=" col-md-6 career-list-panel">
            <div style="background-color: #eeeeee; padding: 20px;">
                <h3><?php echo $career->title;?></h3>
                <h6><?php echo date('F d, Y',strtotime($career->date_publish));?></h6>
                <br>
                <p><?php echo readmore_cutter($career->content, 50); ?></p>
                <br>
                <a href="<?php echo base_url();?>career/<?php echo $career->alias;?>" class="btn btn-primary" style="margin-top:10px;">VIEW JOB</a>

            </div>    
        </div>
        <?php } ?>
    </div>
</div>