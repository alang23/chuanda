<?php
if (!defined('APPLICATIONPATH')) exit('No direct script access allowed');

//注册需要验证的函数

function check_mobile($mobile){

	//$pattern = "/^(13|15)/d{9}$/";  
	$pattern = '/^(131|132|134|158|138)\d{8}$/';

    if (preg_match($pattern,$mobile))   
    {   
        return true;   
    }   
    else   
    {   
        return false;   
    } 
}

/**
* @检验密码
*$pwd : 密码
**/

function check_pawd($pwd)
{
	$result = false;

    if (strlen($pwd)>30 || strlen($pwd)<6)  
    {  
        $result = false;
    }  
  
    if(preg_match("/^\d*$/",$pwd))  
    {  
        $result = false;//全数字  
    }  
       
    if(preg_match("/^[a-z]*$/i",$pwd))  
    {  
       $result = false;//全字母      
    }  
       
    if(!preg_match("/^[a-z\d]*$/i",$pwd))  
    {  
        $result = true;//有数字有字母  ";  
    } 

    return $result;

}