<?php
class DownloadController extends Controller{
    /**
     * 显示下载专区页面
     */
    public function listAction(){
        $page = isset($_GET['page'])?$_GET['page']:1;//当前的页面
        $pagesize = isset($_GET['pagesize'])?$_GET['pagesize']:$GLOBALS['config']['admin']["works_list_pagesize"];//每页显示的条数
        $naviga_name = new NavigaModel;
        $naviga_list = $naviga_name->getList();
        $webset_name = new WebsetModel;
        $webset_list = $webset_name->getList();
        $arrondi_name = new ArrondiModel;
        $arrondi = $arrondi_name->getPageList($page,$pagesize);
        $total = $arrondi['total'];
        $arrondi_list = $arrondi['list']; 
        //实例化分类文本类
        $htmlpage_name = new PageTools;
        $html_page = $htmlpage_name->showPage($page,$pagesize,$total,"index.php?p=font&c=Download&a=list",array('pagesize'=>$pagesize));
        $member_name = new MemberModel;
        $member_list = $member_name->countList();//会员数
        $arrondi_count = $arrondi_name ->arrondicountList();
        $smarty = new MySmarty;
        $smarty->assign("webset",$webset_list);
        $smarty->assign("naviga_list",$naviga_list);
        $smarty->assign("list",$arrondi_list);
        $smarty->assign("html_page",$html_page);
        $smarty->assign("counts",$member_list);
        $smarty->assign("arrondi_count",$arrondi_count);
        $smarty -> display("Download.html");
    }
    /**
     * 显示内容详情页
     */
    public function pagelistAction(){
        $member_id = $_COOKIE['id'];//当前用户的id
        $id = $_GET['id'];
        $naviga_name = new NavigaModel;
        $naviga_list = $naviga_name->getList();
        $webset_name = new WebsetModel;
        $webset_list = $webset_name->getList();
        $arrondi_name = new ArrondiModel;
        $arrondi_list = $arrondi_name->seleList($id);
        $member_name = new MemberModel;
        $member_info = $member_name->aotuSelect($member_id);//显示用户信息
        $smarty = new MySmarty;
        $smarty->assign("webset",$webset_list);
        $smarty->assign("naviga_list",$naviga_list);
        $smarty->assign("arrondi_list",$arrondi_list);
        $smarty->assign("member_info",$member_info);//当前用户信息
        $smarty->display("load_list.html");
    }
    /**
     * 添加资料
     */
    public function addAction(){
        $data['arrondi_type'] = $_POST['arrondi_type'];
        $data['arrondi_title'] = $_POST['arrondi_title'];
        $data['arrondi_content'] = $_POST['arrondi_content'];
        $data['arrondi_time'] = time();
        $data['arrondi_memberid'] = $_POST['arrondi_memberid'];
        $arrondi_name = new ArrondiModel;
        if($arrondi_name->aotuInsert($data)){
            $this->jump("index.php?P=font&c=Download&a=list");
        }else{
            $this->jump("index.php?p=font&c=Download&a=pagelist","添加失败",2);
        }
    }
}