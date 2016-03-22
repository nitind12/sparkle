<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('home');
		$this->load->view('templates/footer');
	}
    function login(){
        //$this->load->view('templates/header');
        $this->load->view('login/lgn');
        //$this->load->view('templates/footer');
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
