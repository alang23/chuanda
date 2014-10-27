<?php



class Team extends Base_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('banner_mdl','banner');
	}


	public function index(){
		$banner = $this->banner->get_new_by_id(array('weizhi'=>2));
		$data['banner'] = $banner;
		$data['nav'] = 'team';
		$this->load->view('team',$data);
	}
}