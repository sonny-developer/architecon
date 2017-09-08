<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user_model
 *
 * @author theMetrix
 */
class user_model extends CI_Model {
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    
    
    
    public function all_portfolio_images($id){
        $sql="SELECT * FROM portfolio_image_tbl WHERE portfolio_id='$id'";
        return $this->db->query($sql)->result();
    }
    public function single_portfolio_data($id){
        $sql ="SELECT * FROM portfolio_tbl WHERE id='$id'";
        $data = $this->db->query($sql);
//        $data =   $this->db->query($sql);
        if(isset($data)){
            return $data->row();
        }else{
            return mysql_error();
        }
    }
    public function all_portfolio_data(){
        $sql ="SELECT image_path,title,id FROM portfolio_tbl";
        $data = $this->db->query($sql);
//        $data =   $this->db->query($sql);
        if(isset($data)){
            return $data;
        }else{
            return mysql_error();
        }
    }
    public function category_portfolio_data($x){
        $sql ="SELECT image_path,title,id FROM portfolio_tbl WHERE category='$x'";
        $data = $this->db->query($sql);
        if(isset($data)){
            return $data;
        }else{
            return mysql_error();
        }
    }
    public function all_service_category_name(){
        $sql = "SELECT name FROM services_tbl";
        return $this->db->query($sql)->result();
    }
    public function all_portfolio_category(){
        $sql ="SELECT * FROM portfolio_category_tbl";
        $data = $this->db->query($sql);
//        $data =   $this->db->query($sql);
        if(isset($data)){
            return $data;
        }else{
            return mysql_error();
        }
    }
    public function get_all_team_name(){
        $query="SELECT * FROM team_name";
        $query_res=$this->db->query($query);
        return $query_res->result();
    }
    public function get_team_member(){
        $query="SELECT * FROM team_member";
        $query_res=$this->db->query($query);
        return $query_res->result();
    }
    public function get_about_data(){
        $query="SELECT * FROM about_us";
        $query_res=$this->db->query($query);
        return $query_res->row();
    }
}
