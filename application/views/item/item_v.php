<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
    <li class="active"><?php echo lang('base_item'); ?></li>
</ul>
<!-- END BREADCRUMB -->

<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo lang('base_item'); ?></h3>
                <ul class="panel-controls">
                    <li>
                        <a href="<?php echo base_url('item/add'); ?>"><i class="fa fa-plus"></i> </a>
                    </li>
                </ul>
            </div>
            <div class="panel-body">
                <table class="table datatable">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th><?php echo lang('base_sku'); ?></th>
                        <th><?php echo lang('base_name'); ?></th>
                        <th><?php echo lang('base_category'); ?></th>
                        <th><?php echo lang('base_buy_price'); ?></th>
                        <th><?php echo lang('base_sell_price'); ?></th>
                        <th><?php echo lang('base_stock'); ?></th>
                        <th><?php echo lang('base_location'); ?></th>
                        <th><?php echo lang('base_color'); ?></th>
                        <th><?php echo lang('base_weight'); ?></th>
                        <th>User</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; foreach($items as $item): ?>
                        <tr>
                            <td><?php echo $no++; ?>.</td>
                            <td><?php echo $item->sku; ?></td>
                            <td><?php echo $item->name; ?></td>
                            <td><?php echo $item->name; ?></td>
                            <td><?php echo $item->buy_price; ?></td>
                            <td><?php echo $item->sell_price; ?></td>
                            <td><?php echo $item->stock; ?></td>
                            <td><?php echo $item->location; ?></td>
                            <td><?php echo $item->color; ?></td>
                            <td><?php echo $item->weight.' '.$item->weight_unit; ?></td>
                            <td><?php echo !empty($item->user) ? $item->user->name : ''; ?></td>
                            <td>
                                <a href="<?php echo base_url('item/' . $item->id); ?>">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>