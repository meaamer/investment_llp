<?php
class VerifierModel extends CI_Model {

/******Function to Add Plan************/
	public function AddVerifer($data){
		$this->db->insert('verifier',$data);
		return true;
	}


/******Function to Update Plan************/
	public function UpdateVerifer($data,$id){
		$this->db->where('ver_id',$id);
		$this->db->update('verifier',$data);
		return true;
	}	
	



/******Function for PlanList************/
	public function VerifierList(){
		$this->db->select('*');
		$this->db->from('verifier');
		$q=$this->db->get();
		return $q->result_array();
	}
	

/******Function to Delete Plan************/	
	public function DeleteVerifier($ver_id){
		$this->db->where('ver_id',$ver_id);
		$this->db->delete('verifier');
		return true;	
	}
	

	


}
?>