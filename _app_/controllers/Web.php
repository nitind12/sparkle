<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
    function __construct(){
        parent::__construct();
    }
    function index() {
        $data['keys_'] = "Little, India, Academy, School, Sparkle, Little Sparkel Academy, Motahaldu, Haldwani";
        $data['desc_'] = _SCHOOL_;
        $data['title'] = _SCHOOL_;

        //$data['bday_'] = $this->mm->students_bday_today();
        $data['news_'] = $this->mm->get_latest_news(7);

        $this->load->view('templates/header', $data);
        $this->load->view('home', $data);
        $this->load->view('templates/footer');
    }

    function call_page($fldr, $path1, $i = 0) {
        $data_ = $this->my_library->heading_for_page($i);
        $y = $this->my_library->image_for_page($i);

        $data['keys_'] = $data_['keys_'];
        $data['desc_'] = $data_['desc_'];
        $data['title'] = $data_['tmp'];

        $data['page_name'] = $data_['pagename'];
        $data['phrase_for_page'] = $data_['page_phrase'];
        $data['phrase_color_'] = $data_['phrase_color'];
        $data['header_image'] = $y;

        $data['page_'] = $fldr . '/' . $path1;
        $data['news_'] = $this->mm->get_latest_news(7);

        $this->load->view('templates/header', $data);
        $this -> load -> view ('templates/innerBanner', $data);
        $this->load->view('inner', $data);
        $this->load->view('templates/footer');
    }

    function login(){
        $this->load->view('templates/header');
        $this -> load -> view ('templates/innerBanner');
        $this->load->view('login/lgn');
        $this->load->view('templates/footer');
    }
    function uc_() {
        $this->load->view('index');
    }
	function sign_in_() {
        $res_ = $this->mm->login();

        if ($res_['bool_'] == TRUE) {
            $this->session->set_userdata('ussr_', $this->input->post('txtUsr'));
            $this->session->set_userdata('stss_', $res_['sts_']);
            redirect('/admin_');
        } else {
            redirect('../');
        }
    }
}
