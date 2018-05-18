<?php
 class AddresslistController extends PlatformAdminController{
     /**
      * 显示列表页
      */
      public function listAction(){
          $model_name = new AddresslistModel;
          $page = isset($_GET['page'])?$_GET['page']:'1';
          $pagesize = isset($_GET['pagesize'])?$_GET['pagesize']:$GLOBALS['config']['admin']['works_list_pagesize'];
          $relset = $model_name->getList($page,$pagesize);
          $list = $relset['list'];
          $total = $relset['total'];//总数据
          $htmlpage_name = new PageTools;
          $page_html = $htmlpage_name->showPage($page,$pagesize,$total,"index.php?p=admin&c=Addresslist&a=list",array("pagesize"=>$pagesize));
          $smarty = new MySmarty;
          $smarty->assign("list",$list);
          $smarty->assign("html_page",$page_html);
          $smarty->display("address_list.html");
      }
      /**
       * 删除功能
       */
      public function delAction(){
          $id = $_GET['id'];
          $model_name = new AddresslistModel;
          if($del = $model_name->aotuDelete($id)){
              $this->jump("index.php?P=admin&c=Addresslist&a=list");
          }else{
            $this->jump("index.php?P=admin&c=Addresslist&a=list",'删除失败',2);
          }
      }
      /**
       * 显示编辑页面
       */
      public function seleAction(){
          $id = $_GET['id'];
          $model_name = new AddresslistModel;
          $list = $model_name->seleList($id);
          $smarty = new MySmarty;
          $smarty->assign("list",$list);
          $smarty->display("Address_edit.html");
      }

      /**
       * 搜索引擎
       */
      public function ajaxsearchAction(){
          $search = $_POST['search'];//获取到搜索框里的内容
          $model_name = new AddresslistModel;
          if($search = $model_name->ajaxsearchList($search)){
              //执行成功
               $search;
          }else{
              return @$momel_name->error_info = "你搜索的数据不存在！";
          }
      }
 }