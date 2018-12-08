<?php
class UserModel extends CI_Model{


	public function Login(){
		$this->db->select("*");
		$this->db->from("customers");
		$this->db->where("login_id",$this->input->get_post("login_id"));
		$this->db->where("password",$this->input->get_post("login_pass"));
		$q = $this->db->get();
		if($q->num_rows()=="0"){
			die("<div class='alert alert-danger'>Invalid Login ID/Pass!</div>");
		}else{
			$row = $q->result_array()[0];
			$this->session->set_userData("user_id",$row['id']);
			die("<div class='alert alert-success'>Login success please wait while redirect...</div><script>window.location='".base_url()."Customers'</script>");
		}		
	}



	



	public function Create(){
		
		$data = array(
		"name"=>$this->input->get_post("name"),
		"mobile"=>$this->input->get_post("mobile"),
		"login_id"=>$this->input->get_post("login_id"),
		"login_pass"=>$this->input->get_post("login_pass"),
		"designation"=>$this->input->get_post("designation"),
		);
		$this->db->insert("users",$data);
		return ($this->db->affected_rows() != 1) ? false : true;
	}
	public function Update(){
		
		$data = array(
		
		"name"=>$this->input->get_post("name"),
		"mobile"=>$this->input->get_post("mobile"),
		"login_id"=>$this->input->get_post("login_id"),
		"login_pass"=>$this->input->get_post("login_pass"),
		"designation"=>$this->input->get_post("designation"),
		);
		
		$this->db->where("user_id",$this->input->get_post("user_id"));
		$this->db->update("users",$data);
		return ($this->db->affected_rows() != 1) ? false : true;
	}


	public function GetUserInfo($userId=null){
		$this->db->select("*");
		$this->db->from("users");
		if($userId!=null){
			$this->db->where("user_id",$userId);
		}
		$q = $this->db->get();
		if($q->num_rows()==0){
			return $q->num_rows();
		}
		return $q->result_array();
	}
	
	
	  var $table = "users";  
      var $select_column = array("user_id", "name","mobile", "login_id", "login_pass","designation","user_status");  
      var $order_column = array("user_id", "name", null, null, null, null,"user_status");  
      function make_query()  
      {  
           $this->db->select($this->select_column);  
           $this->db->from($this->table);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("name", $_POST["search"]["value"]);  
               
                $this->db->or_like("mobile", $_POST["search"]["value"]);  
                $this->db->or_like("login_id", $_POST["search"]["value"]);  
                $this->db->or_like("user_id", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('user_id', 'DESC');  
           }  
      }  
      function make_datatables(){  
           $this->make_query();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function get_filtered_data(){  
           $this->make_query();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table);  
           return $this->db->count_all_results();  
      }  
}
?>