<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by JetBrains PhpStorm.
 * User: Unleashed
 * Date: 9/18/13
 * Time: 2:55 AM
 */
class Home extends Public_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $js = [];

        $data = array(
            'title'         => 'Unleashed Admin Framework',
            'main_content'  => 'home_v',
            'js'            => $js
        );

        $this->load->view('template', $data);
    }
}
