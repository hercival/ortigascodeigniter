<?php
    if(isset($page_blocks) && !empty($page_blocks)){
        foreach($page_blocks as $block_info){ 
            $this->load->view('blocks/block_'.$block_info['block_layout'], $block_info);
        }
    }
?>

<?php $this->load->view('blocks/block_breadcrumbs'); ?>

<div id="section-suggestabranch-blurb" class="dark wood-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-push-2 vcenter">
                <div class="vcenter-content">
                    <h3>Help us find our next home</h3>
                    <p>We are more than 50 branches and growing! Our mission is to serve quality Japanese Food available to everyone!  We are constantly looking for more locations for Tokyo Tokyo to reach everyone!  So if you think there's a location that needs the Philippine's most loved Japanese Food restaurant, let us know!</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="section-suggestabranch-content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-push-6">
                <h2><span class="red">We seek prime properties for expansion nationwide.</span></h2>
                <p><strong>Property must be (1) between 100 to 200 square meters and (2) located within high-traffic areas such as business centers, schools, hospitals, and other commercial districts.</strong></p>
                <p>Cras sed nisl id purus euismod facilisis. Nunc ac nibh mollis, bibendum purus ac, volutpat massa.  Suspendisse porta dui quis turpis dignissim, sit amet dictum nunc congue. Sed luctus magna eget vehicula auctor. Aliquam cursus felis non pulvinar tristique.</p>
                <center><a href="#contactform" class="btn btn-primary btn-default btn-lg">Suggest a site</a></center>
            </div>
        </div>
    </div>
</div>

 <?php $this->load->view('blocks/block_contact', array('page' => 'suggest-a-branch')) ?>