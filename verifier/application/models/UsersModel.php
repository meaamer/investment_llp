<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class UsersModel extends CI_Model
{
	// check username password and create session here
	public function CheckUserDetail($username,$password) {

			
			$this->db->select("*");
			$this->db->from("verifier");
			$this->db->where("ver_login",$username);
			$this->db->where("ver_password",$password);
			$query=$this->db->get();
			if($query->num_rows())
			{
				
				$row = $query->result_array()[0];
				$this->session->set_userdata('userid',$row["ver_id"]);
				$this->session->set_userdata('admin_name',$row["ver_name"]);
				$this->session->set_userdata('username',$row["ver_login"]);
				$this->session->set_userdata('password',$row["ver_password"]);
				return true;
			}
			else
			{
				return false;
			}
	}
	
}
 ?>