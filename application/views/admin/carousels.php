<!-- begin row -->
<div class="row">
    <!-- begin col-12 -->
    <div class="col-md-12">
        <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="form-stuff-3">
        <div class="panel-heading">
                <h4 class="panel-title">Add New Carousel Image</h4>
            </div>
            <div class="panel-body">
                <small>Labels with * are required fields.</small>
                <?php if(validation_errors()): ?>
                    <div class="alert alert-danger">
                        <span class="close">x</span>
                        <?=validation_errors()?>
                    </div>
                <?php endif; ?>

                
                <?php $this->load->view('admin/media_modal'); ?>

                <div class="clearfix"></div>
                <form action="<?=site_url('administrator/carousels')?>" method="POST" class="form-horizontal"  data-parsley-validate="true">
                    <fieldset>
                        <?php $this->load->view('admin/media_btn', array('image_type' => 'bg_image', 'current_image' => array('filename' => set_value('bg_image'), 'newly_uploaded' => set_value('newly_uploaded_bg')))); ?>

                        <div class="form-group">
                            <label class="control-label col-md-3" for="title">Title *</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control col-md-9" id="title" placeholder="Enter title" name="title" data-parsley-required="true"  />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="exampleInputPassword1">Japanese Subtitle*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control col-md-9" id="jap-subtitle" placeholder="Enter Japanese Subtitle" name="jap_subtitle" data-parsley-required="true" />
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3">Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control ckeditor" placeholder="Enter description" rows="5" name="description"><?=set_value('description')?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Button</label>

                            <div class="col-md-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="btn-text" maxlength="15" placeholder="Text to appear on the button/link." name="btn_text" />
                                    <span class="input-group-addon">
                                        <select class="colorselector" >
                                            <option value="#ED1C24" data-color="#ED1C24" selected="selected">red</option>
                                            <option value="#000000" data-color="#000000">black</option>
                                            <option value="#ffffff" data-color="transparent">transparent</option>
                                        </select>
                                        <input type="hidden" name="btn_bgcolor" id="btn-bgcolor" value="#ED1C24" />
                                        <input type="hidden" name="btn_border_color" id="btn-border-color" value="#ED1C24" />
                                    </span>
                                    <span class="col-md-11" id="preview-container">
                                        <button type="submit" class="btn btn-sm btn-primary m-r-5" id="btn-preview" onclick="return false;">Preview</button>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Button Link</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control col-md-6" id="btn-link" placeholder="The URL to go when button is clicked." name="btn_link" />
                            </div>
                        </div>
                        <div class="clearfix col-md-offset-3">
                            <span class="help-block"><span class="red">IMPORTANT! </span>Put the whole url with (http) if outside URL. Example: http://google.com.<br />Put the slug only (excluding the domain name) if linked within the website. Example: our-stores</span>
                        </div>
                        
                        <button type="submit" class="btn btn-sm btn-primary m-r-5 pull-right" id="add-block-btn">Submit</button>
                    </fieldset>
                </form>
            </div>
        </div>
        <!-- end panel -->
    </div>
</div>
<!-- end row -->

<!--begin row -->
<div class="row">
    <!-- begin col-12 -->
    <div class="col-md-12">

    <!-- begin panel -->
    <div class="panel panel-inverse" data-sortable-id="table-basic-4">
        

        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
            </div>
            <h4 class="panel-title">Carousels Table</h4>
        </div>
        <div class="panel-body">
            <div  class="table-responsive">
                <form class="navbar-form full-width">
                    <div class="form-group pull-right">
                        <input type="text" class="form-control" placeholder="Enter keyword" />
                        <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                    </div>
                </form>

                <table class="table table-striped" data-tbname="carousels">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Carousel Image</th>
                            <th>Title</th>
                            <th>Japanese Subtitle</th>
                            <th>Slug</th>
                            <th>Date Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($results)): $i = 0; foreach ($results as $row): $i++; ?>
                            <tr>
                                <td><?=$i?></td>
                                <td>
                                    <?php if ($row['bg_image']): ?> 
                                        <img src="<?=base_url().config_item('thumbs_loc').$row['bg_image']?>" />    
                                    <?php endif ?>
                                </td>
                                <td><?=@$row['title']?></td>
                                <td><?=@$row['jap_subtitle']?></td>
                                <td><?=@$row['slug']?></td>
                                <td><?=@$row['date_created']?></td>
                                <td>
                                    <a href="#!" class="btn btn-xs btn-icon btn-circle btn-danger delete-permanently" title="Delete" rel="<?=$row['slug']?>"><i class="fa fa-times"></i></a>
                                    <a href="<?=base_url()?>administrator/edit_carousel/<?=$row['id']?>" class="btn btn-xs btn-icon btn-circle btn-default" title="Edit Carousel" rel="<?=$row['slug']?>"><i class="fa fa-pencil"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <?php else: ?>
                            <td colspan="8"><center>No post to show</center></td>
                        <?php endif; ?>
                        
                    </tbody>
                </table>
            </div>

            <?php if (isset($pagination)): ?>
                <div class="dataTables_paginate paging_simple_numbers"><?=$pagination?></div>
            <?php endif ?>
        </div>
    </div>
    <!-- end panel -->

    </div>
    <!-- end col-12 -->
</div>
<!-- end row-->