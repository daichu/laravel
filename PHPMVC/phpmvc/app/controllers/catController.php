<?php
/**
 * Created by PhpStorm.
 * User: CQD
 * Date: 8/11/2018
 * Time: 7:31 PM
 */

class catController
{
    public function indexAction(){
        $name = "đây là trang index 2";
        return view('index',array('name'=>$name));
    }
    // chưa có phương thức thêm sửa xóa của index2

}