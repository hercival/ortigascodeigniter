<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Ortigas and Company
 * News Controller
 * Hercival Aragon
 * July 2016
 */
class News extends CI_Controller {

    function __construct(){
        parent::__construct();

        $this->load->model('admin_m');
        $this->load->model('modules');
    }
    
    //Font end News Inner Page
    public function inner()
    {
        $last = $this->uri->total_segments();
        $news_alias = $this->uri->segment($last);
        $news_details = $this->admin_m->get_single_by_alias($news_alias);
        $data['details'] = $news_details;
        $data['layout'] = 'inner';
        $data['components'] = 'news';
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
                redirect('news/modify/'.$mod_id, 'refresh');
            }
        }
        $mod_details = $this->modules->get_single_module($mod_id);
        $data['title'] = 'Module Latest News ('.$mod_id.')'; 
        $data['page'] = 'modules/news/'.$mod_details->layout;
        $data['mod_details'] = $mod_details;
        $data['main_details'] = json_decode($mod_details->mod_data);
        $this->load->view('administrator', $data);
    }
    
    
    
}