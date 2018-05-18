<?php /* Smarty version Smarty-3.1.14, created on 2018-05-12 22:51:36
         compiled from "F:\PHPStudy\WWW\16jsjgj\class_website\app\view\admin\Member_list.html" */ ?>
<?php /*%%SmartyHeaderCode:211735ae9a14d06c154-22882747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09901b7145b9fea075ac3a53bbbefc02348674f5' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\admin\\Member_list.html',
      1 => 1526136691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211735ae9a14d06c154-22882747',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae9a14d15a602_47895731',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'html_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae9a14d15a602_47895731')) {function content_5ae9a14d15a602_47895731($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./app/view/admin/styles/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="./app/view/admin/js/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="./app/view/admin/styles/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <title>会员列表</title>
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
                <th>用户头像</th>
                <th>用户名</th>
                <th>学号</th>
                <th>Email地址</th>
                <th>真实姓名</th>
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
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['member_id'];?>
</td>
                <td><img src="./app/uploaded/<?php echo $_smarty_tpl->tpl_vars['row']->value['member_imgthumn'];?>
" max-width="100px" max-height="100px" /></td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['member_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['member_studentid'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['member_email'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['member_truename'];?>
</td>
                <td><?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['row']->value['member_updatetime']);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['member_ip'];?>
</td>
                <td><button type="button" title="编辑" class="btn btn-info" style="margin-right:5px;" onclick="location.href='index.php?p=admin&c=Member&a=sele&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['member_id'];?>
 '"><span class="glyphicon glyphicon-edit" style="font-size:10px;"></span></button><button type="button" class="btn btn-danger" onclick="if(window.confirm('是否确定删除？？？')){ location.href='index.php?p=admin&c=Member&a=del&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['member_id'];?>
 ';}" title="删除"><span class="glyphicon glyphicon-trash" style="font-size:10px;"></span></button><button type="button" class="btn btn-danger" style="margin-left:5px;" onclick="if(window.confirm('是否确定重置密码，重置后密码为：123456！！！')){ location.href='index.php?p=admin&c=Member&a=reset&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['member_id'];?>
 ';}" title="重置密码"><span class="glyphicon glyphicon-pencil" style="font-size:10px;"></span></button></td>
            </tr>
            <?php } ?>
            <tr>
                <td colspan="9"><?php echo $_smarty_tpl->tpl_vars['html_page']->value;?>
</td>
            </tr>
        </tbody>
    </table>
</body>
</html><?php }} ?>