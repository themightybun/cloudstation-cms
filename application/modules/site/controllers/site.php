<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends MY_Controller{

    
    public function index(){
        //for overlay open/closed
        $data['overlay'] = 'false';
        echo Modules::run('templates/home',$data);
    }
    
    public function page($type,$page){
        
        $data['type'] = $type;
        $data['page'] = $page;
        
        //for overlay open/closed
        $data['overlay'] = 'true';
        
        //from http://davidwalsh.name/detect-ajax
        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'):
            
            echo Modules::run('templates/page',$data);
        
        else:
            //if outside link or full url
            $data['outbound'] = 'true';
            echo Modules::run('templates/home',$data);
            echo Modules::run('templates/page',$data);
            
        endif;
        
        
    }
    
    public function ajaxPage(){
        
        $data['type'] = $this->input->post('type',TRUE);
        $data['page'] = $this->input->post('page',TRUE);
        
    }
    
    
}

