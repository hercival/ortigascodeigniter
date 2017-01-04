<?php if(isset($info) && !empty($info)) {
    $this->load->view('blocks/block_header', $info); 
} ?>

<?php $this->load->view('blocks/block_breadcrumbs'); ?>

<section class="light section block-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 vcenter vcenter-x">
                <?php if(isset($info['yt_id'])): ?>
                    <div style="max-witdh:830px;"><center>
                        <iframe  title="YouTube video player" class="youtube-player" type="text/html" 
                        width="100%" height="480" src="https://www.youtube.com/embed/<?=$info['yt_id']?>"
                        frameborder="0" allowFullScreen scrolling="no" style="overflow:hidden;"></iframe>
                    </center></div>
                <?php endif; ?>
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