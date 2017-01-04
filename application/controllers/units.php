<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Ortigas and Company
 * Units Controller
 * Hercival Aragon
 * August 2016
 */
class Units extends CI_Controller {

    function __construct(){
        parent::__construct();

        $this->load->model('admin_m');
        $this->load->model('modules');
    }
    
    //Font end Units Inner Page
    public function inner()
    {
        $last = $this->uri->total_segments();
        $alias = $this->uri->segment($last);
        $units_details = $this->admin_m->get_single_by_units($alias);
        $data['details'] = $units_details;
        $data['layout'] = 'inner';
        $data['components'] = 'units';
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
                redirect('units/modify/'.$mod_id, 'refresh');
            }
        }
        $mod_details = $this->modules->get_single_module($mod_id);
        $data['title'] = 'Module Units ('.$mod_id.')'; 
        $data['page'] = 'modules/units/'.$mod_details->layout;
        $data['mod_details'] = $mod_details;
        $data['main_details'] = json_decode($mod_details->mod_data);
        $this->load->view('administrator', $data);
    }
    
    public function search(){
        if($this->input->post()){
            $location = $this->input->post('location');
            $development_type = $this->input->post('development_type');
            $price = $this->input->post('price');
            $units_details = $this->modules->search_units($location, $development_type, $price);
            $data['details'] = $units_details;
            $data['layout'] = 'search';
            $data['components'] = 'units';
            $this->load->view('templates/default/component', $data);
        }else{
            $data['details'] = NULL;
            $data['layout'] = 'search';
            $data['components'] = 'units';
            $this->load->view('templates/default/component', $data);
        }
    }
    
    
    
}