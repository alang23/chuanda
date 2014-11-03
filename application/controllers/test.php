<?php


class Test extends Base_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		/*
		$this->load->helper('register');
		$pawd = 'abc123ee';
		$result = check_pawd($pawd);
		if($result){
			echo 'ok';
		}else{
			echo 'no';
		}
		*/
		//$this->load->library('Authcode','code');
		//$this->code->show();
		//$code = new Authcode();
		//$code->show();
		echo md5('12345');
	}
}