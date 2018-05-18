<?php
class NavigaController extends  PlatformAdminController{
    /**
     * 显示导航列表
     */
    public function listAction(){
        $model_name = new NavigaModel;
        $list = $model_name->getTreeList();//分类列表
        $smarty = new MySmarty;
        $smarty->assign("list",$list);
        $smarty->display("naviga_list.html");
    }
    /**
     * 显示添加导航页面
     */
    public function addPageAction(){
        $model_name = new NavigaModel;
        $list = $model_name->getTreeList();
        $smarty = new MySmarty;
        $smarty->assign("list",$list);//显示分类下拉列表
        $smarty->assign("opt",array('1'=>"显示",'0'=>"隐藏"));
        $smarty->assign("sel",1);
        $smarty->display("naviga_add.html");
    }
    /**
     * ajax判断当前导航名是否已经存在
     */
    public function ajaxaddnameAction(){
        $naviga_name = $_POST['naviga_name'];
        $model_name = new NavigaModel;
        if($model_name->ajaxaddnameList($naviga_name)){
            // 用户名不存在
            echo $model_name->error_info;
        }else{
            //用户名存在哦
            echo $model_name->error_info;
            return false;
        }
    }
    /**
     * 添加导航分类的信息
     */
    public function addAction(){
        $data['naviga_name'] = $_POST['naviga_name'];//导航名
        $data['naviga_url'] = $_POST['naviga_url'];
        $data['naviga_parent'] = $_POST['naviga_parent'];
        $data['naviga_bar'] = $_POST['naviga_bar'];
        $data['naviga_order'] = $_POST['naviga_order'];
        $model_name = new NavigaModel;
        if($model_name->aotuInsert($data)){
            $this->jump("index.php?p=admin&c=Naviga&a=list");
        }else{
            $this->jump("index.php?p=admin&c=Naviga&a=addPage","添加失败，SQL语句执行失败",2);
        }
    }
    /**
     * 删除导航
     */
    public function delAction(){
        $id = $_GET['id'];
        $model_name = new NavigaModel;
        if($model_name->isList($id)){
            $model_name->aotuDelete($id);
            $this->jump("index.php?p=admin&c=Naviga&a=list");
        }else{
            $this->jump("index.php?p=admin&c=Naviga&a=list",'删除失败,该导航不是末节点！！！',2);
        }
    }
    /**
     * 显示编辑页面
     */
    public function seleAction(){
        $id = $_GET['id'];
        $model_name = new NavigaModel;
        $list = $model_name->aotuSelect($id);
        $val = $list['naviga_bar']==1?"1":"0";
        $link = $model_name->getTreeList();
        $smarty = new MySmarty;
        $smarty->assign("list",$list);
        $smarty->assign("link",$link);
        $smarty->assign("show",array("1"=>'显示','0'=>'隐藏'));
        $smarty->assign("sel",$val);
        $smarty->display("naviga_edit.html");
    }

    /**
     * 更改编辑页面的信息
     */
    public function editAction(){
        $data['naviga_id'] = $_POST['naviga_id'];
        $data['naviga_name'] = $_POST['naviga_name'];
        $data['naviga_url'] = $_POST['naviga_url'];
        $data['naviga_bar'] = $_POST['naviga_bar'];
        $data['naviga_order'] = $_POST['naviga_order'];
        $data['naviga_parent'] = $_POST['naviga_parent'];
        $model_name = new NavigaModel;
        if($edit = $model_name->editList($data)){
            $this->jump("index.php?p=admin&c=Naviga&a=list");
        }else{
            $this->jump("index.php?p=admin&c=Naviga&a=sele",'编辑失败',2);
        }
    }
    /**
     * ajax判断更改的用户名是否已经存在
     */
    public function ajaxeditAction(){
        $id = $_POST['id'];
        $name = $_POST['naviga_name'];
        $model_name = new NavigaModel;
        if($ajax = $model_name->ajaxeditList($id,$name)){
            echo $model_name->error_info;
        }else{
            echo $model_name->error_info;
            return false;
        }
    }
}