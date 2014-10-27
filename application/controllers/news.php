<?php


class News extends Base_Controller{



	public function __construct(){

		parent::__construct();
		$this->load->model('news_mdl','news');
	}


	public function index(){

                $this->load->model('banner_mdl','banner');
                $banner = $this->banner->get_new_by_id(array('weizhi'=>5));
                $data['banner'] = $banner;
        	$page = isset($_GET['page']) ? $_GET['page'] : 0;
                $page = ($page && is_numeric($page)) ? intval($page) : 1;
                $limit = 6;
                $offset = ($page - 1) * $limit;
                $pagination = '';

                $count = $this->news->get_count();

                $this->load->library('pagination');
                $config['base_url'] = base_url().'index.php?c=news';
                $config['total_rows'] = $count;
                //设置url上第几段用于传递分页器的偏移量
                $config ['uri_segment'] = 4;
                $config['per_page'] = $limit;
                $config['use_page_numbers'] = TRUE;
                $config['display_pages'] = FALSE;
                $config['prev_link'] = '&lt;上一页';
                $config['next_link'] = '下一页&gt;';
                $config['query_string_segment'] = 'page';
                $this->pagination->initialize($config);
                $data['page'] = $this->pagination->create_links();

                $list = array();
                $where['page'] = true;
                $where['limit'] = $limit;
                $where['offset'] = $offset;
                $list = $this->news->getList($where);
                $data['list'] = $list;

                $data['nav'] = 'news';


        	$this->load->view('news',$data);
	}

	public function article(){
                $data['nav'] = 'news';
		$id = $this->input->get('id');
		$config['id'] = $id;
		$info = $this->news->get_new_by_id($config);
		$data['info'] = $info;

		$this->load->view('article',$data);
	}
}