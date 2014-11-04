<?php

class Underwear extends Base_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
        $this->load->model('underwear_mdl','underwear');
		$checkuser = $this->checkown();
        $data['checkuser'] = $checkuser;

        $userid = $checkuser['userid'];
        $data['userid'] = $userid;

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
        $config['base_url'] = base_url().'index.php?c=underwear&brand='.intval($brand).'&userid='.$userid;
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

		
        if($checkuser['role'] == 1){
           $this->load->view('user_underwear',$data);
        }elseif($checkuser['role'] == 2){
            $this->load->view('daren/daren_underwear',$data);
        }

	}

    public function add()
    {
    	$this->checkLogin();
    	$userid = $this->memberinfo['id'];

		$picdir = '/uploads/member/clothespress/';
		$data = array();

       if(!empty($_FILES)){
    		//print_r($_FILES);
            //exit;
            $config['upload_path'] = '.'.$picdir;
            $config['allowed_types'] = '*';
            $config['file_name']  =date("YmdHis").'_'.$userid;

            $this->load->library('upload', $config);
            if ( $upload = $this->upload->do_upload('Filedata'))
            {

                $upload = $this->upload->data();
                $data['filename'] = $upload['file_name'];

                echo $data['filename'];
        
            }else{
                echo $this->upload->display_errors();
            }

        }else{
        	//$this->load->view('yikui');
            echo 'asdf';
        }
    }

    //添加服饰
    public function add_underwear()
    {
        $this->checkLogin();
        $userid = $this->memberinfo['id'];

        $arr = $this->input->post('arr');

        if(empty($arr)){
            exit(0);
        }

       $this->load->model('underwear_mdl','underwear');

       foreach($arr as $k => $v){
            $appdata['userId'] = $userid;
            $appdata['imageUrl'] = $v;
            $this->underwear->add($appdata);
       }

       $json = array('code'=>0,'msg'=>'ok'); 
       echo json_encode($json);

    }

    public function clotherjson()
    {
    	$this->checkLogin();
    	$typeid = $this->input->get('typeid');
    	$userid = $this->memberinfo['id'];
    	$this->load->model('underwear_mdl','underwear');
    	if(empty($typeid)){
    		$where = array('where'=>array('userid'=>$userid));
    	}else{
    		$where = array('where'=>array('type'=>$typeid,'userid'=>$userid));
    	}
    	
    	$arr = $this->underwear->getList($where);
    	echo json_encode($arr);

    }

    //单件服饰的信息
    public function clotherOnejson()
    {

        //$checkuser = $this->checkown();
        //$data['checkuser'] = $checkuser;

        //$userid = $checkuser['userid'];
        //$data['userid'] = $userid;

        $id = $this->input->get('id');
        $this->load->model('underwear_mdl','underwear');
        $where = array('apparelId'=>$id);
        $arr = $this->underwear->get_one_by_id($where);

        echo json_encode($arr);
    }

    //修改服饰属性
    public function updateinfo()
    {
        $this->checkLogin();
        $userid = $this->memberinfo['id'];
        $id = $this->input->post('id');
        $type = $this->input->post('type');

        if(empty($id)){
            exit(0);
        }

        $this->load->model('underwear_mdl','underwear');
        $config = array('apparelId'=>$id,'userId'=>$userid);
        $data['type'] = $type;
       
        echo $this->underwear->update($config,$data);
        
    }
}