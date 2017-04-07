<?php
class Functions extends CI_Controller {
	
	function __construct()
	{
		parent:: __construct(); //call parent class constructor	
	}
	
	public function contact_me()
	{

		//$name 	 = $this->input->get ( 'name' );
		//$email	 = $this->input->get ( 'email' );
		//$subject = $this->input->get ( 'subject' );
		//$message = $this->input->get ( 'message' );
		
		$data["name"] 	 = $this->input->get ( 'name' );
		$data["email"]	 = $this->input->get ( 'email' );
		$data["subject"] = $this->input->get ( 'subject' );
		$data["message"] = $this->input->get ( 'message' );
		
		//$data["name"]		= "$name";
		//$data["email"]		= "$email";
		//$data["subject"]	= "$subject";
		//$data["message"]	= "$message";
		
		$this->email->from('victorarsenie@gmail.com', 'victoralexandru.com');
		$this->email->to('victor.arsenie@yahoo.com'); 
		$this->email->subject('You have a message from contact form');
		//$this->email->message('Sender name: '.$name.' Sender email: '.$email.' Sender subject: '.$subject.' Sender message: '.$message);	
		$message = $this->load->view('templates/newemail',$data,TRUE);
		$this->email->message($message);
		$this->email->set_mailtype('html');
		$this->email->send();

		echo $this->email->print_debugger();
	}
	
	public function download_file()
	{
		$filename = "cv.docx";
		// load download helder
		$this->load->helper('download');
		// read file contents
		$data = file_get_contents(base_url('/assets/files/'.$filename));
		force_download($filename, $data);
	}
}