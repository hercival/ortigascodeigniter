<div class="row">
    <!-- begin col-12 -->
    <div class="col-md-12">
        <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="form-validation-1">
            <div class="panel-heading">
                <h4 class="panel-title">Edit Page</h4>
            </div>
            <?php $this->load->view('admin/media_modal'); ?>
            <div class="panel-body">
               <?php if($this->session->flashdata('saved')): ?>
                    <div class="alert alert-success">
                        <button class="close" data-dismiss="alert"></button>
                        <span><?=$this->session->flashdata('saved')?></span>
                    </div>
                <?php endif; ?>
                <form class="form-horizontal" name="demo-form" action="<?php echo site_url('administrator/edit_page')?>" method="post">
                    <fieldset>
                        <legend>Page Info</legend>
                        <?php if(validation_errors()): ?>
                            <div class="alert alert-danger">
                                <span class="close">x</span>
                                <?php echo validation_errors();?>
                            </div>
                        <?php endif; ?>
                        
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="title">Title</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" id="title" name="title" placeholder="Required" value="<?php echo $results->title;?>" />
                                <span class="form-help p-5 text-success" id="help-title"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="title">Template</label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" name="template" data-parsley-required="true" >
                                    <option value="default" <?php echo ($results->template == 'default' ? 'selected="selected"' : '');?>>Deafult (Home)</option>
                                    <option value="inner" <?php echo ($results->template == 'inner' ? 'selected="selected"' : '');?> >Inner</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="title">Page Type</label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" name="page_type">
                                    <option value="default" <?php echo ($results->page_type == 'default' ? 'selected="selected"' : '');?>>Default page</option>
                                    <option value="careers" <?php echo ($results->page_type == 'careers' ? 'selected="selected"' : '');?>>Careers Page</option>
                                    <option value="news" <?php echo ($results->page_type == 'news' ? 'selected="selected"' : '');?>>News Page</option>
                                    <option value="estates" <?php echo ($results->page_type == 'estates' ? 'selected="selected"' : '');?>>Estate</option>
                                    <option value="residences" <?php echo ($results->page_type == 'residences' ? 'selected="selected"' : '');?>>Residences</option>
                                    <option value="units" <?php echo ($results->page_type == 'units' ? 'selected="selected"' : '');?>>Residences-Units</option>
                                    <option value="malls" <?php echo ($results->page_type == 'malls' ? 'selected="selected"' : '');?>>Malls</option>
                                    <option value="offices" <?php echo ($results->page_type == 'offices' ? 'selected="selected"' : '');?>>Offices</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="title">Publish</label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" name="publish">
                                    <option value="1" <?php echo ($results->publish == '1' ? 'selected="selected"' : '');?>>Yes</option>
                                    <option value="0" <?php echo ($results->publish == '0' ? 'selected="selected"' : '');?>>No</option>
                                </select>
                            </div>
                        </div>

                    </fieldset>
                    <?php $seo = json_decode($results->metatags); ?>
                    <fieldset>
                        <legend>Page SEO</legend>

                        <div class="form-group">
                            <label class="control-label col-md-3">Meta Title</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control col-md-6" id="meta-title" placeholder="Enter Meta Title" name="meta_title" value="<?php echo $seo->title;?>" data-parsley-required="false" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Meta Description</label>
                            <div class="col-md-6">
                                <textarea class="form-control ckeditor" placeholder="Enter meta description" rows="3" name="meta_description">
                                    <?php echo $seo->description;?>
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Meta Keywords</label>
                            <div class="col-md-6">
                                <textarea class="form-control ckeditor" placeholder="Enter meta keywords separated by comma" rows="3" name="meta_keywords" >
                                    <?php echo $seo->keywords;?>
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Meta Image</label>
                            <div class="col-md-6">
                                <?php $this->load->view('admin/media_btn', array('image_type' => 'image', 'current_image' => array('filename' => $seo->image))); ?>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <div class="col-md-3 col-sm-3 col-md-offset-6">
                            <input type="hidden" name="id" value="<?php echo $results->id;?>">
                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <!-- end panel -->
    </div>
    <!-- end col-12 -->
</div>