<?php
	class Template_model extends CI_Model{
		
		// insert template
		public function add_template($data){
			return $this->db->insert('add_template', $data);	
		} 


		// select template
		public function select_template(){
			$q = $this->db->select()
			              ->from('add_template')
			              ->get();
			return $q->result();
		} 


		// find template by id
		public function find_template($id){
			$q = $this->db->select()
			          ->where('id', $id)
			          ->get('add_template');
            return $q->row();
		} 


		// delete template
		public function del_template($id){
			$data = $this->db->delete('add_template',['id'=>$id]);
			return $data;
		} 


		// edit template
		public function edit_template($id, $data){
			return $this->db->where('id',$id)
					  		->update('add_template', $data);
		} 
		
	}


?>
