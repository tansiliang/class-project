<?php
class MemberController extends PlatformAdminController{
    /**
     * 显示会员列表信息
     */
    public function listAction(){
        $model_name = new MemberModel;
        // $list = $model_name->getList();
        $page = isset($_GET['page'])?$_GET['page']:1;//当前的页面
        $pagesize = isset($_GET['pagesize'])?$_GET['pagesize']:$GLOBALS['config']['admin']["works_list_pagesize"];//每页显示的条数
        $resel = $model_name->getPageList($page,$pagesize);
        $total = $resel['total'];
        $list = $resel['list']; 
        //实例化分类文本类
        $htmlpage_name = new PageTools;
        $html_page = $htmlpage_name->showPage($page,$pagesize,$total,"index.php?p=admin&c=Member&a=list",array('pagesize'=>$pagesize));
        $smarty = new MySmarty;
        $smarty->assign("list",$list);
        $smarty->assign("html_page",$html_page);
        $smarty->display("Member_list.html");
    }
    /**
     * 显示添加会员页面
     */
    public function addPageAction(){
        $smarty = new MySmarty;
        $smarty->assign("sex",array('1'=>'男','0'=>'女'));
        $smarty->assign("sel",1);
        $smarty->display("Member_add.html");
    }
    /**
     * ajax判断当前的用户名是否存在
     */
    public function addajaxAction(){
        $name = $_POST['member_name'];
        $model_name = new MemberModel;
        if($model_name->addajaxList($name)){
            echo $model_name->error_info;
        }else{
            echo $model_name->error_info;
            return false;
        }
    }
    /**
     * 添加新的会员
     */
    public function addAction(){
        $data['member_name'] = $_POST['member_name'];
        $data['member_email'] = $_POST['member_email'];
        $data['member_pass'] = md5($_POST['member_pass']);
        $data['member_studentid'] = $_POST['member_studentid'];
        $data['member_sex'] = $_POST['member_sex'];
        $upload_name = new UploadedTools(UPLOADED_DIR,10000000);
        if($upload = $upload_name->Uploaded($_FILES['member_imgthumn'],'member_','Member')){
            // $data['member_imgthumn'] = $upload;
            //缩略图
            $imgs = new ImagesTools();
            $data['member_imgthumn'] = $imgs->ImageMake(UPLOADED_DIR.$upload,100,100,'Member');
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
            // $data['member_imgthumn'] = $_POST['img'];
            $data['member_images'] = $_POST['img_images'];
        }
        $data['member_truename'] = $_POST['member_truename'];
        $data['member_hobby'] = $_POST['member_hobby'];
        $data['member_content'] = $_POST['member_content'];
        $data['member_phone'] = $_POST['member_phone'];
        $data['member_addtime'] =time();
        $data['member_updatetime'] =time();
        $data['member_ip'] =$_SERVER['SERVER_ADDR'];
        $model_name = new MemberModel;
        if($add = $model_name->aotuInsert($data)){
            $this->jump("index.php?p=admin&c=Member&a=list");
        }else{
            $this->jump("index.php?p=admin&c=Member&a=addPage","添加失败",2);
        }
    }
    /**
     * 删除功能
     */
    public function delAction(){
        $id = $_GET['id'];
        $model_name = new MemberModel;
        if($del = $model_name->aotuDelete($id)){
            $this->jump("index.php?p=admin&c=Member&a=list");
        }else{
            $this->jump("index.php?p=admin&c=Member&a=list","删除失败",2);
        }
    }
    /**
     * 显示编辑页面
     */
    public function seleAction(){
        $id = $_GET['id'];
        $model_name = new MemberModel;
        $list = $model_name->aotuSelect($id);
        $sel = $list['member_sex'] == 1?1:0;
        $smarty = new MySmarty;
        $smarty->assign("sex",array('1'=>'男','0'=>'女'));
        $smarty->assign("sel",$sel);
        $smarty->assign("list",$list);
        $smarty->display("member_edit.html");
    }
    /**
     * ajax判断用户名的信息
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
     * ajax判断当前输入的旧密码是否正确
     */
    public function editajaxoldpassAction(){
        $id = $_POST['id'];
        $pass = md5($_POST['member_userpass']);
        $model_name = new MemberModel;
        if($model_name->editajaxoldpassList($id,$pass)){
            echo $model_name->error_info;
        }else{
            echo $model_name->error_info;
            return false;
        }
    }
    /**
     * 更改会员信息
     */
    public function editAction(){
        $data['member_id'] = $_POST['member_id'];
        $data['member_name'] = $_POST['member_name'];
        if($_FILES['member_imgthumn']['name'] != ""){
            $upload_name = new UploadedTools(UPLOADED_DIR,10000000);
            if($upload = $upload_name->Uploaded($_FILES['member_imgthumn'],'member_','Member')){
                // $data['member_imgthumn'] = $upload;
                $thumn_name = new ImagesTools;
                $data['member_imgthumn'] = $thumn_name->ImageMake(UPLOADED_DIR.$upload,100,100,'Member');
            }
        }else{
            // $data['member_imgthumn'] = $_POST['img'];
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
            // $data['member_imgthumn'] = $_POST['img'];
            $data['member_images'] = $_POST['img_images'];
        }
        $data['member_truename'] = $_POST['member_truename'];
        $data['member_hobby'] = $_POST['member_hobby'];
        $data['member_sex'] = $_POST['member_sex'];
        $data['member_content'] = $_POST['member_content'];
        $data['member_phone'] = $_POST['member_phone'];
        $data['member_pass'] = empty($_POST["oldpass"])?$_POST['member_userpass']:md5($_POST['member_password']);//密码
        $data['member_email'] = $_POST['member_email'];
        $data['member_studentid'] = $_POST['member_studentid'];
        $model_name = new MemberModel;
        if($edit = $model_name->editList($data)){
            $this->jump("index.php?p=admin&c=Member&a=list");
        }else{
            $this->jump("index.php?p=admin&c=Member&a=sele","更改失败",2);
        }
    }
    /**
     * 重置功能
     */
    public function resetAction(){
        $id = $_GET['id'];
        $model_name = new MemberModel;
        if($model_name->resetList($id)){
            $this->jump("index.php?p=admin&c=Member&a=list");
        }else{
            $this->jump("index.php?p=admin&c=Member&a=list","重置失败",2);
        }
    }
    /**
     * ajax判断更改的学号是否已经存在
     */
    public function ajaxstudentidAction(){
        $id = $_POST['id'];
        $studentid = $_POST['member_studentid'];
        $model_name = new MemberModel;
        if($model_name->ajaxstudentidList($id,$name)){
            echo $model_name->error_info;
        }else{
            echo $model_name->error_info;
            return false;
        }
    }
    /**
     * ajax判断添加的学号是否已经存在
     */
    public function addstudentidAction(){
        $student = $_POST['member_studentid'];
        $model_name = new MemberModel;
        if($model_name->addstudentidList($student)){
            echo $model_name->error_info;
        }else{
            echo $model_name->error_info;
            return false;
        }
    }
    
}