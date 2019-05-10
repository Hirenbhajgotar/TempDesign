<?php
class Template extends CI_Controller{

    public function template_preview($id)
    {
        $this->load->model('Template_model');
        $data = $this->Template_model->find_template($id);
        
        $this->load->view('users/template_preview', ['data'=>$data]);
    }

    public function add_template(){
    	$this->load->view('admin/add_template');
    } 



    // add template
    public function add_template_data(){

    	// template image upload
    	$config = [
    		'upload_path'   => './image_upload',
    		'allowed_types' => 'jpg|png|jpeg',
    		'max_size'		=> '20000',
            'min_size'		=> '0',
            'remove_space'	=> TRUE
    	];

    	$this->load->library('upload', $config, 'temp_image_upload');
    	$this->temp_image_upload->initialize($config);
    	$temp_image = $this->temp_image_upload->do_upload('temp_image');
    	

    	// template zip upload
    	$config = [
    		'upload_path'   => './zip_upload',
    		'allowed_types' => 'zip',
    		'max_size'		=>'20000',
    		'min_size'		=> '0',
    		'remove_space'	=> TRUE
    	];

    	$this->load->library('upload', $config, 'temp_zip_upload');
    	$this->temp_zip_upload->initialize($config);
    	$temp_zip = $this->temp_zip_upload->do_upload('temp_zip');


    	if ($this->form_validation->run('add_template') && $temp_image && $temp_zip) {
    		
    		// text data
    		$post = $this->input->post();

            // insert date and time into database
            date_default_timezone_set('Asia/Kolkata'); // Defined City For Timezone
            $currentDate =time();
            $datestring = '%d %M %Y %h:%i %a';
            $time = time();
            $better_date = mdate($datestring, $time);
            $post['upload_at'] = $better_date;
            

    		// image data
    		$image_data = $this->temp_image_upload->data();
    		// image path
    		$image_path = $image_data['file_name'];

    		// zip data
    		$zip_data = $this->temp_zip_upload->data();

    		// zip path
    		$zip_path = $zip_data['file_name'];

    		// zip full path
    		$zip_full_path = $zip_data['full_path'];
    		

    		// extract zip
    		$zip_extract_error = "";
    		$zip = new ZipArchive;
    		if ($zip->open($zip_full_path) === TRUE) {
    			$zip->extractTo(FCPATH.'zip_upload/');
                $zip->close();
    		}
            else{
                $zip_extract_error = $this->temp_zip_upload->display_errors();
            }

            $post['temp_image'] = $image_path;
            $post['temp_zip']   = $zip_path;


            $this->load->model('Template_model');
            if ($this->Template_model->add_template($post)) {
                $this->session->set_flashdata('success', 'Template Inserted Successfully');
                return redirect('Deshbord/templates');
            }
            else{
                $this->session->set_flashdata('error', 'Cant Insert Template try again plzz');
                return redirect('Deshbord/templates');
            }
            
            return redirect('Deshbord/templates');
    	
        }
    	else{
    		$image_upload_error = $this->temp_image_upload->display_errors();
            $zip_upload_error   = $this->temp_zip_upload->display_errors();
    		$this->load->view('admin/add_template', compact('image_upload_error','zip_upload_error','zip_extract_error'));
    	}
    } 


    // delete template
    public function del_template($id){
        
        // get data by id
        $this->load->model('Template_model');
        $temp_data = $this->Template_model->find_template($id);

        $template_image = $temp_data->temp_image;
        $template_zip   = $temp_data->temp_zip;
        
        
        // remove extension from zip file
        $ext = basename($temp_data->temp_zip, '.zip');
        
        if ($temp_data->temp_zip && is_dir("zip_upload/".$ext)) {
            // remove folder in 'zip_upload' directry
            delete_files("zip_upload/".$ext, true);
            rmdir("zip_upload/".$ext);

            // remove zip file and image file from folders
            unlink(FCPATH."image_upload/".$template_image);
            unlink(FCPATH."zip_upload/".$template_zip);

            // delete template from databse
            $this->load->model('Template_model');
            if ($this->Template_model->del_template($id)) {
                $this->session->set_flashdata('success', 'Template Delete Successfully');
            }
            else{
                $this->session->set_flashdata('error', 'Cant Delete Template');
            }
        }
        else{
            $this->session->set_flashdata('error', 'Cant Delete Template');
        }

        return redirect('Deshbord/templates');
        
    } 


    // selected template data
    public function edit_template($id){
        $this->load->model('Template_model');
        $temp_data = $this->Template_model->find_template($id);
        
        $this->load->view('admin/update_template', ['temp_data'=>$temp_data]);  
    } 



