<?php
class User extends My_Controller{
	
	public function index(){
		// $this->load->helper('html');
		$this->load->view('public/articles_list');
	}
}