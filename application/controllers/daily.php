<?php

class Daily extends Base_Controller
{
	

	public function __construct()
    {
        parent::__construct();
        $this->load->model('daily_mdl','daily');
    }

    public function index()
    {
        $checkuser = $this->checkown();
        $data['checkuser'] = $checkuser;

        $userid = $checkuser['userid'];

        $data['userid'] = $userid;

        $this->load->model('daily_mdl','daily');

        //穿搭日志
        $page = isset($_GET['page']) ? $_GET['page'] : 0;
        $page = ($page && is_numeric($page)) ? intval($page) : 1;
        $limit = 6;
        $offset = ($page - 1) * $limit;
        $pagination = '';
        $countwhere = array('applyer'=>$userid);
        $count = $this->daily->get_count($countwhere);
        $data['count'] = $count;

        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php?c=daily&userid='.$userid;
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

        $list = $this->daily->getList($where);
        $data['list'] = $list;
        
        if($checkuser['role'] == 1){
            $this->load->view('home',$data);
        }elseif($checkuser['role'] == 2){
             $this->load->view('daren/daren_daily',$data);
        }
       
    }

    public function view()
    {
    	$id = $this->input->get('id');
    	$config = array('orderId'=>$id);
    	$info = $this->daily->get_one_by_id($config);
    	$data['info'] = $info;

    	$this->load->view('daily_view',$data);

    }

    public function add()
    {
        $this->checkLogin();
    	$userid = $this->memberinfo['id'];

		$data = array();

       if(!empty($_POST)){
    		

          
            $content = $this->input->post('content');
            $ids = $this->input->post('ids');

            $this->load->model('underwear_mdl','underwear');
            $where = array('where'=>"apparelId in ($ids) and userid=$userid");
            $list = $this->underwear->getList($where);

            foreach($list as $k => $v){
                $picarr[] = $v['imageUrl'];
            }
            $picstr = implode(',', $picarr);
            $picname = $this->input->post('picshow');

            $adddata['orderId'] = time().$userid;
            $adddata['message'] = $content;
            $adddata['applyer'] = $userid;
 			$adddata['createDate'] = date("Y-m-d H:i:s");
            $adddata['picinfo'] = $picname.','.$picstr ;
 			echo $this->daily->add($adddata);


        }else{
           
            $this->load->model('attribute_mdl','attribute');
            $where = array('where'=>array('parent'=>1));
            $types = $this->attribute->getList($where);
            
            $data['types'] = $types;

        	$this->load->view('user_daily_add',$data);
        }
    }

    public function add2()
    {
        $this->checkLogin();
        $userid = $this->memberinfo['id'];

        for($i=1;$i<9;$i++){

            if(!empty($_POST['grid'.$i])){
                $ids[] = $_POST['grid'.$i];
            }
           
        }

        if(!empty($ids)){
            $id = implode(',', $ids);
            $this->load->model('underwear_mdl','underwear');
            $where = array('where'=>"apparelId in ($id) and userId=$userid");
            $list = $this->underwear->getList($where);
            $data['list'] = $list;
            $data['ids'] = $id;

            $this->load->view('user_daily_add2',$data);
        }

    }

        public function add_pic()
    {
        $this->checkLogin();
        $userid = $this->memberinfo['id'];

        $picdir = '/uploads/member/daily/';
        $data = array();

       if(!empty($_FILES)){
            //print_r($_FILES);
            //exit;
            $config['upload_path'] = '.'.$picdir;
            $config['allowed_types'] = '*';

            $this->load->library('upload', $config);
            if ( $upload = $this->upload->do_upload('Filedata'))
            {

                $upload = $this->upload->data();
                $data['filename'] = $upload['file_name'];
                echo $data['filename'];
        
            }else{
                echo $this->upload->display_errors();
            }

        }
    }
}