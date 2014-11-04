<?php


class Test extends Base_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
            //验证码
            $this->load->library('Authcode','code');
            $code = new Authcode();
            $code->show();
	}
}