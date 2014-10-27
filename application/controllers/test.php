<?php


class Test extends Base_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->helper('register');
		$pawd = 'abc123ee';
		$result = check_pawd($pawd);
		if($result){
			echo 'ok';
		}else{
			echo 'no';
		}
	}
}