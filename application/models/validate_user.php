<?php
class Validate_user extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function chk_user($user_id,$password){
        $this->db->select('*');
        $this->db->from('user_admin');
        $this->db->where('user_id',$user_id);
        $this->db->where('password',$password);
        $query_result = $this->db->get();
        $result = $query_result->row();
        
        if($result){
            $s_data['user_id']=$result->user_id;
            $this->session->set_userdata($s_data);
            redirect("admin_home");
        }
        else{
            redirect("admin_4rch1t3c0n");
        }
    }
    
    
}