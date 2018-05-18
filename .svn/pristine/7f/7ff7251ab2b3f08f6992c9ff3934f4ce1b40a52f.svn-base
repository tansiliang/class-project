<?php
class IndexController extends Controller{
    /**
     * 显示首页
     */
    public function listAction(){
        $naviga_name = new NavigaModel;
        $naviga_list = $naviga_name->getList();
        $webset_name = new WebsetModel;
        $webset_list = $webset_name->getList();
        $switch_name = new SwitchableModel;
        $switch_list = $switch_name->getList();
        $work_name = new WorkModel;
        $work_list = $work_name->getList();
        $smarty = new MySmarty;
        $smarty->assign("naviga_list",$naviga_list);
        $smarty->assign("webset",$webset_list);
        $smarty->assign("switch_list",$switch_list);
        $smarty->assign("work_list",$work_list);
        $smarty->display("index.html");
    }
}