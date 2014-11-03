<?php

class Createshop extends Base_Controller
{
	
	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{			
		//验证登陆
		$this->checkLogin();
		$userid = $this->memberinfo['id'];
		$data['userid'] = $userid;

		$this->load->view('daren/createshop_1',$data);
	}

	public function step2()
	{

		//验证登陆
		$this->checkLogin();
		$userid = $this->memberinfo['id'];
		$data['userid'] = $userid;
		$this->load->view('daren/createshop_2',$data);
	}

	public function step3()
	{
		//验证登陆
		$this->checkLogin();
		$userid = $this->memberinfo['id'];
		$data['userid'] = $userid;

		if(!empty($_POST)){

			$name = $this->input->post('name');
			$gender = $this->input->post('gender');
			$identity = $this->input->post('identity');
			$bank_card_number = $this->input->post('bank_card_number');
			$bank_card_type = $this->input->post('bank_card_type');
			$useridcard = $this->input->post('useridcard');
			$userphoto = $this->input->post('userphoto');
			if(!empty($name) && !empty($identity) && !empty($bank_card_number) && !empty($useridcard) && !empty($userphoto)){
				$darendata['name'] = $name;
				$darendata['identity'] = $identity;
				$darendata['identity_photo'] = $useridcard;
				$darendata['half_photo'] = $userphoto;
				$darendata['apply_time'] = date("Y-m-d");
				$darendata['state'] = '0';
				$darendata['bank_card_type'] = $this->input->post('bank_card_type');
				$darendata['bank_card_number'] = $this->input->post('bank_card_number');

				$this->load->model('talent_manage_mdl','talent');
				echo $this->talent->add($darendata);
			}

		}
		$this->load->view('daren/createshop_3',$data);
	}


	public function uploadfile()
	{
		$type = $this->input->get('type');
		$picdir = '';
		$filedata = '';
		$data = array();

		switch($type){
			case 'idcard':
				$picdir = '/uploads/daren/idcard/';
				
				break;
			case 'photo':
				$picdir = '/uploads/daren/photo/';
				
				break;
			default:
				
				exit('error');
		}


		

		if(!empty($_FILES)){

            $config['upload_path'] = '.'.$picdir;
            $config['allowed_types'] = '*';
            $config['file_name']  =date("YmdHis");
  
            $this->load->library('upload', $config);
            if ( $upload = $this->upload->do_upload('Filedata'))
            {

                $upload = $this->upload->data();
               	$data['filename'] = $upload['file_name'];
               	$data['filedir'] = base_url().$picdir.$upload['file_name'];
        
            }else{
                echo $this->upload->display_errors();

            }

        }

        echo json_encode($data);
	}
}