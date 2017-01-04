<!--begin row -->
<div class="row">
    <!-- begin col-12 -->
    <div class="col-md-12">

    <!-- begin panel -->
    <div class="panel panel-inverse" data-sortable-id="table-basic-4">
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
            </div>
            <h4 class="panel-title">Modules List</h4>
        </div>
        <div class="panel-body">
           <form action="<?php echo site_url('administrator/module')?>" method="POST" class="form-horizontal" id="add-block-form">
                <fieldset>
                    <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="level">Filter Module by Page</label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" name="page_id">
                                    <option value="" selected="selected">-- Select Page --</option>
                                    <?php foreach($allpage as $page){ ?>
                                    <option value="<?php echo $page->id; ?>"><?php echo $page->id.' - '.$page->title; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <button type="submit" class="btn btn-primary">FILTER MODULE</button>
                            </div>
                        </div>
                </fieldset>
            </form> 
            <div class="table-responsive">
                <table class="table table-striped table-bordered" data-tbname="news">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Module Type</th>
                            <th>Module Type Id</th>
                            <th>Layout</th>
                            <th>Page Position</th>
                            <th>Publish</th>
                            <th>Show Title</th>
                            <th>Date Created</th>
                            <th>Module Actions</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($results)) { foreach ($results as $row): ?>
                            <tr>
                                <td><?php echo $row->id; ?></td>
                                <td><?php echo $row->name; ?></td>
                                <td><?php echo $row->mod_type; ?></td>
                                <td><?php echo ($row->mod_type_id == 0 ? '<span class="label label-warning">Add Module First</span>' :$row->mod_type_id); ?></td>
                                <td><?php echo $row->layout; ?></td>
                                <td><?php echo $row->position; ?></td>
                                <td><?php echo ($row->publish == 1 ? '<span class="label label-success">Yes</span>' : '<span class="label label-danger">No</span>'); ?></td>
                                <td><?php echo ($row->show_title == 1 ? '<span class="label label-success">Yes</span>' : '<span class="label label-danger">No</span>'); ?></td>
                                <td><?php echo $row->date_created; ?></td>
                                <td>
                                    <a href="<?php echo base_url().$row->mod_type; ?>/modify/<?php echo $row->id; ?>" class="btn  btn-icon btn-circle btn-primary" title="Modify Module">
                                        <i class="fa fa-gears"></i>
                                    </a> Modify Module
                                </td>
                                <td>
                                    <a href="<?php echo base_url(); ?>administrator/delete_module/<?php echo $row->id?>" class="btn btn-icon btn-circle btn-danger" title="Delete"><i class="fa fa-times"></i></a>
                                    <a href="<?php echo base_url(); ?>administrator/edit_module/<?php echo $row->id?>" class="btn btn-icon btn-circle btn-success" title="Edit Module" rel="<?php echo $row->id?>"><i class="fa fa-pencil"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php } else { ?>
                            <tr>
                                <td>No Modules</td>
                                <td>No Modules</td>
                                <td>No Modules</td>
                                <td>No Modules</td>
                                <td>No Modules</td>
                                <td>No Modules</td>
                                <td>No Modules</td>
                                <td>No Modules</td>
                                <td>No Modules</td>
                                <td>No Modules</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <div class="dataTables_info" id="data-table_info" role="status" aria-live="polite">Total of <?php count($results);?> entries</div>
                <?php if (isset($pagination)): ?>
                    <div class="dataTables_paginate paging_simple_numbers"><?=$pagination?></div>
                <?php endif ?>
            </div>
        </div>
    </div>
    <!-- end panel -->

    </div>
    <!-- end col-12 -->
</div>
<!-- end row