<?php
if(!function_exists('save_thumb')){
    function save_thumb($filename, $size){
        $ci =& get_instance();

        //save thumbnail of primary photo
        $r_config['image_library'] = 'gd2';
        $r_config['create_thumb'] = TRUE;
        $r_config['maintain_ratio'] = TRUE;
        $r_config['width']  = $size; //209;
        $r_config['height'] = $size; //317;
        $r_config['thumb_marker'] = '';
        $r_config['quality'] = '100%';
        $r_config['source_image']   = './includes/uploads/'.$filename;
        $r_config['new_image'] = './includes/uploads/thumbnails/'.$filename;
        $ci->load->library('image_lib');

        $ci->image_lib->initialize($r_config);
        $ci->image_lib->resize();
        $ci->image_lib->clear();
    }
}

if(!function_exists('save_other_sizes')){
    function save_other_sizes($filename, $size){
        $ci =& get_instance();

        //set configurations
        $r_config['image_library'] = 'gd2';
        $r_config['create_thumb'] = TRUE;
        $r_config['maintain_ratio'] = TRUE;
        $r_config['quality'] = '100%';
        $r_config['thumb_marker'] = '_'.$size.'px';
        $r_config['source_image'] = $src = './includes/uploads/'.$filename;
        $r_config['width']  = $size; //209;
        $r_config['height'] = $size; //317;

        //$name = pathinfo($src, PATHINFO_FILENAME);
        //$ext = pathinfo($src, PATHINFO_EXTENSION);
        //$r_config['new_image'] = './includes/uploads/'.$name.'_'.$pixels.'.'.$ext;
        
        $ci->load->library('image_lib');
        $ci->image_lib->initialize($r_config);
        $ci->image_lib->resize();
        $ci->image_lib->clear();
    }
}

if (!function_exists('save_photos_multiple')){
    function save_photos_multiple($args = array()){
        $ci =& get_instance();

        if(!empty($args)){
            foreach ($args as $arg) {
                if(gettype($arg['size']) == 'array'){
                    foreach ($arg['size'] as $size) {
                        save_other_sizes($arg['filename'], $size);            
                    }
                } else {
                    save_other_sizes($arg['filename'], $arg['size']);
                }
            }
        }
    }
}


if(!function_exists('save_thumb_center')){
    function save_thumb_center($filename, $w_thumb, $h_thumb){
        $ci =& get_instance();
        list($w_orig, $h_orig, $i_type, $i_attr) = getimagesize('./includes/uploads/'.$filename);

        $y_thumb = 0;
        $x_thumb = 0;
        if ($h_orig > $w_orig) {
            if($h_orig > $h_thumb){
                $y_thumb = ($h_orig / 2) - ($h_thumb / 2);
            }

            $h_crop = $w_crop = $w_orig;
        } elseif($h_orig == $w_orig){
            $y_thumb = $x_thumb = 0;
        }else {
            if($w_orig > $w_thumb){
                $x_thumb = ($w_orig / 2) - ($w_thumb / 2);
            }

            $h_crop = $w_crop = $h_orig;
        }

        $config = array(
            'source_image' => './includes/uploads/'.$filename,
            'new_image' => './includes/uploads/thumbnails/'.$filename,
            'maintain_ratio' => FALSE,
            'width' => $w_crop,
            'height' => $h_orig,
            'x_axis' => $x_thumb,
            'y_axis' => $y_thumb,
            'quality' => '100%'
        );
        $ci->load->library('image_lib', $config);
        $ci->image_lib->clear();
        $ci->image_lib->initialize($config);
        $ci->image_lib->crop();
    }
}


if(!function_exists('generate_slug')){
    function generate_slug($title, $table, $id = 0){
        $ci =& get_instance();

        $slug = url_title($title,  '-', TRUE);
        $slugs = check_slug($slug, $table, $id);

        if(count($slugs) > 0 && in_array($slug, $slugs)) {
            $max = 0;

            while(in_array( ($slug . '-' . ++$max ), $slugs) );

            $slug .= '-' . $max;
        }
        return $slug;
    }

    function check_slug($slug, $table, $id){
        $ci =& get_instance();
        $ci->mongo_db->select('slug')->like('slug', $slug, 'after');

        if($id){
            $ci->mongo_db->where_ne('id', $id);
        }

        $res = $ci->mongo_db->get($table);

        $slugs = array();
        if(!empty($res)) {
            foreach($res as $slug){
                array_push($slugs, $slug['slug']);
            }
        }
        return $slugs;
    }
}



function next_id($field, $db) {
        $ci =& get_instance();

        $data = $ci->mongo_db->order_by(array($field => 'DESC'))->limit(1)->get($db);
        if($data){
            foreach($data as $d){
                return 1+@$d[$field];
            }
        }
        return 1;
    }


if(!function_exists('my_pagination')){
    function my_pagination($base_url, $total_rows, $uri_segment, $posts_per_page, $tag_open_class){
        $CI =& get_instance();

        $config['base_url'] = $base_url;
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $posts_per_page;
        $config['uri_segment'] = $uri_segment;
        $config['num_links'] = 5;
        $config['full_tag_open'] = '<div class="'.$tag_open_class.'"><ul class="pagination pagination-large">';
        $config['full_tag_close'] = '</ul></div>';
        $config['cur_tag_open'] = '<li><a onclick="return false;" style="color:#666666;">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['last_link'] = '&gt;&gt;';
        $config['first_link'] = '&lt;&lt;';

        $CI->pagination->initialize($config);

        return $CI->pagination->create_links();
    }
}

