<?php
class Tempdesign extends CI_Controller{

    public function index()
    {
        $this->load->model('Template_model');
        $res = $this->Template_model->select_template();
        
        $this->load->view('users/tempdesign', ['res'=>$res]);
    }

    
}

?>