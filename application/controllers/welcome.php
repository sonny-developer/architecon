<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model', 'user_mod', TRUE);
        $this->load->model('admin_home_model', 'ad_home', TRUE);
    }

    public function index() {
        $data['message'] = $this->ad_home->get_welcoming_message();
        $data['slider_image'] = $this->ad_home->get_all_slider_image();
        $data['portfolio_category'] = $this->user_mod->all_portfolio_category();
        $this->load->view('home', $data);
    }

    public function about_us() {
        $data['service_categories'] = $this->user_mod->all_service_category_name();
        $data['portfolio_category'] = $this->user_mod->all_portfolio_category();
        $data['about_data'] = $this->user_mod->get_about_data();
        $data['content'] = $this->load->view('about_us', $data, true);
        $this->load->view('master', $data);
    }

    public function client() {
        $data['service_categories'] = $this->user_mod->all_service_category_name();
        $data['portfolio_category'] = $this->user_mod->all_portfolio_category();
        $data['clients']= $this->ad_home->all_clients_data();
        $data['portfolio_category'] = $this->user_mod->all_portfolio_category();
        $data['content'] = $this->load->view('client', $data, true);
        $this->load->view('master', $data);
    }

    public function contact() {
        $data['contact'] = $this->ad_home->all_contact();
        $data['portfolio_category'] = $this->user_mod->all_portfolio_category();
        $data['content'] = $this->load->view('contact', $data, true);
        $this->load->view('master', $data);
    }

    public function portfolio() {
        $data['portfolio_category'] = $this->user_mod->all_portfolio_category();
        $data['portfolio_data'] = $this->user_mod->all_portfolio_data();
        $data['content'] = $this->load->view('portfolio', $data, true);
        $this->load->view('master', $data);
    }

    public function portfolio_according_categories($x) {
        $data['portfolio_category'] = $this->user_mod->all_portfolio_category();
        $data['portfolio_data'] = $this->user_mod->category_portfolio_data(urldecode($x));
        $data['content'] = $this->load->view('portfolio', $data, true);
        $this->load->view('master', $data);
    }

    public function portfolio_full_view($id) {
        $data['portfolio_images'] = $this->user_mod->all_portfolio_images($id);
        $data['portfolio_category'] = $this->user_mod->all_portfolio_category();
        $data['portfolio_data'] = $this->user_mod->single_portfolio_data($id);
        $data['content'] = $this->load->view('view_portfolio', $data, true);
        $this->load->view('master', $data);
    }
    
    public function service() {
        $data['services'] = $this->ad_home->get_all_services_data();
        $data['portfolio_category'] = $this->user_mod->all_portfolio_category();
        $data['content'] = $this->load->view('service', $data, true);
        $this->load->view('master', $data);
    }

    public function team() {
        $data['service_categories'] = $this->user_mod->all_service_category_name();
        $data['portfolio_category'] = $this->user_mod->all_portfolio_category();
        $data['team_name'] = $this->user_mod->get_all_team_name();
        $data['team_member'] = $this->user_mod->get_team_member();
        $data['content'] = $this->load->view('team', $data, true);
        $this->load->view('master', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */