<?php
class Admin extends CI_Controller
{

    public function login()
    {
    	if ($this->form_validation->run('admin_login')) {
    		// echo 'run';
    		$email    = $this->input->post('email');
    		$password = $this->input->post('password');
    		// echo "<pre>";		
    		// print_r($email);
    		// print_r($password);
    		// echo "</pre>";
    		// exit;

    		$this->load->model('Register_and_login');
    		$id = $this->Register_and_login->login($email, $password);

    		if ($id) {
    			$this->session->set_userdata('id', $id);
    			return redirect('Deshbord');
    		}
    		else{
    			$this->session->set_flashdata('msg', 'Email or Password Dosnt Match');
    			return redirect('admin/login');
    		}
    		
    		
    	}
    	else{
			$this->load->view('admin/login');
    	}
    }
    


    // ADMIN REGISTER
    public function signup()
    {

    	if ($this->form_validation->run('admin_register')) {
    		// echo 'running';
    		$post = $this->input->post();
    		// echo "<pre>";		
    		// print_r($post);
    		// echo "</pre>";
    		// exit;

    		$this->load->model('Register_and_login');
    		if ($this->Register_and_login->register($post)) {
    			return redirect('Deshbord') ;
    		}
    		
    	}
    	else{
    		$this->load->view('admin/register');
    	}
    	
    }



    // ADMIN LOGOUT
    public function logout(){
        $this->session->unset_userdata('id');
        return redirect('admin/login');
    } 


}



?>