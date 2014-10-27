<?php


class Message extends Base_Controller
{
	


	public function __constrcut()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->checkLogin();
		$userid = $this->memberinfo['id'];
		$data['userid'] = $userid;

		$this->load->view('message',$data);
	}
}