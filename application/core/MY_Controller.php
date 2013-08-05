<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
    
        $this->load->helper('force_ssl');
        
        if($this->uri->segment(1) != 'admin' ):
            if (in_array($this->uri->segment(1), $this->config->item('ssl_pages'))):
                force_ssl();
            else:
                remove_ssl();
            endif;
        elseif($this->uri->segment(1) === 'admin'):
            force_ssl();
        endif;

    }
}