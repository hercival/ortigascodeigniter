<div class="row">
    <!-- begin col-12 -->
    <div class="col-md-12">
        <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="form-validation-1">
            <div class="panel-heading">
                <h4 class="panel-title">Edit Module</h4>
            </div>
            <?php $this->load->view('admin/media_modal'); ?>
            <div class="panel-body">
               <?php if($this->session->flashdata('saved')): ?>
                    <div class="alert alert-success">
                        <button class="close" data-dismiss="alert"></button>
                        <span><?php echo $this->session->flashdata('saved'); ?></span>
                    </div>
                <?php endif; ?>
                <form class="form-horizontal" name="demo-form" action="<?php echo site_url('administrator/edit_module/'.$results->id)?>" method="post">
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
                                <input class="form-control" type="text" id="name" name="name" placeholder="Required" value="<?php echo $results->name; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="title">Show in Page</label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" name="page_visible" id="page_visible">
                                    <?php foreach($pages_result as $page){ ?>
                                        <option value="<?php echo $page->id; ?>" <?php echo ($results->page_visible == $page->id ? 'selected="selected"' : '');?>><?php echo $page->id.' - '.$page->title; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="level">Template Page Position</label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" name="position">
                                    <option value="" selected="selected">-- Select Position --</option>
                                    <option value="position-1" <?php echo ($results->position == 'position-1' ? 'selected="selected"' : '');?>>Position 1</option>
                                    <option value="position-2" <?php echo ($results->position == 'position-2' ? 'selected="selected"' : '');?>>Position 2</option>
                                    <option value="position-3" <?php echo ($results->position == 'position-3' ? 'selected="selected"' : '');?>>Position 3</option>
                                    <option value="position-4" <?php echo ($results->position == 'position-4' ? 'selected="selected"' : '');?>>Position 4</option>
                                    <option value="position-5" <?php echo ($results->position == 'position-5' ? 'selected="selected"' : '');?>>Position 5</option>
                                    <option value="position-6" <?php echo ($results->position == 'position-6' ? 'selected="selected"' : '');?>>Position 6</option>
                                    <option value="position-7" <?php echo ($results->position == 'position-7' ? 'selected="selected"' : '');?>>Position 7</option>
                                    <option value="position-8" <?php echo ($results->position == 'position-8' ? 'selected="selected"' : '');?>>Position 8</option>
                                    <option value="position-9" <?php echo ($results->position == 'position-9' ? 'selected="selected"' : '');?>>Position 9</option>
                                    <option value="position-10" <?php echo ($results->position == 'position-10' ? 'selected="selected"' : '');?>>Position 10</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="level">Module Type</label>
                            <div class="col-md-6 col-sm-6">
                               <input class="form-control" type="text" id="mod_type" name="mod_type" placeholder="Required" value="<?php echo $results->mod_type; ?>" disabled/>
                            </div>
                        </div>
                        
                        <div class="form-group type-selection" id="module-selection">
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
                                    <option value="0" <?php echo ($results->publish == 0 ? 'selected="selected"' : '');?>>No</option>
                                    <option value="1" <?php echo ($results->publish == 1 ? 'selected="selected"' : '');?>>Yes</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="level">Show Title</label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" name="show_title">
                                    <option value="0" <?php echo ($results->show_title == 0 ? 'selected="selected"' : '');?>>No</option>
                                    <option value="1" <?php echo ($results->show_title == 1 ? 'selected="selected"' : '');?>>Yes</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="level">Ordering</label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" name="menu_order">
                                    <option value="0">- first -</option>
                                    <?php $last_order = count($ordering); 
                                        foreach($ordering as $order){ ?>
                                        <option value="<?php echo $order->ordering; ?>" <?php echo ($order->ordering == $results->ordering ? 'selected="selected"' : '');?>><?php echo $order->ordering.' - '.$order->name;?></option>
                                    <?php } ?>
                                    <option value="<?php echo $last_order;?>">- last -</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="level">Module Information</label>
                            <div class="col-md-6 col-sm-6">
                                <button type="button" class="btn btn-primary">Module Id : <span class="label label-success"><?php echo $results->id; ?></span></button>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="col-md-3 col-sm-3 col-md-offset-6">
                            <input type="hidden" id="layout-hidden" value="<?php echo $results->layout; ?>">
                            <input type="hidden" id="id" name="id" value="<?php echo $results->id; ?>">
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
                    list = '<option value="default">Plain Banner</option><option value="home">Home Layout Banner</option><option value="sidecontent">Side Content Banner</option><option value="residences">Residence Header</option>';   
                }else if(module == 'tile'){
                    list = '<option value="default">Default</option>';
                }else if(module == 'news'){
                    list = '<option value="default">Latest News</option>';
                }else if(module == 'career'){
                    list = '<option value="list">All Careers</option>';
                }else if(module == 'html'){
                    list = '<option value="default">Plain Html</option>';
                }
                $("#layout").html(list);
                $("#module-selection").fadeIn();
            }else{
                $("#module-selection").fadeOut();
            }
        });
        var module = $("#mod_type").val();
        var layout = $("#layout-hidden").val();
        if(module == 'banner'){
            var plain = '';
            var home = '';
            var side = '';
            var residences ='';
            var featured ='';
            
            if(layout == 'default' ){
                plain = 'selected="selected"';
            }else if(layout == 'home' ){
                home = 'selected="selected"';
            }else if(layout == 'sidecontent' ){
                side = 'selected="selected"';
            }else if(layout == 'residences' ){
                residences = 'selected="selected"';
            }else if(layout == 'featured' ){
                featured = 'selected="selected"';
            }
            
            
            list = '<option value="default" '+plain+'>Plain Banner</option>';
            list = list+'<option value="home" '+home+'>Home Layout Banner</option>';
            list = list+'<option value="sidecontent" '+side+'>Side Content Banner</option>';
            list = list+'<option value="residences" '+residences+'>Residence Header</option>';
            list = list+'<option value="featured" '+featured+'>Featured Banner</option>';
            $("#layout").html(list);
        }else if(module == 'tile'){
            var defaultlay = '';
            var caption = '';
            if(layout == 'default' ){
                defaultlay = 'selected="selected"';
            }else if(layout == 'caption' ){
                caption = 'selected="selected"';
            }
            list = '<option value="default" '+defaultlay+'>Default</option>';
            list = list+'<option value="caption" '+caption+'>With Caption</option>';
            $("#layout").html(list);
        }else if(module == 'news'){
            list = '<option value="list">Latest News</option>';
            $("#layout").html(list);
        }else if(module == 'career'){
            list = '<option value="list">All Careers</option>';
            $("#layout").html(list);
        }else if(module == 'html'){
            list = '<option value="default">Plain Html</option>';
            $("#layout").html(list);
        }else if(module == 'contactus'){
            list = '<option value="default">Default Layout</option>';
            $("#layout").html(list);
        }else if(module == 'units'){
            list = '<option value="default">Default Search</option>';
            $("#layout").html(list);
        }
        
        
    });
</script>