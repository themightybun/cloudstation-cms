<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Feed extends MY_Controller {
    
    public function index(){
        $this->load->helper('xml');
        //$this->load->model('module_feed_model_feed');
        //$data['feed'] = $this->module_feed_model_feed->get(10);
        
        $data['site_title'] = 'Cloudstation';
        $data['description'] = 'A blog about web developement and web design';
        $data['encoding'] = 'utf-8';
        
        $this->output->set_content_type('xml');
        $this->load->view('module_feed_view',$data);
        
    }
    
}
