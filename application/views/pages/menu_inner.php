<?php
    $this->load->view('blocks/block_header', $info);
?>

<?php if( (isset($info['title_define']) && strip_tags($info['title_define']) != '') || (isset($info['blocks']) && !empty($info['blocks'])) ): ?>
<section id="menu-inner-whatis" class="wood-dark dark">
    <div class="container">
        <?php if(isset($info['title_define'])): ?>
            <div class="col-md-10 col-md-push-1">
                <center>
                    <h2 class="text-uppercase"><strong><?=str_replace('</p>', '', str_replace('<p>', '', $info['title_define']))?></strong></h2>
                    <h4 lang="jp"><?=$info['jap_subtitle_define']?></h4>
                    <p><?=nl2br($info['description_define'])?></p>
                </center>
            </div>
        <?php endif; ?>

        <?php if(isset($info['blocks']) && !empty($info['blocks'])):
            $i = 0;
            foreach ($info['blocks'] as $block) :
                $i++;
        ?>
            <div class="col-md-4 col-md-push-2">
                <center>
                    <h3 class="text-uppercase"><?=$block['title']?></h3>
                    <p><?=$block['description']?></p>
                </center>
            </div>
            <?php if ($i == 2): ?>
                <div class="clearfix"></div>
            <?php $i = 0; endif; ?>
        <?php endforeach; endif; ?>
    </div>
</section>
<?php endif; ?>
<?php if (isset($items) && !empty($items)):  ?>
<?php /* MARK CHAM REMOVES THIS SECTION
<!-- bootstrap carousel -->

<section id="menu-inner-carousel" class="carousel slide light" data-ride="carousel" data-interval="false">
    <div class="container-fluid">
        <div class="row">
    <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php for($i = 0; $i < count($items); $i++): ?>
                    <div class="item <?=$i == 0 ? 'active srle' : ''?>">
                        <div class="col-md-5">
                            <div class="menu-inner-content">
                                <h2><strong><?=str_replace('</p>','',str_replace('<p>', '', $items[$i]['title']))?></strong></h2>
                                <h4 lang="jp"><?=$items[$i]['jap_subtitle']?></h4>
                                <p><?=$items[$i]['description']?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="<?=base_url()?>includes/uploads/<?=$items[$i]['f_image']?>" alt="<?=strip_tags($items[$i]['title'])?>" class="img-responsive">
                        </div>
                    </div>
                <?php endfor; ?>
            </div>

        </div>
        <!-- Thumbnails -->
        <center><h4><strong>Other <?=strip_tags(@$info['title'])?></strong></h4></center>
        <ul class="thumbnails-carousel clearfix">
            <?php $i = 0; foreach ($items as $row): ?>
                <li class="<?=$i == 0 ? 'active-thumbnail' : ''?>"><img width="100" src="<?=base_url().config_item('thumbs_loc').$row['f_image']?>" alt="<?=$row['f_image']?>"></li>
            <?php $i++; endforeach; ?>
        </ul>
    </div>


    <!-- carousel controls -->
    <a class="left carousel-control" href="#menu-inner-carousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#menu-inner-carousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</section>

*/ ?>

<?php $this->load->view('blocks/block_breadcrumbs'); ?>

<section id="menu-inner-carousel" class="carousel slide light block-section block-section-x" data-ride="carousel" data-interval="false">
    <div class="container">
        <div class="row">
            <div class="carousel-inner">
                <?php for($i = 0; $i < count($items); $i++): ?>
                    <div class="item <?=$i == 0 ? 'active srle' : ''?>">
                        <div class="col-md-6 col-sm-6">
                            <?php 
                                if($items[$i]['f_image'] != ''){
                                    responsive_image($items[$i]['f_image']);
                                } else {
                                    echo '<img src="'.base_url().'includes/img/menu-inner-default.jpg" alt="" class="img-responsive" />'; //includes/img/menu-inner-default.jpg
                                }
                            ?>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="menu-inner-content">
                                <h2><strong><?=str_replace('</p>','',str_replace('<p>', '', $items[$i]['title']))?></strong></h2>
                                <h4 lang="jp"><?=$items[$i]['jap_subtitle']?></h4>
                                <p><?=$items[$i]['description']?></p>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
            <div class="clearfix"></div>

            <?php if(count($items) > 1): ?>
            <h3 class="text-center">Other <?=strip_tags(@$info['title'])?></h3>
            <ul class="thumbnails-carousel clearfix visible-sm  visible-md visible-lg">
                <?php $i = 0; foreach ($items as $row): ?>
                    <li class="item <?=$i == 0 ? 'active-thumbnail' : ''?>" data-slide-to="<?=$i?>">
                        <?php if($items[$i]['f_image'] != ''): ?>
                            <img width="50" src="<?=base_url().config_item('thumbs_loc').$row['f_image']?>" alt="<?=$row['f_image']?>">
                        <?php else: ?>
                            <img width="50" src="<?=base_url()?>includes/img/menu-inner-default.jpg" alt="">
                        <?php endif; ?>
                    </li>
                <?php $i++; endforeach; ?>
            </ul>
            <ol class="carousel-indicators  visible-xs">
                <?php $i = 0; foreach ($items as $row): ?>
                    <li data-target="#menu-inner-carousel" data-slide-to="<?=$i?>" class="<?=$i == 0 ? 'active-thumbnail' : ''?>"></li>
                <?php $i++; endforeach; ?>
            </ol>
        <?php endif; ?>
            <div style="margin: 50px 0px;"></div>
        </div>
    </div>

    <?php if (count($items) > 1): ?>
        <!-- carousel controls -->
        <a class="left carousel-control" href="#menu-inner-carousel" role="button" data-target="#menu-inner-carousel" data-toggle="carousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="right carousel-control" href="#menu-inner-carousel" role="button" data-target="#menu-inner-carousel" data-toggle="carousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    <?php endif; ?>
</section>


<?php endif; ?>
