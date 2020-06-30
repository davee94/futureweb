<?php
class Contact_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
    
        public function set_sendMail($sender_mail, $sender_name, $receiver_email, $receiver_name, $subject, $message)
        {
                $data = array(
                        'sender_email' => $sender_mail,
                        'sender_name' => $sender_name,
                        'receiver_email' => $receiver_email,
                        'receiver_name' => $receiver_name,
                        'subject' => $subject,
                        'message' => $message
                );

                $insert = $this->db->insert('email_message', $data);
                // Produces: INSERT INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date')
                //INSERT INTO `email_message`(`id`, `sender_email`, `sender_name`, `receiver_email`, `receiver_name`, `subject`, `message`) VALUES 
            
                //$query = $this->db->order_by('date', 'DESC')->get('service');
                return $insert;
        }
}