<?php
class IndexController extends PlatformAdminController{
    /**
     * 加载后台首页
     */
    public function indexAction(){
        $id = $_SESSION['id'];
        $model_name = new AdminModel;
        $list = $model_name->aotuSelect($id);
        $smarty = new MySmarty;
        $smarty->assign("list",$list);
        $smarty->display('index.html');
    }
    /**
     * 加载网站信息页  
     */
    public function infoAction(){
        $smarty = new MySmarty;
        $server = php_uname("s");//服务器系统类型
        $php_info = phpversion();//当前PHP的版本
        $client_ip = $_SERVER['REMOTE_ADDR'];//获取客户端的IP
        // $mysql_info = mysql_get_server_info();
        $main = $_SERVER['SERVER_ADMIN'];
        $smarty->assign('server',$server);
        $smarty->assign('php_info',$php_info);
        $smarty->assign('client_ip',$client_ip);
        $smarty->assign('main',$main);
        $smarty->display("info.html");
    }

    /**
     * 退出功能
     * 清楚cookie值和session值
     */
    public function dieAction(){
        setcookie("ad_username","",-10);
        setcookie("ad_userpass","",-10);
        @session_destroy();
        $this->jump("index.php?p=admin&c=Admin&a=login");
    }
    
}