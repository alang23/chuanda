<?php

class Reg extends Base_Controller
{
	
	public function __construct()
	{
		parent::__construct();

	}


	public function index()
	{
		if(!empty($_POST)){
			
			$mobile = $this->input->post('mobile');
			$pawd = $this->input->post('pawd');
			$captcha = $this->input->post('captcha');
			$repawd = $this->input->post('c_password');
			if($pawd != $repawd){
				exit('repawd error');
			}

			if(empty($mobile) || empty($pawd) || empty($captcha)){
				exit('info error');
			}

			$this->load->model('member_mdl','member');

			//检查手机号是否可用
			$checkconfig = array('mobile'=>$mobile);
			$checkmobile = $this->member->get_one_by_where($checkconfig);

			if(!empty($checkmobile)){
				exit('mobile haved');
			}
			
			$info['mobile'] = $mobile;
			$info['pass_word'] = md5($pawd);
			
			echo $this->member->add($info);

		}else{
			$this->load->view('reg');	
		}

	}
}