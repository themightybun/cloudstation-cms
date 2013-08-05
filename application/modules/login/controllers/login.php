<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {

    public function index(){

            $this->load->view('module_login_view_login');

    }

    public function validate(){

            $this->load->model('admin/login/model_admin_login');

            $query = $this->model_admin_login->validate();

            if($query):

                    $data = array(

                            'username'	=> $this->input->post('username'),
                            'is_admin_logged_in'	=> true

                    );

                    $this->session->set_userdata($data);
                    redirect('admin/dashboard');
            else:

                    $this->index();

            endif;
    }

    public function logout(){  

        $this->session->sess_destroy();  
        $this->index();  

    } 

}