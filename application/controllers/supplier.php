<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Supplier extends US_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['supplier_m']);
    }

    public function index()
    {
        $js = [
            'datatables/jquery.dataTables.min'
        ];

        $suppliers = $this->supplier_m->all();
        foreach($suppliers as $key => $row)
        {
            $user = $this->user_m->find($row->id_user);
            $suppliers[$key]->user = $user;
        }

        $data = [
            'title'             => 'Supplier',
            'main_content'      => 'supplier/supplier_v',
            'suppliers'         => $suppliers,
            'js'                => $js
        ];

        $this->load->view('template', $data);
    }

    public function add()
    {
        $js = [

        ];

        $data = [
            'title'             => 'Add Supplier',
            'main_content'      => 'supplier/supplier_add_v',
            'js'                => $js
        ];

        $this->load->view('template', $data);
    }

    public function insert()
    {
        if($this->form_validation->run() == FALSE)
        {
            $this->add();
        }
        else
        {
            $insert = $this->supplier_m->insert($this->input->post());
            redirect('supplier');
        }
    }

    public function edit(){}

    public function update(){}

}
