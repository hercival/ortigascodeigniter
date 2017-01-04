<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct(){
		parent::__construct();
		//$this->load->model('main_m');
		//$this->data['title'] = config_item('site_title');
		//$this->data['pages'] = get_page_menu();
		//$this->data['contact_info'] = $this->main_m->get_info('content_descriptions', array('slug' => 'contact-info'))['contact_info'];
	}
    
    public function index(){
        $this->load->view('templates/home/index');
    }
//	public function index()
//	{
//		$this->data['carousel'] = $this->main_m->get_all('carousels');
//		$this->data['page_blocks'] = $this->main_m->get_blocks('home');
//		//$this->data['news'] = $this->main_m->get_paged('news', NULL, array('date_created' => 'DESC'), 3, 0);
//        $this->data['new_products'] = $this->main_m->get_paged('product_news', NULL, array('date_created' => 'DESC'), 7, 0);
//        
//		$this->data['page'] = 'home';
//		$this->load->view('template', $this->data);
//	}

	public function view_news($slug){
		$this->data['info'] = $this->main_m->get_info('news', array('slug' => $slug));
		$this->data['page'] = 'default';
		$this->load->view('template', $this->data);
	}

	public function about_us()
	{
		$this->data['page_blocks'] = $this->main_m->get_blocks('about-us');

        $this->data['page'] = 'default';
		$this->data['page_id'] = 'about-us-page';
		$this->load->view('template', $this->data);
	}


    public function suggest_a_branch(){
        $this->data['page'] = 'suggest_a_branch';
        $this->data['page_blocks'] = $this->main_m->get_blocks('suggest-a-branch');

        if($this->input->post()){
        	$post = $this->input->post();

        	$this->form_validation->set_rules('full_name', 'Full Name', 'required');
        	$this->form_validation->set_rules('email', 'Email', 'required');
        	$this->form_validation->set_rules('phone', 'Phone', 'required');
        	$this->form_validation->set_rules('subject', 'Subject', 'required');
        	$this->form_validation->set_rules('message', 'Message', 'required');

        	if($this->form_validation->run() == TRUE){
        		$mail_sent = $this->_send_mail($post);
        		if($mail_sent){
        			$this->session->set_flashdata('mail_sent', 'Thank you! Your message has been sent.');
        			redirect('suggest-a-branch', 'refresh');
        		}

        		$this->main_m->save_content('branches_suggested', $post);
        	}
        }

        $this->load->view('template', $this->data);  
    }

    public function contact(){
        if($this->input->post()){
            $post = $this->input->post();

            $this->form_validation->set_rules('full_name', 'Full Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required');
            $this->form_validation->set_rules('subject', 'Subject', 'required');
            $this->form_validation->set_rules('message', 'Message', 'required');

            if($this->form_validation->run() == TRUE){
                $mail_sent = $this->_send_mail($post);
                if($mail_sent){
                    $this->main_m->save_content('contact', $post);
                    $this->session->set_flashdata('mail_sent', 'Thank you! Your message has been sent.');
                    $this->session->unset_userdata('mail_error');
                    redirect(base_url().$this->input->post('page').'#contactform', 'refresh');
                } else {
                    $this->session->set_flashdata('mail_error', 'Cannot send your mail.');
                    redirect(base_url().$this->input->post('page').'#contactform', 'refresh');
                }
            } else{
                $this->session->set_flashdata('mail_error', validation_errors());
                redirect(base_url().$this->input->post('page').'#contactform', 'refresh');
            }
        }
    }

    public function whats_new()
	{
		$this->data['page'] = 'whats_new';
        $this->data['descriptions'] = $this->main_m->get_all_assoc('content_descriptions', 'slug');

        $this->data['page_blocks'] = $this->main_m->get_blocks('whats-new');
        //$this->data['new_products'] = $this->main_m->get_paged('products', NULL, array('date_created' => 'DESC'), 7, 0);
        $this->data['new_products'] = $this->main_m->get_paged('product_news', NULL, array('date_created' => 'DESC'), 7, 0);
        $this->data['new_commercials'] = $this->main_m->get_paged('commercials', NULL, array('date_created' => 'DESC'), 7, 0);
		$this->data['instructional'] = $this->main_m->get_paged('instructional_videos',NULL, array('date_created' => 'DESC'), 7, 0);

		$this->load->view('template', $this->data);
	}

    public function franchising()
    {
        //$this->data['info'] = $this->main_m->get_info('blocks', array('slug' => 'franchising'));
        $this->data['page_blocks'] = $this->main_m->get_blocks('franchising');
        $this->data['package_info'] = $this->main_m->get_info('content_descriptions', array('slug' => 'franchising-package'));

        $this->data['page'] = 'franchising';
        $this->load->view('template', $this->data);
    }

    public function recruitment()
    {
        $this->data['page_blocks'] = $this->main_m->get_blocks('recruitment');

        $this->data['page'] = 'default';
        $this->load->view('template', $this->data);
    }

    public function view_video($id){
        $info = $this->main_m->get_info('commercials', array('id' => intval($id)));

        if(isset($info['video_url'])){
            echo $this->load->view('templates/view_video', array('info' => $info), true);
        } else {
            echo '<div class="alert alert-danger">Cannot pull the video URL.</div>';
        }
    }

    public function view_content($table, $id){
        $info = $this->main_m->get_info($table, array('id' => intval($id)));

        if(!empty($info)){
            echo $this->load->view('templates/view_content', array('info' => $info), true);
        } else {
            echo '<div class="alert alert-danger">Cannot pull the content.</div>';
        }
    }

    public function view_article($slug){
        $this->data['info'] = $this->main_m->get_info('product_news', array('slug' => $slug));
        $this->data['page_blocks'] = $this->main_m->get_blocks('whats-new');

        $this->data['page'] = 'article';
        $this->load->view('template', $this->data);
    }

    public function load_video($table, $slug){
        $this->data['info'] = $this->main_m->get_info($table, array('slug' => $slug));
        
        $this->data['page'] = 'view_video';
        $this->load->view('template', $this->data);
    }


    private function _send_mail($post){
		//$mail_config['mailtype'] = 'html';
    	$full_name = $post['full_name'];
    	$email_from = $post['email'];
    	$phone = $post['phone'];
    	$comments = $post['message'];

		$this->load->library('email');
		$this->email->initialize(); 
		
		$this->email->from('no-reply@tokyotokyo.com.ph', 'Tokyo Tokyo Philippines | Contact');
        $this->email->to('harvie.sering@tokyotokyo.ph');
		$this->email->bcc('gerlie.mendoza@virusworldwide.com');
		$this->email->reply_to($email_from, $full_name);

		$this->email->subject('Tokyo Tokyo Philippines | Contact from ' . $full_name);

		$message = "Message From : ".$full_name."\n\r"; 
		$message .= "Email : ".$email_from."\n\r"; 
		$message .= "Message : ".$comments."\n\r"; 

		$this->email->message($message);	

		$sent = $this->email->send();
        $this->email->clear();

        return $sent;
	}

	public function all_userdata(){
        echo "<pre>" . print_r($this->session->all_userdata(), 1) . "</pre>"; exit;
    }
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */