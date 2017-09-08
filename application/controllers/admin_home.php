<?php

class Admin_home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('user_id') == NULL) {
            redirect("Admin_4rch1t3c0n");
        }
        $this->load->model('admin_home_model', 'ad_home', TRUE);

        $this->load->helper('ckeditor');
        $this->data_editor['ckeditor'] = array(
            //ID of the textarea that will be replaced
            'id' => 'ck_editor',
            'path' => 'js/ckeditor',
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "98.7%", //Setting a custom width
                'height' => '210px', //Setting a custom height
            ),
        );
    }

    public function delete_port_ex_image() {
        $id = $this->input->get('portfolio_id');
        $image_name = $this->input->get('file_name');
        if ($this->ad_home->delete_port_ex_image(urldecode($image_name)) == TRUE) {
            $s_data['warning'] = 'Deleted successfully..';
            $this->session->set_userdata($s_data);
        } else {
            $s_data['error'] = mysql_error();
            $this->session->set_userdata($s_data);
        }
        redirect("admin_home/view_portfolio_image/" . $id);
    }

    public function view_portfolio_image($id) {
        $data['portfolio_id'] = $id;
        $data['images'] = $this->ad_home->portfolio_image($id);
        $data['content'] = $this->load->view('admin/view_portfolio_image_ex', $data, TRUE);
        $this->load->view('admin/master', $data);
    }

    public function add_portfolio_image() {

        function portfolio_upload_options() {
            //upload an image options
            $config = array();
            $config['upload_path'] = 'images/portfolio_ex/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['max_width'] = '1920';
            $config['max_height'] = '1080';
            $config['overwrite'] = FALSE;
            return $config;
        }

        $this->load->library('upload');

        $files = $_FILES;
        $cpt = count($_FILES['new_portfolio_image']['name']);
        for ($i = 0; $i < $cpt; $i++) {
            $_FILES['new_portfolio_image']['name'] = $files['new_portfolio_image']['name'][$i];
            $_FILES['new_portfolio_image']['type'] = $files['new_portfolio_image']['type'][$i];
            $_FILES['new_portfolio_image']['tmp_name'] = $files['new_portfolio_image']['tmp_name'][$i];
            $_FILES['new_portfolio_image']['error'] = $files['new_portfolio_image']['error'][$i];
            $_FILES['new_portfolio_image']['size'] = $files['new_portfolio_image']['size'][$i];

            $this->upload->initialize(portfolio_upload_options());
            if ($this->upload->do_upload('new_portfolio_image')) {
                $image_data = $this->upload->data();
                $data['portfolio_id'] = $this->input->post('portfolio_id');
                $data['portfolio_cat'] = $this->input->post('portfolio_cat');
                $data['image_name'] = $image_data['file_name'];
                $this->ad_home->save_portfolio_image($data);
            } else {
                $s_data = array('error' => $this->upload->display_errors());
                $this->session->set_userdata($s_data);
            }
        }
        redirect("admin_home/add_new_portfolio");
    }

    public function delete_all_clients() {
        $this->ad_home->delete_all_clients();
        redirect("admin_home/clients");
    }

    public function delete_all_portfolios() {
        $this->ad_home->delete_all_portfolios();
        redirect("admin_home/add_new_portfolio");
    }

    public function save_client() {
        $config['upload_path'] = 'images/client/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '1920';
        $config['max_height'] = '1080';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('client_image')) {
            $s_data = array('error' => $this->upload->display_errors());
            $this->session->set_userdata($s_data);
        } else {
            $image_data = $this->upload->data();
            $a['image'] = $image_data['file_name'];
            $a['name'] = $_POST['name'];
            $this->ad_home->save_client($a);
        }
        redirect("admin_home/clients");
    }

    public function clients() {
        $data['clients'] = $this->ad_home->all_clients_data();
        $data['content'] = $this->load->view('admin/clients', $data, TRUE);
        $this->load->view('admin/master', $data);
    }

    public function services() {
        $data['editor'] = $this->data_editor;
        $data['services'] = $this->ad_home->get_all_services_data();
        $data['content'] = $this->load->view('admin/services', $data, TRUE);
        $this->load->view('admin/master', $data);
    }

    public function save_service_data() {
        $data['name'] = $_POST['a'];
        $data['description'] = $_POST['b'];
        if ($this->ad_home->save_service_data($data)) {
            $s_data['warning'] = 'Saved successfully..';
            $this->session->set_userdata($s_data);
        } else {
            $s_data['error'] = mysql_error();
            $this->session->set_userdata($s_data);
        }
        redirect("admin_home/services");
    }

    public function delete_service() {
        if ($this->ad_home->delete_service()) {
            $s_data['warning'] = 'Deleted successfully..';
            $this->session->set_userdata($s_data);
        } else {
            $s_data['error'] = mysql_error();
            $this->session->set_userdata($s_data);
        }
        redirect("admin_home/services");
    }

    public function get_welcoming_message() {
        return $this->ad_home->get_welcoming_message();
    }

    public function potimize_welcoming_message_tbl() {
        return $this->ad_home->check_welcome_message_tbl();
    }

    public function delete_welcoming_message() {
        $this->ad_home->delete_welcoming_message();
        redirect("admin_home/welcoming_message");
    }

    public function delete_all_slide() {
        $this->ad_home->delete_all_slide();
        redirect("admin_home/slider_image");
    }

    public function delete_slider_image($file_name) {
        $this->ad_home->delete_slider_image(urldecode($file_name));
        redirect("admin_home/slider_image");
    }

    public function delete_portfolio() {
        $this->ad_home->delete_portfolio($this->input->get());
        redirect("admin_home/add_new_portfolio");
    }

    public function delete_portfolio_category() {
        $this->ad_home->delete_portfolio_category($this->input->get('cat_name'));
        redirect("admin_home/add_new_portfolio_category");
    }

    public function delete_single_client($x) {
        if ($this->ad_home->delete_single_client($x) == TRUE) {
            $s_data['warning'] = 'Saved successfully..';
            $this->session->set_userdata($s_data);
        } else {
            $s_data['error'] = mysql_error();
            $this->session->set_userdata($s_data);
        }
        redirect("admin_home/clients");
    }

    public function save_new_portfolio() {
        $config['upload_path'] = 'images/portfolio/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '1920';
        $config['max_height'] = '1080';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $s_data = array('error' => $this->upload->display_errors());
            $this->session->set_userdata($s_data);
        } else {
            $image_data = $this->upload->data();
            $_POST['image_path'] = base_url() . $config['upload_path'] . $image_data['file_name'];
            $_POST['file_name'] = $image_data['file_name'];
            $this->ad_home->save_new_portfolio($_POST);
        }
        redirect("admin_home/add_new_portfolio");
    }

    public function save_portfolio_categroy() {
        $this->ad_home->save_portfolio_categroy($this->input->post());
    }

    public function add_new_portfolio_category() {
        $data['category_name'] = $this->ad_home->all_portfolio_category_name();
        $data['content'] = $this->load->view('admin/new_portfolio_category', $data, TRUE);
        $this->load->view('admin/master', $data);
    }

    public function add_new_portfolio() {
        $data['all_clients_data'] = $this->ad_home->all_clients_data();
        $data['portfolio_data'] = $this->ad_home->all_portfolio_data();
        $data['category_name'] = $this->ad_home->all_portfolio_category_name();
        $data['content'] = $this->load->view('admin/new_portfolio', $data, TRUE);
        $this->load->view('admin/master', $data);
    }

    public function welcoming_message() {
        $data['message'] = $this->ad_home->get_welcoming_message();
        $data['is_set'] = $this->potimize_welcoming_message_tbl();
        $data['editor'] = $this->data_editor;
        $data['content'] = $this->load->view('admin/welcoming_message', $data, TRUE);
        $this->load->view('admin/master', $data);
    }

    public function save_welcoming_message() {
        if ($this->ad_home->save_welcoming_message($_POST) == TRUE) {
            $s_data['warning'] = 'Saved successfully..';
            $this->session->set_userdata($s_data);
        }
        redirect("admin_home/welcoming_message");
    }

    public function slider_image() {
        $data['slider_image'] = $this->ad_home->get_all_slider_image();
        $data['content'] = $this->load->view('admin/slider_image', $data, TRUE);
        $this->load->view('admin/master', $data);
    }

    public function save_slider_image() {

        function slider_image_upload_options() {
            $config = array();
            $config['upload_path'] = 'images/slider/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['max_width'] = '1920';
            $config['max_height'] = '1080';
            $config['overwrite'] = FALSE;
            return $config;
        }

        $this->load->library('upload');

        $files = $_FILES;
        $cpt = count($_FILES['new_slider_image']['name']);
        for ($i = 0; $i < $cpt; $i++) {
            $_FILES['new_slider_image']['name'] = $files['new_slider_image']['name'][$i];
            $_FILES['new_slider_image']['type'] = $files['new_slider_image']['type'][$i];
            $_FILES['new_slider_image']['tmp_name'] = $files['new_slider_image']['tmp_name'][$i];
            $_FILES['new_slider_image']['error'] = $files['new_slider_image']['error'][$i];
            $_FILES['new_slider_image']['size'] = $files['new_slider_image']['size'][$i];

            $this->upload->initialize(slider_image_upload_options());
            if ($this->upload->do_upload('new_slider_image') == TRUE) {
                $image_data = $this->upload->data();
                $data['caption'] = $this->input->post('caption');
                $data['file_name'] = $image_data['file_name'];
                $this->ad_home->save_new_slider_image($data);
            } else {
                $s_data = array('error' => $this->upload->display_errors());
                $this->session->set_userdata($s_data);
            }
        }
        redirect('admin_home/slider_image');
    }

    public function about_text_form() {
        $no_of_row = $this->ad_home->count_row();
        if ($no_of_row == 0) {
            $data['editor'] = $this->data_editor;
            $data['content'] = $this->load->view('admin/about_text_form', $data, TRUE);
            $this->load->view('admin/master', $data);
        } else {
            $data['about_data'] = $this->ad_home->get_about_data();
            $data['editor'] = $this->data_editor;
            $data['content'] = $this->load->view('admin/about_edit_form', $data, TRUE);
            $this->load->view('admin/master', $data);
        }
    }

    public function delete_about() {
        $this->ad_home->delete_about();
        redirect('admin_home/about_text_form');
    }

    public function submit_about_text() {
        $this->ad_home->save_aboout_us($this->input->post());
    }

    public function update_about_text() {
        $this->ad_home->update_aboout_us($this->input->post());
    }

    public function save_contact_data() {
        $a['address'] = $this->input->post('c');
        $a['email'] = $this->input->post('b');
        $a['cell'] = $this->input->post('a');
        if ($this->ad_home->insert_contact($a)) {
            $s_data['error'] = mysql_error();
            $this->session->set_userdata($s_data);
        } else {
            $s_data['warning'] = 'Team member deleted';
            $this->session->set_userdata($s_data);
        }
        redirect("admin_home/contact");
    }

    public function delete_contact($id) {
        if ($this->ad_home->delete_contact($id)) {
            $s_data['warning'] = 'Deleted Successfully... !';
            $this->session->set_userdata($s_data);
        } else {
            $s_data['error'] = mysql_error();
            $this->session->set_userdata($s_data);
        }
        redirect("admin_home/contact");
    }

    public function contact() {
        $data['contact'] = $this->ad_home->all_contact();
        $data['editor'] = $this->data_editor;
        $data['content'] = $this->load->view('admin/contact', $data, TRUE);
        $this->load->view('admin/master', $data);
    }

    public function index() {
        $data['content'] = $this->load->view('admin/home', '', TRUE);
        $this->load->view('admin/master', $data);
    }

    public function create_new_team() {
        $data['team_name'] = $this->ad_home->get_team_name();
        $data['content'] = $this->load->view('admin/team_member', $data, TRUE);
        $this->load->view('admin/master', $data);
    }

    public function delete_team($team_name) {
        $this->ad_home->delete_team($team_name);
    }

    public function new_team_name() {
        $team['team_name'] = $this->input->post('team_name');
        $this->ad_home->save_team_name($team);
    }

    public function team_member() {
        $data['team_name'] = $this->ad_home->get_all_team_name();
        $data['content'] = $this->load->view('admin/new_team_member', $data, TRUE);
        $this->load->view('admin/master', $data);
    }

    public function save_team_member() {
        $this->ad_home->save_team_member($this->input->post());
        $s_data['warning'] = 'Team member Saved or Updated';
        $this->session->set_userdata($s_data);
        redirect("admin_home/view_team");
    }

    public function delete_team_member($member_id) {
        $is_deleted = $this->ad_home->delete_team_mamber($member_id);
        if ($is_deleted != TRUE) {
            $s_data['error'] = $is_deleted;
            $this->session->set_userdata($s_data);
        } else {
            $s_data['warning'] = 'Team member deleted';
            $this->session->set_userdata($s_data);
        }
        redirect("admin_home/view_team");
    }

    public function view_team() {
        $data['team_name'] = $this->ad_home->get_all_team_name();
        $data['team_member'] = $this->ad_home->get_team_member();
        
        echo '<pre>';
        print_r($data['team_name']);
        print_r($data['team_member']);
        exit();
        $data['content'] = $this->load->view('admin/view_team', $data, TRUE);
        $this->load->view('admin/master', $data);
    }

    public function edit_team_name($team_id) {
        $data['team_name'] = $this->ad_home->get_team_name($team_id);
        $data['team_id'] = $team_id;
        $data['content'] = $this->load->view('admin/edit_team_name', $data, TRUE);
        $this->load->view('admin/master', $data);
    }

    public function update_team_member() {
//        echo "<pre>";
//        print_r($this->input->post());
//        exit();
        
        $check = $this->ad_home->update_team_member($this->input->post());
        if ($check != TRUE) {
            $s_data['error'] = $check;
            $this->session->set_userdata($s_data);
        } else {
            $s_data['warning'] = 'Team Name Updated';
            $this->session->set_userdata($s_data);
        }
        redirect("admin_home/view_team");
    }

    public function edit_team_member($member_id) {
        $data['team_name'] = $this->ad_home->get_all_team_name();
        $data['team_member'] = $this->ad_home->get_team_member_info($member_id);
        $data['content'] = $this->load->view('admin/edit_team_member', $data, TRUE);
        $this->load->view('admin/master', $data);
    }

    public function logout() {
        $this->session->unset_userdata('user_id');
        redirect("Admin_4rch1t3c0n");
    }

}
