<?php 
	class Product extends CI_Controller{

		function shirts(){
			$this->load->view('productspage',array('data' => 'T-shirts'));
		}

		function jackets(){
			$this->load->view('productspage',array('data' => 'JAcket'));
		}
	}
	

 ?>