<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Category extends US_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['category_m']);
    }

    public function index()
    {
        $js = [
            'datatables/jquery.dataTables.min'
        ];

        $categories = $this->category_m->all('name');
        foreach($categories as $key => $row)
        {
            $user = $this->user_m->find($row->id_user);
            $categories[$key]->user = $user;
        }

        $data = [
            'title'             => 'Category',
            'main_content'      => 'category/category_v',
            'categories'        => $categories,
            'js'                => $js
        ];

        $this->load->view('template', $data);
    }

    public function add()
    {
        $data = [
            'title'             => 'Add Category',
            'main_content'      => 'category/category_add_v'
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
            $insert = $this->category_m->insert($this->input->post());
            redirect('category');
        }
    }

    public function edit(){}

    public function update(){}

}
