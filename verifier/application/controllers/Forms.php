<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forms extends CI_Controller {

/**********Function for Customer List*************/
	public function FormListView(){
		header('Access-Control-Allow-Origin:*');
		$this->load->view('includes/header');
		$this->load->view('includes/aside');
		$this->load->view('Customer/CustomerList');
		$this->load->view('includes/footer');
	}	


/**********Function for Getting Customer List through datatable method*************/	
	public function CustomerList(){
		$this->load->model('CustomerModel');  
		$fetch_data = $this->CustomerModel->MakeTable();  
		$data = array();
		
		foreach($fetch_data as $row){
			$sub_array= array();
			$sub_array[]=$row->id;
			$sub_array[]=$row->name;
			$sub_array[]=$row->mobile_number;
			$sub_array[]=$row->pan;
			$sub_array[]=$row->plan;
			if($row->status==0){
				$sub_array[]='<a class="btn btn-xs btn-danger" >Pending</a>';	
			}else if($row->status==1){
				$sub_array[]='<a class="btn btn-xs btn-success" Verified</a>';
			}
			$sub_array[]='<a href="'.base_url().'Customer/CustomerDetail/'.$row->id.'" class="btn btn-sm btn-success">Details</a>';
			/*$sub_array[]='<a href="'.base_url().'Customer/CustomerDetail/'.$row->id.'" class="btn btn-success"><i class="fa fa-info" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="'.base_url().'Customer/DeleteCustomer/'.$row->id.'" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>';*/
			
			
			$data[]=$sub_array;
		}
		
		$output = array(
			"draw"                  =>     intval($_POST["draw"]),  
            "recordsTotal"          =>     $this->CustomerModel->GetAllData(),  
            "recordsFiltered"       =>     $this->CustomerModel->GetFilterData(),  
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