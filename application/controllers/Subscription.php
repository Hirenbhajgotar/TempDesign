<?php
	class Subscription extends CI_Controller{
		
		public function index(){
			
			if ($this->form_validation->run('subscriber')) {

				$post = $this->input->post();
				
				// insert date and time into database
	            date_default_timezone_set('Asia/Kolkata'); // Defined City For Timezone
	            $currentDate =time();
	            $datestring = '%d/%M/%Y %h:%i %a';
	            $time = time();
	            $better_date = mdate($datestring, $time);
	            $post['subscribed_at'] = $better_date;

	            
				$this->load->model('Deshbord_model');
				if ($this->Deshbord_model->subscription($post)) {
					$this->session->set_flashdata('success', 'Thank you for subscribe');
					return redirect('Tempdesign');
				}
				else{
					$this->session->set_flashdata('error', 'Cant subscribe try again');
					return redirect('Tempdesign');
				}
				// return redirect('Tempdesign');
				
			}
			else{
				$this->load->model('Template_model');
        		$res = $this->Template_model->select_template();
        		
				$this->load->view('users/tempdesign',['res'=>$res]);
				// return redirect('Tempdesign');

			}
			
		} 


		// delete subscriber
		public function del_subscriber($id){
			$this->load->model('Deshbord_model');
			if ($data = $this->Deshbord_model->del_subscriber($id)) {
				$this->session->set_flashdata('success', 'Delete Subscriber');
				return redirect('Deshbord/subscription');
			}
			else{
				$this->session->set_flashdata('error', 'Cant Delete subscriber');
				return redirect('Deshbord/subscription');
			}
			// return redirect('Deshbord/subscription');
		} 










		
	}


?>