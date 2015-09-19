<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
    <li class="active">Kategori</li>
</ul>
<!-- END BREADCRUMB -->

<div class="row">
    <div class="col-md-8">

        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo lang('base_category'); ?></h3>
                <ul class="panel-controls">
                    <li>
                        <a href="<?php echo base_url('category/add'); ?>"><i class="fa fa-plus"></i> </a>
                    </li>
                </ul>
            </div>
            <div class="panel-body">
                <table class="table datatable">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th><?php echo lang('base_code'); ?></th>
                        <th><?php echo lang('base_name'); ?></th>
                        <th>User</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; foreach($categories as $category): ?>
                        <tr>
                            <td><?php echo $no++; ?>.</td>
                            <td><?php echo $category->code; ?></td>
                            <td><?php echo $category->name; ?></td>
                            <td><?php echo !empty($category->user) ? $category->user->name : ''; ?></td>
                            <td>
                                <a href="<?php echo base_url('category/' . $category->id); ?>">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <div class="col-md-4">
        <form class="form-horizontal" action="<?php echo base_url('category/insert'); ?>" method="post">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong><?php echo lang('base_add'); ?></strong> <?php echo lang('base_category'); ?></h3>
                </div>
                <div class="panel-body">

                    <div class="row">

                        <div class="col-md-12">

                            <div class="form-group">
                                <label class="col-md-3 control-label"><?php echo lang('base_code'); ?></label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-barcode"></span></span>
                                        <input type="text" class="form-control" name="code" value="<?php echo set_value('code'); ?>"/>
                                    </div>
                                    <?php echo form_error('code', '<div class="help-block text-danger">', '</div>'); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label"><?php echo lang('base_name'); ?></label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>"/>
                                    </div>
                                    <?php echo form_error('name', '<div class="help-block text-danger">', '</div>'); ?>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <button class="btn btn-primary pull-right"><?php echo lang('base_submit'); ?></button>
                </div>
            </div>
        </form>
    </div>
</div>