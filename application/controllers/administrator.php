<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Ortigas and Company
 * Administrator Controller
 * Hercival Aragon
 * July 2016
 */
class Administrator extends CI_Controller {

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
        $data['title'] = 'Dashboard'; 
        $data['page'] = 'dashboard';
        $this->load->view('administrator', $data);
    }

    public function dashboard(){
        $data['title'] = 'Dashboard'; 
        $data['page'] = 'dashboard';
        $this->load->view('administrator', $data);
    }

    public function logout(){
        $this->session->unset_userdata('admin_logged_in');
        redirect('login', 'refresh');
    }
    
    //Pages CMS
    public function pages(){
        $data['page'] = 'pages'; 
        $data['title'] = 'Pages'; 
        $data['results'] = $this->admin_m->get_all_pages();
        $this->load->view('administrator', $data);
    }

    public function add_page(){
        $data['page'] = 'add_page';
        $data['title'] = 'Add Page';
        if($this->input->post()){
            $this->form_validation->set_rules('title', 'Page Title', 'required');
            $this->form_validation->set_rules('template', 'Template', 'required');
            $this->form_validation->set_rules('meta_title', 'SEO Meta Title', '');
            $this->form_validation->set_rules('meta_description', 'SEO Meta Desciption', '');
            $this->form_validation->set_rules('meta_keywords', 'SEO Meta Keywords', '');
            $this->form_validation->set_rules('image', 'SEO Meta Image', '');
            $this->form_validation->set_rules('publish', 'Publish', 'required');
            $this->form_validation->set_rules('page_type', 'Page Type', 'required');

            if($this->form_validation->run() == TRUE){
                $title = $this->input->post('title');
                $template = $this->input->post('template');
                $meta_title = $this->input->post('meta_title');
                $meta_description = $this->input->post('meta_description');
                $meta_keywords = $this->input->post('meta_keywords');
                $meta_image = $this->input->post('image');
                $publish = $this->input->post('publish');
                $page_type = $this->input->post('page_type');
                $metatags = json_encode(array('title' => $meta_title, 'description' => $meta_description, 'keywords' => $meta_keywords, 'image' => $meta_image));
                $datenow = date('Y-m-d H:i:s');
                $save_data = array(
                    'title' => $title ,
                    'template' => $template ,
                    'metatags' => $metatags,
                    'date' => $datenow,
                    'publish' => $publish,
                    'page_type' => $page_type
                );
 
                $save_result = $this->admin_m->save_pages($save_data);
                if($save_result){
                    $this->session->set_flashdata('saved', 'Page is successfully created.');
                    redirect('administrator/pages', 'refresh');
                }else{
                    $this->session->set_flashdata('saved', 'There was a problem Creating the page.');
                }
            }
        }

        $this->load->view('administrator', $data);
    }

    public function edit_page($id = ''){
        $data['page'] = 'edit_page';
        $data['title'] = 'Edit Page';
        
        if($this->input->post()){
            $this->form_validation->set_rules('title', 'Page Title', 'required');
            $this->form_validation->set_rules('template', 'Template', 'required');
            $this->form_validation->set_rules('meta_title', 'SEO Meta Title', '');
            $this->form_validation->set_rules('meta_description', 'SEO Meta Desciption', '');
            $this->form_validation->set_rules('meta_keywords', 'SEO Meta Keywords', '');
            $this->form_validation->set_rules('image', 'SEO Meta Image', '');
            $this->form_validation->set_rules('publish', 'Publish', 'required');
            $this->form_validation->set_rules('page_type', 'Page Type', 'required');
            

            if($this->form_validation->run() == TRUE){
                $title = $this->input->post('title');
                $template = $this->input->post('template');
                $meta_title = $this->input->post('meta_title');
                $meta_description = $this->input->post('meta_description');
                $meta_keywords = $this->input->post('meta_keywords');
                $meta_image = $this->input->post('image');
                $publish = $this->input->post('publish');
                $id = $this->input->post('id');
                $page_type = $this->input->post('page_type');
                $metatags = json_encode(array('title' => $meta_title, 'description' => $meta_description, 'keywords' => $meta_keywords, 'image' => $meta_image));
                $datenow = date('Y-m-d H:i:s');
                $save_data = array(
                    'title' => $title ,
                    'template' => $template ,
                    'metatags' => $metatags,
                    'date' => $datenow,
                    'publish' => $publish,
                    'page_type' => $page_type
                );
 
                $update_result = $this->admin_m->update_page($save_data, $id);
                if($update_result){
                    $this->session->set_flashdata('saved', 'Page is successfully Updated.');
                    redirect('administrator/pages', 'refresh');
                }else{
                    $this->session->set_flashdata('saved', 'There was a problem Updating the page.');
                    redirect('administrator/pages', 'refresh');
                }
                $get_result = $this->admin_m->get_single_page($id);
                $data['results'] = $get_result;
            }
        }else{
            $id = intval($id);
            $get_result = $this->admin_m->get_single_page($id);
            if($get_result){
                $data['results'] = $get_result;
            }else{
                $this->session->set_flashdata('saved', 'Page not Found.');
                redirect('administrator/pages', 'refresh');
            }
        }
        $this->load->view('administrator', $data);
    }
    
    public function delete_page($id){
        $del_result = $this->admin_m->delete_page($id);
        
        if($del_result){
            $this->session->set_flashdata('saved', 'Page is successfully Delete.');
        }else{
            $this->session->set_flashdata('saved', 'There was a problem Deleting the page.');
        }
        redirect('administrator/pages', 'refresh');
    }
    //end of Page CMS
    
    //Menu CMS
    public function menus(){
        $data['page'] = 'menus'; 
        $data['title'] = 'Menus'; 
        $items = $this->admin_m->get_all_menu_array();
        $this->multi_menu->set_items($items);
        $data['results'] = $this->multi_menu->raw_data();
        $this->load->view('administrator', $data);
    }

    public function add_menu(){
        $data['page'] = 'add_menu';
        $data['title'] = 'Add Menu';
        $data['pages_result'] = $this->admin_m->get_publish_pages();
        //Menu List
        $items = $this->admin_m->get_all_menu_array();
        $this->multi_menu->set_items($items);
        $data['parent_menu'] = $this->multi_menu->raw_data();
        $data['group_menus'] = $this->admin_m->get_all_groupmenu();
        
        if($this->input->post()){
            $this->form_validation->set_rules('title', 'Page Title', 'required');
            $this->form_validation->set_rules('menutype', 'Menu Type', 'required');
            $this->form_validation->set_rules('page_id', 'Page Selction', 'required');
            
            $this->form_validation->set_rules('url_link', 'Menu Url Link', '');
            $this->form_validation->set_rules('alias', 'Alias', 'required');
            $this->form_validation->set_rules('parent', 'Parent Menu', 'required');
            $this->form_validation->set_rules('group_id', 'Group', 'required');


            if($this->form_validation->run() == TRUE){
                $title = $this->input->post('title');
                $alias = $this->input->post('alias');
                $menutype = $this->input->post('menutype');
                $page_id = $this->input->post('page_id');
                $url_link = $this->input->post('url_link');
                $current_alias = $this->input->post('alias');
                $parent = $this->input->post('parent');
                $publish = $this->input->post('publish');
                $group_id = $this->input->post('group_id');
                $datenow = date('Y-m-d H:i:s');
                
                $alias = alias_checker($alias,'hda_menu', FALSE);

                $level = menu_levels_checker($parent);
                $menu_order = get_menu_ordering($parent);
                $save_data = array(
                    'title' => $title ,
                    'alias' => $alias ,
                    'page_id' => $page_id,
                    'type' => $menutype,
                    'level' => $level,
                    'parent' => $parent,
                    'menu_order' => $menu_order,
                    'publish' => $publish,
                    'url_link' => $url_link,
                    'group_id' => $group_id,
                    'date_created' => $datenow
                );
 
                $save_result = $this->admin_m->save_menu($save_data);
                if($save_result){
                    $this->session->set_flashdata('saved', 'Menu is successfully created.');
                    redirect('administrator/menus', 'refresh');
                }else{
                    $this->session->set_flashdata('saved', 'There was a problem Creating the menu.');
                }
            }
        }

        $this->load->view('administrator', $data);
    }

    public function edit_menu($id = ''){
        $data['page'] = 'edit_menu';
        $data['title'] = 'Edit Menu';
        $data['pages_result'] = $this->admin_m->get_publish_pages();
        //Menu List
        $items = $this->admin_m->get_all_menu_array();
        $this->multi_menu->set_items($items);
        $data['parent_menu'] = $this->multi_menu->raw_data();
        $data['group_menus'] = $this->admin_m->get_all_groupmenu();
        
        
        if($this->input->post()){
            $this->form_validation->set_rules('title', 'Page Title', 'required');
            $this->form_validation->set_rules('menutype', 'Menu Type', 'required');
            $this->form_validation->set_rules('page_id', 'Page Selction', 'required');
            
            $this->form_validation->set_rules('url_link', 'Menu Url Link', '');
            $this->form_validation->set_rules('alias', 'Alias', 'required');
            $this->form_validation->set_rules('parent', 'Parent Menu', 'required');
            $this->form_validation->set_rules('menu_order', 'Ordering', 'required');
            $this->form_validation->set_rules('group_id', 'Group', 'required');


            if($this->form_validation->run() == TRUE){
                $title = $this->input->post('title');
                $alias = $this->input->post('alias');
                $menutype = $this->input->post('menutype');
                $page_id = $this->input->post('page_id');
                $url_link = $this->input->post('url_link');
                $current_alias = $this->input->post('alias');
                $parent = $this->input->post('parent');
                $publish = $this->input->post('publish');
                $menu_order = $this->input->post('menu_order');
                $id = $this->input->post('id');
                $group_id = $this->input->post('group_id');
                
                $alias = alias_checker($alias,'hda_menu', $id);
                $level = menu_levels_checker($parent);

                $save_data = array(
                    'title' => $title ,
                    'alias' => $alias ,
                    'page_id' => $page_id,
                    'type' => $menutype,
                    'level' => $level,
                    'parent' => $parent,
                    'menu_order' => $menu_order,
                    'publish' => $publish,
                    'group_id' => $group_id,
                    'url_link' => $url_link
                );
                $this->admin_m->reordering_menu($parent, $menu_order, $id);
                $update_result = $this->admin_m->update_menu($save_data, $id);
                if($update_result){
                    $this->admin_m->update_clean_sort($parent);
                    $this->session->set_flashdata('saved', 'Menu is successfully Updated.');
                    redirect('administrator/menus', 'refresh');
                }else{
                    $this->session->set_flashdata('saved', 'There was a problem Updating the Menu.');
                    redirect('administrator/menus', 'refresh');
                }
                $get_result = $this->admin_m->get_single_menu($id);
                $data['results'] = $get_result;
            }
       
        }else{
            $id = intval($id);
            $get_result = $this->admin_m->get_single_menu($id);
            if($get_result){
                $data['ordering'] = $this->admin_m->ordering_menu($get_result->parent);
                $data['results'] = $get_result;
            }else{
                $this->session->set_flashdata('saved', 'Menu not Found.');
                redirect('administrator/menus', 'refresh');
            }
        }
        $this->load->view('administrator', $data);
    }
    
    public function delete_menu($id){
        $del_result = $this->admin_m->delete_menu($id);
        
        if($del_result){
            $this->session->set_flashdata('saved', 'Menu is successfully Delete.');
        }else{
            $this->session->set_flashdata('saved', 'There was a problem Deleting the menu.');
        }
        redirect('administrator/menus', 'refresh');
    }
    //end of Menu CMS
    
    //Modules CMS
    public function module(){
        if($this->input->post()){
            $page_id = $this->input->post('page_id');
            $data['results'] = $this->modules->get_module_by_page($page_id);
        }else{
            $data['results'] = $this->modules->get_all_module();
        }
        $data['page'] = 'modules/index'; 
        $data['title'] = 'Modules'; 
        
        $data['allpage'] = $this->admin_m->get_all_pages();
        $this->load->view('administrator', $data);
    }

    public function add_module(){
        $data['page'] = 'modules/add';
        $data['title'] = 'Add Module';
        $data['pages_result'] = $this->admin_m->get_publish_pages();
        
        if($this->input->post()){
            $this->form_validation->set_rules('name', 'Module Name', 'required');
            $this->form_validation->set_rules('page_visible', 'Show in Page', 'required');
            $this->form_validation->set_rules('position', 'Template Page Position', 'required');
            
            $this->form_validation->set_rules('mod_type', 'Module Type', 'required');
            $this->form_validation->set_rules('layout', 'Module Layout', 'required');
            $this->form_validation->set_rules('publish', 'Publsih', 'required');


            if($this->form_validation->run() == TRUE){
                $name = $this->input->post('name');
                $page_visible = $this->input->post('page_visible');
                $position = $this->input->post('position');
                $mod_type = $this->input->post('mod_type');
                $layout = $this->input->post('layout');
                $publish = $this->input->post('publish');
                $show_title = $this->input->post('show_title');
                $datenow = date('Y-m-d H:i:s');

                $ordering = get_module_ordering($position, $page_visible);
                $save_data = array(
                    'name' => $name ,
                    'position' => $position ,
                    'mod_type' => $mod_type,
                    'page_visible' => $page_visible,
                    'publish' => $publish,
                    'date_created' => $datenow,
                    'mod_type_id' => 0,
                    'layout' => $layout,
                    'ordering' => $ordering,
                    'show_title' => $show_title
                );
 
                $save_result = $this->modules->save_module($save_data);
                if($save_result){
                    $this->session->set_flashdata('saved', 'Module is successfully created.');
                    redirect('administrator/module', 'refresh');
                }else{
                    $this->session->set_flashdata('saved', 'There was a problem Creating the Module.');
                    redirect('administrator/module', 'refresh');
                }
            }
        }

        $this->load->view('administrator', $data);
    }

    public function edit_module($id = ''){
        $data['page'] = 'modules/edit';
        $data['title'] = 'Edit Module';
        $data['pages_result'] = $this->admin_m->get_publish_pages();
        
        
        if($this->input->post()){
            $this->form_validation->set_rules('name', 'Module Name', 'required');
            $this->form_validation->set_rules('page_visible', 'Show in Page', 'required');
            $this->form_validation->set_rules('position', 'Template Page Position', 'required');
            $this->form_validation->set_rules('layout', 'Module Layout', 'required');
            $this->form_validation->set_rules('publish', 'Publsih', 'required');


            if($this->form_validation->run() == TRUE){
                $name = $this->input->post('name');
                $page_visible = $this->input->post('page_visible');
                $position = $this->input->post('position');
                $layout = $this->input->post('layout');
                $publish = $this->input->post('publish');
                $show_title = $this->input->post('show_title');
                $id = $this->input->post('id');

                $ordering = get_module_ordering($position, $page_visible);
                $save_data = array(
                    'name' => $name ,
                    'position' => $position ,
                    'page_visible' => $page_visible,
                    'publish' => $publish,
                    'mod_type_id' => 0,
                    'layout' => $layout,
                    'ordering' => $ordering,
                    'show_title' => $show_title
                );
 
                $this->modules->reordering_module($page_visible, $position, $ordering, $id);
                $update_result = $this->modules->update_module($save_data, $id);
                if($update_result){
                    $this->modules->update_clean_sort($position, $page_visible);
                    $this->session->set_flashdata('saved', 'Module is successfully Updated.');
                    redirect('administrator/edit_module/'.$id, 'refresh');
                }else{
                    $this->session->set_flashdata('saved', 'There was a problem Updating the Module.');
                    redirect('administrator/edit_module/'.$id, 'refresh');
                }
            }
       
        }else{
            $id = intval($id);
            $get_result = $this->modules->get_single_module($id);
            if($get_result){
                $data['ordering'] = $this->modules->ordering_module($get_result->page_visible, $get_result->position);
                $data['results'] = $get_result;
            }else{
                $this->session->set_flashdata('saved', 'Module not Found.');
                redirect('administrator/module', 'refresh');
            }
        }
        $this->load->view('administrator', $data);
    }
    
    public function delete_module($id){
        $del_result = $this->modules->delete_module($id);
        
        if($del_result){
            $this->session->set_flashdata('saved', 'Module is successfully Delete.');
        }else{
            $this->session->set_flashdata('saved', 'There was a problem Deleting the Module.');
        }
        redirect('administrator/module', 'refresh');
    }
    //end of Module CMS
    
    //news CMS
    public function news(){
        $data['page'] = 'news'; 
        $data['title'] = 'News'; 
        $data['results'] = $this->admin_m->get_all_news();
        $this->load->view('administrator', $data);
    }

    public function add_news(){
        $data['page'] = 'add_news';
        $data['title'] = 'Add News';
        if($this->input->post()){
            $this->form_validation->set_rules('title', 'News Title', 'required');
            $this->form_validation->set_rules('content', 'News Content', 'required');
            $this->form_validation->set_rules('alias', 'Alias', 'required');
            $this->form_validation->set_rules('date_publish', 'Date Publish', 'required');
            $this->form_validation->set_rules('featured_image', 'Featured Image', 'required');
            $this->form_validation->set_rules('featured', 'Featured News', 'required');

            if($this->form_validation->run() == TRUE){
                $title = $this->input->post('title');
                $content = $this->input->post('content');
                $alias = $this->input->post('alias');
                $date_publish = $this->input->post('date_publish');
                $featured_image = $this->input->post('featured_image');
                $publish = $this->input->post('publish');
                $featured = $this->input->post('featured');
                $datenow = date('Y-m-d H:i:s');
                $alias = alias_checker($alias,'hda_news', FALSE);
                $date_publish = date('Y-m-d', strtotime($date_publish));
                $save_data = array(
                    'title' => $title ,
                    'content' => $content ,
                    'alias' => $alias,
                    'date_publish' => $date_publish,
                    'featured_image' => $featured_image,
                    'date_created' => $datenow,
                    'publish' => $publish,
                    'featured' => $featured
                );
 
                $save_result = $this->admin_m->save_news($save_data);
                if($save_result){
                    $this->session->set_flashdata('saved', 'News is successfully created.');
                    redirect('administrator/news', 'refresh');
                }else{
                    $this->session->set_flashdata('saved', 'There was a problem Creating the News.');
                }
            }
        }

        $this->load->view('administrator', $data);
    }

    public function edit_news($id = ''){
        $data['page'] = 'edit_news';
        $data['title'] = 'Edit News';
        
        if($this->input->post()){
            $this->form_validation->set_rules('title', 'News Title', 'required');
            $this->form_validation->set_rules('content', 'News Content', 'required');
            $this->form_validation->set_rules('alias', 'Alias', 'required');
            $this->form_validation->set_rules('date_publish', 'Date Publish', 'required');
            $this->form_validation->set_rules('featured_image', 'Featured Image', 'required');
            $this->form_validation->set_rules('featured', 'Featured News', 'required');

            if($this->form_validation->run() == TRUE){
                $title = $this->input->post('title');
                $id = $this->input->post('id');
                $content = $this->input->post('content');
                $alias = $this->input->post('alias');
                $date_publish = $this->input->post('date_publish');
                $featured_image = $this->input->post('featured_image');
                $publish = $this->input->post('publish');
                $featured = $this->input->post('featured');
                $datenow = date('Y-m-d H:i:s');
                $alias = alias_checker($alias,'hda_news', $id);
                $date_publish = date('Y-m-d', strtotime($date_publish));
                $save_data = array(
                    'title' => $title ,
                    'content' => $content ,
                    'alias' => $alias,
                    'date_publish' => $date_publish,
                    'featured_image' => $featured_image,
                    'publish' => $publish,
                    'featured' => $featured
                );
                
                $update_result = $this->admin_m->update_news($save_data, $id);
                if($update_result){
                    $this->session->set_flashdata('saved', 'News is successfully Updated.');
                    redirect('administrator/news', 'refresh');
                }else{
                    $this->session->set_flashdata('saved', 'There was a problem Updating the News.');
                    redirect('administrator/news', 'refresh');
                }
                $get_result = $this->admin_m->get_single_news($id);
                $data['results'] = $get_result;
            }
        }else{
            $id = intval($id);
            $get_result = $this->admin_m->get_single_news($id);
            if($get_result){
                $data['results'] = $get_result;
            }else{
                $this->session->set_flashdata('saved', 'Page not Found.');
                redirect('administrator/news', 'refresh');
            }
        }
        $this->load->view('administrator', $data);
    }
    
    public function delete_news($id){
        $del_result = $this->admin_m->delete_news($id);
        
        if($del_result){
            $this->session->set_flashdata('saved', 'News is successfully Delete.');
        }else{
            $this->session->set_flashdata('saved', 'There was a problem Deleting the News.');
        }
        redirect('administrator/news', 'refresh');
    }
    //end of News CMS
    
    //Units CMS
    public function units(){
        $data['page'] = 'units'; 
        $data['title'] = 'Units'; 
        $data['results'] = $this->admin_m->get_all_units();
        $this->load->view('administrator', $data);
    }

    public function add_units(){
        $data['page'] = 'add_units';
        $data['title'] = 'Add Units';
        if($this->input->post()){
            $this->form_validation->set_rules('name', 'Unit Name', 'required');
            $this->form_validation->set_rules('unit_type', 'Unit Type', 'required');
            $this->form_validation->set_rules('logo', 'Logo', 'required');
            $this->form_validation->set_rules('location', 'Location', 'required');
            $this->form_validation->set_rules('size', 'Unit Size', 'required');
            $this->form_validation->set_rules('development_type', 'Development Type', 'required');
            $this->form_validation->set_rules('schem_image', 'Unit Layout', 'required');
            $this->form_validation->set_rules('price', 'Unit Price', 'required');
            $this->form_validation->set_rules('alias', 'Alias', 'required');
            $this->form_validation->set_rules('residences', 'Residences', 'required');
            $this->form_validation->set_rules('estate', 'Estate', 'required');
            $this->form_validation->set_rules('publish', 'Publish', 'required');

            if($this->form_validation->run() == TRUE){
                $name = $this->input->post('name');
                $unit_type = $this->input->post('unit_type');
                $logo = $this->input->post('logo');
                $location = $this->input->post('location');
                $development_type = $this->input->post('development_type');
                $size = $this->input->post('size');
                $schem_image = $this->input->post('schem_image');
                $price = $this->input->post('price');
                $alias = $this->input->post('alias');
                $residences = $this->input->post('residences');
                $estate = $this->input->post('estate');
                $publish = $this->input->post('publish');
                $description = $this->input->post('description');
                
                
                //Gallery Items
                $postitem['gallery'] = $this->input->post('item');
                $gallery = json_encode($postitem);
                
                //The Space Items
                $postspace['space'] = $this->input->post('space');
                $space = json_encode($postspace);
                $alias = alias_checker($alias,'hda_units', FALSE);
                
                $datenow = date('Y-m-d H:i:s');
                $save_data = array(
                    'name' => $name,
                    'unit_type' => $unit_type,
                    'logo' => $logo,
                    'location' => $location,
                    'size' => $size,
                    'schem_image' => $schem_image,
                    'development_type' => $development_type,
                    'price' => $price,
                    'residences' => $residences,
                    'estate' => $estate,
                    'alias' => $alias,
                    'gallery' => $gallery,
                    'space' => $space,
                    'publish' => $publish,
                    'description' => $description,
                    'date_created' => $datenow

                );
 
                $save_result = $this->admin_m->save_units($save_data);
                if($save_result){
                    $this->session->set_flashdata('saved', 'Unit is successfully created.');
                    redirect('administrator/units', 'refresh');
                }else{
                    $this->session->set_flashdata('saved', 'There was a problem Creating the unit.');
                }
            }
        }

        $this->load->view('administrator', $data);
    }

    public function edit_units($id = ''){
        $data['page'] = 'edit_units';
        $data['title'] = 'Edit Units';
        
        if($this->input->post()){
            $this->form_validation->set_rules('name', 'Unit Name', 'required');
            $this->form_validation->set_rules('unit_type', 'Unit Type', 'required');
            $this->form_validation->set_rules('logo', 'Logo', 'required');
            $this->form_validation->set_rules('location', 'Location', 'required');
            $this->form_validation->set_rules('size', 'Unit Size', 'required');
            $this->form_validation->set_rules('development_type', 'Development Type', 'required');
            $this->form_validation->set_rules('schem_image', 'Unit Layout', 'required');
            $this->form_validation->set_rules('price', 'Unit Price', 'required');
            $this->form_validation->set_rules('alias', 'Alias', 'required');
            $this->form_validation->set_rules('residences', 'Residences', 'required');
            $this->form_validation->set_rules('estate', 'Estate', 'required');
            $this->form_validation->set_rules('publish', 'Publish', 'required');
            

            if($this->form_validation->run() == TRUE){
                $name = $this->input->post('name');
                $unit_type = $this->input->post('unit_type');
                $logo = $this->input->post('logo');
                $location = $this->input->post('location');
                $development_type = $this->input->post('development_type');
                $size = $this->input->post('size');
                $schem_image = $this->input->post('schem_image');
                $price = $this->input->post('price');
                $alias = $this->input->post('alias');
                $residences = $this->input->post('residences');
                $estate = $this->input->post('estate');
                $publish = $this->input->post('publish');
                $id = $this->input->post('id');
                $description = $this->input->post('description');
                
                
                //Gallery Items
                $postitem['gallery'] = $this->input->post('item');
                $gallery = json_encode($postitem);
                
                //The Space Items
                $postspace['space'] = $this->input->post('space');
                $space = json_encode($postspace);
                $alias = alias_checker($alias,'hda_units', $id);
                
                $save_data = array(
                    'name' => $name,
                    'unit_type' => $unit_type,
                    'logo' => $logo,
                    'location' => $location,
                    'size' => $size,
                    'schem_image' => $schem_image,
                    'development_type' => $development_type,
                    'price' => $price,
                    'residences' => $residences,
                    'estate' => $estate,
                    'alias' => $alias,
                    'gallery' => $gallery,
                    'space' => $space,
                    'description' => $description,
                    'publish' => $publish
                );
 
                $update_result = $this->admin_m->update_units($save_data, $id);
                if($update_result){
                    $this->session->set_flashdata('saved', 'Unit is successfully Updated.');
                    redirect('administrator/units', 'refresh');
                }else{
                    $this->session->set_flashdata('saved', 'There was a problem Updating the unit.');
                    redirect('administrator/units', 'refresh');
                }
                $get_result = $this->admin_m->get_single_units($id);
                $data['results'] = $get_result;
            }
        }else{
            $id = intval($id);
            $get_result = $this->admin_m->get_single_units($id);
            if($get_result){
                $data['results'] = $get_result;
            }else{
                $this->session->set_flashdata('saved', 'Unit not Found.');
                redirect('administrator/units', 'refresh');
            }
        }
        $this->load->view('administrator', $data);
    }
    
    public function delete_units($id){
        $del_result = $this->admin_m->delete_units($id);
        
        if($del_result){
            $this->session->set_flashdata('saved', 'Unit is successfully Delete.');
        }else{
            $this->session->set_flashdata('saved', 'There was a problem Deleting the unit.');
        }
        redirect('administrator/units', 'refresh');
    }
    //end of Units CMS
    
    //Careers CMS
    public function career(){
        $data['page'] = 'career'; 
        $data['title'] = 'Careers'; 
        $data['results'] = $this->admin_m->get_all_career();
        $this->load->view('administrator', $data);
    }

    public function add_career(){
        $data['page'] = 'add_career';
        $data['title'] = 'Add Career';
        if($this->input->post()){
            $this->form_validation->set_rules('title', 'Career Title', 'required');
            $this->form_validation->set_rules('content', 'Career Content', 'required');
            $this->form_validation->set_rules('alias', 'Alias', 'required');
            $this->form_validation->set_rules('date_publish', 'Date Publish', 'required');
            $this->form_validation->set_rules('featured_image', 'Featured Image', 'required');

            if($this->form_validation->run() == TRUE){
                $title = $this->input->post('title');
                $content = $this->input->post('content');
                $alias = $this->input->post('alias');
                $date_publish = $this->input->post('date_publish');
                $featured_image = $this->input->post('featured_image');
                $publish = $this->input->post('publish');
                $datenow = date('Y-m-d H:i:s');
                $alias = alias_checker($alias,'hda_career', FALSE);
                $date_publish = date('Y-m-d', strtotime($date_publish));
                $save_data = array(
                    'title' => $title ,
                    'content' => $content ,
                    'alias' => $alias,
                    'date_publish' => $date_publish,
                    'featured_image' => $featured_image,
                    'date_created' => $datenow,
                    'publish' => $publish
                );
 
                $save_result = $this->admin_m->save_career($save_data);
                if($save_result){
                    $this->session->set_flashdata('saved', 'Career is successfully created.');
                    redirect('administrator/career', 'refresh');
                }else{
                    $this->session->set_flashdata('saved', 'There was a problem Creating the Career.');
                }
            }
        }

        $this->load->view('administrator', $data);
    }

    public function edit_career($id = ''){
        $data['page'] = 'edit_career';
        $data['title'] = 'Edit Career';
        
        if($this->input->post()){
            $this->form_validation->set_rules('title', 'News Title', 'required');
            $this->form_validation->set_rules('content', 'News Content', 'required');
            $this->form_validation->set_rules('alias', 'Alias', 'required');
            $this->form_validation->set_rules('date_publish', 'Date Publish', 'required');
            $this->form_validation->set_rules('featured_image', 'Featured Image', 'required');

            if($this->form_validation->run() == TRUE){
                $title = $this->input->post('title');
                $id = $this->input->post('id');
                $content = $this->input->post('content');
                $alias = $this->input->post('alias');
                $date_publish = $this->input->post('date_publish');
                $featured_image = $this->input->post('featured_image');
                $publish = $this->input->post('publish');
                $datenow = date('Y-m-d H:i:s');
                $alias = alias_checker($alias,'hda_career', $id);
                $date_publish = date('Y-m-d', strtotime($date_publish));
                $save_data = array(
                    'title' => $title ,
                    'content' => $content ,
                    'alias' => $alias,
                    'date_publish' => $date_publish,
                    'featured_image' => $featured_image,
                    'publish' => $publish
                );
                
                $update_result = $this->admin_m->update_career($save_data, $id);
                if($update_result){
                    $this->session->set_flashdata('saved', 'Career is successfully Updated.');
                    redirect('administrator/career', 'refresh');
                }else{
                    $this->session->set_flashdata('saved', 'There was a problem Updating the Career.');
                    redirect('administrator/career', 'refresh');
                }
                $get_result = $this->admin_m->get_single_career($id);
                $data['results'] = $get_result;
            }
        }else{
            $id = intval($id);
            $get_result = $this->admin_m->get_single_career($id);
            if($get_result){
                $data['results'] = $get_result;
            }else{
                $this->session->set_flashdata('saved', 'Career not Found.');
                redirect('administrator/career', 'refresh');
            }
        }
        $this->load->view('administrator', $data);
    }
    
    public function delete_career($id){
        $del_result = $this->admin_m->delete_career($id);
        
        if($del_result){
            $this->session->set_flashdata('saved', 'Career is successfully Delete.');
        }else{
            $this->session->set_flashdata('saved', 'There was a problem Deleting the Career.');
        }
        redirect('administrator/career', 'refresh');
    }
    //end of Careers CMS
    
    


    public function do_upload(){
        /*if(!$this->session->userdata('is_logged_in') && !$this->session->userdata('is_logged_infb')) {
            echo json_encode(array('errors' => 'Please login to upload files.')); die();
        }*/
        $path = './includes/uploads/';
        $this->load->library('upload');
        
        // Define file rules
        $this->upload->initialize(array(
            "upload_path"       =>  $path,
            "allowed_types"     =>  "gif|jpg|png|jpeg",
            "max_size" => "5000"
        ));
        
        if($this->upload->do_multi_upload("uploadfile")){
            $data['upload_data'] = $upload_data = $this->upload->get_multi_upload_data();

            if(!$upload_data){
                $data['upload_data'] = $upload_data = $this->upload->data();
            }

            echo json_encode($upload_data);
        } else {    
            // Output the errors
            echo json_encode(array('errors' => $this->upload->display_errors()));
        }
            
        // Exit to avoid further execution
        exit;
    }


    private function process_image_file($post_image, $slug){
        //rename image filename to be saved
        $src = FCPATH.config_item('uploads_loc').$post_image;
        //$filename = $slug.'.'.pathinfo($src, PATHINFO_EXTENSION);
        $name = pathinfo($src, PATHINFO_FILENAME);
        $extension = pathinfo($src, PATHINFO_EXTENSION);
        $increment = ''; //start with no suffix
        while(file_exists($name . $increment . '.' . $extension)) {
            $increment++;
        }
        $filename = $slug . $increment . '.' . $extension;

        //rename file
        rename($src, FCPATH.config_item('uploads_loc').$filename);

        //save thumbnail of product photo
        save_thumb($filename, 250);
        //save other sizes of block photo
        save_photos_multiple(array(array('filename' => $filename, 'size' => array(500, 300)) ));
        return $filename;
    }
}

/* End of file administrator.php */
/* Location: ./application/controllers/administrator.php */