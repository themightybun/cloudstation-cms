<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MY_Controller {
    
    public function index(){
        $this->load->view('module_contact_view_form');
    }
}