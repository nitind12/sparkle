<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_ extends CI_Controller {
    function __construct() {
        parent::__construct();
        if(! $this->session->userdata('ussr_')){ redirect ('/site'); }
    }
    function index(){
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
    function edit_news_events($id__){
        $data['record_'] = $this->mm->get_news_events_for_edit($id__);

        $data['user___'] = $this->session->userdata('ussr_');
        $data['news_'] = $this->mm->get_all_news();
        $data['news_d'] = $this->mm->get_all_news_deactive();
        
        $this->load->view('admin__/header');
        $this->load->view('admin__/edit', $data);   
        $this->load->view('admin__/footer');

    }
    function updateNews($id__){
        $res_ = $this->mm->updateNews_($id__);
        $this->session->set_flashdata('feed_msg_',  $res_['msg_']);
    redirect('admin_/edit_news_events/'.$id__);
    }
    function active_deactive_news($id_, $status_){
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
    function delete_news_events($id_){
        $res_ = $this->mm->delete_news_events($id_);
        if($res_ == TRUE){
            $this->session->set_flashdata('error_msg_', 'News Deleted Successfully');
        } else {
            $this->session->set_flashdata('error_msg_',  'Something went wrong. Please try again !!');
        }
        redirect('admin_');
    }
    function delete_attachment($id__){
        $res_ = $this->mm->delete_attach_news($id__);

        if($res_ == TRUE){
            $this->session->set_flashdata('error_msg_', 'News Attachment Deleted Successfully');
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