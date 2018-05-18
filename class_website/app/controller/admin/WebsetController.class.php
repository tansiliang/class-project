<?php
class WebsetController extends PlatformAdminController{
    /**
     * 显示设置列表
     */
    public function listAction(){
        $model_name = new WebsetModel;
        $list = $model_name->getList();
        $smarty = new MySmarty;
        $smarty->assign("list",$list);
        $smarty->display("webset_list.html");
    }
    /**
     * 显示添加页面
     */
    public function addPageAction(){
        $smarty = new MySmarty;
        $smarty->assign("opt",array('1'=>'显示','0'=>'隐藏'));
        $smarty->assign('sel',1);
        $smarty->display("webset_add.html");
    }
    /**
     * ajax判断标题名是否已经存在
     */
    public function ajaxaddtitleAction(){
        $title = $_POST['webset_title'];
        $model_name = new WebsetModel;
        if($ajax = $model_name->ajaxaddtitleList($title)){
            echo $model_name->error_info;
        }else{
            echo $model_name->error_info;
            return false;
        }
    }
    /**
     * 添加网站信息
     */
    public function addAction(){
        $data['webset_name'] = $_POST['webset_name'];
        $data['webset_title'] = $_POST['webset_title'];//标题
        //获取图标
        $upload_name = new UploadedTools(UPLOADED_DIR,1000000000);
        if($upload = $upload_name->Uploaded($_FILES['webset_title_ico'],'webset_','Webset')){
            //保存图片名字
            $data['webset_title_ico'] = $upload;
        }
        $data['webset_url'] = $_POST['webset_url'];
        $data['webset_seo'] = $_POST['webset_seo'];
        $data['webset_bewrite'] = $_POST['webset_bewrite'];
        $data['webset_show'] = $_POST['webset_show'];
        $data['web_foot_content'] = $_POST['web_foot_content'];
        $model_name = new WebsetModel;
        if($add = $model_name->aotuInsert($data)){
            $this->jump("index.php?p=admin&c=Webset&a=list");
        }else{
            $this->jump("index.php?p=admin&c=Webset&a=addPage",'添加失败',2);
        }
    }
    /**
     * 删除功能
     */
    public function delAction(){
        $id = $_GET['id'];
        $model_name = new WebsetModel;
        if($del = $model_name->aotuDelete($id)){
            $this->jump("index.php?p=admin&c=Webset&a=list");
        }else{
            $this->jump("index.php?p=admin&c=Webset&a=list","删除失败",2);
        }
    }
    /**
     * 显示编辑页面
     */
    public function seleAction(){
        $id = $_GET['id'];
        $model_name = new WebsetModel;
        $list = $model_name->aotuSelect($id);
        $sele = $list['webset_show'] == "1"?'1':'0';
        $smarty = new MySmarty;
        $smarty->assign("list",$list);
        $smarty->assign("show",array('1'=>'显示','0'=>'隐藏'));
        $smarty->assign("sel",$sele);
        $smarty->display("webset_edit.html");
    }
    /**
     * ajax判断当前的标题名是否存在
     */
    public function ajaxeditAction(){
        $id = $_POST['id'];
        $title = $_POST['webset_title'];
        $model_name = new WebsetModel;
        if($model_name->ajaxeditList($id,$title)){
            echo $model_name->error_info;
        }else{
            echo $model_name->error_info;
            return false;
        }
    }
    /**
     * 执行编辑的信息
     */
    public function editAction(){
        $data['webset_id'] = $_POST['webset_id'];
        $data['webset_name'] = $_POST['webset_name'];
        $data['webset_title'] = $_POST['webset_title'];
        if($_FILES['webset_title_ico']['name'] != ""){
            $upload_name = new UploadedTools(UPLOADED_DIR,10000000);
            if($upload = $upload_name->Uploaded($_FILES['webset_title_ico'],'webset_','Webset')){
                $data['webset_title_ico'] = $upload;
            }
        }else{
            $data['webset_title_ico'] = $_POST['webset_ico'];
        }
        $data['webset_url'] = $_POST['webset_url'];
        $data['webset_seo'] = $_POST['webset_seo'];
        $data['webset_bewrite'] = $_POST['webset_bewrite'];
        $data['web_foot_content'] = $_POST['web_foot_content'];
        // die($_POST['web_foot_content']);
        $data['webset_show'] = $_POST['webset_show'];
        $model_name = new WebsetModel();
        if($edit = $model_name->editList($data)){
            $this->jump("index.php?p=admin&c=Webset&a=list");
        }else{
            $this->jump("index.php?p=admin&c=Webset&a=edit","编辑失败",2);
        }
    }
    
}