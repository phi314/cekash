<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Product_m extends US_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->table = 'product';
    }

    public function insert($input)
    {
        $data = [
            'sku'               => $input['sku'],
            'name'              => $input['name'],
            'id_category'       => $input['id_category'],
            'buy_price'         => $input['buy_price'],
            'sell_price'        => $input['sell_price'],
            'stock'             => $input['stock'],
            'location'          => $input['location'],
            'image'             => $input['image'],
            'color'             => $input['color'],
            'weight'            => $input['weight'],
            'weight_unit'       => $input['weight_unit'],
            'id_supplier'       => $input['id_supplier'],
            'id_user'           => 1,
            'created_at'        => now(),
            'is_available'      => 1,
        ];

        return $this->db_insert($data);
    }

    public function update($input)
    {
        $data = [
            'sku'               => $input['sku'],
            'name'              => $input['name'],
            'id_category'       => $input['id_category'],
            'buy_price'         => $input['buy_price'],
            'sell_price'        => $input['sell_price'],
            'stock'             => $input['stock'],
            'location'          => $input['location'],
            'image'             => $input['image'],
            'color'             => $input['color'],
            'weight'            => $input['weight'],
            'weight_unit'       => $input['weight_unit'],
            'id_supplier'       => $input['id_supplier'],
            'is_available'      => $input['is_avalilable'],
            'last_update_user'  => 1
        ];

        return $this->db_update($data, $input['id']);
    }

    public function delete($input)
    {

    }

}
