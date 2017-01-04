<div class="row">
    <!-- begin col-12 -->
    <div class="col-md-12">
        <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="form-validation-1">
            <div class="panel-heading">
                <h4 class="panel-title">Add New Unit</h4>
            </div>
            <?php $this->load->view('admin/media_modal'); ?>
            <div class="panel-body">
               <?php if($this->session->flashdata('saved')): ?>
                    <div class="alert alert-success">
                        <button class="close" data-dismiss="alert"></button>
                        <span><?=$this->session->flashdata('saved')?></span>
                    </div>
                <?php endif; ?>
                <form class="form-horizontal" data-parsley-validate="true" name="demo-form" action="<?php echo site_url('administrator/add_units')?>" method="post">
                        <?php if(validation_errors()): ?>
                            <div class="alert alert-danger">
                                <span class="close">x</span>
                                <?php echo validation_errors();?>
                            </div>
                        <?php endif; ?>
                     <fieldset>
                        <legend>Unit Page Layout</legend>
                        <div class="form-group">
                            <center><img src="<?php echo base_url();?>includes/layout/units-layout.png" alt="" class="img-responsive"></center>
                        </div>
                    </fieldset>
                     <fieldset>
                        <legend>Unit Images</legend>
                        <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3" for="title">Residence Logo</label>
                            <?php $this->load->view('admin/media_btn', array('image_type' => 'logo', 'current_image' => array('filename' => set_value('logo')))); ?>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3" for="title">Unit Layout</label>
                            <?php $this->load->view('admin/media_btn', array('image_type' => 'schem_image', 'current_image' => array('filename' => set_value('schem_image')))); ?>
                        </div>  
                    </fieldset>
                    <fieldset>
                        <legend>Unit Information</legend>                     
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="name">Name</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" id="name" name="name" placeholder="Required" value="<?php echo set_value('name'); ?>" />
                                <span class="form-help p-5 text-success" id="help-name"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="alias">Alias</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" id="alias" name="alias" placeholder="Required" value="<?php echo set_value('alias'); ?>" />
                                <span class="form-help p-5 text-success" id="help-alias"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3">Content</label>
                            <div class="col-md-6 col-sm-6">
                                <textarea class="form-control ckeditor" placeholder="Content" rows="5" name="description"><?php echo set_value('description'); ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="title">Unit Type</label>
                            <div class="col-md-6 col-sm-6">
                               <input class="form-control" type="text" id="alias" name="unit_type" placeholder="Required" value="<?php echo set_value('unit_type'); ?>" />
                                <!--select class="form-control" name="unit_type" >
                                    <option value="1-BR Living" selected="selected">1-BR Living</option>
                                    <option value="2-BR Living">2-BR Living</option>
                                </select-->
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="development_type">Development Type</label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" name="development_type" >
                                    <option value="Residential">Residential</option>
                                    <option value="Condominium">Condominium</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="space">The Space</label>
                            <div class="col-md-6 col-sm-6">
                               
                                <label><input type="checkbox" name="space[]" value="one-bedroom" /> 1 Bed Room</label>
                                <label><input type="checkbox" name="space[]" value="two-bedroom" /> 2 Bed Room</label>
                                <label><input type="checkbox" name="space[]" value="three-bedroom" /> 3 Bed Room</label>
								<label><input type="checkbox" name="space[]" value="one-bathroom" /> 1 Bath Room</label>
                                <label><input type="checkbox" name="space[]" value="two-bathroom" /> 2 Bath Room</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="location">Location</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" id="location" name="location" placeholder="Required" value="<?php echo set_value('location'); ?>" />
                                <span class="form-help p-5 text-success" id="help-location"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="size">Unit Size</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" id="size" name="size" placeholder="Required" value="<?php echo set_value('size'); ?>" />
                                <span class="form-help p-5 text-success" id="help-location"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="price">Unit Price</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" id="price" name="price" placeholder="Required" value="<?php echo set_value('price'); ?>" />
                                <span class="form-help p-5 text-success" id="help-price"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="title">Estate</label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" name="estate">
                                    <option value="Circulo Verde">Circulo Verde</option>
                                    <option value="Capitol Commons">Capitol Commons</option>
                                    <option value="Viridian">Viridian</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="title">Residences</label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" name="residences">
                                    <option value="majorca">Majorca</option>
                                    <option value="Ibiza">Ibiza</option>
                                    <option value="Avida" >Maven</option>
                                    <option value="Viridian" >Viridian</option>
                                    <option value="Royalton" >Royalton</option>
                                    <option value="Imperium" >Imperium</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="title">Publish</label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" name="publish">
                                    <option value="1">Yes</option>
                                    <option value="0" selected="selected">No</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <?php $this->load->view('admin/media_btn_gallery', array('image_type' => 'image', 'current_image' => array('filename' => set_value('image')))); ?>
                    <fieldset>
                        <div class="col-md-3 col-sm-3 col-md-offset-6">
                            <!-- <button type="submit" class="btn btn-primary" id="add-page">Submit</button> -->
                            <button type="submit" class="btn btn-primary pull-right">Save Unit</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <!-- end panel -->
    </div>
    <!-- end col-12 -->
</div>