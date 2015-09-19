<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by Unleashed Studios.
 * User: Phi314
 * Date: 3/15/14
 * Time: 11:04 PM
 */
class US_Model extends CI_Model
{
    var $table;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param string $order_by
     * @param string $type_order
     * @return mixed
     */
    public function all($order_by = 'id', $type_order = 'ASC')
    {
        return $this->db->order_by($order_by, $type_order)->get($this->table)->result();
    }

    /**
     * @param $id
     * @param string $field
     * @return mixed
     */
    public function  find($id, $field = 'id')
    {
        return $this->db->where($field, $id)->limit(1)->get($this->table)->row();
    }

    /**
     * @param $input
     * @return mixed
     */
    public function db_insert($input)
    {
        $this->db->insert($this->table, $input);

        return $this->db->insert_id();
    }

    /**
     * @param $input
     * @param $id
     * @param string $field
     * @return mixed
     */
    public function db_update($input, $id, $field = 'id')
    {
        return $this->db->update($this->table, $input, [$field => $id]);
    }

    /**
     * @param $id
     * @param string $field
     * @return mixed
     */
    public function db_delete($id, $field = 'id')
    {
        return $this->db->where($field, $id)->delete($this->table);
    }

}
