<?php
	class Deshbord_model extends CI_Model{
		
		// select num of rows for templates
		public function total_num_rows(){
			$result = $this->db->select()
							   ->get('add_template');
		   	return $result->num_rows();	
							   
		}


		// select num of rows for subscriber
		public function subs_num_rows(){
			$result = $this->db->select()
							   ->get('subscrition');
		   	return $result->num_rows();	
							   
		} 


		// insert subscriber's email
		public function subscription($data){
			return $this->db->insert('subscrition', $data);
		} 


		// select subscription's emails
		public function select_subscriber(){
			$query = $this->db->select()
					 	  ->from('subscrition')
					 	  ->get();
			return $query->result();
			
		}		 


		// delete subscriber
		public function del_subscriber($id){
			$res = $this->db->delete('subscrition', ['id'=>$id]);
			return $res;
		} 


		// count and insert templates download value
		public function count_download($data){
			$sql = "INSERT INTO `downloads` (download) VALUES($data)";
			return $this->db->query($sql);
		} 


		// count total template download
		public function total_downloads(){
			$res = $this->db->select_sum('download')
						    ->from('downloads')
					 		->get();
			return $res->row();
		} 



	}


?>		