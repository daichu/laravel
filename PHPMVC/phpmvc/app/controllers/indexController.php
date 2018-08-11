<?php
/**
 * Created by PhpStorm.
 * User: CQD
 * Date: 8/11/2018
 * Time: 6:16 PM
 */

class indexController
{
    public function __construct()
    {
        // phương thức khởi tạo
    }
    public function indexAction(){
        $name = "PHP MVC";
//        $name = array('chao'=>"bạn",'you'=>"bạn");
        return view('index',array('name'=>$name));
    }
    public  function createAction(){
        $name = "";
        return view('create', array('name'=>$name));
    }
}