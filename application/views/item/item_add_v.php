<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
    <li><a href="<?php echo base_url('item'); ?>">Item</a></li>
    <li class="active">Tambah</li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">

            <form class="form-horizontal" action="<?php echo base_url('item/insert'); ?>" method="post">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Tambah</strong> Item</h3>
                    </div>
                    <div class="panel-body">

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Kategori</label>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <select class="form-control select" name="id_category">
                                                    <?php foreach($categories as $category): ?>
                                                        <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="<?php echo base_url('category/add'); ?>" class="btn btn-warning"><i class="fa fa-plus"></i> <?php echo lang('base_category'); ?></a>
                                            </div>
                                        </div>
                                        <?php echo form_error('category', '<small class="help-block text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">SKU</label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-barcode"></span></span>
                                            <input type="text" class="form-control" name="sku" value="<?php echo set_value('sku'); ?>"/>
                                        </div>
                                        <?php echo form_error('sku', '<small class="help-block text-danger">', '</small>'); ?>
                                    </div>
                                </div>

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
                                    <label class="col-md-3 control-label">Harga Beli</label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-arrow-circle-down"></span></span>
                                            <input type="text" class="form-control" name="buy_price" value="<?php echo set_value('buy_price'); ?>"/>
                                        </div>
                                        <?php echo form_error('buy_price', '<small class="help-block text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Harga Jual</label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-arrow-circle-up"></span></span>
                                            <input type="text" class="form-control" name="sell_price" value="<?php echo set_value('sell_price'); ?>"/>
                                        </div>
                                        <?php echo form_error('sell_price', '<small class="help-block text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Stok</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="stock" value="<?php echo set_value('stock'); ?>"/>
                                        <?php echo form_error('stock', '<small class="help-block text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Foto</label>
                                    <div class="col-md-9">
                                        <input type="file" class="fileinput btn-primary" name="image" id="image" title="Browse file"/>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Supplier</label>
                                    <div class="col-md-9">
                                        <select class="form-control select" name="id_supplier">
                                            <?php foreach($suppliers as $supplier): ?>
                                                <option value="<?php echo $supplier->id; ?>"><?php echo $supplier->name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?php echo form_error('supplier', '<small class="help-block text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Warna</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="color" value="<?php echo set_value('color'); ?>"/>
                                        <?php echo form_error('color', '<small class="help-block text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Berat / Satuan</label>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" name="weight" value="<?php echo set_value('weight'); ?>" placeholder="0.0"/>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="weight_unit" value="<?php echo set_value('weight_unit'); ?>"/>
                                            </div>
                                        </div>
                                        <?php echo form_error('weight', '<small class="help-block text-danger">', '</small>'); ?>
                                        <?php echo form_error('weight_unit', '<small class="help-block text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Lokasi</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="location" value="<?php echo set_value('location'); ?>"/>
                                        <?php echo form_error('location', '<small class="help-block text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-9">
                                        <label class="check"><input type="checkbox" class="icheckbox" checked="checked" name="is_available"/> Tersedia</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-primary pull-right">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>
<!-- END PAGE CONTENT WRAPPER -->