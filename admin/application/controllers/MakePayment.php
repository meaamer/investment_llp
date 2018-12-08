<?php 

/**
* 
*/
class MakePayment extends CI_Controller
{
	public function CustomerDetail($id=null){
		$this->load->view('includes/header');
		$this->load->view('includes/aside');
		$this->load->model('MakePaymentModel');
		$data['plans']=$this->MakePaymentModel->GetPlans();
		$data['customers']=$this->MakePaymentModel->CustomerDetails();
		//die(print_r($data));
		$this->load->view('Customer/PaymentView',$data);
		$this->load->view('includes/footer');	
	
	}


	public function Search(){
		
		$search=$this->input->post("search_plan");
		$this->load->view('includes/header');
		//$this->load->view('includes/aside');
		$this->load->model('MakePaymentModel');
		$data['plans']=$this->MakePaymentModel->GetPlans();
		$data['customers']=$this->MakePaymentModel-> PlanSearch($search);
		$this->load->view('Customer/PaymentView',$data);
		$this->load->view('includes/footer');	
	
	}

	public function PayTo(){
		$this->load->model('MakePaymentModel');
		//$this->MakePaymentModel->PayToCustomer($data);
		$customer_id=$this->input->post("customer_id");
		$pay_amount=$this->input->post("pay_amount");
		$plan_id=$this->input->post("plan_id");
		$percentage = $this->input->post("percentage");
		$date = date('d-m-Y');
		$plans = $plan_id[0];

			foreach (array_combine($customer_id,$pay_amount) as $custo_id => $amount) {
    		
    		$new_amount = ($percentage / 100) * $amount;
    		//echo $id ."#".$new_width."#".$percentage."#".$date."#".$plans."<br>";

    		$data=array
    		(
			 'debit'=>0,
			 'credit'=>$new_amount,
			 'customer_id'=>$custo_id,
			 'plan_id'=>$plans,
			 'percentage'=>$percentage,
			 'date'=>$date
			);
			$this->MakePaymentModel->PayToCustomer($data);
    		
		}
	}
	
}
 ?>