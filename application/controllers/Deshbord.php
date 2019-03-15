<?php 
class Deshbord extends CI_Controller{
	
	public function index(){
		$this->load->view('admin/deshbord');
	} 
	

	// templates
	public function templates(){
		$this->load->view('admin/templates');
	} 


	// subscription
	public function subscription(){
		$this->load->view('admin/subscription');
	} 


	// feedback
	public function feedback(){
		$this->load->view('admin/feedback');
	} 
}

?>