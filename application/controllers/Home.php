<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->library('Notification');
	}

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
	// function __construct(){
	// 	$data = [];
	// }
	
	public function index()	{

		$data['pageTitle'] = 'JASTRACK LOGISTICS SERVICES PVT LTD';
		$this->load->view('index',$data);
	}

	public function email(){
		// echo "string";die;
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$contact = $this->input->post('contact');
		$subject = $this->input->post('subject');
		$userMsg = $this->input->post('message');

		$validateData = array($name, $email, $contact, $subject,$userMsg);
		$emailData = array(
			'name' => $name,
			'email' => $email,
			'contact' => $contact,
			'msg' => $userMsg,
		);
// print_r($validateData);die;
		if (array_filter($validateData)) {
			try {
				// die;
				$this->notification->sendNotification('Thank you', $emailData);
				$this->notification->sendNotificationAdmin('JASTRACK: New Enquiry', $emailData);
				// $this->session->set_flashdata('succees', '1');
				echo "OK";
			} catch (Exception $ex) {
				echo "fail";
			}
		} else {
			echo "fail";
		}
	}
}
