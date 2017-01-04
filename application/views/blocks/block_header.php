            <?php 
                $url = isset($bg_image) && $bg_image != '' ? base_url().'includes/uploads/'.$bg_image : ''; 
                $div_class = isset($f_image) && $f_image != '' ? '' : 'section-no-img';
                $div_id = isset($id) ? 'block-'.$id : '';
            ?>
            <section id="<?=@$section_id?>" class="dark block-section <?=@$block_theme . ' ' . $div_class?> block-header" <?php if($url != ''): ?>style="background: url('<?php echo $url; ?>') no-repeat; background-size: cover; background-position: center;"<?php endif; ?>>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-lg-6 col-lg-push-3 vcenter">
                            <div class="text-center vcenter-content">
                                <span class="section-inner-header">
                                    <h1><?=str_replace('</p>', '', str_replace('<p>', '', $title))?><?php // echo @$title; ?></h1>
                                    <h4 lang="jp"><?php echo @$jap_subtitle; ?></h4>

                                    <?php if (@$btn_text): ?>
                                        <a href="<?php echo $btn_link; ?>" class="btn btn-lg" style="background-color: <?php echo $btn_bgcolor; ?>;border-color: <?php echo $btn_border_color; ?>;"><?php echo $btn_text; ?></a>
                                    <?php endif; ?>                              

                                    <?php if (isset($downloadable)): ?>
                                        <a href="<?=base_url()?>includes/uploads/downloadables/<?=$downloadable?>" class="btn btn-md btn-primary" target="_blank"><span class="glyphicon glyphicon-save-file"></span>DOWNLOAD MENU</a>
                                    <?php endif; ?>

                                    <p><?php
                                        if(@$description){
                                            $ellips = strlen($description) > 370 ? '...' : '';
                                            echo '<p>'.character_limiter(nl2br($description), 370).$ellips.'</p>';
                                        }
                                    ?></p>

                                    <a href="#skip" class="btn btn-circle btn-primary page-scroll" role="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Read more"><span class="glyphicon glyphicon-menu-down"></span></a>
                                </span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div id="skip"></div>



