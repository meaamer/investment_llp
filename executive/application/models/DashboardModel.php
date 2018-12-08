<?php
class DashboardModel extends CI_Model {
/*****Function for getting total forms****************/	
	public function TotalForm(){
		$this->db->select('*');
		$this->db->from('customers');
		$this->db->where('executive',$this->session->userdata('userid'));
		$result=$this->db->get();
		return $result->num_rows();
	}
	

/*****Function for getting Verified Form****************/	
	public function VerifiedForm(){
		$this->db->select('*');
		$this->db->from('customers');
		$this->db->where('executive',$this->session->userdata('userid'));
		$this->db->where('status',1);
		$result=$this->db->get();
		return $result->num_rows();
	}
	
/*****Function for getting Verified Form****************/	
	public function PendingForm(){
		$this->db->select('*');
		$this->db->from('customers');
		$this->db->where('executive',$this->session->userdata('userid'));
		$this->db->where('status',0);
		$result=$this->db->get();
		return $result->num_rows();
	}		
	
	
}
?>