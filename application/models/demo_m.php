<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Demo_m extends UL_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'table_name';
    }

    public function insert($input)
    {
        $input = (array) $input;

        $data = array(

        );

        return $this->db->insert($this->table, $data);
    }

    public function update($input)
    {
        $input = (array) $input;

        $data = array(

        );

        return $this->db->where('id', $input['id'])->insert($this->table, $data);
    }
}
