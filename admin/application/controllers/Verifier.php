 <?php 
class Verifier extends CI_Controller{
	
	public function NewVerifier(){
		$this->load->view('includes/header');
		$this->load->view('includes/aside');
		//$this->load->model('BookingModel');
		//$data['cabs']=$this->BookingModel->CabList();
		
		$data="";
		if( $id!=null ){
			$this->load->model('VerifierModel');
			$data['rows']=$this->VerifierModel->VerifierList($id)[0];
				
		}
		
		$this->load->view('Verifier/NewVerifier',$data);
		$this->load->view('includes/footer');
	}
	


/*********Function to Add Verifier**************/	
	public function AddNewVerifier(){
		header('Access-Control-Allow-Origin:*');
		$this->load->library("form_validation");
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger 
		style="font-size:px;" >','</div>');
		
		$this->form_validation->set_rules('ver_name', 'Verifer Name', 'required');
		$this->form_validation->set_rules('ver_contact_number', 'Verifer Contact Number', 'required|numeric|exact_length[10]');
		$this->form_validation->set_rules('ver_address', 'Verifer Address', 'required');
		$this->form_validation->set_rules('ver_uid', 'UID', 'required');
		$this->form_validation->set_rules('ver_login', 'Login Id', 'required');
		$this->form_validation->set_rules('ver_password', 'Password', 'required');
		
		
		if($this->form_validation->run()){
			
			$this->load->model('VerifierModel');
			
			$data=array('ver_name' => $this->input->post('ver_name'),
						'ver_contact_number' => $this->input->post('ver_contact_number'),
						'ver_address' => $this->input->post('ver_address'),
						'ver_uid' => $this->input->post('ver_uid'),
						'ver_login' => $this->input->post('ver_login'),
						'ver_password' => $this->input->post('ver_password'));
						

			
			
			$result =$this->VerifierModel->AddVerifer($data);
			if ($result == true){	
				
					die ('<div class="alert alert-success pull-left">
					Submited successfully</div>
					<script>$("#new_ver_form")[0].reset();</script>');
			} 
			else{
				die ('Please Resubmit');
			}
		}
		else{
			echo validation_errors();
		}
	}
	



/*********Function to Add Verifier**************/	
	public function UpdateVerifier($id){
		header('Access-Control-Allow-Origin:*');
		$this->load->library("form_validation");
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger 
		style="font-size:px;" >','</div>');
		
		$this->form_validation->set_rules('ver_name', 'Verifer Name', 'required');
		$this->form_validation->set_rules('ver_contact_number', 'Verifer Contact Number', 'required|numeric|exact_length[10]');
		$this->form_validation->set_rules('ver_address', 'Verifer Address', 'required');
		$this->form_validation->set_rules('ver_uid', 'UID', 'required');
		$this->form_validation->set_rules('ver_login', 'Login Id', 'required');
		$this->form_validation->set_rules('ver_password', 'Password', 'required');
		
		
		if($this->form_validation->run()){
			
			$this->load->model('VerifierModel');
			
			$data=array('ver_name' => $this->input->post('ver_name'),
						'ver_contact_number' => $this->input->post('ver_contact_number'),
						'ver_address' => $this->input->post('ver_address'),
						'ver_uid' => $this->input->post('ver_uid'),
						'ver_login' => $this->input->post('ver_login'),
						'ver_password' => $this->input->post('ver_password'));
						

			
			
			$result =$this->VerifierModel->UpdateVerifer($data,$id);
			if ($result == true){	
				
					die ('<div class="alert alert-success pull-left">
					Updated successfully</div>
					<script>$("#new_ver_form")[0].reset();</script>');
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
	public function VerifierList(){
		$this->load->view('includes/header');
		$this->load->view('includes/aside');
		$this->load->model('VerifierModel');
		$data['exe_list']=$this->VerifierModel->VerifierList();
		$this->load->view('Verifier/VerifierList',$data);
		$this->load->view('includes/footer');
	}


/********Delete Plan *************/
	public function DeleteVerifer(){
		header('Access-Control-Allow-Origin:*');
		$this->load->model('VerifierModel');
		$final= $this->VerifierModel->DeleteVerifer($this->input->get_post('ver_id'));
		if( $final==true ){
			die('Delete Successfully');
		}
		else{
			die('Unable To Delete');
		}
		
		
	}


}

?>