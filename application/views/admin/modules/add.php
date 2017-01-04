<div class="row">
    <!-- begin col-12 -->
    <div class="col-md-12">
        <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="form-validation-1">
            <div class="panel-heading">
                <h4 class="panel-title">Add Module</h4>
            </div>
            <?php $this->load->view('admin/media_modal'); ?>
            <div class="panel-body">
               <?php if($this->session->flashdata('saved')): ?>
                    <div class="alert alert-success">
                        <button class="close" data-dismiss="alert"></button>
                        <span><?php echo $this->session->flashdata('saved'); ?></span>
                    </div>
                <?php endif; ?>
                <form class="form-horizontal" name="demo-form" action="<?php echo site_url('administrator/add_module')?>" method="post">
                    <fieldset>
                        <?php if(validation_errors()): ?>
                            <div class="alert alert-danger">
                                <span class="close">x</span>
                                <?php echo validation_errors();?>
                            </div>
                        <?php endif; ?>
                        
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="title">Module Name</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" id="name" name="name" placeholder="Required" value="<?php echo set_value('name'); ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="title">Show in Page</label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" name="page_visible" id="page_visible">
                                    <?php foreach($pages_result as $page){ ?>
                                        <option value="<?php echo $page->id; ?>"><?php echo $page->id.' - '.$page->title; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="level">Template Page Position</label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" name="position">
                                    <option value="" selected="selected">-- Select Position --</option>
                                    <option value="position-1">Position 1</option>
                                    <option value="position-2">Position 2</option>
                                    <option value="position-3">Position 3</option>
                                    <option value="position-4">Position 4</option>
                                    <option value="position-5">Position 5</option>
                                    <option value="position-6">Position 6</option>
                                    <option value="position-7">Position 7</option>
                                    <option value="position-8">Position 8</option>
                                    <option value="position-9">Position 9</option>
                                    <option value="position-10">Position 10</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="level">Module Type</label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" name="mod_type" id="mod_type">
                                    <option value="" selected="selected">-- Select Module Type --</option>
                                    <option value="banner">Banner</option>
                                    <option value="tile">Tiles</option>
                                    <option value="news">News</option>
                                    <option value="contactus">Contact Us</option>
                                    <option value="career">Careers</option>
                                    <option value="html">Custom Html</option>
                                    <option value="units">Search Units</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group type-selection" id="module-selection" style="display:none;">
                            <label class="control-label col-md-3 col-sm-3" for="title">Module Layout</label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" id="layout" name="layout">
                                    <option value="0"></option>
                                </select>
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="level">Publish</label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" name="publish">
                                    <option value="0" selected="selected">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="level">Show Title</label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" name="show_title">
                                    <option value="0" selected="selected">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="level">Ordering</label>
                            <div class="col-md-6 col-sm-6">
                                <button type="button" class="btn btn-warning">Ordering will be available after saving</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="level">Module Information</label>
                            <div class="col-md-6 col-sm-6">
                                <!--button type="button" class="btn btn-primary">Module Id : <span class="label label-success">1</span></button-->
                                <button type="button" class="btn btn-success">Information will be available after adding Module</button>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="col-md-3 col-sm-3 col-md-offset-6">
                            <button type="submit" class="btn btn-primary pull-right">Save Module</button>
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
        $("#mod_type").change(function(){
            var module = $(this).val();
            var list = '';
            if(module){
                $("#layout").empty();
                if(module == 'banner'){
                    list = '<option value="default">Plain Banner</option><option value="home">Home Layout Banner</option><option value="sidecontent">Side Content Banner</option><option value="residences">Residence Header</option><option value="featured">Featured Banner</option>';   
                }else if(module == 'tile'){
                    list = '<option value="default">Default</option><option value="caption">With Caption</option>';
                }else if(module == 'news'){
                    list = '<option value="list">Latest News</option>';
                }else if(module == 'career'){
                    list = '<option value="list">All Careers</option>';
                }else if(module == 'html'){
                    list = '<option value="default">Plain Html</option>';
                }else if(module == 'contactus'){
                    list = '<option value="default">Default Layout</option>';
                }else if(module == 'units'){
                    list = '<option value="default">Default Search</option>';
                }
                
                $("#layout").html(list);
                $("#module-selection").fadeIn();
            }else{
                $("#module-selection").fadeOut();
            }
        });
    });
</script>