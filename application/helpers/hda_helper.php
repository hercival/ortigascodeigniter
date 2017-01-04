<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * HDA helper
 * @package     hda
 * @subpackage  Helpers
 * @category    Helpers
 * @author      Hercival Aragpm
 * @version     1.0 Published on August 2016
 * @copyright   Copyright (c) 2012-2016 
 */

//Alias Helper
if (!function_exists('alias_generator')){
    function alias_generator(){
        $CI =& get_instance();
		$CI->load->database();
    }
}

if (!function_exists('alias_checker')){    
    function alias_checker($alias_text,$table, $id = 0){
        $CI =& get_instance();
		$CI->load->database();

		$alias_text = strtolower($alias_text);
		$alias_text = str_replace(' ', '-', $alias_text); // Replaces all spaces with hyphens.
		$alias_text = preg_replace('/[^A-Za-z0-9\-]/', '', $alias_text); // Removes special chars.
		if($id){
			$q_result = $CI->db->where('id'.' !=', $id)->where('alias', $alias_text)->get($table)->result();
		}else{
			$q_result = $CI->db->like('alias', $alias_text, 'after')->get($table)->result();
		}
		
		$return_alias = '';
		if($q_result){
			$slug_counter = intval(count($q_result)) + 1;
			$return_alias = $alias_text.'-'.$slug_counter;
			return $return_alias;
		}else{
			return $alias_text;
		}

    }
}
//end of Alias Helper

//Menu Levels
if (!function_exists('menu_levels')){
    function menu_levels($parent_id , $level){
        $CI =& get_instance();
		$CI->load->database();
        return $CI->db->order_by("menu_order", "asc")->where(array('parent' => $parent_id, 'level' => $level))->get('hda_menu')->result();
    }
}

if (!function_exists('menu_levels_checker')){
    function menu_levels_checker($parent_id ){
        $CI =& get_instance();
        $CI->load->database();
        $current_level = $CI->db->select('level')->where(array('id' => $parent_id))->get('hda_menu')->row();
        if($current_level){
            $new_level = intval($current_level->level) + 1;
        }else{
            $new_level = 0;
        }
        
        return $new_level;
    }
}

if (!function_exists('menu_listing')){
    function menu_listing($parent_id){
        $CI =& get_instance();
        $CI->load->database();
        $current_level = $CI->db->select('level')->where(array('id' => $parent_id))->get('hda_menu')->row();
        $new_level = intval($current_level->level) + 1;
        return $new_level;
    }
}

if (!function_exists('get_menu_ordering')){
    function get_menu_ordering($parent_id){
        $CI =& get_instance();
        $CI->load->database();
        $totalresult = count($CI->db->select('menu_order')->where(array('parent' => $parent_id))->get('hda_menu')->result());
        $new_order = intval($totalresult);
        return $new_order;
    }
}
//end of Menu Levels

//Module Helper
if (!function_exists('get_module_ordering')){
    function get_module_ordering($position, $page_id){
        $CI =& get_instance();
        $CI->load->database();
        $totalresult = count($CI->db->select('ordering')->where('position', $position)->where('page_visible', $page_id)->get('hda_modules')->result());
        $new_order = intval($totalresult);
        return $new_order;
    }
}
//end of Module Helper

//Checkbox helper Check
if (!function_exists('checkbox_cheker')){
    function checkbox_cheker($check_value, $json_data, $item_name){
        $jsondata = json_decode($json_data);
        $items = $jsondata->$item_name;
        $to_return = '';
        foreach($items as $item){
            if($item == $check_value){
                $to_return = 'checked';
            }
            
        }
        return $to_return;
    }
}

//Readmore Helper
if (!function_exists('readmore_cutter')){
    function readmore_cutter($string, $words_count){
        $shown_string ='';
        $word_counter = 0;
        $original_string = strip_tags($string);
        $words = explode(" ", $original_string);
        foreach($words as $word){
            if($words_count >= $word_counter){
                $shown_string = $shown_string.' '.$word;
            }
           $word_counter++; 
        }
        return $shown_string.'...';
    }
}
//end of Readmore Helper

/* End of file hda_helper.php */
/* Location: ./application/helpers/hda_helper.php */
