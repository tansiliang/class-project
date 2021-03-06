<?php
class WorkController extends PlatformAdminController{
    /**
     * 分页显示
     */
    public function listAction(){
        $model_name = new WorkModel;
        // $list = $model_name->getList();
        $page = isset($_GET['page'])?$_GET['page']:1;
        $pagesize = isset($_GET['pagesize'])?$_GET['pagesize']:$GLOBALS['config']['admin']['works_list_pagesize'];
        $data = $model_name->getPageList($page,$pagesize);
        $list = $data['list'];
        $total = $data['total'];
        $htmlpage_name = new PageTools;
        $page_html = $htmlpage_name->showPage($page,$pagesize,$total,"index.php?p=admin&c=Work&a=list",array("pagesize"=>$pagesize));
        $smarty = new MySmarty;
        $smarty->assign("list",$list);
        $smarty->assign("page_html",$page_html);
        $smarty->display("work_list.html");
    }
    /**
     * 显示添加页面
     */
    public function addPageAction(){
        $naviga_name = new NavigaModel;
        $list = $naviga_name->getTreeList();
        $smarty = new MySmarty;
        $smarty->assign('list',$list);
        $smarty->assign("hot",array('1'=>'热门','0'=>'不热门'));
        $smarty->assign("sel_hot",1);
        $smarty->assign("sel_show",1);
        $smarty->assign("opt",array('1'=>'显示','0'=>'隐藏'));
        $smarty->display("work_add.html");
    }
    /**
     * 添加数据
     */
    public function addAction(){
        $data['work_categoryid'] = $_POST['work_categoryid'];
        $data['work_content'] = $_POST['work_content'];
        $data['work_hot'] = $_POST['work_hot'];
        $data['work_show'] = $_POST['work_show'];
        $data['work_order'] = $_POST['work_order'];
        $data['work_title'] = $_POST['work_title'];
        $data['work_subtitle'] = $_POST['work_subtitle'];
        $data['work_release'] = time();
        $data['work_update'] = time();
        $upload_name = new UploadedTools(UPLOADED_DIR,10000000);
        if($upload = $upload_name->Uploaded($_FILES['work_images'],'work_','Work')){
            $data['work_images'] = $upload;
            //缩略图
            $imgs = new ImagesTools();
            $data['work_thumn'] = $imgs->ImageMake(UPLOADED_DIR.$upload,100,100,'Work');
        }
        $model_name = new WorkModel;
        if($add = $model_name->aotuInsert($data)){
            $this->jump("index.php?p=admin&c=Work&a=list");
        }else{
            $this->jump("index.php?p=admin&c=Work&a=addPage","执行失败",2);
        }
    }

    /**
     * 删除功能
     */
    public function delAction(){
        $id = $_GET['id'];
        $model_name = new WorkModel;
        if($del = $model_name->aotuDelete($id)){
            $this->jump("index.php?p=admin&c=Work&a=list");
        }else{
            $this->jump("index.php?p=admin&c=Work&a=list","删除失败",2);
        }
    }

    /**
     * 显示编辑页面
     */
    public function seleAction(){
        $id = $_GET['id'];
        $model_name = new WorkModel;
        $list = $model_name->aotuSelect($id);
        $naviga_name = new NavigaModel;
        $link = $naviga_name->getTreeList();
        $sel_hot = $list['work_hot'] == 1?1:0;
        $sel_show = $list['work_show'] == 1?1:0;
        $smarty = new MySmarty;
        $smarty->assign("list",$list);
        $smarty->assign("link",$link);
        $smarty->assign("hot",array('1'=>'热门','0'=>'不热门'));
        $smarty->assign("sel_hot",$sel_hot);
        $smarty->assign("opt",array('1'=>'显示','0'=>'隐藏'));
        $smarty->assign("sel_show",$sel_show);
        $smarty->display("work_edit.html");
    }
    /**
     * 更改编辑信息
     */
    public function editAction(){
        $data['work_id'] = $_POST['work_id'];
        $data['work_update'] = time();
        $data['work_content'] = $_POST['work_content'];
        $data['work_hot'] = $_POST['work_hot'];
        $data['work_show'] = $_POST['work_show'];
        $data['work_order'] = $_POST['work_order'];
        $data['work_title'] = $_POST['work_title'];
        $data['work_subtitle'] = $_POST['work_subtitle'];
        if($_FILES['work_images']['name'] != ""){
            $upload_name = new UploadedTools(UPLOADED_DIR,10000000);
            if($upload = $upload_name->Uploaded($_FILES['work_images'],'work_','Work')){
                $data['work_images'] = $upload;
                $thumn_name = new ImagesTools;
                $data['work_thumn'] = $thumn_name->ImageMake(UPLOADED_DIR.$upload,100,100,'Work');
            }
        }else{
            $data['work_images'] = $_POST['img'];
            $data['work_thumn'] = $_POST['img_thumn'];
        }
        $data['work_categoryid'] = $_POST['work_categoryid'];
        $model_name = new WorkModel;
        if($edit = $model_name->editList($data)){
            $this->jump("index.php?p=admin&c=Work&a=list");
        }else{
            $this->jump("index.php?p=admin&c=Work&a=sele",'更改失败',2);
        }
    } 
}