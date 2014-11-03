<?php

class Createshop extends Base_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('daren/createshop_1');
	}

	public function step2()
	{
		$this->load->view('daren/createshop_2');
	}
}