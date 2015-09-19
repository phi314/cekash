<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
    <li><a href="<?php echo base_url('supplier'); ?>">Supplier</a></li>
    <li class="active"><?php echo lang('base_add'); ?></li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">

            <form class="form-horizontal" action="<?php echo base_url('supplier/insert'); ?>" method="post">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong><?php echo lang('base_add'); ?></strong> Supplier</h3>
                    </div>
                    <div class="panel-body">

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Nama</label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>"/>
                                        </div>
                                        <?php echo form_error('name', '<small class="help-block text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo lang('base_address'); ?></label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="address"><?php echo set_value('address'); ?></textarea>
                                        <?php echo form_error('address', '<small class="help-block text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo lang('base_city'); ?></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="city" value="<?php echo set_value('city'); ?>"/>
                                        <?php echo form_error('city', '<small class="help-block text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo lang('base_country'); ?></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="country" value="<?php echo set_value('country'); ?>"/>
                                        <?php echo form_error('country', '<small class="help-block text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Nomor Telepon</label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            <input type="text" class="form-control" name="phone" value="<?php echo set_value('phone'); ?>"/>
                                        </div>
                                        <?php echo form_error('phone', '<small class="help-block text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="text" class="form-control" name="email" value="<?php echo set_value('email'); ?>"/>
                                        </div>
                                        <?php echo form_error('email', '<small class="help-block text-danger">', '</small>'); ?>
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

</div>
<!-- END PAGE CONTENT WRAPPER -->