<?php
/**
 * Created by PhpStorm.
 * User: CQD
 * Date: 8/11/2018
 * Time: 4:57 PM
 */

class articleController
{
    public function __construct()
    {
//        echo '<br>'."method:" .__METHOD__ ."<br>";
    }
    public function indexAction(){
        $name = "phương thức chạy trang index của article";
        return view('index',array('name'=>$name));
    }
    public function editAction(){
        $name = "đây là sửa";
        return view('index',array('name'=>$name));
    }

}