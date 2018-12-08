<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerModel extends CI_Model {

	/******Function to Update Customers************/
	public function UpdateCustomer($id){
		$data=array('name' => $this->input->post('name'),
						'age' => $this->input->post('age'),
						'gender' => $this->input->post('gender'),
						'age' => $this->input->post('age'),
						'mobile_number' => $this->input->post('mobile_number'),
						'pan' => $this->input->post('pan'),
						'email' => $this->input->post('email'),
						'introduced_by' => $this->input->post('introduced_by'),
						'nominee' => $this->input->post('nominee'),
						'relation_with_nominee' => $this->input->post('relation_with_nominee'),
						'r_contact_number' => $this->input->post('r_contact_number'),
						'bank_name' => $this->input->post('bank_name'),
						'account_number' => $this->input->post('account_number'),
						'ifsc_code' => $this->input->post('ifsc_code'),
						'branch_name' => $this->input->post('branch_name'),
						'date' => $this->input->post('date'),
						'mode_of_payment' => $this->input->post('mode_of_payment'),
						'amount' => $this->input->post('amount'),
						'amount_in_words' => $this->input->post('amount_in_words'),
						'payment_ref_number' => $this->input->post('payment_ref_number'),
						'plan' => $this->input->post('plan'),
						'executive' =>$this->session->userdata('userid') 
						);
		$this->db->where('id',$id);
		$this->db->update('customers',$data);
		return true;
	}	


	/*********Function for Getting Customer Details****************/	
	public function CustomerDetails($id){
		$this->db->select('*');
		$this->db->from('customers');
		$this->db->join('plan', 'plan.plan_id = customers.plan', 'left');
		$this->db->where('id',$id);
		$q=$this->db->get();
		return $q->result_array()[0];
	}
	
	/***Function TO Get Plans********/
	public function GetPlans(){
		$this->db->select('*');
		$this->db->from('plan');
		$result=$this->db->get();
		return $result->result_array();
	}
	
	
/********Function to check payment refrence number**********/	
	public function PayRefNum($ref_number){
		$this->db->select('*');
		$this->db->from('customers');
		$this->db->where('payment_ref_number',$ref_number);
		$query=$this->db->get();
			if($query->num_rows()>0)
			{
				
				return true;
			}
			else
			{
				return false;
			}
		
		
	}

	
	
	
	/***************function for datatable pligins**********************/
	
	var $table="customers";

	var $selectColoum=array("id","name","age","gender","mobile_number","pan","email","introduced_by","nominee","relation_with_nominee","r_contact_number","bank_name","account_number","ifsc_code","branch_name","date","sign","mode_of_payment","amount","amount_in_words","payment_ref_number","plan","status");
		
	var $order_column=array("id","name",null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,"status");


/*******Function for Search Query****/
	public function SearchQuery($status){
		
		$this->db->select($this->selectColoum);
		$this->db->from($this->table);
		$this->db->where('status',$status);
		
		
		
		if(isset($_POST["search"]["value"])){
			$this->db->like("name",$_POST["search"]["value"]);
			
		}
		
		if(isset($_POST["order"])){
			$this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
			
		}
		else{
			$this->db->order_by('id', 'DESC');  
		}
		
	}
	
	
/*******Function for Making Database Table****/	
	public function MakeTable($status){
		$this->SearchQuery($status);  
           if($_POST["length"]!= -1){  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
	}
	

/*******Function for Filtering Data******/	
	public function GetFilterData($status){
		$this->SearchQuery($status);  
        $query = $this->db->get();  
        return $query->num_rows();  
	}
	
	
/*******Function for Getting all Data******/	
	public function GetAllData($status){
		$this->db->select("*");  
        $this->db->from($this->table);  
        return $this->db->count_all_results();  
	}
	
	

	
}
?>