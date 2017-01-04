<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Ortigas and Company
 * Administrator Controller
 * Hercival Aragon
 * July 2016
 */
class Errorpage extends CI_Controller {

    function __construct(){
        parent::__construct();

        if(!$this->session->userdata('admin_logged_in')){
            redirect('login', 'refresh');
        }

        $this->load->model('admin_m');
        $this->load->model('modules');
    }

    public function index()
    {
        $this->load->view('error_page');
    }
}