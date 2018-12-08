<?php 

class Dashboard extends CI_Controller{
		
		public function index(){
			$this->load->view('includes/header');
			$this->load->view('includes/aside');
			$this->load->model('DashboardModel');
			$data['total']=$this->DashboardModel->TotalForm();
			$data['verified']=$this->DashboardModel->VerifiedForm();
			$data['pending']=$this->DashboardModel->PendingForm();
			//die(print_r($data));
			$this->load->view('dashboard/DashboardView',$data);
			$this->load->view('includes/footer');
		}
}
?>