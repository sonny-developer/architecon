<?php
//admin_4rch1t3c0n;
//echo '<pre>';
// print_r($this->input->post());
//exit();

class Admin_4rch1t3c0n extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if($this->session->userdata('user_id') != NULL){
            redirect("admin_home");
        }
        
    }
    public function index(){
        $this->load->view('admin/log_in_form');
    }

    public function check_login(){
        $user_id = $this->input->post('a',TRUE);
        $password = $this->input->post('b',TRUE);
        $this->load->model('Validate_user','chk_user',TRUE);
        $this->chk_user->chk_user($user_id,  md5($password));
    }

   

}
