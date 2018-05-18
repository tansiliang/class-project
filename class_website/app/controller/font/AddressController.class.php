<?php
class AddressController extends Controller{
    /**
     * 显示通讯录页面
     */
    public function listAction(){
        $naviga_name = new NavigaModel;
        $naviga_list = $naviga_name->getList();
        $webset_name = new WebsetModel;
        $webset_list = $webset_name->getList();
        $member_name = new MemberModel;
        $member_list = $member_name->getList();
        $smarty = new MySmarty;
        $smarty->assign("webset",$webset_list);
        $smarty->assign("naviga_list",$naviga_list);
        $smarty->assign("member_list",$member_list);
        $smarty->display("list.html");
    }
    /**
     * ajax获取页面查询
     */
    public function selectAction(){
        $name = $_POST['name'];
        $member_name = new MemberModel;
        $member = $member_name->selectList($name);
        if($member['counts'] > 0){
            echo json_encode($member['list']);
        }else{
            echo "你搜索的内容不存在！！！";
        }
        
        
    }
}