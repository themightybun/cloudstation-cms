<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Topnav extends MY_Controller{
    
    public function index(){
        
        $this->load->view('module_topnav_view_topnav');
        
    }
    
}