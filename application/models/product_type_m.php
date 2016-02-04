<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Product_type_m extends US_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->table = 'product_type';
    }

    public function insert($input)
    {
        $data = [
            'code'              => $input['code'],
            'name'              => $input['name'],
            'id_user'           => 1,
            'created_at'        => now(),
            'last_update_user'  => 1
        ];

        return $this->db_insert($data);
    }

    public function update($input)
    {
        $data = [
            'code'              => $input['code'],
            'name'              => $input['name'],
            'last_update_user'  => 1
        ];

        return $this->db_update($data, $input['id']);
    }

}
