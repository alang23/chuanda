<?php

class Myorder extends Base_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->checkLogin();
	}


	public function index()
	{
		$userid = $this->memberinfo['id'];
		$data['userid'] = $userid;

        $this->load->model('underwear_mdl','underwear');
		$checkuser = $this->checkown();
        $data['checkuser'] = $checkuser;

        $brand = $this->input->get('brand');
        if(empty($brand)){
            $countwhere = array('userId'=>$userid);
        }else{
            $countwhere = array('type'=>$brand,'userId'=>$userid);
        }
       
        $data['brand'] = $brand;
                //穿搭日志
        $page = isset($_GET['page']) ? $_GET['page'] : 0;
        $page = ($page && is_numeric($page)) ? intval($page) : 1;
        $limit = 15;
        $offset = ($page - 1) * $limit;
        $pagination = '';
       
        $count = $this->underwear->get_count($countwhere);
        $data['count'] = $count;

        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php?c=myorder&brand='.intval($brand).'&userid='.$userid;
        $config['total_rows'] = $count;
        //设置url上第几段用于传递分页器的偏移量
        $config ['uri_segment'] = 4;
        $config['per_page'] = $limit;
        $config['use_page_numbers'] = TRUE;
        $config['query_string_segment'] = 'page';
        //num
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        //“当前页”链接的打开标签。
        $config['cur_tag_open'] = '<li><span  class="page-active">';
        $config['cur_tag_close'] = '</span></li>';
        //上页
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        //下页
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['page'] = $this->pagination->create_links();

        $list = array();
        $where['page'] = true;
        $where['limit'] = $limit;
        $where['offset'] = $offset;
        $where['where'] = $countwhere;

        $list = $this->underwear->getList($where);
        $data['list'] = $list;

        //类别
        $this->load->model('attribute_mdl','attribute');
        $typeconfig = array('where'=>array('parent'=>1));
        $types = $this->attribute->getList($typeconfig);
        $data['types'] = $types;

		$this->load->view('order_1',$data);
	}
}