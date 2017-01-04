<!-- begin row -->
<div class="row">
    <!-- begin col-12 -->
    <div class="col-md-12">
        <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="form-stuff-3">
        <div class="panel-heading">
                <h4 class="panel-title">Add Career</h4>
            </div>
            <div class="panel-body">
                <?php if(validation_errors()): ?>
                    <div class="alert alert-danger">
                        <span class="close">x</span>
                        <?=validation_errors()?>
                    </div>
                <?php endif; ?>
                <?php $this->load->view('admin/media_modal'); ?>
                <div class="clearfix"></div>
                
                <form action="<?php echo site_url('administrator/edit_career')?>" method="POST" class="form-horizontal" id="add-block-form">
                    <fieldset>
                        <?php $this->load->view('admin/media_btn', array('image_type' => 'featured_image', 'current_image' => array('filename' => $results->featured_image))); ?>
                        
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="title">Career Title</label>
                            <div class="col-md-6 col-sm-6">
                                <input type="text" class="form-control" name="title"  placeholder="Enter text" id="title" value="<?php echo $results->title; ?>"  />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="alias">Alias</label>
                            <div class="col-md-6 col-sm-6">
                                <input type="text" class="form-control" name="alias"  placeholder="Enter Alias" id="alias" value="<?php echo $results->alias; ?>"  />
                            </div>
                        </div> 
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3">Content</label>
                            <div class="col-md-6 col-sm-6">
                                <textarea class="form-control ckeditor" placeholder="Enter News Content" rows="5" name="content"><?php echo $results->content; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="title">Date Publish</label>
                            <div class="col-md-6 col-sm-6">
                                <input type="text" class="form-control date-picker" name="date_publish"  placeholder="Select Date" value="<?php echo $results->date_publish; ?>"  />
                            </div>
                        </div> 
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="level">Publish</label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" name="publish">
                                     <option value="0" <?php echo ($results->publish == 0 ? 'selected="selected"' : '');?>>No</option>
                                    <option value="1" <?php echo ($results->publish == 1 ? 'selected="selected"' : '');?>>Yes</option>
                                </select>
                            </div>
                        </div>
                        
                        <fieldset>
                        <div class="col-md-3 col-sm-3 col-md-offset-6">
                            <!-- <button type="submit" class="btn btn-primary" id="add-page">Submit</button> -->
                            <input type="hidden" name="id" value="<?php echo $results->id; ?>">
                            <button type="submit" class="btn btn-primary pull-right">Update Career</button>
                        </div>
                    </fieldset>
                    </fieldset>
                </form>
            </div>
        </div>
        <!-- end panel -->
    </div>
</div>