<?php
/**
 * 单例模式实现widget.
 *
 * widget即小组件包含自己的控制器，视图，模型(可以共用普通model)。
 * 通常用来实现各页面都有的公共部分
 *
 * @author ricky
 * @since  2010/12/24 09:00
 */
class Widget extends CI_Controller
{
    /**
     * 静态ci对象
     */
    public static $_ci;

    /**
     * 私有构造函数用于实现单例模式
     */
    public function __construct()
    {
        parent::__construct();
        self::$_ci = & get_instance();//php 5.3中self改为static
    }
    /**
     * 获取当前类名
     */
    private static function _getClass()
    {
        return __CLASS__;
    }
    /**
     * 普通控制器方法
     */
    public static function footer()
    {
        /**
         * 开发自己的方法必需包含此两行代码
         */
        $class = self::_getClass();
        //$instance = & new $class();//延迟绑定
        $instance = new $class();//延迟绑定

        $instance->load->view('footer');
    }

        /**
     * 普通控制器方法
     */
    public static function navigate()
    {
        /**
         * 开发自己的方法必需包含此两行代码
         */
        $class = self::_getClass();
        //$instance = & new $class();//延迟绑定
        $instance = new $class();//延迟绑定

        $instance->load->view('navigate');
    }



    /**
     * 普通控制器方法
     */
    public static function head()
    {
        /**
         * 开发自己的方法必需包含此两行代码
         */
        $class = self::_getClass();
        //$instance = & new $class();//延迟绑定
        $instance = new $class();//延迟绑定

        $instance->load->view('home/home_head');
    }

    /**
     * 普通控制器方法
     */
    public static function top()
    {
        /**
         * 开发自己的方法必需包含此两行代码
         */
        $class = self::_getClass();
        //$instance = & new $class();//延迟绑定
        $instance = new $class();//延迟绑定

        $instance->load->view('home/home_top');
    }

    /**
     * 普通控制器方法
     */
    public static function sidebar()
    {
        /**
         * 开发自己的方法必需包含此两行代码
         */
        $class = self::_getClass();
        //$instance = & new $class();//延迟绑定
        $instance = new $class();//延迟绑定

        $instance->load->view('home/home_sidebar');
    }

    /**
     * 普通控制器方法
     */
    public static function page_heade()
    {
        /**
         * 开发自己的方法必需包含此两行代码
         */
        $class = self::_getClass();
        //$instance = & new $class();//延迟绑定
        $instance = new $class();//延迟绑定

        $instance->load->view('home/home_page_head');
    }

    /**
    *前端公共
    *
    **/

    public static function web_header()
    {
        /**
         * 开发自己的方法必需包含此两行代码
         */
        $class = self::_getClass();
        //$instance = & new $class();//延迟绑定
        $instance = new $class();//延迟绑定

        $instance->load->view('public/web_header');
    }

    public static function web_footer()
    {
        /**
         * 开发自己的方法必需包含此两行代码
         */
        $class = self::_getClass();
        //$instance = & new $class();//延迟绑定
        $instance = new $class();//延迟绑定

        $instance->load->view('public/web_footer');
    }

    public static function web_header_public()
    {
        /**
         * 开发自己的方法必需包含此两行代码
         */
        $class = self::_getClass();
        //$instance = & new $class();//延迟绑定
        $instance = new $class();//延迟绑定

        $instance->load->view('public/web_header_public');
    }

    public static function web_member_banner($userid)
    {
        /**
         * 开发自己的方法必需包含此两行代码
         */
        $class = self::_getClass();
        //$instance = & new $class();//延迟绑定
        $instance = new $class();//延迟绑定

                        //主题    
        //$userinfo = self::$_ci->session->userdata(self::$_ci->config->item('sess_cookie_name'));
        $config = array('m.id'=>$userid,'t.theme_type'=>'header');  
        self::$_ci->load->model('theme_mdl','theme');
        $themeinfo = self::$_ci->theme->get_one_by_where($config);

        $data['pic_url'] = $themeinfo['pic_url'];
        
        if(empty($themeinfo['pic_url'])){
            
            $themeinfo['pic_url'] = '/uploads/member/theme/header/diy-cover-test.jpg';
        }

        if(empty($themeinfo['photo'])){
            
            $themeinfo['photo'] = '/uploads/member/theme/header/diy-cover-test.jpg';
        }


        $data['themeinfo'] = $themeinfo;
        $role = 1;
        if($role == 1){
             $instance->load->view('public/web_member_banner',$data);
        }elseif($role==2){
                   //店铺信息
                self::$_ci->load->model('shopconfig_mdl','shopconfig');
                $whereconfig = array('user_id'=>$userid);
                $shopinfo = self::$_ci->shopconfig->get_one_by_where($whereconfig);
                $data['shopinfo'] = $shopinfo;
              $instance->load->view('public/web_daren_banner',$data);
        }      

       
    }

    public static function web_daren_banner($userid)
    {
        /**
         * 开发自己的方法必需包含此两行代码
         */
        $class = self::_getClass();
        //$instance = & new $class();//延迟绑定
        $instance = new $class();//延迟绑定

                        //主题    
        //$userinfo = self::$_ci->session->userdata(self::$_ci->config->item('sess_cookie_name'));
        $config = array('m.id'=>$userid,'t.theme_type'=>'header');  
        self::$_ci->load->model('theme_mdl','theme');
        $themeinfo = self::$_ci->theme->get_one_by_where($config);

        $data['pic_url'] = $themeinfo['pic_url'];
        
        if(empty($themeinfo['pic_url'])){
            
            $themeinfo['pic_url'] = '/uploads/member/theme/header/diy-cover-test.jpg';
        }

        if(empty($themeinfo['photo'])){
            
            $themeinfo['photo'] = '/uploads/member/theme/header/diy-cover-test.jpg';
        }


        $data['themeinfo'] = $themeinfo;
       
       //店铺信息
        self::$_ci->load->model('shopconfig_mdl','shopconfig');
        $whereconfig = array('user_id'=>$userid);
        $shopinfo = self::$_ci->shopconfig->get_one_by_where($whereconfig);
        $data['shopinfo'] = $shopinfo;

        $instance->load->view('public/web_daren_banner',$data);
    }



}