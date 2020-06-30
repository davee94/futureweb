<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('services_model');
        $this->load->model('contact_model');
        $this->load->helper('url_helper');
    }
    
	public function index()
	{
        $data['services'] = $this->services_model->get_services();
        //var_dump($data);
		$this->load->view('main', $data);
	}
    
    public function contact()
	{
		$this->load->view('contact');
	}
    
    public function sendContactMail()
	{
            
        $this->load->library("phpmailer_library");
        $mail = $this->phpmailer_library->load();
        
        //if (isset($_POST["email"])){
        
            // Start with PHPMailer class
            //use PHPMailer\PHPMailer\PHPMailer;
            //require('mail/PHPMailer/PHPMailerAutoload.php');
            //require_once './vendor/autoload.php';
            // create a new object
            //$mail = new PHPMailer();
            // configure an SMTP
        
            $from = 'meszardavid@futureweb.hu';
            $fromName = 'Mészár Dávid';
            $to = 'meszardavid@gmail.com';
            $toName = 'Mészár Dávid';
            $subject = 'Mészár Dávid - Futureweb webfejlesztő teszt – '.date("Y-m-d H:i:s");;
        
            $mail->isSMTP();
            $mail->Host = 'smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Username = 'fe26d890a08b64';
            $mail->Password = '725cdb8a9e7ef5';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 2525;
            $mail->CharSet = 'UTF-8';

            $mail->setFrom($from, $fromName);
            $mail->addAddress($to, $toName);
            
            $mail->Subject = $subject;
            // Set HTML 
            $mail->isHTML(TRUE);
        
            ob_start();

                include "mail/contact_mail.html";

                $message = ob_get_contents();

            ob_end_clean();
        
            $mail->Body = $message;
            
            //$mail->Body = '<html>Hi there, we are happy to <br>confirm your booking.</br> Please check the document in the attachment.</html>';
            
            if(isset($_POST) && !empty($_POST)) {
                $insert = $this->contact_model->set_sendMail($from, $fromName, $to, $toName, $_POST['subject'], $_POST['message']);
                //echo $insert;
            }
            
            // send the message
            if(!$mail->send()){
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                //echo 'Message has been sent';
                echo "OK";
            }

            //echo json_encode($valasz);
        //}
        
		//$this->load->view('contact');
	}
    
}
