<?php
class Services_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
    
        public function get_services()
        {
                $query = $this->db->order_by('date', 'DESC')->get('service');
                return $query->result_array();
        }
}