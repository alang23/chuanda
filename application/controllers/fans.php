<?php

class Fans extends Base_Controller
{
	

	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		$checkuser = $this->checkown();
        $data['checkuser'] = $checkuser;

        $userid = $checkuser['userid'];

        $data['userid'] = $userid;
		$this->load->view('daren/daren_fans',$data);
	}
}