<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Page Model
 * Hercival Aragon
 * Model for Ortigas and Company
 * August 2016
 */
class Page_model extends CI_Model {
    function __construct(){
       parent::__construct();
    }
    
    function get_menu_by_alias($alias){
        return $this->db->where(array('alias' => $alias))->get('hda_menu')->row();
    }
    
    function get_page_by_id($id){
        return $this->db->where(array('id' => $id))->get('hda_pages')->row();
    }
}