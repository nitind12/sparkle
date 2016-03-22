<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class My_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function login() {
        $data = array(
            'USERNAME_' => $this->input->post('txtUsr'),
            'PASSWORD_' => $this->input->post('txtPwd')
        );
        $this->db->where($data);
        $query = $this->db->get('login');
        if ($query->num_rows() != 0) {
            $res = $query->row();
            $data = array('bool_' => TRUE, 'sts_' => $res->USER_STATUS);
        } else {
            $data = array('bool_' => FALSE, 'sts_' => 'x');
        }

        return $data;
    }

    function insert_enquiry() {
        $data = array(
            'NAME_' => $this->input->post('txtName'),
            'GENDER_' => $this->input->post('cmbGender'),
            'EMAIL_' => $this->input->post('txtEmail'),
            'MOBILE_PH' => $this->input->post('txtMobPh'),
            'ENQ_IN_DETAIL' => $this->input->post('txtOtherInfo'),
            'DOR_' => date('Y-m-d H:i:s')
        );
        $query = $this->db->insert('online_enquiry', $data);

        return $query;
    }

    function students_bday_today() {
        $dt_ = date('d');
        $mnth_ = date('m');
        $this->db->where('MONTH(DOB)', $mnth_);
        $this->db->where('DAY(DOB)', $dt_);
        $this->db->where('STATUS', 1);
        $query = $this->db->get('bday_data');

        return $query->result();
    }

    function feedNews_() {

        $data = array(
            'SUBJECT' => $this->input->post('txtSubject'),
            'NEWS' => $this->input->post('txtNews'),
            'PATH_ATTACH' => 'x',
            'FONTJI' => 'Arial',
            'DATE_' => date('d/m/Y'),
            'TIME_' => date("h:i:sa"),
            'STATUS' => 1,
            'USERNAME' => $this->session->userdata('ussr_')
        );
        $query = $this->db->insert('newsevents', $data);
        $id__ = $this->db->insert_id();

        $config = array(
            'upload_path' => './_assets_/newsdetail',
            'allowed_types' => 'doc|docx|pdf|jpg|png',
            'file_name' => $id__
        );
        $file_element_name = 'txtInputFile';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload($file_element_name)) {
            $path_ji = $this->upload->data();
            $path_ = $path_ji['file_name'];

            $data = array(
                'PATH_ATTACH' => $path_
            );
            $this->db->where('ID', $id__);
            $query = $this -> db -> update ('newsevents', $data);
        } else {
            $path_ = 'x';
        }

        if ($query == TRUE) {
            if ($path_ != 'x') {
                $bool_ = array('res_' => TRUE, 'msg_' => 'News Feeded Successfully with uploaded file.');
            } else {
                $bool_ = array('res_' => TRUE, 'msg_' => 'News Feeded Successfully without any uploaded file.');
            }
        } else {
            $bool_ = array('res_' => TRUE, 'msg_' => 'Something went wrong. Please try again !!');
        }
        return $bool_;
    }

    function get_latest_news($limit_) {
         $this->db->where('STATUS', 1);
        $this->db->order_by('ID', 'desc');
        $query = $this->db->get('newsevents', 0, $limit_);
        return $query->result();
    }

    function get_all_news() {
        $this->db->where('STATUS', 1);
        $this->db->order_by('ID', 'desc');
        $query = $this->db->get('newsevents');
        return $query->result();
    }

    function get_all_news_deactive() {
        $this->db->where('STATUS', 0);
        $this->db->order_by('ID', 'desc');
        $query = $this->db->get('newsevents');
        return $query->result();
    }

    function active_deactive_news($id_, $status_) {
        $this->db->where('ID', $id_);
        $data = array(
            'STATUS' => $status_
        );
        $query = $this->db->update('newsevents', $data);
        return $query;
    }

    function delete_news($id_) {
        $this->db->where('ID', $id_);
        $query = $this->db->get('newsevents');
        
        if ($query->num_rows() != 0) {
            $item_ = $query->row();
            
            if ($item_->PATH_ATTACH != 'x') {
                $file__ = $item_->PATH_ATTACH;
            } else {
                $file__ = 'x';
            }
        }
        $this->db->where('ID', $id_);
        $bool_ = $this->db->delete('newsevents');
        if ($bool_ == TRUE) {
            if ($file__ != 'x') {
                $full_path_ = APPPATH . '_assets_/newsdetail/' . $file__;
                unlink($full_path_);
            }
        }

        return $bool_;
    }
    function get_all_bdays(){
        $this -> db -> order_by('BID', 'desc');
        $query = $this -> db -> get('bday_data');

        return $query->result();
    }
    function feedBday_(){
        $data = array(
            'NAME_'     => $this -> input -> post('txtStudName'),
            'DOB'       => $this -> input -> post('txtDOB_'),
            'PHOTO_'    => 'x',
            'DOA'       => date('Y-m-d H:i:s'),
            'STATUS'    => 1,
            'USERNAME_' => $this->session->userdata('ussr_')
        );
        $query = $this -> db -> insert('bday_data', $data);
        $id__ = $this -> db -> insert_id();

        if($query == TRUE){
            $config = array(
                'upload_path' => './_assets_/stud_photo',
                'allowed_types' => 'jpg|png',
                'file_name' => $id__
            );
            $file_element_name = 'txtInputFile';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload($file_element_name)) {
                $path_ji = $this->upload->data();
                $path_ = $path_ji['file_name'];
            } else {
                $path_ = 'x';
            }

            if($path_ != 'x'){
                $data = array (
                    'PHOTO_'    => $path_
                );
                $this -> db -> where('BID', $id__);
                $query = $this -> db -> update('bday_data', $data);

                if($query == TRUE){
                    $bool_ = array('res_' => TRUE, 'msg_' => 'Birthday Record Submitted Successfully !!');
                } else {
                    $bool_ = array('res_' => FALSE, 'msg_' => 'Data submitted succesfully but something went wrong in updating photo. Please try again !!');
                }
            } else {
                $bool_ = array('res_' => FALSE, 'msg_' => 'Data submitted succesfully but something went wrong in uploading photo. Please try again !!');
            }
        } else {
            $bool_ = array('res_' => FALSE, 'msg_' => 'Something went wrong. Please try again !!');
        }
        return $bool_;
    }
}
