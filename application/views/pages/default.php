<!-- <div id="<?=@$page_id?>"> -->
    <?php
        if(isset($page_blocks) && !empty($page_blocks)){
            $i = 0;
            foreach($page_blocks as $block_info){
                $this->load->view('blocks/block_'.$block_info['block_layout'], $block_info);

                if(!empty($block_info)){
                    if($block_info['block_layout'] == 'header'){
                        echo $this->load->view('blocks/block_breadcrumbs', true);
                    }
                }

                $i++;
            }
        }
    ?>
<!-- 
    <?php $this->load->view('blocks/block_breadcrumbs'); ?>

    <section class="light section block-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 vcenter vcenter-x">
                    <?php if(isset($info['f_image'])):
                        responsive_image($info['f_image']); 
                    endif; ?>
                </div>

                <div class="col-md-6">
                    <?php if(isset($info['description'])): ?>
                        <div class="col-md-12">
                            <?=$info['description']?>
                        </div>  
                    <?php endif; ?>    
                </div>
            </div>
        </div>
    </section>
     -->

<!-- </div> -->