<?php
class ArrondiController extends platformAdminController{
    /**
     * 显示下载专区列表
     */
    public function listAction(){
        $model_name = new ArrondiModel;
        $page = isset($_GET['page'])?$_GET['page']:1;//当前的页面
        $pagesize = isset($_GET['pagesize'])?$_GET['pagesize']:$GLOBALS['config']['admin']["works_list_pagesize"];//每页显示的条数
        $resel = $model_name->getPageList($page,$pagesize);
        $total = $resel['total'];
        $list = $resel['list']; 
        //实例化分类文本类
        $htmlpage_name = new PageTools;
        $html_page = $htmlpage_name->showPage($page,$pagesize,$total,"index.php?p=admin&c=Arrondi&a=list",array('pagesize'=>$pagesize));
        $smarty = new MySmarty;
        $smarty->assign("list",$list);
        $smarty->assign("html_page",$html_page);
        $smarty->display("arrondi_list.html");
    }
    /**
     * 显示编辑页面
     */
    public function seleAction(){
       $id = $_GET['id'];
       $model_name = new ArrondiModel;
       $list = $model_name->seleList($id);
       $smarty = new MySmarty;
       $smarty->assign("list",$list);
       $smarty->display("arrondi_edit.html"); 
    }
    /**
     * 获取编辑信息
     */
    public function editAction(){
        $data['arrondi_id'] = $_POST['arrondi_id'];
        $data['arrondi_type'] = $_POST['arrondi_type'];
        $data['arrondi_title'] = $_POST['arrondi_title'];
        $data['arrondi_content'] = $_POST['arrondi_content'];
        $model_name = new ArrondiModel;
        if($edit = $model_name->editList($data)){
            $this->jump("index.php?p=admin&c=Arrondi&a=list");
        }else{
            $this->jump("index.php?p=admin&c=Arrondi&a=sele&id={$data['arrondi_id']}","更改失败",2);
        }
    }
    /**
     * 删除功能
     */
    public function delAction(){
        $id = $_GET['id'];
        $model_name = new ArrondiModel;
        if($del = $model_name->aotuDelete($id)){
            $this->jump("index.php?p=admin&c=Arrondi&a=list");
        }else{
            $this->jump("index.php?p=admin&c=Arrondi&a=list","删除失败",2);
        }
    }
}