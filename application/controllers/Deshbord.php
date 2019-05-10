<?php 
class Deshbord extends CI_Controller{
	
	public function index(){
		$this->load->model('Deshbord_model');
		$total_rows = $this->Deshbord_model->total_num_rows();
		$subs_rows  = $this->Deshbord_model->subs_num_rows();
		$total_downloads = $this->Deshbord_model->total_downloads();
		
		$this->load->view('admin/deshbord', ['total_rows'=>$total_rows, 'subc_rows'=>$subs_rows, 'total_downloads'=>$total_downloads]);
	} 
	 

	// templates
	public function templates(){
		$this->load->model('Template_model');
		$templates = $this->Template_model->select_template();
		
		$this->load->view('admin/templates', ['templates'=>$templates]);
	} 


	// subscription
	public function subscription(){

		$this->load->model('Deshbord_model');
		$data = $this->Deshbord_model->select_subscriber();

		$this->load->view('admin/subscription', ['data'=>$data]);
	} 


	// feedback
	public function feedback(){
		$this->load->view('admin/feedback');
	} 
}

?>