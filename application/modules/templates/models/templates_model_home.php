<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Templates_model_home extends CI_Model{
    
    public function get(){
        
        $this->db->join('pagetypes_tb','pagetypes_tb.pagetype_id = pages_tb.page_type_id');
        $this->db->where('page_type_id !=',1);
        $query = $this->db->get('pages_tb');
        $query = $query->result();
        
        $i = 0;
        foreach($query as $row):
            
            $type = $row->pagetype_name;
            $data[$type][$i]['grid'] = $row->pagetype_grid;
            $data[$type][$i]['page_title'] = $row->page_title;
            $data[$type][$i]['page_short_content'] = $row->page_short_content;
            $data[$type][$i]['page_url'] = $row->page_url;
            $data[$type][$i]['page_thumb'] = $row->page_thumb_loc;
            
            $i++;
            
        endforeach;
        
        return $data;
    }
    
    
}