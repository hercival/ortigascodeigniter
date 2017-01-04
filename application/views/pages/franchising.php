

<?php $this->load->view('blocks/block_breadcrumbs'); ?>

<?php 
    if(isset($page_blocks) && !empty($page_blocks)){
        $i = 0;
        foreach($page_blocks as $block_info){  
            if(!empty($block_info)){
                $this->load->view('blocks/block_'.$block_info['block_layout'], $block_info);

                if($block_info['block_layout'] == 'header'){
                    $this->load->view('blocks/block_breadcrumbs');
                }
            }

            $i++;
        }
    }
?>

<?php $this->load->view('blocks/block_contact', array('page' => 'franchising')) ?>