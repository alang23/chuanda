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

		//达人ID
		$uid = $this->input->get('uid');
		$data['uid'] = $uid;

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
        $config['base_url'] = base_url().'index.php?c=myorder&brand='.intval($brand).'&userid='.$userid.'&uid='.$uid;
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

	public function step2()
	{
		$userid = $this->memberinfo['id'];
		$data['userid'] = $userid;

		//达人ID
		$uid = $this->input->get('uid');
		$data['uid'] = $uid;

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
        $config['base_url'] = base_url().'index.php?c=myorder&m=step2&brand='.intval($brand).'&userid='.$userid.'&uid='.$uid;
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

		$this->load->view('order_2',$data);
	}

	public function step3()
	{
		//达人ID
		$uid = $this->input->get('uid');
		$data['uid'] = $uid;
		$this->load->view('order_3',$data);
	}

	public function step4()
	{
        $this->checkLogin();
        $userid = $this->memberinfo['id'];
        $uid = $this->input->get('uid');
        $data['uid'] = $uid; 

        $season = $this->input->post('season');
        $occasion = $this->input->post('occasion');
        $style = $this->input->post('style');
        $weaher = $this->input->post('weaher');
        $identity = $this->input->post('identity');
        $demand = $this->input->post('demand');
        $yin = $this->input->post('yin');
        $you = $this->input->post('you');
        $transactionAmount = $this->input->post('transactionAmount');

        $data['season'] = $season;
        $data['occasion'] = $occasion;
        $data['style'] = $style;
        $data['weaher'] = $weaher;
        $data['identity'] = $identity;
        $data['demand'] = $demand;
        $data['transactionAmount'] = $transactionAmount;
        //另外一个表
        $data['yin'] = $yin;
        $data['you'] = $you;

        $this->load->model('member_mdl','member');
        $where = array('m.id'=>$uid);
        $userinfo = $this->member->get_one_by_where($where);
        $data['userinfo'] = $userinfo;

        //隐藏衣服
        $query = $this->db->query("select imageUrl,apparelId from t_col_apparel where userId = $userid and apparelId in($yin)");
        $yinarr = $query->result_array();
        $data['yinarr'] = $yinarr;

        //优
        if(!empty($you)){
            $query = $this->db->query("select imageUrl,apparelId from t_col_apparel where userId = $userid and apparelId = $you");
            $youarr = $query->result_array();
            $data['you'] = $youarr[0];
            //print_r($youarr);
        }
            //订单入库
        $this->load->view('order_4',$data);
		
	}

    public function save()
    {

        $this->checkLogin();
        $userid = $this->memberinfo['id'];
        $uid = $this->input->get('uid');
        $data['applyer'] = $uid; 

        $season = $this->input->post('season');
        $occasion = $this->input->post('occasion');
        $style = $this->input->post('style');
        $weaher = $this->input->post('weaher');
        $identity = $this->input->post('identity');
        $demand = $this->input->post('demand');
        $yin = $this->input->post('yin');
        $you = $this->input->post('you');
        $transactionAmount = $this->input->post('transactionAmount');

        $data['season'] = $season;
        $data['occasion'] = $occasion;
        $data['style'] = $style;
        $data['weaher'] = $weaher;
        $data['identity'] = $identity;
        $data['message'] = $demand;
        $data['transactionAmount'] = $transactionAmount;
        $data['orderId'] = time().$userid;
        $data['createDate'] = date("Y-m-d :H:i:s");
        $data['applyer'] = $userid;
        $data['status'] = 0;
        $data['approver'] = $uid;
        //另外一个表
        $dataopen['yin'] = $yin;
        $dataopen['you'] = $you;



        $this->load->model('daily_mdl','daily');
        $this->daily->add($data);

        redirect('c=myorder&m=step5');
    }

    public function step5()
    {
        $this->load->view('order_5');
    }

}