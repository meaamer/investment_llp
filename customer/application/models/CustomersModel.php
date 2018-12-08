<?php 
/**
* 
*/
class CustomersModel extends CI_Model
{


	public function CustomerDetails(){

		$this->db->select('*');
		$this->db->from('customers');
		$this->db->where('id',$this->session->userdata('user_id'));
		$result=$this->db->get();
		return $result->result_array();
	}

	public function Benefit(){
		$this->db->select('*');
		$this->db->from('customers');
		$this->db->join('plan','plan.plan_id = customers.plan','left');
		$this->db->join('transaction','transaction.plan_id = customers.plan','left');
		$this->db->where('id',$this->session->userdata('user_id'));
		$this->db->where('customers.id',$this->session->userdata('user_id'));
		$this->db->order_by("transaction.trans_id", "desc");
		$result=$this->db->get();
		return $result->result_array();
	}
	


	


}
 ?>