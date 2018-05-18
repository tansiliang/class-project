<?php /* Smarty version Smarty-3.1.14, created on 2018-05-03 21:25:05
         compiled from "F:\PHPStudy\WWW\16jsjgj\class_website\app\view\admin\discuss_list.html" */ ?>
<?php /*%%SmartyHeaderCode:126245aeaf337c52860-71886751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a4b9711a06563f61ab238d3d3318824b159f811' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\admin\\discuss_list.html',
      1 => 1525352911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126245aeaf337c52860-71886751',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5aeaf337ccb9f3_24625210',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'html_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aeaf337ccb9f3_24625210')) {function content_5aeaf337ccb9f3_24625210($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./app/view/admin/styles/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="./app/view/admin/js/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="./app/view/admin/styles/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <title>评论列表</title>
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
</head>
<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>用户名</th>
                <th>评论对象</th>
                <th>评论内容</th>
                <th>评论时间</th>
                <th>IP地址</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['discuss_id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['member_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['forum_title'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['discuss_content'];?>
</td>
                <td><?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['row']->value['discuss_addtime']);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['member_ip'];?>
</td>
                <td><button type="button" class="btn btn-info" style="margin-right:5px;" onclick="location.href='index.php?p=admin&c=Discuss&a=sele&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['discuss_id'];?>
 '" title="编辑"><span class="glyphicon glyphicon-edit" style="font-size:10px;"></span></button><button type="button" class="btn btn-danger" onclick="if(window.confirm('是否确定删除？？？')){ location.href='index.php?p=admin&c=Discuss&a=del&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['discuss_id'];?>
 ';}" title="删除"><span class="glyphicon glyphicon-trash" style="font-size:10px;"></span></button></td>
            </tr>
            <?php } ?>
            <tr><td colspan="7"><?php echo $_smarty_tpl->tpl_vars['html_page']->value;?>
</td></tr>
        </tbody>
    </table>
</body>
</html><?php }} ?>