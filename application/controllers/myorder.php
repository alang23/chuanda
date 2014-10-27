<?php

class Myorder extends Base_Controller
{
	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		$this->load->view('order_1');
	}
}