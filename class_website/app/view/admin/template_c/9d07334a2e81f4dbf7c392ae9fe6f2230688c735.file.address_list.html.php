<?php /* Smarty version Smarty-3.1.14, created on 2018-05-04 14:31:56
         compiled from "F:\PHPStudy\WWW\16jsjgj\class_website\app\view\admin\address_list.html" */ ?>
<?php /*%%SmartyHeaderCode:290615aebb3d015fe52-46030475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d07334a2e81f4dbf7c392ae9fe6f2230688c735' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\admin\\address_list.html',
      1 => 1525415514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290615aebb3d015fe52-46030475',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5aebb3d01c18e1_98187618',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'html_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aebb3d01c18e1_98187618')) {function content_5aebb3d01c18e1_98187618($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./app/view/admin/styles/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="./app/view/admin/js/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="./app/view/admin/styles/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <title>通讯录列表</title>
    <style type="text/css">
    th,td{
        text-align:center;
    }
    th{
        background:url(./app/view/admin/images/index/left_bg.jpg) repeat-x;
        color:#fff;
    }
    .table tbody tr td,td{
        background:#F2F9FD;
        text-align:center;
        vertical-align:middle;
    }
    .table-bordered thead tr th,.table-bordered tbody tr td{
        border-bottom-width: 0;
        border:1px solid #B5CFD9;
    }
    .pagination{
        margin:0;
    }
    .table tr td ul{
        margin-bottom:-10px;
    }
    </style>
    <script >
        $("document").ready(function(){
            $("#search").keyup(function(){
                var search = $(this).val();
                $.ajax({
                    url:"index.php?p=admin&c=Addresslist&a=ajaxsearch",
                    type:"post",
                    data:"search="+search,
                    dataType:'html',
                    success:function(info){
                        $
                    }
                })
            });
        });
    </script>
</head>
<body>
    <table class="table table-bordered">
            
        <thead>
            <tr>
                <td colspan="10">
                    <div class="col-lg-6">
                        <div class="input-group">
                            <input type="text" name="search" id="search" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    搜索
                                </button>
                            </span>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th>ID</th>
                <th>用户头像</th>
                <th>姓名</th>
                <th>学号</th>
                <th>创建时间</th>
                <th>爱好</th>
                <th>联系方式</th>
                <th>自我介绍</th>
                <th>个人照片</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <div id="content">
            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['list_id'];?>
</td>
                <td><img src="./app/uploaded/<?php echo $_smarty_tpl->tpl_vars['row']->value['member_images'];?>
" style="max-height:100px;max-width:100px;" /></td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['member_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['member_studentid'];?>
</td>
                <td><?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['row']->value['list_time']);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['list_hobby'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['list_phone'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['list_content'];?>
</td>
                <td><img src="./app/uploaded/<?php echo $_smarty_tpl->tpl_vars['row']->value['list_images'];?>
" style="max-height:100px;max-width:100px;" /></td>
                <td><button type="button" class="btn btn-info" style="margin-right:5px;" onclick="location.href='index.php?p=admin&c=Addresslist&a=sele&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['list_id'];?>
 '" title="编辑"><span class="glyphicon glyphicon-edit" style="font-size:10px;"></span></button><button type="button" class="btn btn-danger" onclick="if(window.confirm('是否确定删除？？？')){ location.href='index.php?p=admin&c=Addresslist&a=del&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['list_id'];?>
 ';}" title="删除"><span class="glyphicon glyphicon-trash" style="font-size:10px;"></span></button></td>
            </tr>
            <?php } ?>
            <tr><td colspan="10"><?php echo $_smarty_tpl->tpl_vars['html_page']->value;?>
</td></tr>
            </div>
        </tbody>
    </table>
</body>
</html><?php }} ?>