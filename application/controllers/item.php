<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Item extends US_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['item_m']);
    }

    public function index()
    {
        $js = [
            'datatables/jquery.dataTables.min'
        ];

        $items = $this->item_m->all('name');
        foreach($items as $key => $row)
        {
            $user = $this->user_m->find($row->id_user);
            $items[$key]->user = $user;
        }


        $data = [
            'title'             => 'Item',
            'main_content'      => 'item/item_v',
            'js'                => $js,
            'items'             => $items
        ];

        $this->load->view('template', $data);
    }

    public function find($id)
    {
        $item = $this->item_m->find($id);

        $this->load->model(['category_m', 'supplier_m']);

        $categories = $this->category_m->all('name');
        $suppliers = $this->supplier_m->all('name');

        $js = [
            'bootstrap/bootstrap-datepicker',
            'bootstrap/bootstrap-select',
            'bootstrap/bootstrap-file-input',
            'icheck/icheck.min'
        ];

        $data = [
            'title'             => 'Item '.$item->name,
            'main_content'      => 'item/item_find_v',
            'js'                => $js,
            'categories'        => $categories,
            'suppliers'         => $suppliers,
            'item'              => $item
        ];

        $this->load->view('template', $data);
    }

    public function add()
    {
        $this->load->model(['category_m', 'supplier_m']);

        $categories = $this->category_m->all('name');
        $suppliers = $this->supplier_m->all('name');

        $js = [
            'bootstrap/bootstrap-datepicker',
            'bootstrap/bootstrap-select',
            'bootstrap/bootstrap-file-input',
            'icheck/icheck.min'
        ];

        $data = [
            'title'             => 'Tambah Item',
            'main_content'      => 'item/item_add_v',
            'js'                => $js,
            'categories'        => $categories,
            'suppliers'         => $suppliers
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
            $insert = $this->item_m->insert($this->input->post());
            redirect('item');
        }
    }

    public function update()
    {
        if($this->form_validation->run('item/insert') == FALSE)
        {
            $this->find($this->input->post('id'));
        }
        else
        {
            $update = $this->item_m->update($this->input->post());
            redirect('item/' . $this->input->post('id'));
        }
    }

}
