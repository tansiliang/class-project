<?php
class ReplyController extends PlatformAdminController{
    /**
     * 显示列表
     */
    public function listAction(){
        $model_name = new ReplyModel;
        $page = isset($_GET['page'])?$_GET['page']:1;
        $pagesize = isset($_GET['pagesize'])?$_GET['pagesize']:$GLOBALS['config']['admin']['works_list_pagesize'];
        $relset = $model_name->getList($page,$pagesize);
        $list = $relset['list'];
        $total = $relset['total'];//总数据
        $htmlpage_name = new PageTools;
        $page_html = $htmlpage_name->showPage($page,$pagesize,$total,"index.php?p=admin&c=Reply&a=list",array("pagesize"=>$pagesize));
        $smarty = new MySmarty;
        $smarty->assign("list",$list);
        $smarty->assign("html_page",$page_html);
        $smarty->display("reply_list.html");
    }
    /**
     * 删除功能
     */
    public function delAction(){
        $id = $_GET['id'];
        $model_name = new ReplyModel;
        if($del = $model_name->aotuDelete($id)){
            $this->jump("index.php?p=admin&c=Reply&a=list");
        }else{
            $this->jump("index.php?p=admin&c=Reply&a=list","删除失败",2);
        }
    }
    /**
     * 显示编辑页面
     */
    public function seleAction(){
        $id = $_GET["id"];
        $model_name = new ReplyModel;
        $list = $model_name->seleList($id);
        $smarty = new MySmarty;
        $smarty->assign("list",$list);
        $smarty->display("reply_edit.html");
    }
}