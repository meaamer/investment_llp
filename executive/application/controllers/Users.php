<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Users extends CI_Controller
{
	// user for load login view
	public function Login(){

		$this->load->view('users/LoginView');
	}

	// checking username and password
	public function CheckUserDetail(){  

		header('Access-Control-Allow-Origin:*');
        $this->load->library("form_validation");
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger" >','</div>');
        $this->form_validation->set_rules('exe_login', 'Username', 'required');
        $this->form_validation->set_rules('exe_password', 'Password', 'required');
        if($this->form_validation->run())
        {
            $this->load->model('UsersModel');
            if($data=$this->UsersModel->CheckUserDetail($this->input->post('exe_login'),$this->input->post('exe_password')))
            {
                echo"<script>
                    window.location='".base_url()."Dashboard'
                </script>";  
            }
            else
            {
                die('<div class="alert alert-danger" >'.'Check username and password'.'</div>');            
            }
        }
        else 
        {
            echo validation_errors();
        }
	}
	
	public function Logout()  // 
    {
        $this->session->unset_userdata("exe_id");
       	$this->session->unset_userdata("exe_login");
        $this->session->unset_userdata("exe_password");
        $this->session->unset_userdata("exe_name");
        $this->session->unset_userdata("exe_contact_number");
        redirect(base_url('Users/Login'));  
    }
}
 ?>