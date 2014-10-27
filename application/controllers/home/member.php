<?php

class Member extends Admin_Controller{


	public function __construct(){
		parent::__construct();
		$this->load->model('member_mdl','member');
	}

	public function index(){


		$page = isset($_GET['page']) ? $_GET['page'] : 0;
        $page = ($page && is_numeric($page)) ? intval($page) : 1;
        $limit = 20;
        $offset = ($page - 1) * $limit;
        $pagination = '';

        $count = $this->member->get_count();

        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php?d=home&c=member';
        $config['total_rows'] = $count;
        //设置url上第几段用于传递分页器的偏移量
        $config ['uri_segment'] = 4;
        $config['per_page'] = $limit;
        $config['use_page_numbers'] = TRUE;
        $config['query_string_segment'] = 'page';
        $this->pagination->initialize($config);
        $data['page'] = $this->pagination->create_links();

        $list = array();
        $where['page'] = true;
        $where['limit'] = $limit;
        $where['offset'] = $offset;
        $list = $this->member->getList($where);
        $data['list'] = $list;


        $this->load->view('home/home_member',$data);

	}

	public function del(){
        $id = intval($_GET['id']);
        $config['id'] = $id;
        $this->banner->del($config);
        redirect('d=home&c=banner');

    }
}