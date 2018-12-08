<?php 
class Plan extends CI_Controller{
	public function NewPlan($id=null){
		$this->load->view('includes/header');
		$this->load->view('includes/aside');
		$data="";
		if( $id!=null ){
			$this->load->model('PlanModel');
			$data['rows']=$this->PlanModel->PlanList($id)[0];
				
		}
		//$data['rows']=$this->PlanModel->PlanList($id);
		$this->load->view('Plan/NewPlan',$data);
		$this->load->view('includes/footer');
	}
	
	
	public function AddNewPlan(){
		
		header('Access-Control-Allow-Origin:*');
		$this->load->library("form_validation");
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger 
		style="font-size:px;" >','</div>');
		
		$this->form_validation->set_rules('plan_title', 'Plan Name', 'required');
		$this->form_validation->set_rules('plan_code', 'Plan Code', 'required');
		$this->form_validation->set_rules('plan_duration', 'Plan Duration', 'required');
		$this->form_validation->set_rules('percentage', 'Percentage', 'required');
		
		
		if($this->form_validation->run()){
			
			$this->load->model('PlanModel');
			
			$data=array('plan_title' => $this->input->post('plan_title'),
						'plan_code' => $this->input->post('plan_code'),
						'plan_duration' => $this->input->post('plan_duration'),
						'percentage' => $this->input->post('percentage'));
						

			
			
			$result =$this->PlanModel->AddPlan($data);
			if ($result == true){	
				
					die ('<div class="alert alert-success pull-left">
					Submited successfully</div>
					<script>$("#new_plan_form")[0].reset();</script>');
			} 
			else{
				die ('Please Resubmit');
			}
		}
		else{
			echo validation_errors();
		}
	}
	



/*******Function For Updating New Plan**************/
	
	public function UpdatePlan($id){
		
		header('Access-Control-Allow-Origin:*');
		$this->load->library("form_validation");
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger 
		style="font-size:px;" >','</div>');
		
		$this->form_validation->set_rules('plan_title', 'Plan Name', 'required');
		$this->form_validation->set_rules('plan_code', 'Plan Code', 'required');
		$this->form_validation->set_rules('plan_duration', 'Plan Duration', 'required');
		$this->form_validation->set_rules('percentage', 'Percentage', 'required');
		
		
		if($this->form_validation->run()){
			
			$this->load->model('PlanModel');
			
			$data=array('plan_title' => $this->input->post('plan_title'),
						'plan_code' => $this->input->post('plan_code'),
						'plan_duration' => $this->input->post('plan_duration'),
						'percentage' => $this->input->post('percentage'));
						

			
			
			$result =$this->PlanModel->UpdatePlan($data,$id);
			if ($result == true){	
				
					die ('<div class="alert alert-success pull-left">
					Updated successfully</div>
					<script>$("#new_plan_form")[0].reset();</script>');
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
	public function PlanList(){
		$this->load->view('includes/header');
		$this->load->view('includes/aside');
		$this->load->model('PlanModel');
		$data['plan_list']=$this->PlanModel->PlanList();
		$this->load->view('Plan/PlanList',$data);
		$this->load->view('includes/footer');
	}


/********Delete Plan *************/
	public function DeletePlan(){
		header('Access-Control-Allow-Origin:*');
		$this->load->model('PlanModel');
		$final= $this->PlanModel->DeletePlan($this->input->get_post('plan_id'));
		if( $final==true ){
			die('Delete Successfully');
		}
		else{
			die('Unable To Delete');
		}
		
		
	}


}

?>