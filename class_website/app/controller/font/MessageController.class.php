<?php
class messageController extends Controller{
    /**
     * 显示关于我们页面
     */
    public function listAction(){
        $naviga_name = new NavigaModel;
        $naviga_list = $naviga_name->getList();
        $webset_name = new WebsetModel;
        $webset_list = $webset_name->getList();
        $work_name = new WorkModel;
        $work_list = $work_name->getList();
        $smarty = new MySmarty;
        $smarty->assign("webset",$webset_list);
        $smarty->assign("naviga_list",$naviga_list);
        $smarty->assign("work_list",$work_list);
        $smarty->display("message.html");
    }
}