    // edit template data
    public function edit_template_data($id){
        
        // edit image
        $config = [
            'upload_path'   => './image_upload',
            'allowed_types' => 'jpg|png|jpeg',
            'max_size'      => '20000',
            'min_size'      => '0',
            'remove_space'  => TRUE
        ];

        $this->load->library('upload', $config, 'temp_image_edit');
        $this->temp_image_edit->initialize($config);
        $temp_image_edit = $this->temp_image_edit->do_upload('temp_image');
        

        // edit zip
        $config = [
            'upload_path'   => './zip_upload',
            'allowed_types' => 'zip',
            'max_size'      =>'20000',
            'min_size'      => '0',
            'remove_space'  => TRUE
        ];

        $this->load->library('upload', $config, 'temp_zip_edit');
        $this->temp_zip_edit->initialize($config);
        $temp_zip_edit = $this->temp_zip_edit->do_upload('temp_zip');


        if ($this->form_validation->run('add_template') && $temp_image_edit && $temp_zip_edit) {
                
            // find template by id
            $this->load->model('Template_model');
            $template = $this->Template_model->find_template($id);
            
            // remove extension from zip file
            $ext = basename($template->temp_zip, '.zip');
            $zip_extract_error = "";

            // check image file in 'image_upload' folder
            $image_file = file_exists("image_upload/".$template->temp_image);
            
            // check zip file in 'zip_upload' folder
            $zip_file = file_exists("zip_upload/".$template->temp_zip);
            
            // check zip folder in 'zip_upload' folder
            $extract_folder = is_dir("zip_upload/".$ext);
            
            if ($image_file && $zip_file && $extract_folder) {
                
                // remove files in extract folder
                delete_files("zip_upload/".$ext, true);
                // remove folder
                rmdir("zip_upload/".$ext);
                // remove image
                unlink(FCPATH.'image_upload/'.$template->temp_image);
                // remove zip file
                unlink(FCPATH.'zip_upload/'.$template->temp_zip);
                
                $post = $this->input->post();
                $edit_image_data = $this->temp_image_edit->data();
                $edit_zip_data   = $this->temp_zip_edit->data();
                
                // edit image path
                $edit_image_path = $edit_image_data['file_name'];
                // edit zip path
                $edit_zip_path = $edit_zip_data['file_name'];
                // edit zip full path
                $edit_zip_full_path = $edit_zip_data['full_path'];
                
                $zip = new ZipArchive;
                if ($zip->open($edit_zip_full_path) === TRUE) {
                    $zip->extractTo(FCPATH.'zip_upload/');
                    $zip->close();
                }
                else{
                    $zip_extract_error = $this->temp_zip_edit->display_errors();
                }
                
                
                $post['temp_image'] = $edit_image_path;
                $post['temp_zip'] = $edit_zip_path;
                

                // insert date and time into database
                date_default_timezone_set('Asia/Kolkata'); // Defined City For Timezone
                $currentDate =time();
                $datestring = '%d %M %Y %h:%i %a';
                $time = time();
                $better_date = mdate($datestring, $time);
                $post['update_at'] = $better_date;
               
                

                $this->load->model('Template_model');
                if ($this->Template_model->edit_template($id, $post)) {
                    $this->session->set_flashdata('success', 'update successfully');
                }
                else{
                    $this->session->set_flashdata('error', 'cant update');
                }
                return redirect('Deshbord/templates');
                
            }
            else{
                $edit_image_error = $this->temp_image_edit->display_errors();
                $edit_zip_error = $this->temp_zip_edit->display_errors();
                $this->load->view('admin/update_template', compact('edit_image_error', 'edit_zip_error', 'zip_extract_error'));
            }
           
        }
   
    } 



    // preview template
    public function preview($id){
        $this->load->model('Template_model');
        $res = $this->Template_model->find_template($id);

        if (file_exists("zip_upload/".$res->temp_zip)) {
            
            // remove extension
            $file = basename($res->temp_zip, ".zip");
           
            return redirect(base_url("zip_upload/".$file."/index.html"));        
                
        }
        else{
            $this->session->set_flashdata('error', 'Cant preview template');
            return redirect('Deshbord/templates');
        }
    }




    // download template
    public function download_template($id){
        $this->load->model('Template_model');
        $data = $this->Template_model->find_template($id);

        // $count = 0;
        if (!empty($data)) {
            $count = 1;
            // echo "<pre>";        
            // print_r($data);
            // echo "</pre>";
            // exit;
            
            $this->load->model('Deshbord_model');
            if ($this->Deshbord_model->count_download($count)) {
                if (file_exists('zip_upload/'.$data->temp_zip)) {
                    $path = "zip_upload/".$data->temp_zip;

                    // already loaded download helper
                    force_download($path, NULL);
                    
                }
            }
            else{
                $this->session->set_flashdata('error', 'Something went wrong during download');
                return redirect('Template/template_preview');
            }
        }
        else{
            $this->session->set_flashdata('error', 'Something went wrong during download');
            $this->load->view('users/template_preview');
        }
        
    } 







}

?>
