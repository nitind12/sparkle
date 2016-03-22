<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_ extends CI_Controller {
    function __construct() {
        parent::__construct();
        if(! $this->session->userdata('ussr_')){ redirect ('/site'); }
    }
    function index(){
        $this->load->model('migs_model', 'mm');
        $data['user___'] = $this->session->userdata('ussr_');
        $data['news_'] = $this->mm->get_all_news();
        $data['news_d'] = $this->mm->get_all_news_deactive();
        
        $this->load->view('admin__/header');
        $this->load->view('admin__/index', $data);   
        $this->load->view('admin__/footer');
    }
    function log__out(){
        $this->session->unset_userdata('ussr_');
        $this->session->unset_userdata('stss_');
        
        redirect('web');
    }
    function active_deactive_news($id_, $status_){
        $this->load->model('migs_model', 'mm');
        $res_ = $this->mm->active_deactive_news($id_, $status_);
        if($res_ == TRUE){
            if($status_ == 1){
                $this->session->set_flashdata('error_msg_', 'News Activated Successfully');
            } else {
                $this->session->set_flashdata('error_msg_', 'News Deactivated Successfully');
            }
        } else {
            $this->session->set_flashdata('error_msg_',  'Something went wrong. Please try again !!');
        }
        redirect('admin_');
    }
    function feedNews(){
        $res_ = $this->mm->feedNews_();
        $this->session->set_flashdata('feed_msg_',  $res_['msg_']);
    redirect('admin_');
    }
    function delete_news($id_){
        $res_ = $this->mm->delete_news($id_);
        if($res_ == TRUE){
            $this->session->set_flashdata('error_msg_', 'News Deleted Successfully');
        } else {
            $this->session->set_flashdata('error_msg_',  'Something went wrong. Please try again !!');
        }
        redirect('admin_');
    }
    function bDay(){
        $data['user___'] = $this->session->userdata('ussr_');
        $data['bday_'] = $this->mm->get_all_bdays();
        $data['today_'] = $this->mm->students_bday_today();
        $data['folder_'] = 'bday';
        $data['page_head'] = 'Feed Birthday';
        $data['view1'] = 'viewbday_active';
        $data['view2'] = 'viewbday_deactive';
        $this->load->view('admin__/header');
        $this->load->view('admin__/inner', $data);   
        $this->load->view('admin__/footer');
    }
    function feedBday(){
        $res_ = $this->mm->feedBday_();
        $this->session->set_flashdata('feed_bday_msg_',  $res_['msg_']);
    redirect('admin_/bDay');
    }
}