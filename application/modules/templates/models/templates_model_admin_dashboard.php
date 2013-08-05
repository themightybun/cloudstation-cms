<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Templates_model_admin_dashboard extends CI_Model{
    
    function get(){
        
        $this->db->join('pagetypes_tb','pagetypes_tb.pagetype_id = pages_tb.page_type_id');
        $query = $this->db->get('pages_tb');
        $query = $query->result();
        
        foreach($query as $row):
            
            $id = $row->page_id;
            $data[$id]['page_title'] = $row->page_title;
            $data[$id]['page_url'] = $row->page_url;
            $data[$id]['page_timestamp'] = $row->page_timestamp;
            $data[$id]['page_type'] = $row->pagetype_name;
            
        endforeach;
        
        return $data;
        
    }
    
}