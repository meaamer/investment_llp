<?php 
class Executive extends CI_Controller{
	
	public function NewExecutive($id=null){
		$this->load->view('includes/header');
		$this->load->view('includes/aside');
		
		$data="";
		if( $id!=null ){
			$this->load->model('ExeModel');
			$data['rows']=$this->ExeModel->ExeList($id)[0];
				
		}
		//$this->load->model('BookingModel');
		//$data['cabs']=$this->BookingModel->CabList();
		$this->load->view('Executive/NewExe',$data);
		$this->load->view('includes/footer');
	}
	
	
	public function AddNewExe(){
		header('Access-Control-Allow-Origin:*');
		$this->load->library("form_validation");
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger 
		style="font-size:px;" >','</div>');
		
		$this->form_validation->set_rules('exe_name', 'Executive Name', 'required');
		$this->form_validation->set_rules('exe_contact_number', 'Executive Contact Number', 'required|numeric|exact_length[10]');
		$this->form_validation->set_rules('exe_address', 'Executive Address', 'required');
		$this->form_validation->set_rules('uid', 'UID', 'required');
		$this->form_validation->set_rules('exe_login', 'Login Id', 'required');
		$this->form_validation->set_rules('exe_password', 'Password', 'required');
		
		
		if($this->form_validation->run()){
			
			$this->load->model('ExeModel');
			
			$data=array('exe_name' => $this->input->post('exe_name'),
						'exe_contact_number' => $this->input->post('exe_contact_number'),
						'exe_address' => $this->input->post('exe_address'),
						'uid' => $this->input->post('uid'),
						'exe_login' => $this->input->post('exe_login'),
						'exe_password' => $this->input->post('exe_password'));
						

			
			
			$result =$this->ExeModel->AddExe($data);
			if ($result == true){	
				
					die ('<div class="alert alert-success pull-left">
					Submited successfully</div>
					<script>$("#new_exe_form")[0].reset();</script>');
			} 
			else{
				die ('Please Resubmit');
			}
		}
		else{
			echo validation_errors();
		}
	}
	


	public function UpdateExe($id){
		header('Access-Control-Allow-Origin:*');
		$this->load->library("form_validation");
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger 
		style="font-size:px;" >','</div>');
		
		$this->form_validation->set_rules('exe_name', 'Executive Name', 'required');
		$this->form_validation->set_rules('exe_contact_number', 'Executive Contact Number', 'required|numeric|exact_length[10]');
		$this->form_validation->set_rules('exe_address', 'Executive Address', 'required');
		$this->form_validation->set_rules('uid', 'UID', 'required');
		$this->form_validation->set_rules('exe_login', 'Login Id', 'required');
		$this->form_validation->set_rules('exe_password', 'Password', 'required');
		
		
		if($this->form_validation->run()){
			
			$this->load->model('ExeModel');
			
			$data=array('exe_name' => $this->input->post('exe_name'),
						'exe_contact_number' => $this->input->post('exe_contact_number'),
						'exe_address' => $this->input->post('exe_address'),
						'uid' => $this->input->post('uid'),
						'exe_login' => $this->input->post('exe_login'),
						'exe_password' => $this->input->post('exe_password'));
						

			
			
			$result =$this->ExeModel->UpdateExe($data,$id);
			if ($result == true){	
				
					die ('<div class="alert alert-success pull-left">
					Updated successfully</div>
					<script>$("#new_exe_form")[0].reset();</script>');
			} 
			else{
				die ('Please Resubmit');
			}
		}
		else{
			echo validation_errors();
		}
	}



/********Plan List*************/
	public function ExecutiveList(){
		$this->load->view('includes/header');
		$this->load->view('includes/aside');
		$this->load->model('ExeModel');
		$data['exe_list']=$this->ExeModel->ExeList();
		$this->load->view('Executive/ExeList',$data);
		$this->load->view('includes/footer');
	}


/********Delete Plan *************/
	public function DeleteExe(){
		header('Access-Control-Allow-Origin:*');
		$this->load->model('ExeModel');
		$final= $this->ExeModel->DeleteExe($this->input->get_post('exe_id'));
		if( $final==true ){
			die('Delete Successfully');
		}
		else{
			die('Unable To Delete');
		}
		
		
	}


}

?>