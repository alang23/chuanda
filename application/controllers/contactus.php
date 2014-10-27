<?php

class Contactus extends Base_Controller{
	

	public function __construct(){
		parent::__construct();
	}


	public function index(){
		$this->load->model('banner_mdl','banner');
        $banner = $this->banner->get_new_by_id(array('weizhi'=>6));
        $data['banner'] = $banner;
		$data['nav'] = 'contactus';
		$this->load->view('contactus',$data);
	}


}