<?php
class MienController extends Controller{
    /**
     * 显示页面
     */
    public function listAction(){
        $naviga_name = new NavigaModel;
        $naviga_list = $naviga_name->getList();
        $webset_name = new WebsetModel;
        $webset_list = $webset_name->getList();
        $work_name = new WorkModel;
        $work_list = $work_name->getList();
        $smarty = new MySmarty;
        $smarty ->assign("work_list",$work_list);
        $smarty->assign("webset",$webset_list);
        $smarty->assign("naviga_list",$naviga_list);
        $smarty->display("mien.html");
    }
    /**
     * 显示详细页
     */
    public function detailAction(){
        $id = $_GET['id'];
        $naviga_name = new NavigaModel;
        $naviga_list = $naviga_name->getList();
        $webset_name = new WebsetModel;
        $webset_list = $webset_name->getList();
        $work_name = new WorkModel;
        $work_info = $work_name->aotuSelect($id);
        $work_list = $work_name->getList();
        $smarty = new MySmarty;
        $smarty->assign("webset",$webset_list);
        $smarty->assign("naviga_list",$naviga_list);
        $smarty->assign("work_list",$work_info);
        $smarty->assign("work",$work_list);
        $smarty->display("detail.html");
    }
}