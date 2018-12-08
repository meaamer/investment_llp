<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerModel extends CI_Model {
	/******Function to insert Customer Data************/
	public function AddCustomer($data){
		$this->db->insert('customers',$data);
		return true;
	}
	
	/***Function TO Get Plans********/
	public function GetPlans(){
		$this->db->select('*');
		$this->db->from('plan');
		$result=$this->db->get();
		return $result->result_array();
	}
	
	
	/***************function for datatable pligins**********************/
	
	var $table="customers";

	var $selectColoum=array("id","name","age","gender","mobile_number","pan","email","introduced_by","nominee","relation_with_nominee","r_contact_number","bank_name","account_number","ifsc_code","branch_name","date","sign","mode_of_payment","amount","amount_in_words","payment_ref_number","plan","status");
		
	var $order_column=array("id","name");


/*******Function for Search Query****/
	public function SearchQuery($status){
		//die(print_r($status));
		$this->db->select($this->selectColoum);
		$this->db->from($this->table);
		//$this->db->where('status',$status);
		//$this->db->join('cabs','cabs.cab_id = booking.cab_id','left');
		//$this->db->join('company','company.company_id = booking.company_id','left');
		//$this->db->join('vendor','vendor.vendor_id=booking.vendor_id','left');
		$this->db->where('status',$status);
		/*
		if($para==0){
		 	$this->db->where_in('vendor_status',array(0,1));	
		 }else if($para==3){
		 	$this->db->where('vendor_status',3);
		 }else if($para==4){
		 	$this->db->where('vendor_status',4);
		 }*/
		
		
		
		if(isset($_POST["search"]["value"])){
			$this->db->like("name",$_POST["search"]["value"]);
			#$this->db->or_like("company.company_name",$_POST["search"]["value"]);
			#$this->db->or_like("first_name",$_POST["search"]["value"]);
			#$this->db->or_like("traveling_date",$_POST["search"]["value"]);
			#$this->db->or_like("type",$_POST["search"]["value"]);
			
		}
		//die("#".$_POST['order']['0']['dir']);
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
	
	
/*********Function for Getting Customer Details****************/	
	public function CustomerDetails($id){
		$this->db->select('*');
		$this->db->from('customers');
		$this->db->where('id',$id);
		$q=$this->db->get();
		return $q->result_array()[0];
	}
	
	
/*********Function for Getting Customer Details****************/			
	public function VerifyForm($id,$data){
		$this->db->where('id',$id);
		$this->db->update('customers',$data);
		return true;
	}	
	
}
?>