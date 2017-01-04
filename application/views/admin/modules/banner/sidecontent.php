<div class="row">
    <!-- begin col-12 -->
    <div class="col-md-12">
        <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="form-validation-1">
            <div class="panel-heading">
                <h4 class="panel-title">Side Content Banner Module</h4>
            </div>
            <?php $this->load->view('admin/media_modal'); ?>
            <div class="panel-body">
               <?php if($this->session->flashdata('saved')): ?>
                    <div class="alert alert-success">
                        <button class="close" data-dismiss="alert"></button>
                        <span><?php echo $this->session->flashdata('saved'); ?></span>
                    </div>
                <?php endif; ?>
                <center><img src="<?php echo base_url();?>includes/layout/sidecontent-banner.png" alt="" class="img-responsive"></center>
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
                            <label class="control-label col-md-3 col-sm-3" for="title">Caption</label>
                            <div class="col-md-6 col-sm-6">
                                <input type="text" class="form-control" name="caption" value="<?php if(isset($main_details)){ echo $main_details->caption;}?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="title">Button Text</label>
                            <div class="col-md-6 col-sm-6">
                                <input type="text" class="form-control" name="btn_name" value="<?php if(isset($main_details)){ echo $main_details->btn_name;}?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="title">Button Link</label>
                            <div class="col-md-6 col-sm-6">
                                <input type="text" class="form-control" name="link" value="<?php if(isset($main_details)){ echo $main_details->link;}?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="title">Intro Content</label>
                            <div class="col-md-6 col-sm-6">
                                <textarea class="form-control ckeditor" placeholder="Intro Contents" rows="5" name="content">
                                    <?php if(isset($main_details->content)){ echo $main_details->content;}?>
                                </textarea>
                            </div>
                        </div>
                        <!--div class="form-group">
                           <label class="col-md-3 control-label">Images</label> 
                            <div class="row col-md-9" id="ad-upload">
                                <?php if(isset($main_details->images)){ $images_list = explode(",",$main_details->images);?>
                                <?php foreach($images_list as $image){ ?>
                                <div class="col-sm-6 col-md-4 image-wrap-delete">
                                    <div class="thumbnail">
                                        <img src="<?php echo base_url();?>includes/uploads/<?php echo $image;?>" alt="...">
                                        <div class="caption">
                                            <p><a href="#" rel="<?php echo $image;?>" class="btn btn-danger remove-image" role="button">Remove</a></p>
                                        </div>
                                    </div>
                                </div>
                                <?php } }?>
                            </div>
                        </div-->
                    </fieldset>
                    <fieldset>
                        <div class="form-group">
                            <label class="control-label col-md-3">Add Banner Image</label>
                            <div class="col-md-3">
                               <?php $this->load->view('admin/media_btn', array('image_type' => 'image', 'current_image' => array('filename' => set_value('image')))); ?>
                                <button class="btn btn-info" id="add-to-list" type="button"><i class="fa fa-plus"></i> Add to List</button>
                            </div>
                            
                        </div>
                        
                    </fieldset>
                     <fieldset>
                        <table class="table table-bordered" id="table-tile-list">
                            <thead>
                                <tr>
                                    <td>Image</td>
                                    <td>Image Name</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody id="tile-list-wrap">
                            <?php if(isset($main_details->item)){ $images_list = $main_details->item;?>
                             <?php foreach($images_list as $item) { ?>
                                <?php $detail = explode(',', $item); ?>
                                  <tr class="removable-wrap">
                                    <td>
                                        <img class="media-object" src="<?php echo base_url();?>includes/uploads/<?php echo $detail[0]; ?>">
                                        <input type="hidden" name="item[]" value="<?php echo $detail[0]; ?>">
                                    </td>
                                    <td>
                                         <?php echo $detail[0]; ?>
                                    </td>
                                    <td>
                                          <button class="btn btn-danger remove-to-list" type="button"><i class="fa fa-times"></i> Remove</button>
                                    </td>
                                  </tr>
                              <?php } ?>
                          <?php } ?>
                          </tbody>
                        </table>
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
     $(document).ready(function($) {
         
        $("#upload-thumb").click(function() {
            $("#choosefiles").trigger('click');
        })
    
        var canPost = true;
        var options = {
            beforeSend: function(f){
                var base_url = '<?php echo base_url(); ?>';
                var count_img = $("input:radio[name=thumb]").length;
                if(count_img >= 20){
                    modalView("alert-max","Maximum File Upload","Maximum of 20 photos per product category.")
                    f.abort();
                } else {
                    // Replace this with your loading gif image
                $(".upload-image-messages").html('<img src = "'+base_url+'includes/img/gif-load.gif" class = "loader" width="20" height="20" /> Please wait.. <span class="percent"></span>').css('display', 'inline-block');
                }
                canPost = false;
            },
            complete: function(response){
                //Output AJAX response to the div container
                res = $.parseJSON(response.responseText);

                if(res.errors){
                    $(".upload-image-messages").html('<div class="alert alert-danger" >' + res.errors + '</div>');
                    return false;
                }
                var base_url = '<?php echo base_url(); ?>';
                var count_img = $("input:radio[name=thumb]").length;
                $.each(res, function(i, val) {
                    $('#thumbnail').removeClass('hide');
                    $('<div class="col-sm-6 col-md-4 image-wrap-delete"><div class="thumbnail">'+ 
                        '<img src="'+base_url+'includes/uploads/'+val.file_name+'" />'+
                        '<div class="caption"><p><a href="#" class="btn btn-danger remove-image" role="button" rel="'+val.file_name+'">Remove</a></p></div></div></div>').appendTo($('#ad-upload'));
                        
                    var image_val = $("#images-holder").val();
                    if(image_val == ''){
                        $("#images-holder").val(val.file_name);
                    }else{
                        $("#images-holder").val(image_val+','+val.file_name);
                    }
                        
                });
                $("input:radio[name=thumb]:first").attr('checked', true);
                $('#img-select').val('');
                $(".upload-image-messages").hide();
                canPost = true;
            },
            uploadProgress: function(event, pos, total, percentComplete){
                $(".upload-image-messages .percent").html(percentComplete+"% complete");
            }
        };  

    $( "#choosefiles" ).change(function() {
        $(".upload-image-form").ajaxSubmit(options);
    });
         
    //remove image button
    $( "#ad-upload" ).delegate( ".remove-image", "click", function() {
        var image_remove = $(this).attr('rel');
        var str = $("#images-holder").val();
        var res = str.split(",");
        var new_value = "";
        $.each(res, function(i, image_name) {
            if(image_name != image_remove){
                if(new_value == ''){
                    new_value = image_name;
                }else{
                    new_value = new_value + ',' +image_name;
                }
                
            }
        });
        $("#images-holder").val(new_value);
        $(this).closest('.image-wrap-delete').fadeOut().remove();
    });
    $("#add-to-list").click(function(){
        var title = $("#caption-text").val();
        var link = $("#link-text").val();
        var image_name = $("#current-image").val();
        var tmp =   '<tr class="removable-wrap">' +
                    '<td><img class="media-object" src="<?php echo base_url();?>includes/uploads/'+image_name+'"><input type="hidden" name="item[]" value="'+image_name+'"></td>' +
                    '<td>'+image_name+'</td>'+
                    '<td><button class="btn btn-danger remove-to-list" type="button"><i class="fa fa-times"></i> Remove</button></td></tr>';
        $("#tile-list-wrap").append(tmp);
    });
         
    $( "#table-tile-list" ).delegate( ".remove-to-list", "click", function() {
        $(this).closest('.removable-wrap').remove();
    });
});
</script>