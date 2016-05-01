<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_ extends CI_Controller {
    function __construct() {
        parent::__construct();
        if(! $this->session->userdata('ussr_')){ redirect (__BACKTOSITE__); }
    }
    function index(){
        $data['user___'] = $this->session->userdata('ussr_');
        $data['news_'] = $this->mm->get_all_news();
        $data['news_d'] = $this->mm->get_all_news_deactive();
        
        $this->load->view('templates/header');
        $this->load->view('index', $data);   
        $this->load->view('templates/footer');
    }
    function log__out(){
        $this->session->unset_userdata('ussr_');
        $this->session->unset_userdata('stss_');
        
        redirect(__BACKTOSITE__);
    }
    function edit_news_events($id__){
        $data['record_'] = $this->mm->get_news_events_for_edit($id__);

        $data['user___'] = $this->session->userdata('ussr_');
        $data['news_'] = $this->mm->get_all_news();
        $data['news_d'] = $this->mm->get_all_news_deactive();
        $data['edit_page_heading'] = 'Update News &amp; Events';
        $data['edit_page'] = "newsevents/editnews";
        $data['view1'] = "newsevents/viewnews_active"; 
        $data['view2'] = "newsevents/viewnews_deactive";

        $this->load->view('templates/header');
        $this->load->view('edit', $data);   
        $this->load->view('templates/footer');

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
        $data['deactivebday_'] = $this->mm->get_all_bdays_deactivated();
        $data['folder_'] = 'bday';
        $data['page__'] = 'feedbday';
        $data['page_head'] = 'Feed Birthday';
        $data['view1'] = 'viewbday_active';
        $data['view2'] = 'viewbday_deactive';
        $data['view3'] = 'viewbday_deactivated';
        $this->load->view('templates/header');
        $this->load->view('inner', $data);   
        $this->load->view('templates/footer');
    }
    function feedBday(){
        $res_ = $this->mm->feedBday_();
        $this->session->set_flashdata('_msg_',  $res_['msg_']);
    redirect('admin_/bDay');
    }
    function active_deactive_bday($bid__, $status_){
        $res_ = $this->mm->active_deactive_bday($bid__, $status_);
        $this->session->set_flashdata('feed_msg_',  $res_['msg_']);
        
        redirect('admin_/bDay/'.$bid__);
    }
    function edit_bday($bid__){
        $data['record_'] = $this->mm->getbdayData($bid__);

        $data['user___'] = $this->session->userdata('ussr_');
        $data['bday_'] = $this->mm->get_all_bdays();
        $data['today_'] = $this->mm->students_bday_today();
        $data['deactivebday_'] = $this->mm->get_all_bdays_deactivated();
        $data['folder_'] = 'bday';
        $data['page_head'] = 'Update Birthday';
        $data['view1'] = 'viewbday_active';
        $data['view2'] = 'viewbday_deactive';
        $data['view3'] = 'viewbday_deactivated';
        $this->load->view('templates/header');
        $this->load->view('editbday', $data);   
        $this->load->view('templates/footer');   
    }
    function updateBday($bid__){
        $res_ = $this->mm->update_bday($bid__);
        $this->session->set_flashdata('feed_msg_',  $res_['msg_']);
        
        redirect('admin_/edit_bday/'.$bid__);
    }
    function delete_bday($bid__){
        $res_ = $this->mm->delete_bday($bid__);
        if($res_ == TRUE){
            $this->session->set_flashdata('feed_msg_',  'Data deleted Successfully !!');
        } else {
            $this->session->set_flashdata('feed_msg_',  'Server Error!! Data not deleted. PLease try again !!');
        }
        
        redirect('admin_/bDay');   
    }
    function galleryCategory(){
        //$data['category_'] = $this->mm->galleryCategory();

        $data['user___'] = $this->session->userdata('ussr_');
        $data['bday_'] = $this->mm->get_all_bdays();
        $data['today_'] = $this->mm->students_bday_today();
        $data['deactivebday_'] = $this->mm->get_all_bdays_deactivated();
        $data['folder_'] = 'bday';
        $data['page_head'] = 'Feed Gallery Category';
        $data['view1'] = 'viewgallery_active';
        $data['view2'] = 'viewgallery_deactive';
        $data['view3'] = 'viewbday_deactivated';
        $this->load->view('templates/header');
        $this->load->view('inner', $data);   
        $this->load->view('templates/footer');
    }
    function newsletters(){
        $data['user___'] = $this->session->userdata('ussr_');
        $data['newsletter_'] = $this->mm->get_active_newsletter();
        $data['newsletter_d'] = $this->mm->get_deactive_newsletter();
        $data['folder_'] = 'newsletter';
        $data['page__'] = 'feednewsletter';
        $data['page_head'] = 'Upload &amp; Manage Newsletters';
        $data['view1'] = 'viewnewsletter_active';
        $data['view2'] = 'viewnewsletter_deactive';

        $this->load->view('templates/header');
        $this->load->view('inner', $data);   
        $this->load->view('templates/footer');
    }
    function upload_newsletter(){
        $res_ = $this->mm->upload_newsletter();
        $this->session->set_flashdata('_msg_',  $res_['msg_']);
    redirect('admin_/newsletters');
    }
    function active_deactive_newsletter($id_, $status_){
        $res_ = $this->mm->active_deactive_newsletter($id_, $status_);
        if($res_ == TRUE){
            if($status_ == 1){
                $this->session->set_flashdata('error_msg_', 'News Activated Successfully');
            } else {
                $this->session->set_flashdata('error_msg_', 'News Deactivated Successfully');
            }
        } else {
            $this->session->set_flashdata('error_msg_',  'Something went wrong. Please try again !!');
        }
        redirect('admin_/newsletters');
    }
    function edit_newsletter($id__){
        $data['user___'] = $this->session->userdata('ussr_');
        $data['newsletter_edit'] = $this->mm->get_newsletter_for_edit($id__);
        $data['newsletter_'] = $this->mm->get_active_newsletter();
        $data['newsletter_d'] = $this->mm->get_deactive_newsletter();
        $data['edit_page_heading'] = 'Update Newsletter';
        $data['folder_'] = 'newsletter';
        $data['page__'] = 'feednewsletter';
        $data['page_head'] = 'Upload &amp; Manage Newsletters';
        $data['edit_page'] = "newsletter/editnewsletter";

        $data['view1'] = 'newsletter/viewnewsletter_active';
        $data['view2'] = 'newsletter/viewnewsletter_deactive';
        $this->load->view('templates/header');
        $this->load->view('edit', $data);   
        $this->load->view('templates/footer');
    }
    function update_newsletter($id__){
        $res_ = $this->mm->updateNewsletter_($id__);
        echo $this->session->set_flashdata('error_msg_',  $res_['msg_']);
    redirect('admin_/edit_newsletter/'.$id__);
    }
    function delete_newsletter($id_){
        $res_ = $this->mm->delete_newsletter($id_);
        if($res_ == TRUE){
            $this->session->set_flashdata('error_msg_', 'Newsletter deleted Successfully');
        } else {
            $this->session->set_flashdata('error_msg_',  'Something went wrong. Please try again !!');
        }
        redirect('admin_/newsletters');
    }
}