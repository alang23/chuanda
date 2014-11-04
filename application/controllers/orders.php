<?php

class Orders extends Base_Controller
{
	

	public function __construct()
	{
		parent::__construct();
		$this->checkLogin();
	}

	public function index()
	{
		$checkuser = $this->checkown();
        $data['checkuser'] = $checkuser;

        $userid = $checkuser['userid'];
        $data['userid'] = $userid;

        $this->load->model('orders_mdl','orders');
        $where = array('where'=>array('o.approver'=>$userid,'o.status'=>'0'));
        $list = $this->orders->getList($where);
        $data['list'] = $list;
       
		       //模板选择
       if($checkuser['role'] == 1){
            $this->load->view('orders',$data);
       }elseif($checkuser['role'] == 2){
            $this->load->view('daren/daren_orders',$data);
       }
	}
}