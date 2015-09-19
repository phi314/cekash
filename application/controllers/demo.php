<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Demo extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $js = array(

        );

        $data = array(
            'title'         => 'Demo',
            'main_content'  => 'demo/default_v',
            'js'            => $js
        );

        $this->load->view('template', $data);
    }

    public function form_element()
    {
        $js = array(
            'bootstrap/bootstrap-datepicker',
            'bootstrap/bootstrap-timepicker.min',
            'bootstrap/bootstrap-colorpicker',
            'bootstrap/bootstrap-file-input',
            'bootstrap/bootstrap-select',
            'icheck/icheck.min',
            'tagsinput/jquery.tagsinput.min'
        );

        $data = array(
            'title'         => 'Form Element',
            'main_content'  => 'demo/form_element_v',
            'js'            => $js
        );

        $this->load->view('template', $data);
    }

    public function widgets()
    {
        $js = array(
            'knob/jquery.knob.min',
            'owl/owl.carousel.min'
        );

        $data = array(
            'title'         => 'Widgets',
            'main_content'  => 'demo/widgets_v',
            'js'            => $js
        );

        $this->load->view('template', $data);
    }


}
