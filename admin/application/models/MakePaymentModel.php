<?php 
/**
* 
*/
class MakePaymentModel extends CI_Model
{
	/*********Function for Getting Customer Details****************/	

	public $plan = 4;
	public function CustomerDetails($plan=null){
		$this->db->select('*');
		$this->db->from('customers');
		$this->db->join('plan','plan.plan_id = customers.plan', 'left');
		$this->db->where('status',1);
		$q=$this->db->get();
		return $q->result_array();
	}
	
	/***Function TO Get Plans********/
	public function GetPlans(){
		$this->db->select('*');
		$this->db->from('plan');
		$result=$this->db->get();
		return $result->result_array();
		
	}


	public function PlanSearch($search){
		$this->db->select('*');
		$this->db->from('customers');
		$this->db->join('plan','plan.plan_id = customers.plan', 'left');
		$this->db->join('transaction','transaction.customer_id =customers.id', 'left');
		$this->db->where('customers.plan',$search);
		$this->db->where('customers.status',1);
		$this->db->order_by("id","desc");
		$result = $this->db->get();

		$data = $result->result_array();
		//die(print_r());
		foreach ($data as $key=>$values) {
			 //echo print_r($values);
             //echo $payment_cycle=$values['payment_cycle'];
             //echo $last_payment_date=$values['tran_date'];
             //echo date('d-m-Y');
			//$s=$values['tran_date'];
			//$date1=date_create_from_format('Y/m/d', $s);
			// $date1->getTimestamp();
			//$date1="2017-12-22";
			//$date2="2017-01-22";

            // $diff=date_diff($date2,$date1);
             //echo $diff->format("%R%a days");
			echo $date1=date_create($values['tran_date']);
			//$date2=date_create("2019-12-12");
			//$diff=date_diff($date1,$date2);
			//echo $diff->format("%R%a days");


		}

	}

	public function PayToCustomer($data){
		$this->db->insert('transaction',$data);
		return true;
	}


	/********Function For getting customers list for payment****************/

	public function CustomerPaymentDetails(){



	}

	
	
}
 ?>