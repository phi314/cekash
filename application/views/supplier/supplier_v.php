<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">Supplier</li>
</ul>
<!-- END BREADCRUMB -->

<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Supplier</h3>
                <ul class="panel-controls">
                    <li>
                        <a href="<?php echo base_url('supplier/add'); ?>"><i class="fa fa-plus"></i> </a>
                    </li>
                </ul>
            </div>
            <div class="panel-body">
                <table class="table datatable">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th><?php echo lang('base_name'); ?></th>
                        <th><?php echo lang('base_address'); ?></th>
                        <th><?php echo lang('base_city'); ?></th>
                        <th><?php echo lang('base_country'); ?></th>
                        <th><?php echo lang('base_email'); ?></th>
                        <th><?php echo lang('base_phone'); ?></th>
                        <th>User</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; foreach($suppliers as $supplier): ?>
                        <tr>
                            <td><?php echo $no++; ?>.</td>
                            <td><?php echo $supplier->name; ?></td>
                            <td><?php echo $supplier->address; ?></td>
                            <td><?php echo $supplier->city; ?></td>
                            <td><?php echo $supplier->country; ?></td>
                            <td><?php echo $supplier->email; ?></td>
                            <td><?php echo $supplier->phone; ?></td>
                            <td><?php echo !empty($supplier->user) ? $supplier->user->name : ''; ?></td>
                            <td>
                                <a href="<?php echo base_url('category/' . $supplier->id); ?>">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>