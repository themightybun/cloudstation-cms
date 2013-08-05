<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Socialnav extends MY_Controller{
    
    public function index(){
        $this->load->view('module_view_socialnav');
    }
    
}
