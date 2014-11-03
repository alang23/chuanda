<?php

class Userinfo extends Base_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		//$this->checkLogin();
	}


	public function index()
	{
		//判断是否是访问自己的主页
		$checkuser = $this->checkown();
        $data['checkuser'] = $checkuser;
        $userid = $checkuser['userid'];
        $data['userid'] = $userid;
 
		$data['userbaseinfo'] = $this->getUserinfoById($userid);
		
		//
		
		if($checkuser['role'] == 1){
            $this->load->view('userinfo',$data);
        }elseif($checkuser['role'] == 2){
             $this->load->view('daren/daren_info',$data);
        }
	}

	public function avatar()
	{
		$this->checkLogin();
		$userid = $this->memberinfo['id'];
		$picdir = '/uploads/member/avatar/';
		$data = array();

       if(!empty($_FILES)){
    		
            $config['upload_path'] = '.'.$picdir;
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload', $config);
            if ( $upload = $this->upload->do_upload('upfile'))
            {
                $upload = $this->upload->data();
                $data['filename'] = $upload['file_name'];
                //更新信息
                $this->load->model('member_mdl','member');
                $updatedata['photo'] = $picdir.$data['filename'];
                $updateconfig = array('id'=>$userid);
                $this->member->update($updateconfig,$updatedata);
                $this->memberinfo['photo'] = $updatedata['photo'];
                //更新session
                $this->session->set_userdata($this->config->item('sess_cookie_name'),$this->memberinfo);
                redirect('c=home');
                
            }else{
                echo $this->upload->display_errors();
            }

        }
		$this->load->view('avatar');
	}

	public function edit()
	{

		$this->checkLogin();
		$userid = $this->memberinfo['id'];
		$data['userid'] = $userid;
		$checkuser = $this->checkown();
        $data['checkuser'] = $checkuser;
		//会员基本信息
		if(!empty($_POST)){

			//t_user_base_information
			$nick_name = $this->input->post('nick_name');
			$sex = $this->input->post('sex');
			$age = $this->input->post('age');
			$this->load->model('userbaseinfo_mdl','userbaseinfo');
			$database['nick_name'] = $nick_name;
			$database['sex'] = $sex;
			$database['age'] = $age;
			$constellation = $this->input->post('constellation');

			$config = array('base_info_id'=>$userid);
			$this->userbaseinfo->update($config,$database);

			//t_col_user_information
			
			$like_brand = $this->input->post('like_brand');
			$like_color = $this->input->post('like_color');
			$like_star = $this->input->post('like_star');
			$like_style = $this->input->post('like_style');

			//$coldata['constellation'] = $constellation;
			$coldata['like_brand'] = $like_brand;
			$coldata['like_color'] = $like_color;
			$coldata['like_star'] = $like_star;
			$coldata['like_style'] = $like_style;

			$this->load->model('coluserinfo_mdl','coluserinfo');

			$colconfig = array('user_id'=>$userid);
			$this->coluserinfo->update($colconfig,$coldata);

			//t_user_base_info
			$qq = $this->input->post('qq');
			$sina_weibo = $this->input->post('sina_weibo');
			$mobile = $this->input->post('mobile');
			$weixin = $this->input->post('weixin');
			$this->load->model('member_mdl','member');
			$memdata['qq'] = $qq;
			$memdata['sina_weibo'] = $sina_weibo;
			$memdata['mobile'] = $mobile;
			$memdata['weixin'] = $weixin;
			
			$memconfig = array('id'=>$userid);
			$this->member->update($memconfig,$memdata);

			redirect('c=userinfo');

		}else{

			$data['userbaseinfo'] = $this->getUserinfoById($userid);

			if($checkuser['role'] == 1){
	            $this->load->view('userinfo_edit',$data);
	        }elseif($checkuser['role'] == 2){
	             $this->load->view('daren/daren_info_edit',$data);
	        }
		}



	}

	private function getUserinfoById($userid)
	{
		$this->load->model('member_mdl','member');
		$userconfig = array('m.id'=>$userid);
		$userbaseinfo = $this->member->get_one_by_where($userconfig);

		return $userbaseinfo;
	}
}