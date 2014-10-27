<?php

class Theme extends Base_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->checkLogin();
		$this->load->model('theme_mdl','theme');
	}

	//用户自定义头部图片
	public function header()
	{
		$userid = $this->memberinfo['id'];
		$picdir = '/uploads/member/theme/header/';
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
                $updatedata['pic_url'] = $picdir.$data['filename'];
                $updateconfig = array('userId'=>$userid,'theme_type'=>'header');
                $this->theme->update($updateconfig,$updatedata);

                redirect('c=home');
                
            }else{
                echo $this->upload->display_errors();
            }

        }else{

        	$config = array('m.id'=>$userid,'t.theme_type'=>'header');
			$themeinfo = $this->theme->get_one_by_where($config);
			if(empty($themeinfo)){

				$themedata['userId'] = $userid;
				$themedata['theme_type'] = 'header';
				$this->theme->add($themedata);
				$data['pic_url'] = $picdir.'diy-cover-test.jpg';

			}else{

				$data['pic_url'] = $themeinfo['pic_url'];

			}


			$this->load->view('theme_header',$data);
        }



	}
}