<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller {
    
    public function index(){
        
        echo Modules::run('templates/admin');
        
    }
    
}