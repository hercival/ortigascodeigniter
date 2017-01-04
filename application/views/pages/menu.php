<?php
    if(isset($page_blocks) && !empty($page_blocks)){
        foreach($page_blocks as $block_info){
            if(!empty($block_info)){
                $this->load->view('blocks/block_header', $block_info);
            }
        }
    }
?>

<?php $this->load->view('blocks/block_breadcrumbs'); ?>

<section id="menu-content" class="light">
    <div class="container">
        <?php $i = 0; foreach ($items as $row): 
            $sub_cnt = count_sub_items('products', $row['id']); $row['sub_cnt'] = $sub_cnt; ?>

                <?php if($i % 2 == 0){
                    $this->load->view('blocks/block_product_right', $row);
                } else {
                    $this->load->view('blocks/block_product_left', $row);
                } ?>
        <?php $i++; endforeach; ?>
    </div>
</section>
