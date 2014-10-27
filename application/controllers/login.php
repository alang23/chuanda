<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 13-11-29
 * Time: 上午9:43
 */

class Login extends Base_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
    }


    public function index()
    {
        if(!empty($this->memberinfo)){
            redirect('c=home');
        }
        if(!empty($_POST)){
            $mobile = $this->input->post('mobile');
            $pawd = $this->input->post('pawd');
            $captcha = $this->input->post('captcha');
            if(empty($mobile) || empty($pawd) || empty($captcha)){
                exit('info error');
            }

            $this->load->model('member_mdl','member');
            $config = array('mobile'=>$mobile);
            $userinfo = array();
            $userinfo = $this->member->get_one_by_where($config);

            if(empty($userinfo)){
                exit('no user');
            }

            if(md5($pawd) != $userinfo['pass_word']){
                exit('pwd error');
            }
            //session记录的信息
            $logininfo['id'] = $userinfo['userid'];
            $logininfo['username'] = $userinfo['username'];
            $logininfo['photo'] = $userinfo['photo'];
            $logininfo['role'] = 1;

            
            //记录状态
            $this->session->set_userdata($this->config->item('sess_cookie_name'),$logininfo);

            redirect('c=home');

        }else{
            $this->load->view('login');
        }
    }

    public function check_form()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
       
        return $this->form_validation->run();
    }

    public function loginout()
    {
        $this->session->unset_userdata($this->config->item('sess_cookie_name'));

        redirect();
    }
}