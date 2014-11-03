<?php


class Follow extends Base_Controller
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

               //模板选择
       if($checkuser['role'] == 1){
            $this->load->view('follow',$data);
       }elseif($checkuser['role'] == 2){
            $this->load->view('daren/follow',$data);
       }

	}
}