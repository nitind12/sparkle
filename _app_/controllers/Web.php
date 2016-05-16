<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['keys_'] = "Little, India, Academy, School, Sparkle, Little Sparkel Academy, Motahaldu, Haldwani";
        $data['desc_'] = _SCHOOL_;
        $data['title'] = _SCHOOL_;

        $data['bday_'] = $this->mm->students_bday_today();
        $data['news_'] = $this->mm->get_latest_news(7);

        $this->load->view('templates/header', $data);
        $this->load->view('home', $data);
        $this->load->view('templates/footer');
    }

    function call_page($fldr, $path1, $i = 0) {
            $data_ = $this->my_library->heading_for_page($i);
            $y = $this->my_library->image_for_page($i);

            if($i == 6){
                $data['gallery_category'] = $this->mm->get_gallery_category();
                $data['gallery_'] = $this->mm->get_gallery();
                if(count($data['gallery_']) == 0) redirect('web');
            }
            if($i == 7){   
                $data['activity_'] = $this->mm->get_activities();
                if(count($data['activity_']) == 0) redirect('web');
            }
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
            $this->load->view('templates/innerBanner', $data);
            $this->load->view('inner', $data);
            $this->load->view('templates/footer');
    }

    function uc_() {
        $this->load->view('index');
    }

    function login(){
        $this->session->set_userdata('_ADMIN_', '$#ok#$');
        redirect(ADMIN___);
    }
    function sign_in_() {
        $res_ = $this->mm->login();

        if ($res_['bool_'] == TRUE) {
            $this->session->set_userdata('ussr_', $this->input->post('txtUsr'));
            $this->session->set_userdata('stss_', $res_['sts_']);
            redirect(ADMIN___);
        } else {
            redirect('../');
        }
    }

    function contact_us() {
        //-------------
        $this->email->set_mailtype("html");

        $msg_ = "<h2 style='color: #000090'>Enquiry from Contact Page: </h2> <br /><span style='font-size: 13px; color: #121212'>Name: ";
        $msg_ = $msg_ . $this->input->post('txtName') . "<br /><br />";
        $msg_ = $msg_ . "Contact: ";
        $msg_ = $msg_ . $this->input->post('txtPh') . "<br />";
        $msg_ = $msg_ . "Email ID: ";
        $msg_ = $msg_ . $this->input->post('txtEmail') . "<br />";
        $msg_ = $msg_ . "(Message): ";
        $msg_ = $msg_ . $this->input->post('txtMsg') . "<br />";

        $from_ = $this->input->post('txtEmail');
        $name_ = $this->input->post('txtName');

        $this->email->from($from_, $name_);
        $this->email->to('nitin.d12@gmail.com');
        $this->email->bcc('gdatt@gmail.com, navtewari@gmail.com');

        $this->email->subject('Enquiry from Contact Page of Little Sparke Academy website');
        $this->email->message($msg_);

        if ($this->email->send()) {
            $this->session->set_flashdata('error_msg_', 'Thanks for Contacting us. We will get back to you soon...');
        } else {
            $this->session->set_flashdata('error_msg_', 'Something goes wrong. please try again...');
        }

        //-------------
        redirect('/web/call_page/contact/contact/5');
    }

}
