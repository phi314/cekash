<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
    <li><a href="<?php echo base_url('category'); ?>"><?php echo lang('base_category'); ?></a></li>
    <li class="active"><?php echo lang('base_add'); ?></li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">

            <form class="form-horizontal" action="<?php echo base_url('category/insert'); ?>" method="post">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong><?php echo lang('base_add'); ?></strong> <?php echo lang('base_category'); ?></h3>
                    </div>
                    <div class="panel-body">

                        <div class="row">

                            <div class="col-md-6">

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
                            <div class="col-md-6">

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

</div>
<!-- END PAGE CONTENT WRAPPER -->