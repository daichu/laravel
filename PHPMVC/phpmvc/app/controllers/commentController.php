<?php
/**
 * Created by PhpStorm.
 * User: CQD
 * Date: 8/11/2018
 * Time: 7:07 PM
 */

class commentController
{
    public function __construct()
    {
//        echo "phương thức:" . __METHOD__ ." ". __CLASS__;
    }
    public function indexAction(){
        $name = "đây là trang chủ";
        return view('index',array('name'=>$name));
    }
    public function deleteAction(){
        $name = "đây là trang xóa";
        return view('index',array('name'=>$name));
    }
}