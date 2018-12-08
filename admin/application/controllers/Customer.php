<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
	
	
	public function UpdateCustomer($id){
		header('Access-Control-Allow-Origin:*');
		$this->load->library("form_validation");
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger 
		style="font-size:px;" >','</div>');
		$this->form_validation->set_rules('name', 'Customer Name', 'required');
		$this->form_validation->set_rules('age', 'Customer Age', 'required|numeric');
		$this->form_validation->set_rules('gender', 'Customer Gender', 'required');
		$this->form_validation->set_rules('mobile_number', 'Customer Contact Number', 'required|numeric|exact_length[10]');
		$this->form_validation->set_rules('pan', 'PAN Number', 'required');
		//$this->form_validation->set_rules('email', 'Customer Email', 'required|valid_email');
		$this->form_validation->set_rules('introduced_by', 'Introducing Person', 'required');
		$this->form_validation->set_rules('nominee', 'Nominee', 'required');
		$this->form_validation->set_rules('relation_with_nominee', 'Relation With Nominee', 'required');
		$this->form_validation->set_rules('r_contact_number', 'Nominee Contact Number', 'required|numeric|exact_length[10]');
		$this->form_validation->set_rules('bank_name', 'Bank Name', 'required');
		$this->form_validation->set_rules('account_number', 'Account Number', 'required');
		$this->form_validation->set_rules('ifsc_code', 'IFSC Code', 'required');
		$this->form_validation->set_rules('branch_name', 'Branch Name', 'required');
		$this->form_validation->set_rules('date', 'Date', 'required');
		$this->form_validation->set_rules('mode_of_payment', 'Mode Of Payment', 'required');
		//$this->form_validation->set_rules('payment_number', 'Payment Number', 'required');
		$this->form_validation->set_rules('amount', 'Amount', 'required');
		$this->form_validation->set_rules('amount_in_words', 'Amount In Words', 'required');
		$this->form_validation->set_rules('payment_ref_number', 'Payment Ref. Number', 'required');
		$this->form_validation->set_rules('plan', 'Plan', 'required');
		
		
		if($this->form_validation->run())
		{
			
			$this->load->model('CustomerModel');
			$result = $this->CustomerModel->UpdateCustomer($id);
			if ($result == true) 
			{	
				
					die ('<div class="alert alert-success" > Form Submited successfully 
					</div><script>$("#customer_form")[0].reset();</script>');
			} 
			else 
			{
				die ('<div class="alert alert-danger" > Please Resubmit</div>');
			}	
			
			
			
			
		}
		else 
		{
			echo validation_errors();
		}
	}
	

/**********Function for Customer List*************/
	public function CustomerListView($id=null){
		header('Access-Control-Allow-Origin:*');
		$this->load->view('includes/header');
		$this->load->view('includes/aside');
		if ($id!=null) {
			$this->load->model('CustomerModel'); 
			$data['plans']=$this->CustomerModel->GetPlans(); 
			$data['rows']=$this->CustomerModel->CustomerDetails($id);  
			$this->load->view('Customer/SignUpForm',$data);
		} else {
			$this->load->view('Customer/CustomerList');
		}
		
		
		$this->load->view('includes/footer');
	}	



/**********Function for Verified Customer List*************/
	public function VerifiedList(){
		header('Access-Control-Allow-Origin:*');
		$this->load->view('includes/header');
		$this->load->view('includes/aside');
		$this->load->view('Customer/VerifiedList');
		$this->load->view('includes/footer');
	}	


	/**********Function for Verified Customer List*************/
	public function PendingList(){
		header('Access-Control-Allow-Origin:*');
		$this->load->view('includes/header');
		$this->load->view('includes/aside');
		$this->load->view('Customer/PendingList');
		$this->load->view('includes/footer');
	}		



	
/**********Function for Getting Customer List through datatable method*************/	
	public function CustomerList($status){
		

		$this->load->model('CustomerModel');  
		$fetch_data = $this->CustomerModel->MakeTable($status);  
		$data = array();
		
		foreach($fetch_data as $row){
			$sub_array= array();
			$sub_array[]=$row->id;
			$sub_array[]=$row->name;
			$sub_array[]=$row->mobile_number;
			$sub_array[]=$row->amount;
			$sub_array[]=$row->plan;
			$sub_array[]=$row->account_number;
			$sub_array[]=$row->pan;
			if($row->status==0){
				$sub_array[]='<a class="btn btn-xs btn-danger" >Pending</a>';	
			}else if($row->status==1){
				$sub_array[]='<a class="btn btn-xs btn-success">Verified</a>';
			}else if($row->status==2){
				$sub_array[]='<a class="btn btn-xs btn-warning">Rejected</a>';
			}
			
			$sub_array[]='<a href="'.base_url().'Customer/CustomerDetail/'.$row->id.'" class="btn btn-sm btn-primary">Details</a>';
			
			
			
			$data[]=$sub_array;
		}
		
		$output = array(
			"draw"                  =>     intval($_POST["draw"]),  
            "recordsTotal"          =>     $this->CustomerModel->GetAllData($status),  
            "recordsFiltered"       =>     $this->CustomerModel->GetFilterData($status),  
            "data"                  =>     $data  
		
		);
		echo json_encode($output);
		
	}
	
	/**********Function to Show Customer Details************/
	public function CustomerDetail($id){
		$this->load->view('includes/header');
		$this->load->view('includes/aside');
		$this->load->model('CustomerModel');
		$data['details']=$this->CustomerModel->CustomerDetails($id);
		//die(print_r($data));
		$this->load->view('Customer/CustomerDetails',$data);
		$this->load->view('includes/footer');	
	}
	
	
	
	
	
	





}
?>