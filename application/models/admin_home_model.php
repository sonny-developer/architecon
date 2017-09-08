<?php

class Admin_home_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function delete_port_ex_image($image_name){
        if($this->db->query("DELETE FROM portfolio_image_tbl WHERE image_name='$image_name'")){
            unlink('images/portfolio_ex/'.$image_name);
            return TRUE;
        }else {
            return FALSE;
        }
    }
    public function portfolio_image($id){
        return $this->db->query("SELECT image_name FROM portfolio_image_tbl WHERE portfolio_id='$id'")->result();
    }
    public function delete_single_client($x) {
        $x=urldecode($x);
        $sql="DELETE FROM client_tbl WHERE image='$x'";
        if($this->db->query($sql)){
            unlink('images/client/' . $x);
            return TRUE;
        }else{
            return false;
        }
    }
    public function insert_contact($a){
        return $this->db->insert('contact_tbl',$a);
    }
    public function delete_all_clients() {
        $result=$this->db->query("SELECT image FROM client_tbl");
        foreach ($result->result() as $value){
            unlink('images/client/'.$value->image);
        }
        
        return $this->db->query("TRUNCATE TABLE client_tbl");
    }
    public function delete_all_portfolios() {
        $result=$this->db->query("SELECT file_name FROM portfolio_tbl");
        foreach ($result->result() as $value){
            unlink('images/portfolio/'.$value->file_name);
        }
        
        return $this->db->query("TRUNCATE TABLE portfolio_tbl");
    }
    public function all_clients_data() {
        $sql="SELECT * FROM client_tbl";
        $result=$this->db->query($sql);
        return $result->result();
    }
    public function save_client($a) {
        if($this->db->insert('client_tbl',$a)){
            
        }else{
            $s_data['error'] = mysql_error();
            $this->session->set_userdata($s_data);
        }return;
    }
    public function get_all_services_data(){
        $sql = "SELECT * FROM services_tbl";
        return $this->db->query($sql)->result();
    }
    public function save_service_data($data){
        $this->db->insert('services_tbl', $data);
        return;
    }
    public function delete_service() {
        $a = $_GET['id'];
        $sql="DELETE FROM services_tbl WHERE id='$a'";
        return $this->db->query($sql);
    }
    public function delete_welcoming_message(){
        $this->db->query("TRUNCATE TABLE welcoming_message_tbl");
        return;
    }
    public function get_welcoming_message() {
        return $this->db->query("SELECT * FROM welcoming_message_tbl")->result_array();
    }
    public function save_welcoming_message() {
        $this->db->insert('welcoming_message_tbl', $_POST);
        $this->db->query("DELETE FROM welcoming_message_tbl WHERE ID NOT IN ('1')");
        return TRUE;
    }

    public function all_portfolio_data() {
        $sql = "SELECT * FROM portfolio_tbl";
        $data = $this->db->query($sql);
        if (isset($data)) {
            return $data;
        } else {
            return mysql_error();
        }
    }

    public function check_welcome_message_tbl() {
        return $this->db->count_all('welcoming_message_tbl');
        }
      
    public function save_new_portfolio() {
        if (!$this->db->insert('portfolio_tbl', $_POST)) {
            $s_data['error'] = mysql_error();
            $this->session->set_userdata($s_data);
            return;
        } else {
            $s_data['warning'] = 'Portfolio Created successfully..';
            $this->session->set_userdata($s_data);
            return;
        }
    }
    public function delete_contact($id){
        return $this->db->query("DELETE FROM contact_tbl WHERE id='$id'");
    }
    public function all_contact(){
        return $this->db->query("SELECT * FROM contact_tbl")->result();
    }

    public function save_portfolio_image($data) {
        if (!$this->db->insert('portfolio_image_tbl', $data)) {
            unlink('./Images/portfolio_ex'.$data['file_name']);
            $s_data['error'] = mysql_error();
            $this->session->set_userdata($s_data);
            return;
        } else {
            $s_data['warning'] = 'Portfolio Images saved successfully..';
            $this->session->set_userdata($s_data);
            return;
        }
    }
    public function save_new_slider_image($data) {
        if (!$this->db->insert('slider_image', $data)) {
            unlink('images/slider/'.$data['file_name']);
            $s_data['error'] = mysql_error();
            $this->session->set_userdata($s_data);
            return;
        } else {
            $s_data['warning'] = 'Portfolio Created successfully..';
            $this->session->set_userdata($s_data);
            return;
        }
    }

    public function delete_all_slide() {
        $sql = "DELETE FROM slider_image";
        $sql_2 = "SELECT file_name FROM slider_image";
        $file_name = $this->db->query($sql_2);
        $data = $this->db->query($sql_2);
        if (isset($data)) {
            if ($this->db->query($sql) == TRUE) {
                foreach ($data->result() as $value) {
                    unlink('images/slider/' . $value->file_name);
                }
            } else {
                $s_data['error'] = mysql_error();
                $this->session->set_userdata($s_data);
                return;
            }
        } else {
            $s_data['error'] = mysql_error();
            $this->session->set_userdata($s_data);
            return;
        }
        $s_data['warning'] = 'deleted successfully..';
        $this->session->set_userdata($s_data);
        return;
    }

    public function delete_slider_image($file_name) {
        $sql = "DELETE FROM slider_image WHERE file_name='$file_name'";
        if ($this->db->query($sql)==TRUE) {
            unlink('images/slider/'.$file_name);
            $s_data['warning'] = 'deleted successfully..';
            $this->session->set_userdata($s_data);
        }else{
            $s_data['error'] = mysql_error();
            $this->session->set_userdata($s_data);
        }
        return;
    }

    public function delete_portfolio() {
        $id = urldecode($this->input->get('id'));
        $file_name = $this->input->get('file_name');
        $sql = "DELETE FROM portfolio_tbl WHERE id='$id'";
        if (!$this->db->query($sql)) {
            $s_data['error'] = mysql_error();
            $this->session->set_userdata($s_data);
            //redirect("admin_home/add_new_portfolio");
        } else {
            unlink('images/portfolio/' . $file_name);
            $s_data['warning'] = 'deleted successfully..';
            $this->session->set_userdata($s_data);
            //redirect("admin_home/add_new_portfolio");
        }
    }

    public function delete_portfolio_category() {
        $cat_name = urldecode($this->input->get('cat_name'));
        $query_1 = "DELETE FROM portfolio_category_tbl WHERE portfolio_category='$cat_name'";
        if (!$this->db->query($query_1)) {
            $s_data['error'] = mysql_error() . 'Category(query_1) is not done....)';
            $this->session->set_userdata($s_data);
            //redirect("admin_home/add_new_portfolio_category");
        } else {
            $sql = "DELETE FROM portfolio_tbl WHERE category='$cat_name'";
            $result = $this->db->query("SELECT file_name FROM portfolio_tbl WHERE category='$cat_name'");
            foreach ($result->result_array() as $value) {
                unlink('images/portfolio/' . $value['file_name']);
            }
            if (!$this->db->query($sql)) {
                $s_data['error'] = mysql_error();
                $this->session->set_userdata($s_data);
                //redirect("admin_home/add_new_portfolio");
            } else {
                $s_data['warning'] = 'deleted successfully..';
                $this->session->set_userdata($s_data);
                //redirect("admin_home/add_new_portfolio");
            }
        }
        //redirect("admin_home/add_new_portfolio_category");
    }

    public function all_portfolio_category_name() {
        $sql = "SELECT * FROM portfolio_category_tbl";
        $data = $this->db->query($sql);
//        $data =   $this->db->query($sql);
        if (isset($data)) {
            return $data;
        } else {
            return mysql_error();
        }
    }

    public function save_portfolio_categroy($category_name) {
        $portfolio_category = $category_name['title'];
        $sql = "INSERT INTO portfolio_category_tbl (portfolio_category) VALUES ('$portfolio_category')";
        if (!mysql_query($sql)) {
            $s_data['error'] = mysql_error();
            $this->session->set_userdata($s_data);
            redirect('admin_home/add_new_portfolio_category');
        } else {
            $s_data['warning'] = 'Data Inserted Successfully..';
            $this->session->set_userdata($s_data);
            redirect('admin_home/add_new_portfolio_category');
        }
    }

    public function save_team_member($team_member_data) {
        $this->db->insert('team_member', $team_member_data);
    }

    public function count_row() {
        $sql = "SELECT * FROM about_us";
        $count_no = $this->db->query($sql);
        return $count_no->num_rows();
    }

    public function delete_about() {
        $query = "DELETE  FROM about_us";
        mysql_query($query);
    }

    public function save_aboout_us($post) {
        $title = $this->input->post('title');
        $main_text = $this->input->post('main_text');
        $sql = "INSERT INTO about_us (id,title,main_text) VALUES ('1','$title','$main_text') ";
        if (!mysql_query($sql)) {
            $s_data['error'] = mysql_error();
            $this->session->set_userdata($s_data);
            redirect('admin_home/about_text_form');
        } else {
            $s_data['warning'] = 'Data Inserted Successfully..';
            $this->session->set_userdata($s_data);
            redirect('admin_home/about_text_form');
        }
    }

    public function update_aboout_us($post) {
        $title = $this->input->post('title');
        $main_text = $this->input->post('main_text');
        $sql = "UPDATE about_us SET title='$title',main_text='$main_text' WHERE id='1'";
        if (!mysql_query($sql)) {
            $s_data['error'] = mysql_error();
            $this->session->set_userdata($s_data);
            redirect('admin_home/about_text_form', 'refresh');
        } else {
            $s_data['warning'] = 'Data Inserted Successfully..';
            $this->session->set_userdata($s_data);
            redirect('admin_home/about_text_form', 'refresh');
        }
    }

    public function get_about_data() {
        $sql = "SELECT title,main_text FROM about_us where id='1'";
        $data = $this->db->query($sql);
        if ($data) {
            return $data->row();
        } else {
            return mysql_error();
        }
    }

    public function delete_team($team_name) {
        $sql = "DELETE FROM team_name WHERE team_name='$team_name'";
        $sql_2 = "DELETE FROM team_member WHERE team_title='$team_name'";
        if (!mysql_query($sql) || mysql_query($sql_2)) {
            $sdata['error'] = mysql_error();
            $this->session->set_userdata($sdata);
            redirect("admin_home/view_team");
        } else {
            $sdata['error'] = 'Deleted Successfully...';
            $this->session->set_userdata($sdata);
            redirect("admin_home/view_team");
        }
    }

    public function delete_team_mamber($id) {
        $sql = "DELETE FROM team_member WHERE member_id=$id";
        if (!mysql_query($sql)) {

            return mysql_error();
        } else {

            return TRUE;
        }
    }

    public function get_all_team_name() {
        $query = "SELECT * FROM team_name";
        $query_res = $this->db->query($query);
        return $query_res->result();
    }

    public function get_all_slider_image() {
        $query = "SELECT * FROM slider_image";
        $query_res = $this->db->query($query);
        return $query_res->result();
    }

    public function get_team_name($team_id) {
        $query = "SELECT team_name FROM team_name WHERE id=$team_id;";
        $query_res = $this->db->query($query);
        return $query_res->row();
    }

    public function update_team_name() {
        $team_name = $this->input->post('team_name');
        $team_id = $this->input->post('team_id');
        $query = "UPDATE team_name SET team_name='$team_name'WHERE team_id='$team_id' ";
        if (!mysql_query($query)) {
            return mysql_error();
        } else {
            return TRUE;
        }
    }

    public function get_team_member() {
        $query = "SELECT * FROM team_member";
        $query_res = $this->db->query($query);
        return $query_res->result();
    }

    public function get_team_member_info($member_id) {
        $query = "SELECT * FROM team_member WHERE id=$member_id";
        $query_res = $this->db->query($query);
        return $query_res->row();
    }

    public function update_team_member() {
        $member_id = $this->input->post('id');
        $team_title = $this->input->post('team_title');
        $name = $this->input->post('name');
        $designation = $this->input->post('designation');
        $qualification = $this->input->post('qualification');
        $institution = $this->input->post('institution');
        $publication = $this->input->post('publication');
        $query = "UPDATE team_member SET team_title='$team_title',name='$name',designation='$designation',qualification='$qualification',institution='$institution',publication='$publication' WHERE id='$member_id';";
        if (!mysql_query($query)) {
            return mysql_error();
        } else {
            return TRUE;
        }
    }

    public function save_team_name($team) {
//        $team_name = $team['team_name'];
        //echo $team_name;
        $sql = "INSERT INTO team_name (id,team_name) VALUES ('','$team[team_name]');";

        if (!mysql_query($sql)) {
            $sdata['error'] = mysql_error();
            $this->session->set_userdata($sdata);
            redirect("admin_home/view_team");
        }
        redirect("admin_home/view_team");
        //$this->db->insert('team_name',  $this->input->post())
    }

    public function save_image_info($data) {
        $sql = "INSERT INTO slider_image (id,file_name,caption) VALUES ('', '$data[file_name]','$data[caption]');";

        if (!mysql_query($sql)) {
            $sdata['error'] = mysql_error();
            $this->session->set_userdata($sdata);
            return; //redirect("admin_home/view_team");
        }
        return; //redirect("admin_home/view_team");
    }

}
