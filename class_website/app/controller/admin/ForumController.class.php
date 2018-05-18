<?php
class ForumController extends PlatformAdminController{
    /**
     * 显示论坛分页列表
     */
    public function listAction(){
        $model_name = new ForumModel;
        $page = isset($_GET['page'])?$_GET['page']:'1';
        $pagesize = isset($_GET['pagesize'])?$_GET['pagesize']:$GLOBALS['config']['admin']['works_list_pagesize'];
        $relset = $model_name->getList($page,$pagesize);
        $list = $relset['list'];
        $total = $relset['total'];//总数据
        $htmlpage_name = new PageTools;
        $page_html = $htmlpage_name->showPage($page,$pagesize,$total,"index.php?p=admin&c=Forum&a=list",array("pagesize"=>$pagesize));
        $smarty = new MySmarty;
        $smarty->assign("list",$list);
        $smarty->assign("html_page",$page_html);
        $smarty->display("forum_list.html");
    }
    /**
     * 删除功能
     */
    public function delAction(){
        $id = $_GET['id'];
        $model_name = new ForumModel;
        if($del = $model_name->aotuDelete($id)){
            $this->jump("index.php?p=admin&c=Forum&a=list");
        }else{
            $this->jump("index.php?p=admin&c=Forum&a=list","删除失败",2);
        }
    }
    /**
     * 显示编辑页面
     */
    public function seleAction(){
        $id = $_GET['id'];
        $model_name = new ForumModel;
        $list = $model_name->seleList($id);
        $smarty = new MySmarty;
        $smarty->assign("list",$list);
        $smarty->display("forum_edit.html");
    }
    /**
     * 获得编辑页面的信息
     */
    public function editAction(){
        $data['id'] = $_POST['forum_id'];
        $data['forum_content'] = $_POST['forum_content'];
        $data['forum_title'] = $_POST['forum_title'];
        if($_FILES['forum_images']['name'] != ""){
            $upload_name = new UploadedTools(UPLOADED_DIR,10000000);
            if($upload = $upload_name->Uploaded($_FILES['forum_images'],'forum_','Forum')){
                $data['forum_images'] = $upload;
            }
        }else{
            $data['forum_images'] = $_POST['imgs'];
        }
        $model_name = new ForumModel;
        if($edit = $model_name->editList($data)){
            $this->jump("index.php?p=admin&c=Forum&a=list");
        }else{
            $this->jump("index.php?p=admin&c=Forum&a=edit","更改失败",2);
        }
    }
}