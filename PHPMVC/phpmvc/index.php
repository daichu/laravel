<?php
$main_path = dirname(__FILE__);
define('APP_PATH',$main_path.'/app');
define('CONTROLLER_PATH',$main_path.'/app/controllers');
define('VIEWS_PATH',$main_path.'/app/views');
define('CORE_PATH',$main_path.'/core');
define('DB_PATH',$main_path.'/core/database');
define('HELPER_PATH',$main_path.'/core/helper');
define('URL_HOME',"http://localhost/PHPMVC/phpmvc/");
define('URL_ASSTS','http://localhost/PHPMVC/phpmvc/assets');

spl_autoload_register(function ($class_name){
   $paths = array(APP_PATH,CONTROLLER_PATH,VIEWS_PATH,CORE_PATH,DB_PATH,HELPER_PATH,URL_HOME,URL_ASSTS);
   foreach ($paths as $class_file_path){
       $full_path = $class_file_path.'/'.$class_name.'.php';
       if(file_exists($full_path)){
           require $full_path;
       }
   }
});

function view($view,$data){
    ob_start();
    extract($data);
//    require VIEW_PATH.'/'.$view.'/'.$view.'.php';
    require VIEWS_PATH.'/index/index.php';
    require VIEWS_PATH.'/index/create.php';
    require VIEWS_PATH.'/index/edit.php';
    require VIEWS_PATH.'/index/delete.php';
    require VIEWS_PATH.'/index2/index2.php';
    require VIEWS_PATH.'/index2/sua.php';
    require VIEWS_PATH.'/index2/them.php';
    require VIEWS_PATH.'/index2/xoa.php';
    $out = ob_get_contents();
    ob_end_clean();
    echo $out;
}

$controller = isset($_REQUEST['controller'])? $_REQUEST['controller'] : 'index';
//echo "<pre>";
//print_r($controller);
//echo "</pre>";
$controller = strtolower($controller);
//echo "<pre>";
//print_r($controller);
//echo "</pre>";


$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "index";
//echo "<pre>";
//print_r($action);
//echo "</pre>";
$action = strtolower($action);

// tạo actionname "action".Action
$actionName = $action.'Action';
//echo "<pre>";
//print_r($actionName);
//echo "</pre>";
// nối controller class
$controllerClass = $controller.'Controller';
if(class_exists($controllerClass)){
    $instanceController = new $controllerClass;
    if(method_exists($instanceController,$actionName)){
        $instanceController->$actionName();
    }
    else
    {
        $instanceController->indexAction();
    }
}
else{
    $controllerClass = "errorController";
    $instanceController = new $controllerClass();
}
