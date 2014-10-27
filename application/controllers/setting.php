<?php

class Setting extends Base_Controller
{
	

	public function __construct(){
		parent::__construct();
		$this->checkLogin();
	}

	public function index(){

		$this->load->view('user_setting');

	}

	public function changepwd(){

		$old_password = $this->input->post('old_password');
		$password = $this->input->post('password');
		$c_password = $this->input->post('c_password');
		if(empty($old_password) || empty($password) || empty($c_password)){
			exit('info empty');
		}

		if($password != $c_password){
			exit('');
		}

		$this->load->model('member_mdl','member');
		$config = array('id'=>$this->memberinfo['id']);
		$userinfo = $this->member->get_one_by_where($config);
		if($userinfo['pass_word'] != md5($old_password)){
			exit('old pwd error');
		}

		$pawd = md5($password);
		$updatedata['pass_word'] = $pawd;
		echo $this->member->update($config,$updatedata);


	}
}