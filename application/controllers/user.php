<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14-4-16
 * Time: 上午10:57
 */


class User extends Base_Controller
{

    public function __construct()
    {
       parent::__construct();
    }

    public function index()
    {
        $result = array();
        $result = $this->cdb->getOnByWhere('users');
        print_r($result);
    }
}

