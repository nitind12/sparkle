<?php

class My_library {

    function heading_for_page($value_) {
        switch ($value_) {
            case 1:
                $data['tmp'] = 'About the '. _SCHOOL_;
                $data['keys_'] = 'Little, India, Academy, School, Sparkle, Little Sparkel Academy, Motahaldu, Haldwani';
                $data['desc_'] = 'Motive is to improve and maintain core academics in order to facilitate development of concepts and ideas within the young creative minds.';
                $data['pagename'] = 'About School';
                $data['page_phrase'] = 'x';
                $data['phrase_color'] = '#ffffff';
                break;
            case 5:
                $data['tmp'] = 'Contact us';
                $data['keys_'] = 'Contact, Address, Email, Little, India, Academy, School, Sparkle, Little Sparkel Academy, Motahaldu, Haldwani';
                $data['desc_'] = 'Motive is to improve and maintain core academics in order to facilitate development of concepts and ideas within the young creative minds.';
                $data['pagename'] = 'Contact Us';
                $data['page_phrase'] = 'We are here to assist you.';
                $data['phrase_color'] = '#ffffff';
                break;
            default:
                $data['tmp'] = 'Heading Error';
                $data['keys_'] = _SCHOOL_;
                $data['desc_'] = _SCHOOL_;
                $data['pagename'] = _SCHOOL_;
                $data['page_phrase'] = 'x';
                $data['phrase_color'] = '#ffffff';
        }
        return $data;
    }

    function image_for_page($value_) {
        switch ($value_) {
            case 1:
                $tmp = "about1";
                break;
            case 2:
                $tmp = "admission_enq";
                break;
            case 5:
                $tmp = "contact";
                break;
            default:
                $tmp = "noimage";
        }
        return $tmp;
    }

    function get_days_($value_) {
        switch ($value_) {
            case 'Mon':
                $tmp = 'MONDAY';
                break;
            case 'Tue':
                $tmp = 'TUESDAY';
                break;
            case 'Wed':
                $tmp = 'WEDNESSDAY';
                break;
            case 'Thu':
                $tmp = 'THURSDAY';
                break;
            case 'Fri':
                $tmp = 'FRIDAY';
                break;
            case 'Sat':
                $tmp = 'SATURDAY';
                break;
            case 'Sun':
                $tmp = 'SUNDAY';
                break;
            default:
                $tmp = "No Day";
        }
        return $tmp;
    }

}
