<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14-6-3
 * Time: 下午3:59
 */

class Test_mdl extends CI_Model{


    public function __construct(){
        parent::__construct();
    }

    public function getTableName(){

        return __CLASS__;

    }

    public function getMap()
    {
        print_r($this->map);
    }

}