<?php
class PersonalController extends Controller{
    /**
     * 判断当前的用户是否已经登录，已经登录显示个人中心，没登录显示登录页面
     */
    public function listAction(){
            $naviga_name = new NavigaModel;
            $naviga_list = $naviga_name->getList();
            $webset_name = new WebsetModel;
            $webset_list = $webset_name->getList();
            $smarty = new MySmarty;
            $smarty->assign("naviga_list",$naviga_list);
            $smarty->assign("webset",$webset_list);
        if(isset($_COOKIE['name']) || isset($_COOKIE['pass'])){
            $member_name = new MemberModel;
            $root_info = $member_name->aotuSelect($_COOKIE['id']);
            $sel = $root_info['member_sex'] ==1?1:0;
            $smarty->assign("sex",array('1'=>'男','0'=>'女'));
            $smarty->assign("sel",$sel);
            $smarty->assign("member_info",$root_info);
            $smarty->display("personal.html");
        }else{
            $smarty->display("entry.html");
        }
    }
    /**
     * 验证信息
     */
    public function loginAction(){
        $data['name'] = $_POST['studentid'];
        $data['pass'] = md5($_POST['name']);
        $member_name = new MemberModel;
        if($member_list = $member_name->validateList($data)){
            setcookie("name",$data['name']);
            setcookie("pass",$data['pass']);
            setcookie("id",$member_list['member_id']);
            $this->jump("index.php?p=font&c=Personal&a=list");
        }else{
            $this->jump("index.php?p=font&c=Personal&a=list","登录信息错误",2);
        }
    }

    /**
     * 退出当前账户
     */
    public function dieAction(){
        setcookie('name',null);
        setcookie('pass',null);
        setcookie('id',null);
        $this->jump("index.php?p=font&c=Personal&a=list");
    }

    /**
     * 更改用户信息
     */
    public function editAction(){
        $data['member_id'] = $_POST['member_id'];
        $data['member_name'] = $_POST['nick'];
        if($_FILES['member_imgthumn']['name'] != ""){
            $upload_name = new UploadedTools(UPLOADED_DIR,10000000);
            if($upload = $upload_name->Uploaded($_FILES['member_imgthumn'],'member_','Member')){
                $thumn_name = new ImagesTools;
                $data['member_imgthumn'] = $thumn_name->ImageMake(UPLOADED_DIR.$upload,100,100,'Member');
            }
        }else{
            $data['member_imgthumn'] = $_POST['img_thumn'];
        }
        //个人相片
        if($_FILES['member_images']['name'] != ""){
            $upload_name = new UploadedTools(UPLOADED_DIR,10000000);
            if($upload = $upload_name->Uploaded($_FILES['member_images'],'member_','Member')){
                // $data['member_imgthumn'] = $upload;
                $thumn_name = new ImagesTools;
                $data['member_images'] = $thumn_name->ImageMake(UPLOADED_DIR.$upload,100,100,'Member');
            }
        }else{
            $data['member_images'] = $_POST['img_images'];
        }
        $data['member_truename'] = $_POST['member_truename'];
        $data['member_hobby'] = $_POST['member_hobby'];
        $data['member_sex'] = $_POST['sex'];
        $data['member_content'] = $_POST['member_content'];
        $data['member_phone'] = $_POST['member_phone'];
        // $data['member_pass'] = empty($_POST["oldpass"])?$_POST['member_userpass']:md5($_POST['member_password']);//密码
        $data['member_email'] = $_POST['member_email'];
        // $data['member_studentid'] = $_POST['member_studentid'];
        $model_name = new MemberModel;
        if($edit = $model_name->editfontList($data)){
            $this->jump("index.php?p=font&c=Personal&a=list");
        }else{
            $this->jump("index.php?p=font&c=Personal&a=list","更改失败",2);
        }
    }
    /**
     * ajax判断昵称
     */
    public function editajaxAction(){
        $id = $_POST['id'];
        $name = $_POST['member_name'];
        $model_name = new MemberModel;
        if($model_name->editajaxList($id,$name)){
            echo $model_name->error_info;
        }else{
            echo $model_name->error_info;
            return false;
        }
    }
    /**
     * 判断真实姓名是否已经存在
     */
    public function edittrueajaxAction(){
        $id = $_POST['id'];
        $name = $_POST['member_truename'];
        $model_name = new MemberModel;
        if($model_name->edittrueajaxList($id,$name)){
            echo $model_name->error_info;
        }else{
            echo $model_name->error_info;
            return false;
        }
    }
    /**
     * 验证注册的学号是否已经存在
     */
    public function addajaxAction(){
        $studentid = $_POST['member_studnetid'];
        $model_name = new MemberModel;
        // die("成功了吗？");
        if($model_name->addfontajaxList($studentid)){
            echo $model_name->error_info;
        }else{
            echo $model_name->error_info;
            return false;
        }
    }
    /**
     * 注册会员信息
     */
    public function addAction(){
        $data['member_studentid'] = $_POST['studentid'];
        $data['member_name'] = $_POST['member_name'];
        $data['member_pass'] = md5($_POST['member_pass']);
        $data['member_email'] = $_POST['member_email'];
        $data['member_truename'] = "帅哥、靓女";
        $data['member_sex'] = 1;
        $data['member_hobby'] = '打球、踢球、玩游戏';
        $data['member_content'] = "反正就系好犀利";
        $data['member_phone'] = "110120119114";
        $data['member_images'] = "Member/user.png";
        $data['member_addtime'] = time();
        $data['member_updatetime'] = time();
        $data['member_imgthumn'] = "Member/user.png";
        $model_name = new MemberModel;
        if($model_name->aotuInsert($data)){
            $this->jump("index.php?p=font&c=Personal&a=list");
        }else{
            $this->jump("index.php?p=font&c=Personal&a=list","注册失败",2);
        }
    }
}