<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_m extends CI_Model {
    function __construct()
    {
       parent::__construct();
    }

    function get_all($table, $wheres = array(), $ordering = array()){
        if($wheres != NULL && !empty($wheres)){
            $this->db->where($wheres);
        }

        if($ordering != NULL && !empty($ordering)){
           $this->db->order_by($ordering);
        } else {
            $this->db->order_by(array('date_created' => 'DESC'));
        }

        return $this->db->get($table);
    }

    function get_all_assoc($table, $id_key = NULL, $wheres = array(), $ordering = array()){
        if($id_key == NULL){
            $id_key = 'id';
        }

        if($wheres != NULL && !empty($wheres)){
            $this->db->where($wheres);
        }

        if($ordering != NULL && !empty($ordering)){
            $this->db->order_by($ordering);
        } else {
            $this->db->order_by(array('date_created' => 'DESC'));
        }

        $res = $this->db->get($table);

        $return = array();
        if($res && !empty($res)){
            foreach($res as $row){
                $return[$row[$id_key]] = $row;
            }
        }

        return $return;
    }

    function get_paged($table, $wheres, $ordering, $limit, $offset){
        if($wheres != NULL && !empty($wheres)){
            $this->db->where($wheres);
        }

        if($ordering != NULL && !empty($ordering)){
            $this->db->order_by($ordering);
        }

        return $this->db
                    ->offset($offset)
                    ->limit($limit)
                    ->get($table);
    }

    function get_info($table, $wheres = array()){
        if($wheres != NULL && !empty($wheres)){
            $this->db->where($wheres);
        }


        $res = $this->db->get($table);

        if(isset($res[0])){
            return $res[0];
        }
    }

    function get_blocks($slug){
        $blocks = $this->db->select('blocks')->where('slug', $slug)->get('pages');

        $return = array();
        if($blocks && isset($blocks[0]['blocks'])){
            $blocks = explode(',', $blocks[0]['blocks']);

            foreach ($blocks as $block) {
                if($block){
                    $return[$block] = $this->get_block_info($block);
                }
            }
        }

        return $return;
    }

    function get_block_info($bid){
        $return = $this->db->where(array('id' => intval($bid)))->get('blocks');
        if($return){
            return $return[0];
        }
    }

    function save_content($table, $data){
        $data['id'] = $id = next_id('id', $table);
        $data['date_created'] = date("Y-m-d H:i:s");

        $this->db->insert($table, $data);
        return $id;
    }

    function update_content($table, $data, $where){
        $this->db->where($where)->set($data)->update($table);
        return 1;
    }

    //Start by Jerome 
    function get_all_stores(){
        return $this->db->get('stores');
    }

    function get_search_stores($like){
        return $this->db
            //->like('branch_address', $like)
            //->or_like(array('branch_name', 'branch_address'), explode(" ", $like) ) 
            ->or_like(array('branch_address', 'branch_name'), explode(" ", $like) ) 
            ->get('stores');

        return $res;
    }

    function get_stores_slug($slug){
        return $this->db->where('slug',$slug)->get('stores');
    }
    //End by Jerome 
}
?>