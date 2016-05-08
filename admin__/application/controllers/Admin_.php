<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_ extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('ussr_')) {
            redirect(__BACKTOSITE__);
        }

        $config['upload_path'] = './_assets_/gallery';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '204800';


        $this->load->library('upload', $config);
    }

    function index() {
        $data['user___'] = $this->session->userdata('ussr_');
        $data['news_'] = $this->mm->get_all_news();
        $data['news_d'] = $this->mm->get_all_news_deactive();

        $this->load->view('templates/header');
        $this->load->view('index', $data);
        $this->load->view('templates/footer');
    }

    function log__out() {
        $this->session->unset_userdata('ussr_');
        $this->session->unset_userdata('stss_');

        redirect(__BACKTOSITE__);
    }

    function edit_news_events($id__) {
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

    function updateNews($id__) {
        $res_ = $this->mm->updateNews_($id__);
        $this->session->set_flashdata('feed_msg_', $res_['msg_']);
        redirect('admin_/edit_news_events/' . $id__);
    }

    function active_deactive_news($id_, $status_) {
        $res_ = $this->mm->active_deactive_news($id_, $status_);
        if ($res_ == TRUE) {
            if ($status_ == 1) {
                $this->session->set_flashdata('error_msg_', 'News Activated Successfully');
            } else {
                $this->session->set_flashdata('error_msg_', 'News Deactivated Successfully');
            }
        } else {
            $this->session->set_flashdata('error_msg_', 'Something went wrong. Please try again !!');
        }
        redirect('admin_');
    }

    function feedNews() {
        $res_ = $this->mm->feedNews_();
        $this->session->set_flashdata('feed_msg_', $res_['msg_']);
        redirect('admin_');
    }

    function delete_news_events($id_) {
        $res_ = $this->mm->delete_news_events($id_);
        if ($res_ == TRUE) {
            $this->session->set_flashdata('error_msg_', 'News Deleted Successfully');
        } else {
            $this->session->set_flashdata('error_msg_', 'Something went wrong. Please try again !!');
        }
        redirect('admin_');
    }

    function delete_attachment($id__) {
        $res_ = $this->mm->delete_attach_news($id__);

        if ($res_ == TRUE) {
            $this->session->set_flashdata('error_msg_', 'News Attachment Deleted Successfully');
        } else {
            $this->session->set_flashdata('error_msg_', 'Something went wrong. Please try again !!');
        }
        redirect('admin_');
    }

    function bDay() {
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

    function feedBday() {
        $res_ = $this->mm->feedBday_();
        $this->session->set_flashdata('_msg_', $res_['msg_']);
        redirect('admin_/bDay');
    }

    function active_deactive_bday($bid__, $status_) {
        $res_ = $this->mm->active_deactive_bday($bid__, $status_);
        $this->session->set_flashdata('feed_msg_', $res_['msg_']);

        redirect('admin_/bDay/' . $bid__);
    }

    function edit_bday($bid__) {
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

    function updateBday($bid__) {
        $res_ = $this->mm->update_bday($bid__);
        $this->session->set_flashdata('feed_msg_', $res_['msg_']);

        redirect('admin_/edit_bday/' . $bid__);
    }

    function delete_bday($bid__) {
        $res_ = $this->mm->delete_bday($bid__);
        if ($res_ == TRUE) {
            $this->session->set_flashdata('feed_msg_', 'Data deleted Successfully !!');
        } else {
            $this->session->set_flashdata('feed_msg_', 'Server Error!! Data not deleted. PLease try again !!');
        }

        redirect('admin_/bDay');
    }

    function galleryCategory() {
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

    function newsletters() {
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

    function upload_newsletter() {
        $res_ = $this->mm->upload_newsletter();
        $this->session->set_flashdata('_msg_', $res_['msg_']);
        redirect('admin_/newsletters');
    }

    function active_deactive_newsletter($id_, $status_) {
        $res_ = $this->mm->active_deactive_newsletter($id_, $status_);
        if ($res_ == TRUE) {
            if ($status_ == 1) {
                $this->session->set_flashdata('error_msg_', 'News Activated Successfully');
            } else {
                $this->session->set_flashdata('error_msg_', 'News Deactivated Successfully');
            }
        } else {
            $this->session->set_flashdata('error_msg_', 'Something went wrong. Please try again !!');
        }
        redirect('admin_/newsletters');
    }

    function edit_newsletter($id__) {
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

    function update_newsletter($id__) {
        $res_ = $this->mm->updateNewsletter_($id__);
        echo $this->session->set_flashdata('error_msg_', $res_['msg_']);
        redirect('admin_/edit_newsletter/' . $id__);
    }

    function delete_newsletter($id_) {
        $res_ = $this->mm->delete_newsletter($id_);
        if ($res_ == TRUE) {
            $this->session->set_flashdata('error_msg_', 'Newsletter deleted Successfully');
        } else {
            $this->session->set_flashdata('error_msg_', 'Something went wrong. Please try again !!');
        }
        redirect('admin_/newsletters');
    }

//-----------------------------------------GALLERY--------------------------
    function gallery() {
        $data['user___'] = $this->session->userdata('ussr_');
        $data['existing'] = $this->mm->get_all_categories();
        $data['folder_'] = 'gallery';
        $data['page__'] = 'feedgallery';
        $data['page_head'] = 'Upload &amp; Manage Gallery';
        $data['view1'] = 'Updategallery';

        $this->load->view('templates/header');
        $this->load->view('inner', $data);
        $this->load->view('templates/footer');
    }

    function feedCategory() {
        $res_ = $this->mm->feedCategory_();
        $this->session->set_flashdata('_msg_', $res_['msg_']);
        redirect('admin_/gallery');
    }

    function editCategory() {
        $res_ = $this->mm->editCategory_();
        $this->session->set_flashdata('_msg_', $res_['msg_']);
        redirect('admin_/gallery');
    }

    function getImages() {
        $data['existing'] = $this->mm->getImagesByCat(trim($this->input->post('txtCategory')));
        echo json_encode($data['existing']);
    }

    function uploadGallery() {
        $data['existing'] = $this->mm->uploadGallery_(trim($this->input->post('txtCategory')));
        echo json_encode($data['existing']);
        //redirect('admin_/gallery');
    }

    //---------------------------------------------------------------------------------------------

    public function do_upload() {

        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            foreach ($error as $item => $value) {
                echo'<ol class="alert alert-danger"><li>' . $value . '</ol></li>';
            }
            exit;
        } else {
            $upload_data = array('upload_data' => $this->upload->data());
            foreach ($upload_data as $key => $value) {

                $id_ = $this->input->post('txtCategory');

                $image = $value['file_name'];
                $name = preg_replace('/\\.[^.\\s]{3,4}$/', '', $value['file_name']);

                $data = array(
                    'PHOTO_' => $image,
                    'TITLE_' => 'x',
                    'WIDTH_' => 'x',
                    'HEIGHT_' => 'x',
                    'CATEG_ID' => $id_,
                    'USERNAME_' => $this->session->userdata('ussr_')
                );
                $this->db->insert('gallery', $data);
            }
            echo'<h4 style="color:green">Image uploaded Succesfully</h4>';
            redirect('admin_/gallery');
            exit;
        }
    }

    function fillGallery($id_) {
        $uploadpath = base_url() . '_assets_/gallery/';

        $this->db->where('CATEG_ID', $id_);

        $rs = $this->db->get('gallery');
        if ($rs->num_rows() != 0) {
            foreach ($rs->result() as $row) {
                $src = $uploadpath . $row->PHOTO_;
                $alt = $row->PHOTO_;
                $lid = $row->GL_ID . 'g';
                echo "<li class='thumbnail' id='$lid'>
                            <span id='$row->GL_ID' class='btn btn-info btn-block btn-delete'><i class='glyphicon glyphicon-remove'></i>&nbsp;&nbsp;&nbsp;Delete</span>
                            <img src='$src' alt='$alt' style='max-height: 100px;'>
                               <!--<span class='btn btn-warning btn-block'>$alt</span></li>-->";
            }
        }else{
             echo "<li class='thumbnail' style='color:red'>
                           No Images have been added to this gallery</li>";
        }
    }

    function deleteimg() {
        $uploadpath = base_url() . '_assets_/gallery/';

        $this->db->where('GL_ID', $this->input->post('id'));
        $query = $this->db->get('gallery');
        foreach ($query->result() as $row) {
            $src = $uploadpath . $row->PHOTO_;
            @unlink($src);
        }

        $this->db->where('GL_ID', $this->input->post('id'));
        $this->db->delete('gallery');

        echo'<h4 style="color:green">This image deleted successfully</h4>';
        exit;
    }

}
