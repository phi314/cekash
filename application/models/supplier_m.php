<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Supplier_m extends US_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->table = 'supplier';
    }

    public function insert($input)
    {
        $data = [
            'name'              => $input['name'],
            'address'           => $input['address'],
            'city'              => $input['city'],
            'country'           => $input['country'],
            'email'             => $input['email'],
            'phone'             => $input['phone'],
            'created_at'        => now(),
            'id_user'           => 1,
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
