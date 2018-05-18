<?php /* Smarty version Smarty-3.1.14, created on 2018-05-03 21:08:35
         compiled from "F:\PHPStudy\WWW\16jsjgj\class_website\app\view\admin\reply_list.html" */ ?>
<?php /*%%SmartyHeaderCode:318645aeb04cd2c31d2-07074497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b14ed1596dd074786361d15b257ad8a7a43a1a0' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\admin\\reply_list.html',
      1 => 1525352912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '318645aeb04cd2c31d2-07074497',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5aeb04cd328af1_15922751',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'html_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aeb04cd328af1_15922751')) {function content_5aeb04cd328af1_15922751($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./app/view/admin/styles/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="./app/view/admin/js/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="./app/view/admin/styles/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <title>回复列表</title>
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
                <th>回复对象</th>
                <th>回复内容</th>
                <th>回复用户</th>
                <th>目标用户</th>
                <th>回复时间</th>
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
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['reply_id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['discuss_content'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['reply_content'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name1'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name2'];?>
</td>
                <td><?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['row']->value['reply_time']);?>
</td>
                <td><button type="button" class="btn btn-info" style="margin-right:5px;" onclick="location.href='index.php?p=admin&c=Reply&a=sele&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['discuss_id'];?>
 '" title="编辑"><span class="glyphicon glyphicon-edit" style="font-size:10px;"></span></button><button type="button" class="btn btn-danger" onclick="if(window.confirm('是否确定删除？？？')){ location.href='index.php?p=admin&c=Reply&a=del&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['discuss_id'];?>
 ';}" title="删除"><span class="glyphicon glyphicon-trash" style="font-size:10px;"></span></button></td>
            </tr>
            <?php } ?>
            <tr><td colspan="7"><?php echo $_smarty_tpl->tpl_vars['html_page']->value;?>
</td></tr>
        </tbody>
    </table>
</body>
</html><?php }} ?>