if(!function_exists('get_youtube_id')){
    function get_youtube_id($url){
        $vid = FALSE;
        $vid_arr = explode('/watch?v=', $url);

        if(!isset($vid_arr[1])){
            $vid_arr = explode('.be/', $url);
        }

        $vid = $vid_arr[1];

        return $vid;
    }
}

function get_page_menu() {
        $ci =& get_instance();

        $results = array();
        $pages = $ci->mongo_db->where(array('active' => 1, 'main_page' => 1))->order_by(array('ordering' => 'ASC'))->get('pages');

        if(!empty($pages)){
            // foreach ($pages as $page) {
            //     if(!@$page['parent_id']){
            //         $results[$page['id']]['info'] = $page;
            //     } else {
            //         $results[$page['parent_id']]['children'][] = $page;
            //     }
            // }

            foreach ($pages as $page) {
                if($page['level'] == 1){
                    $results[1][$page['id']] = $page;
                } elseif($page['level'] == 2){
                    $results[2][$page['parent_id']][$page['id']] = $page;
                } else{
                    $results[3][$page['parent_id']][$page['id']] = $page;
                } 
            }
        }

        return $results;
    }

if(!function_exists('count_sub_items')){
    function count_sub_items($table, $parent_id){
        $ci =& get_instance();
        $result = $ci->mongo_db->where('category', intval($parent_id))->count($table);

        return $result;
    }
}


if(!function_exists('responsive_image')){
    function responsive_image($filename){
        $name = pathinfo('./includes/uploads/'.$filename, PATHINFO_FILENAME);
        $ext = pathinfo('./includes/uploads/'.$filename, PATHINFO_EXTENSION);

        echo '<picture>'.
            '<source media="(max-width: 480px)" srcset="'.base_url().'includes/uploads/'.$name.'_300px.'.$ext.'" class="center-block">'.
            '<source media="(max-width: 991px)" srcset="'.base_url().'includes/uploads/'.$name.'_500px.'.$ext.'" class="center-block">'.
            '<img src="'.base_url().'includes/uploads/'.$filename.'" alt="'.$filename.'" class="img-responsive" />'.
        '</picture>';
    }
}


/*for menu nav*/
if(!function_exists('display_menu_admin')){
    function display_menu_admin($page){ ?>
        <div>
            <?=$page['title']?>
            <?php if($page['active'] == 0): ?>
                <a href="" class="btn btn-xs btn-icon btn-circle btn-danger delete-permanently pull-right" title="Delete Permanently" rel="<?=$page['slug']?>"><i class="fa fa-times"></i></a>
            <?php else: ?>
                <a href="" class="btn btn-xs btn-icon btn-circle btn-danger delete-content pull-right" title="Delete" rel="<?=$page['slug']?>"><i class="fa fa-times"></i></a> 
                <a href="<?=base_url('administrator/edit_page/'.$page['id'])?>" class="btn btn-xs btn-icon btn-circle btn-primary pull-right" title="Edit" rel="<?=$page['id']?>"><i class="fa fa-pencil"></i></a>
            <?php endif; ?>
        </div>
    <?php } 
}

if(!function_exists('get_menu_url')){
    function get_menu_url($current_page, $menu_info){ 
        if($current_page == 'home' && @$menu_info['home_link']){
            $url = $menu_info['home_link'];
        } else if(isset($menu_info['inner_link']) && $menu_info['inner_link'] != ''){
            $url = strpos($menu_info['inner_link'], 'http') !== FALSE ? $menu_info['inner_link'] : base_url($menu_info['inner_link']);
        } else {
            $url = base_url().$menu_info['slug'];
        }

        return $url;
    } 
}



/*end for menu nav*/




// ONE TIME RUN

if(!function_exists('save_other_sizes1')){
    function save_other_sizes1($filename, $size){
        $ci =& get_instance();

        //set configurations
        $r_config['image_library'] = 'gd2';
        $r_config['create_thumb'] = TRUE;
        $r_config['maintain_ratio'] = TRUE;
        $r_config['quality'] = '100%';
        $r_config['thumb_marker'] = '_'.$size.'px';
        $r_config['source_image'] = $src = './includes/uploads_used/'.$filename;
        $r_config['width']  = $size; //209;
        $r_config['height'] = $size; //317;

        $ci->load->library('image_lib');
        $ci->image_lib->initialize($r_config);
        $ci->image_lib->resize();
        $ci->image_lib->clear();
    }
}

if (!function_exists('save_photos_multiple1')){
    function save_photos_multiple1($args = array()){
        $ci =& get_instance();

        if(!empty($args)){
            foreach ($args as $arg) {
                if(gettype($arg['size']) == 'array'){
                    foreach ($arg['size'] as $size) {
                        save_other_sizes1($arg['filename'], $size);            
                    }
                } else {
                    save_other_sizes1($arg['filename'], $arg['size']);
                }
            }
        }
    }
}

if(!function_exists('save_thumb1')){
    function save_thumb1($filename, $size){
        $ci =& get_instance();

        //save thumbnail of primary photo
        $r_config['image_library'] = 'gd2';
        $r_config['create_thumb'] = TRUE;
        $r_config['maintain_ratio'] = TRUE;
        $r_config['width']  = $size; //209;
        $r_config['height'] = $size; //317;
        $r_config['thumb_marker'] = '';
        $r_config['quality'] = '100%';
        $r_config['source_image']   = './includes/uploads/'.$filename;
        $r_config['new_image'] = './includes/uploads_used/thumbnails/'.$filename;
        $ci->load->library('image_lib');

        $ci->image_lib->initialize($r_config);
        $ci->image_lib->resize();
        $ci->image_lib->clear();
    }
}
