<div class="row">
    <div class="col-md-6">
        <?php if (isset($f_image) && $f_image != ''): 
            responsive_image($f_image);
        endif ?>
    </div>
    <div class="col-md-6 product-content">
        <h2><strong><span class="red"><?=str_replace('</p>', '', str_replace('<p>', '', $title))?></span></strong></h2>
        <h4 lang="jp"><?=$jap_subtitle?></h4>
        <?php
            if(@$description) {
                echo "<p>".nl2br($description)."</p>";
            }
        ?>
        <?php if(!isset($page)){ $page = 'menu'; } ?>

        <?php if (isset($sub_cnt) && $sub_cnt > 0): ?>
            <a href="<?=base_url() . $page . '/' . $id . '/' . $slug?>" class="btn btn-primary btn-lg">View <?=str_replace('</p>', '', str_replace('<p>', '', $title))?></a>
        <?php endif; ?>
    </div>
</div>
