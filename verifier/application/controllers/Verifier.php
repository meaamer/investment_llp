<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Verifier extends CI_Controller {
	
	
	public Function VerifyApp($id){
		header('Access-Control-Allow-Origin:*');
		$this->load->library("form_validation");
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger 
		style="font-size:px;" >','</div>');
		$this->form_validation->set_rules('activation_date', 'Activation Date', 'required');
			if($this->form_validation->run()){
			
			$this->load->model('CustomerModel');
				
				$data=array('activation_date' => $this->input->post('activation_date'),
							'status'=>'1',
							'verifier'=>$this->session->userdata('userid'));
				
				
				$result = $this->CustomerModel->VerifyForm($id,$data);
				
				
				if ($result == true){	
				die ('<div class="alert alert-success" >Form Submited successfully 
					</div><script>window.location="'.base_url().'Dashboard"</script>');
				}else{
					die ('<div class="alert alert-danger" > Please Resubmit</div>');
			    }
				
				
				
		    }else{
				echo validation_errors();
			}
		
		
	}




}
?>