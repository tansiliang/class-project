<?php
class AdminController extends PlatformAdminController{
    /**
     * 显示登录页面，使用的是smarty模板
     */
    public function loginAction(){
        $smarty = new MySmarty;
        // $smarty->assign('times',time());
        $smarty->display("login.html");
    }
    /**
     * 显示验证码
     */
    public function captchaAction(){
        $captcha_name = new CaptchaTools;
        return $captcha_name->captCha();
    }
    /**
     * ajax验证验证码
     */
    public function ajaxcaptAction(){
        $validate = $_POST['validate'];
        $captcha_name = new CaptchaTools;
        if(!$captcha_name->chackCapt($validate)){
           echo '验证码错误，请重新输入！！！';
           return false;
        }
    }

    /**
     * 验证登录信息
     */
    public function validateAction(){
        $data['username'] = $_POST['username'];
        $data['userpass'] = $_POST['userpass'];
        $model_name = new AdminModel;
        $row= $model_name->listList($data['username']);#通过session获取用户名，再根据用户名获取id
        $_SESSION['id'] = $row['ad_id'];
        if($validate = $model_name->validateList($data)){
            //判断是否勾选自动登录
            if(isset($_POST['automatic']) && $_POST['automatic'] == 1){
                setcookie("ad_username",$validate['ad_username']);
                setcookie('ad_userpass',md5($validate['userpass'].$validate['ad_salt']));
            }
            session_start();
            $_SESSION['is_name'] = 'yes';
            $this->jump('index.php?p=admin&c=Index&a=index');
        }else{
            $this->jump("index.php?p=admin&c=Admin&a=login",'登录信息错误,请重新登录！！！',2);
        }
    }

    /**
     * 显示管理员信息表
     */
    public function listAction(){
        $data['ad_lasttime'] = time();//最新登录时间
        $data['ad_lastip'] = $_SERVER['REMOTE_ADDR'];//当前登录的IP
        @$data['ad_id'] = $_GET['ad_id'];    
        $model_name = new AdminModel;
        $list = $model_name ->getList($data);
        $smarty = new MySmarty;
        $smarty->assign("list",$list);
        $smarty->display("admin_list.html");
    }

    /**
     * 显示添加管理员列表
     */
    public function addpageAction(){
        $smarty = new MySmarty;
        // $smarty->assign();
        $smarty->display("admin_add.html");
    }
    /**
     * ajax判断当前添加的用户名是否存在
     */
    public function addajaxAction(){
        $model_name = new AdminModel;
        $name = $_POST['ad_username'];
        if($model_name->addList($name)){
            //用户名存在
           echo $model_name->error_info;
        }else{
            //用户名不存在
            echo $model_name->error_info;
            return false;
        }
    }

    /**
     * 添加管理员信息
     */
    public function addAction(){
        $data['ad_username'] = $_POST['ad_username'];//用户名
        $data['ad_userpass'] = md5($_POST['ad_userpass']);//密码
        $data['ad_email'] = $_POST['ad_email'];//邮箱
        $data['ad_addtime'] = time(); //添加时间
        $data['ad_lasttime'] = time(); //最后登录的时间
        $data['ad_salt'] = mt_rand();
        $data['ad_lastip'] = $_SERVER['REMOTE_ADDR'];//当前登录的IP
        $model_name = new AdminModel;
        if($add = $model_name->aotuInsert($data)){
            $this->jump("index.php?p=admin&c=Admin&a=list");
        }else{
            $this->jump("index.php?p=admin&c=Admin&a=addpage","登录失败",2);
        }
    }
    /**
     * 删除功能
     */
    public function delAction(){
        $id = $_GET['id'];
        $model_name = new AdminModel;
        if($del = $model_name->aotuDelete($id)){
            $this->jump("index.php?p=admin&c=Admin&a=list");
        }else{
            $this->jump("index.php?p=admin&c=Admin&a=list","删除失败",2);
        }
    }
    /**
     * 显示编辑页面
     */
    public function seleAction(){
        $id = $_GET['id'];
        $model_name = new AdminModel;
        if($list = $model_name->aotuSelect($id)){
            $smarty= new MySmarty;
            $smarty->assign("list",$list);
            $smarty->display("admin_edit.html");
        }else{
            $this->jump("index.php?p=admin&c=Admin&a=list","编辑失败，请查找原因",2);
        }
    }

    /**
     * ajax判断修改的用户名是否存在
     */
    public function editajaxAction(){
        $name = $_POST['ad_username'];
        $id = $_POST['id'];
        $model_name = new  AdminModel;
        if($model_name->editajaxList($id,$name)){
            //存在
            echo $model_name->error_info;
        }else{
            echo $model_name->error_info;
            return false;
        }
    }
    /**
     * ajax判断当前旧密码是否正确
     */
    public function editajaxoldpassAction(){
        $data['ad_userpass'] = $_POST['ad_userpass'];
        $data['id'] = $_POST['id'];
        $model_name = new AdminModel;
        if($model_name->ajaxoldpassList($data)){
            echo $model_name->error_info;
        }else{
            echo $model_name->error_info ;
            return false;
        }
    }
    /**
     * 编辑信息
     */
    public function editAction(){
        $data['ad_username'] = $_POST['ad_username'];//用户名
        $data['ad_userpass'] = empty($_POST["oldpass"])?$_POST['ad_userpass']:md5($_POST['ad_password']);//密码
        $data['ad_email'] = $_POST['ad_email'];//邮箱
        $data['ad_salt'] = $_POST['ad_salt'];
        $data['ad_id'] = $_POST['ad_id'];
        $model_name = new AdminModel;
        if($model_name->editList($data)){
            $this->jump("index.php?p=admin&c=Admin&a=list");
        }else{
            $this->jump("index.php?p=admin&c=Admin&a=sele","编辑失败",2);
        }
    }
    /**
     * 重置功能
     */
    public function resetAction(){
        $id = $_GET['id'];
        $model_name = new AdminModel;
        if($reset = $model_name->resetList($id)){
            $this->jump("index.php?p=admin&c=Admin&a=list");
        }else{
            $this->jump("index.php?P=admin&c=Admin&a=list",'重置失败',2);
        }
    }

}