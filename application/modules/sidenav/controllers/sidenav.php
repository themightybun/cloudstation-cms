<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sidenav extends MY_Controller{
    
    public function index(){
        
        $this->load->model('module_model_sidenav');
        $data['menu'] = $this->module_model_sidenav->get();
        $this->load->view('module_view_sidenav',$data);
    }
    
}
