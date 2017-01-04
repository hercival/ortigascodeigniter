<?php if(isset($info)) {
    $this->load->view('blocks/block_header', $info); 
} ?>

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