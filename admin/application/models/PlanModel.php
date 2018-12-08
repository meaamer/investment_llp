<?php
class PlanModel extends CI_Model {
/******Function to Add Plan************/
	public function AddPlan($data){
		$this->db->insert('plan',$data);
		return true;
	}


/******Function to Update Plan************/
	public function UpdatePlan($data,$id){
		$this->db->where('plan_id',$id);
		$this->db->update('plan',$data);
		return true;
	}

	
/******Function for PlanList************/
	public function PlanList($id=null){
		$this->db->select('*');
		$this->db->from('plan');
		if($id!=null){
			$this->db->where('plan_id',$id);
		}
		$q=$this->db->get();
		return $q->result_array();
	}
	

/******Function to Delete Plan************/	
	public function DeletePlan($plan_id){
		$this->db->where('plan_id',$plan_id);
		$this->db->delete('plan');
		return true;	
	}
	

	


}
?>