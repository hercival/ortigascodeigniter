<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }

    /**
     * Index Page Login controller.
     */

    public function index()
    {
        $data['title'] = 'Login Content';
        $this->load->view('admin/login', $data);    
    }
    
    public function signin(){
        $data['title'] = 'Login Content';
        
        if($_POST){
            
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|callback_login_check');

            if ($this->form_validation->run() == TRUE)
            { 
                $this->session->set_userdata(array('admin_logged_in' => TRUE));
                //echo "<pre>RUN:" . print_r($this->input->post(), 1) . "</pre>"; exit;
                redirect('administrator/dashboard', 'location');
            } else {
                $data['error'] = 1;
                $this->load->view('admin/login', $data);    
            }
        } else {
            $this->load->view('login', $data);
        }
    }
    
    public function login_check(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $user = $this->login_model->check_users($username, $password);
        
        if($user){
            return TRUE;
        }else{
            $this->form_validation->set_message('login_check', 'Username and password do not match.');
            return FALSE;
        }
    }
    
    
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */