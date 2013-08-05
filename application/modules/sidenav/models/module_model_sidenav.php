<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Module_model_sidenav extends CI_Model{
    
    public function get(){
        
        $this->db->where('pagetype_id !=',1);
        $this->db->select('pagetype_name');
        $query = $this->db->get('pagetypes_tb');
        $data = $query->result_array();
        
        return $data;
        
    }
    
}
