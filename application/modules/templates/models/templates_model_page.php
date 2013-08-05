<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Templates_model_page extends CI_Model{
    
    function get($data){
        
        $this->db->join('pagetypes_tb','pagetypes_tb.pagetype_id = pages_tb.page_type_id');
        $this->db->where('pagetype_name',$data['type']);
        $this->db->where('page_url',$data['page']);
        $query = $this->db->get('pages_tb');
        
        $data = $query->result_array();
  
        return $data;      
        
    }
    function get_next($data){
        
        $this->db->join('pagetypes_tb','pagetypes_tb.pagetype_id = pages_tb.page_type_id');
        $this->db->where('pagetype_name',$data['type']);
        $this->db->where('page_id >',$data['page_content'][0]['page_id']);
        $query = $this->db->get('pages_tb');
        
        if($query->num_rows() > 0):
            $data['next'] = $query->first_row('array');
        endif;
        
        
        $this->db->join('pagetypes_tb','pagetypes_tb.pagetype_id = pages_tb.page_type_id');
        $this->db->where('pagetype_name',$data['type']);
        $this->db->where('page_id <',$data['page_content'][0]['page_id']);
        $query = $this->db->get('pages_tb');
        
        if($query->num_rows() > 0):
            $data['previous'] = $query->last_row('array');
        endif;
        
      
        return $data;    
        
    }
    function get_prev($data){
        
        $this->db->join('pagetypes_tb','pagetypes_tb.pagetype_id = pages_tb.page_type_id');
        $this->db->where('pagetype_name',$data['type']);
        $query = $this->db->get('pages_tb');
        
                
        $data[0] = $query->prev_row('array');
        
      
        return $data;    
        
    }
    
    
}
    
