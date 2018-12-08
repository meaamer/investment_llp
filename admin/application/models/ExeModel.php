<?php
class ExeModel extends CI_Model {
/******Function to Add Plan************/
	public function AddExe($data){
		$this->db->insert('executive',$data);
		return true;
	}
	
	

/******Function to Update Plan************/
	public function UpdateExe($data,$id){
		$this->db->where('exe_id',$id);
		$this->db->update('executive',$data);
		return true;
	}	
	
	


/******Function for PlanList************/
	public function ExeList(){
		$this->db->select('*');
		$this->db->from('executive');
		$q=$this->db->get();
		return $q->result_array();
	}
	

/******Function to Delete Plan************/	
	public function DeleteExe($exe_id){
		$this->db->where('exe_id',$exe_id);
		$this->db->delete('executive');
		return true;	
	}
	

	


}
?>