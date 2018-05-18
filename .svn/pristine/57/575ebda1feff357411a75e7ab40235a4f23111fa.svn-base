<?php
class SwitchableController extends PlatformAdminController{
    /**
     * 显示列表
     */
    public function listAction(){
        $model_name = new SwitchableModel;
        // $list = $model_name->getList();
        $page = isset($_GET['page'])?$_GET['page']:1;//当前的页面
        $pagesize = isset($_GET['pagesize'])?$_GET['pagesize']:$GLOBALS['config']['admin']["works_list_pagesize"];//每页显示的条数
        $resel = $model_name->getPageList($page,$pagesize);
        $total = $resel['total'];
        $list = $resel['list'];
        //实例化分类文本类
        $htmlpage_name = new PageTools;
        $html_page = $htmlpage_name->showPage($page,$pagesize,$total,"index.php?p=admin&c=Switchable&a=list",array('pagesize'=>$pagesize));
        $smarty = new MySmarty();
        $smarty->assign("list",$list);
        $smarty->assign("html_page",$html_page);
        $smarty->display("switchable_list.html");
    }

    /**
     * 显示添加页面
     */
    public function addPageAction(){
        $smarty = new MySmarty;
        $smarty->assign("opt",array('1'=>'发布','0'=>'撤回'));
        $smarty->assign("sel",1);
        $smarty->display("switchable_add.html");
    }
    /**
     * 添加信息
     */
    public function addAction(){
        $data['switchable_name'] = $_POST['switchable_name'];
        $upload_name = new UploadedTools(UPLOADED_DIR,100000000);
        if($upload = $upload_name->Uploaded($_FILES['switchable_images'],'switchable_','Switchable')){
            $data['switchable_images'] = $upload;
            $thumn_name = new ImagesTools;
            $data['switchable_thumn'] = $thumn_name->ImageMake(UPLOADED_DIR.$upload,'100','100','Switchable');
        }
        $data['switchable_content'] = $_POST['switchable_content'];
        $data['switchable_show'] = $_POST['switchable_show'];
        $data['switchable_order'] = $_POST['switchable_order'];
        $data['switchable_time'] = time();
        $model_name = new SwitchableModel;
        if($add = $model_name->aotuInsert($data)){
            $this->jump("index.php?p=admin&c=Switchable&a=list");
        }else{
            $this->jump("index.php?p=admin&c=Switchable&a=addPage","添加失败",2);
        }
    }
    /**
     * 删除功能
     */
    public function delAction(){
        $id = $_GET['id'];
        $model_name = new SwitchableModel;
        if($del = $model_name->aotuDelete($id)){
            $this->jump("index.php?p=admin&c=Switchable&a=list");
        }else{
            $this->jump("index.php?p=admin&c=Switchable&a=list","删除失败",2);
        }
    }
    /**
     * 显示编辑页面
     */
    public function seleAction(){
        $id = $_GET['id'];
        $model_name = new SwitchableModel;
        $list = $model_name->aotuSelect($id);
        $sele = $list['switchable_show'] == 1?1:0;
        $smarty = new MySmarty;
        $smarty->assign("list",$list);
        $smarty->assign("opt",array("1"=>"发布","0"=>"撤回"));
        $smarty->assign("sel_show",$sele);
        $smarty->display("switchable_edit.html");
    }
    /**
     * 更改信息
     */
    public function editAction(){
        $data['switchable_id'] = $_POST['switchable_id'];
        $data['switchable_name'] = $_POST['switchable_name'];
        $data['switchable_content'] = $_POST['switchable_content'];
        $data['switchable_show'] = $_POST['switchable_show'];
        $data['switchable_order'] = $_POST['switchable_order'];
        if($_FILES['switchable_images']['name'] != ""){
            $upload_name = new UploadedTools(UPLOADED_DIR,1000000000);
            if($upload = $upload_name->Uploaded($_FILES['switchable_images'],"switchable_","Switchable")){
                $data['switchable_images'] = $upload;
                $thumn_name = new ImagesTools;
                $data['switchable_thumn'] = $thumn_name->ImageMake(UPLOADED_DIR.$upload,'100','100','Switchable');
            }
        }else{
                $data['switchable_images'] = $_POST['img'];
                $data['switchable_thumn'] = $_POST['img_thumn'];
        }
        $model_name = new SwitchableModel;
        if($edit = $model_name->editList($data)){
            $this->jump("index.php?p=admin&c=Switchable&a=list");
        }else{
            $this->jump("index.php?p=admin&c=Switchable&a=edit","更改失败",2);
        }
    }
}
