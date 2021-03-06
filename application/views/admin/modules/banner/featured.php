<div class="row">
    <!-- begin col-12 -->
    <div class="col-md-12">
        <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="form-validation-1">
            <div class="panel-heading">
                <h4 class="panel-title">Featured Module</h4>
            </div>
            <?php $this->load->view('admin/media_modal'); ?>
            <div class="panel-body">
               <?php if($this->session->flashdata('saved')): ?>
                    <div class="alert alert-success">
                        <button class="close" data-dismiss="alert"></button>
                        <span><?php echo $this->session->flashdata('saved'); ?></span>
                    </div>
                <?php endif; ?>
                <center><img src="<?php echo base_url();?>includes/layout/featured-layout.png" alt="" class="img-responsive"></center>
                <p>&nbsp;</p>
                <form class="form-horizontal" name="demo-form" action="<?php echo site_url('banner/modify/'.$mod_details->id)?>" method="post">
                    <fieldset>
                        <?php if(validation_errors()): ?>
                            <div class="alert alert-danger">
                                <span class="close">x</span>
                                <?php echo validation_errors();?>
                            </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="title">Featured Caption</label>
                            <div class="col-md-6 col-sm-6">
                                <input type="text" class="form-control" name="caption" value="<?php if(isset($main_details)){ echo $main_details->caption;}?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="title">Content</label>
                            <div class="col-md-6 col-sm-6">
                                <textarea class="form-control ckeditor" placeholder="Contents" rows="5" name="content">
                                    <?php if(isset($main_details)){ echo $main_details->content;}?>
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="title">Learn More Link</label>
                            <div class="col-md-6 col-sm-6">
                                <input type="text" class="form-control" name="btn_link" value="<?php if(isset($main_details)){ echo $main_details->btn_link;}?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="title">Learn More Link</label>
                            <div class="col-md-6 col-sm-6">
                                <input type="text" class="form-control" name="btn_seeother" value="<?php if(isset($main_details)){ echo $main_details->btn_seeother;}?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Featured Image</label>
                            <div class="col-md-6">
                                   <?php if(isset($main_details)){ $image = $main_details->image;}else{ $image='';}?>
                                <?php $this->load->view('admin/media_btn', array('image_type' => 'image', 'current_image' => array('filename' => $image))); ?>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="col-md-3 col-sm-3 col-md-offset-6">
                            <input type="hidden" name="id" value="<?php echo $mod_details->id; ?>">
                            <button type="submit" class="btn btn-primary pull-right">Save Module</button>
                            <a href="<?php echo base_url(); ?>administrator/module" class="btn btn-danger pull-right">Cancel</a>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <!-- end panel -->
    </div>
    <!-- end col-12 -->
</div>
<script>
    $(document).ready(function(){

    });
</script>