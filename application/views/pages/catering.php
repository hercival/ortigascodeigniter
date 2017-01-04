<?php 
    // if(isset($page_info) && !empty($page_info)){ //echo "<pre>" . print_r($page_info, 1) . "</pre>";
    //     $this->load->view('blocks/block_header', $page_info);
    // }
?>

<?php
    if(isset($page_blocks) && !empty($page_blocks)){
        foreach($page_blocks as $block_info){ 
            if(!empty($block_info)){
                $this->load->view('blocks/block_'.$block_info['block_layout'], $block_info);
                if($block_info['block_layout'] == "header"){
                    $this->load->view('blocks/block_breadcrumbs');
                }
            }
        }
    }
?>

<section id="catering-content" class="light">
    <div class="container">
        <?php $i = 0; foreach ($items as $row): $row['page'] = 'catering'; $sub_cnt = count_sub_items('catering_menu', $row['id']); $row['sub_cnt'] = $sub_cnt;  ?>
            <?php if($i % 2 == 0){
                $this->load->view('blocks/block_product_right', $row);
            } else {
                $this->load->view('blocks/block_product_left', $row);
            } ?>
        
        <?php $i++; endforeach; ?>
    </div>
</section>