<?php 

/**
* 
*/
class Customers extends CI_Controller
{


	public function index(){
		$this->load->view('includes/header');
		$this->load->model('CustomersModel');
		$data['detail']=$this->CustomersModel->CustomerDetails()[0];
		$this->load->view('customers',$data);
		$this->load->view('includes/footer');
		

	}


	public function Benefit(){

		$this->load->view('includes/header');
		$this->load->model('CustomersModel');
		$data['profits']=$this->CustomersModel->Benefit();
		//die(print_r($data));
		$this->load->view('BenefitView',$data);
		$this->load->view('includes/footer');
	}
	
	




}
 ?>