<?php /* Smarty version Smarty-3.1.14, created on 2018-05-03 16:53:18
         compiled from "F:\PHPStudy\WWW\16jsjgj\class_website\app\view\admin\admin_list.html" */ ?>
<?php /*%%SmartyHeaderCode:289185ae2847ad79b78-61190235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f36f58a4b684aa3ded4979af07cb0e3cb1dc9231' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\admin\\admin_list.html',
      1 => 1525335694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289185ae2847ad79b78-61190235',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae2847adb8389_75916313',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae2847adb8389_75916313')) {function content_5ae2847adb8389_75916313($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./app/view/admin/styles/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="./app/view/admin/js/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="./app/view/admin/styles/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <title>管理员列表</title>
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
    </style>
</head>
<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>用户名</th>
                <th>Email地址</th>
                <th>添加时间</th>
                <th>最后登录时间</th>
                <th>当前的IP</th>
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
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['ad_username'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['ad_email'];?>
</td>
                <td><?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['row']->value['ad_addtime']);?>
</td>
                <td><?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['row']->value['ad_lasttime']);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['ad_lastip'];?>
</td>
                <td><button type="button" class="btn btn-info" style="margin-right:5px;" onclick="location.href='index.php?p=admin&c=Admin&a=sele&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['ad_id'];?>
 '" title="编辑"><span class="glyphicon glyphicon-edit" style="font-size:10px;"></span></button><button type="button" class="btn btn-danger" onclick="if(window.confirm('是否确定删除？？？')){ location.href='index.php?p=admin&c=Admin&a=del&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['ad_id'];?>
 ';}" title="删除"><span class="glyphicon glyphicon-trash" style="font-size:10px;"></span></button><button type="button" class="btn btn-danger" style="margin-left:5px;" onclick="if(window.confirm('是否确定重置密码，重置后密码为：123456！！！')){ location.href='index.php?p=admin&c=Admin&a=reset&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['ad_id'];?>
 ';}" title="重置密码"><span class="glyphicon glyphicon-pencil" style="font-size:10px;"></span></button></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html><?php }} ?>