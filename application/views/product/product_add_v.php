<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
    <li><a href="<?php echo base_url('product'); ?>">Product</a></li>
    <li class="active">Add</li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">

            <form class="form-horizontal" action="<?php echo base_url('item/insert'); ?>" method="post">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Add</strong> Product</h3>
                    </div>
                    <div class="panel-body" id="details">
                        <h3>Details</h3>
                        <hr>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Product name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>"/>
                                        <?php echo form_error('name', '<small class="help-block text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Product Handler</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" value="<?php echo set_value('handler'); ?>"/>
                                        <?php echo form_error('handler', '<small class="help-block text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Desciption</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="description" value="<?php echo set_value('description'); ?>"></textarea>
                                        <?php echo form_error('description', '<small class="help-block text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Product tags</label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="tags" value="<?php echo set_value('tags'); ?>"/>
                                            <span class="input-group-btn">
                                                <a href="<?php echo base_url('type/add'); ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tags</a>
                                            </span>
                                        </div>
                                        <?php echo form_error('tags', '<small class="help-block text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <hr style="border-style: dotted">
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Product type</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="id_product_type">
                                            <option value=""></option>
                                            <option value="add-new">+ Add type</option>
                                            <?php foreach($product_types as $product_type): ?>
                                                <option value="<?php echo $product_type->id; ?>"><?php echo $product_type->name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?php echo form_error('id_product_type', '<small class="help-block text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Product brand</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="id_brand">
                                            <option value=""></option>
                                            <option value="add-new">+ Add new brand</option>
                                            <?php foreach($brands as $brand): ?>
                                                <option value="<?php echo $brand->id; ?>"><?php echo $brand->name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?php echo form_error('id_brand', '<small class="help-block text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Supplier</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="id_supplier">
                                            <option value=""></option>
                                            <option value="add-new">+ Add new supplier</option>
                                            <?php foreach($suppliers as $supplier): ?>
                                                <option value="<?php echo $supplier->id; ?>"><?php echo $supplier->name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?php echo form_error('supplier', '<small class="help-block text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Images</label>
                                    <div class="col-md-9">
                                        <input type="file" class="fileinput btn-primary" name="image" id="image" title="Browse file"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body" id="pricing">
                        <h3>Pricing</h3>
                        <hr>
                        <div class="row text-center">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Supply Price</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="buy_price" value="<?php echo set_value('buy_price', 0); ?>"/>
                                        <?php echo form_error('buy_price', '<small class="help-block text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">x Markup (%)</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="buy_price" value="<?php echo set_value('buy_price', 0); ?>"/>
                                        <?php echo form_error('markup', '<small class="help-block text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">= Retail Price</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="sell_price" value="<?php echo set_value('sell_price', 0); ?>"/>
                                        <?php echo form_error('sell_price', '<small class="help-block text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body" id="Inventory">
                        <h3>Inventory</h3>
                        <hr>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Stock Keeping Unit</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="sku" value="<?php echo set_value('sku'); ?>"/>
                                        <?php echo form_error('sku', '<small class="help-block text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Current Stok</label>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="stock" value="<?php echo set_value('stock', 0); ?>"/>
                                        <?php echo form_error('stock', '<small class="help-block text-danger">', '</small>'); ?>
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