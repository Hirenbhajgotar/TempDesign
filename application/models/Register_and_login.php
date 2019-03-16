<?php
class Register_and_login extends CI_Model{

	// ADMIN REGISTER
	public function register($data){
		// echo "<pre>";		
		// print_r($data);
		// echo "</pre>";
		// exit;

		return $this->db->insert('users', $data);

	} 	


	// ADMIN LOGIN 
	public function login($email, $password){
		// echo "<pre>";		
		// print_r($email);
		// print_r($password);
		// echo "</pre>";
		// exit;

		$query = $this->db->where(['email'=>$email, 'password'=> $password])
						  ->get('users');

						  //  echo "<pre>";		
						  // print_r($query->num_rows());
						  // echo "</pre>";
						  // exit;

						if ($query->num_rows()) {
						 	// echo "<pre>";		
						 	// print_r($query->row()->id);
						 	// echo "</pre>";
						 	// exit;
						 	return $query->row()->id;
						 	
						}
						else{
							return false;
						}
						 
						  
						  		
	} 
}


?>