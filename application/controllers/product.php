<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class product extends US_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['product_m']);
    }

    public function index()
    {
        $js = [
            'datatables/jquery.dataTables.min'
        ];

        $products = $this->product_m->all('name');
        foreach($products as $key => $row)
        {
            $user = $this->user_m->find($row->id_user);
            $products[$key]->user = $user;
        }


        $data = [
            'title'             => 'product',
            'main_content'      => 'product/product_v',
            'js'                => $js,
            'products'          => $products
        ];

        $this->load->view('template', $data);
    }

    public function find($id)
    {
        $product = $this->product_m->find($id);

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
            'title'             => 'product '.$product->name,
            'main_content'      => 'product/product_find_v',
            'js'                => $js,
            'categories'        => $categories,
            'suppliers'         => $suppliers,
            'product'              => $product
        ];

        $this->load->view('template', $data);
    }

    public function add()
    {
        $this->load->model(['product_type_m', 'brand_m', 'supplier_m']);

        $product_types = $this->product_type_m->all();
        $brands = $this->brand_m->all();
        $suppliers = $this->supplier_m->all();

        $js = [
            'bootstrap/bootstrap-datepicker',
            'bootstrap/bootstrap-select',
            'bootstrap/bootstrap-file-input',
            'icheck/icheck.min'
        ];

        $data = [
            'title'             => $this->pre_title.'Add Product',
            'main_content'      => 'product/product_add_v',
            'js'                => $js,
            'product_types'             => $product_types,
            'brands'            => $brands,
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
            $insert = $this->product_m->insert($this->input->post());
            redirect('product');
        }
    }

    public function update()
    {
        if($this->form_validation->run('product/insert') == FALSE)
        {
            $this->find($this->input->post('id'));
        }
        else
        {
            $update = $this->product_m->update($this->input->post());
            redirect('product/' . $this->input->post('id'));
        }
    }

}
