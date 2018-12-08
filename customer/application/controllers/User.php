<?php
class User extends CI_Controller{


	public function index(){
		$this->load->helper('url');
		$dataheader = array('title'=>'Sign In');
		$this->load->view("Users/Login");
		$this->load->view('includes/footer');
	}


  
        
        
	
	public function Login(){
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: GET, POST'); 
		$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('login_id', 'Please enter login id', 'required');
        $this->form_validation->set_rules('login_pass', 'Please enter login password', 'required');
        
        

        if ($this->form_validation->run() == FALSE)
        {
                echo validation_errors(); 
        }
        else
        {
                $this->load->model("UserModel");
                $this->UserModel->Login();
        }
	}


 public function Logout(){

       $this->session->sess_destroy();
         redirect(base_url('User')); 

    }







	public function NewUser($user_id=null){
		$this->load->helper('url');
		
		$dataheader = array('title'=>'NEW USER');
		$this->load->view("includes/header",$dataheader);	
		
		$this->load->model("UserModel");
        $data['rows']="";
        if($user_id!=null){
        	$data['rows']=	$this->UserModel->GetUserInfo()[0];
        	
        }
		$this->load->view("Users/NewUser",$data);
		$this->load->view('includes/footer');
			//$this->load->view('includes/User_Registration_view');
	}
	public function CreateUser(){
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: GET, POST'); 
		$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('name', 'User Name', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required');
        $this->form_validation->set_rules('login_id', 'Login ID', 'required');
        $this->form_validation->set_rules('login_pass', 'Login Password', 'required');
        $this->form_validation->set_rules('designation', 'Designation', 'required');
        

        if ($this->form_validation->run() == FALSE)
        {
                echo validation_errors(); 
        }
        else
        {
                $this->load->model("UserModel");
                if($this->UserModel->Create()){
					die("<div class='alert alert-success'>User has been created</div><script>$('#userForm')[0].reset();</script>");
				}else{
					die("<div class='alert alert-danger'>Try again process failed</div>");
				}
        }
	}
	
	public function Update(){
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: GET, POST'); 
		$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('name', 'User Name', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required');
        $this->form_validation->set_rules('login_id', 'Login ID', 'required');
        $this->form_validation->set_rules('login_pass', 'Login Password', 'required');
        $this->form_validation->set_rules('designation', 'Designation', 'required');
        

        if ($this->form_validation->run() == FALSE)
        {
                echo validation_errors(); 
        }
        else
        {
                $this->load->model("UserModel");
                if($this->UserModel->Update()){
					die("<div class='alert alert-success'>User has been updated</div>");
				}else{
					die("<div class='alert alert-danger'>Try again process failed</div>");
				}
        }
	}
	public function Remove($user_id){
		
	}
	public function UserList(){
		$this->load->helper('url');
		
		$dataheader = array('title'=>'NEW USER');
		$this->load->view("includes/header",$dataheader);	
		
		$this->load->model("UserModel");
        
		$this->load->view("Users/UserList");
		$this->load->view('includes/footer');
	}
	function GetUsers(){ 
	$this->load->helper('url'); 
           $this->load->model("UserModel");  
           $fetch_data = $this->UserModel->make_datatables();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
                
                $sub_array[] = $row->user_id;  
                $sub_array[] = $row->name;  
                $sub_array[] = $row->mobile;  
                $sub_array[] = $row->login_id;  
                $sub_array[] = $row->login_pass;  
                $sub_array[] = $row->designation;  
                $sub_array[] = '<a  href="'.base_url().'User/NewUser/'.$row->user_id.'" class="btn btn-warning btn-xs">Update</a><button type="button" name="delete" id="'.$row->user_id.'" class="btn btn-danger btn-xs">Delete</button>';  
                
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw" =>intval($_POST["draw"]),  
                "recordsTotal"=>$this->UserModel->get_all_data(),  
                "recordsFiltered"=>$this->UserModel->get_filtered_data(),  
                "data"=>$data  
           );  
           echo json_encode($output);  
      }  
	
}
?>
