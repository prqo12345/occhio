<?php 
	Class Admin extends CI_Controller{

		function index(){
			$this->load->view('login');
		}

		function login(){
			$this->load->view('admin');
			$login = $this->input->post('login');
			$pass = $this->input->post('pass');
			if($login == 'admin' && $pass == 111){
				$this->session->set_userdata('admin','checked');
				redirect('Admin/adminpage');
			}

			else{
				redirect('admin');
			}
		}

		function AdminPage(){
			if(($this->session->userdata('admin'))){
				$this->load->view('admin');
			}

			else{
				redirect('Admin');
			}
		}
	}

 ?>