<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Templates extends MY_Controller {
    
    function __construct(){

        parent::__construct();
       
        //load global views
        $this->load->vars( array(

            'header'        => 'site/global/templates_global_site_header',
            'footer'        => 'site/global/templates_global_site_footer',
            'admin_header'  => 'admin/global/templates_global_admin_header',
            'admin_footer'  => 'admin/global/templates_global_admin_footer',
            'admin_nav'  => 'admin/nav/templates_view_admin_nav'

        ));

    }
    
    public function home($data){
        
        $this->load->model('templates_model_home');
        $data['page_content'] = $this->templates_model_home->get();
        $this->load->view('site/templates/templates_view_home',$data);
        
    }
    public function page($data){
        
        $this->load->model('templates_model_page');
        $data['page_content'] = $this->templates_model_page->get($data);
        $data['pagination'] = $this->templates_model_page->get_next($data);
        $this->load->view('site/templates/templates_view_page',$data);
        
    }
    
    public function admin(){
        
        $this->load->model('templates_model_admin_dashboard');
        $data['dashboard'] = $this->templates_model_admin_dashboard->get();
        $this->load->view('admin/templates/templates_view_admin_dashboard',$data);
        
    }

}
