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
			
			$this->member->add($info);
			$id = $this->member->get_insert_id();

			//用户其他信息表
			$this->load->model('base_information_mdl','baseinfo');
			$basedata['base_info_id'] = $id;
			$this->baseinfo->add($basedata);

			//穿搭用户属性表
			$this->load->model('Coluserinfo_mdl','coluserinfo');
			$coluserinfo['user_id'] = $id;
			$this->coluserinfo->add($coluserinfo);

			//用户权限表
			$this->load->model('user_project_role_mdl','userprojectrole');
			$roledata['user_id'] = $id;
			$roledata['project_id'] = 1;
			$roledata['user_role'] = 1;
			$this->userprojectrole->add($roledata);

		}else{
			$this->load->view('reg');	
		}

	}
}