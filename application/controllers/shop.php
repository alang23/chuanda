<?php

class Shop extends Base_Controller
{
	


	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

	}

	//设置管理
	public function seting()
	{
		$this->checkLogin();
		$userid = $this->memberinfo['id'];
		$data['userid'] = $userid;

		$this->load->model('shopconfig_mdl','shopconfig');
		$where = array('user_id'=>$userid);
		$info = $this->shopconfig->get_one_by_where($where);
		$data['info'] = $info;
		//print_r($info);
		//exit;
		$this->load->view('daren/daren_shop_seting',$data);
	}
}