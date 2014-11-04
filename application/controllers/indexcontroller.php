<?php


class Indexcontroller extends Base_Controller{
	
	public function __construct(){
		parent::__construct();
	}


	public function index(){
		//$data['nav'] = 'index';
		//$this->load->view('index',$data);
		redirect('c=login'); 
	}
}