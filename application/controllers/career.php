<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Ortigas and Company
 * News Controller
 * Hercival Aragon
 * July 2016
 */
class career extends CI_Controller {

    function __construct(){
        parent::__construct();

        $this->load->model('admin_m');
        $this->load->model('modules');
        $this->load->library('upload');
    }
    
    //Font end career Inner Page
    public function inner()
    {
        $last = $this->uri->total_segments();
        $career_alias = $this->uri->segment($last);
        $career_details = $this->admin_m->get_single_career_by_alias($career_alias);
        $data['details'] = $career_details;
        $data['layout'] = 'inner';
        $data['components'] = 'career';
        $this->load->view('templates/default/component', $data);
    }
    
    public function modify($mod_id)
    {
        
        if(!$this->session->userdata('admin_logged_in')){
            redirect('login', 'refresh');
        }
        $mod_id = intval($mod_id);
        if($this->input->post()){
            $mod_data = json_encode($this->input->post());
            $mod_id = $this->input->post('id');
            $update_result = $this->modules->update_module_data($mod_data, $mod_id);
            if($update_result){
                $this->session->set_flashdata('saved', 'Module Data is successfully Updated.');
                redirect('career/modify/'.$mod_id, 'refresh');
            }
        }
        $mod_details = $this->modules->get_single_module($mod_id);
        $data['title'] = 'Module Careers ('.$mod_id.')'; 
        $data['page'] = 'modules/career/'.$mod_details->layout;
        $data['mod_details'] = $mod_details;
        $data['main_details'] = json_decode($mod_details->mod_data);
        $this->load->view('administrator', $data);
    }
    
    
    
}