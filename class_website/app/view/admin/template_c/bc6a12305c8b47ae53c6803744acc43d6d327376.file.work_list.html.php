<?php /* Smarty version Smarty-3.1.14, created on 2018-05-12 14:43:15
         compiled from "F:\PHPStudy\WWW\16jsjgj\class_website\app\view\admin\work_list.html" */ ?>
<?php /*%%SmartyHeaderCode:287415ae3c699ceaf81-59825226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc6a12305c8b47ae53c6803744acc43d6d327376' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\admin\\work_list.html',
      1 => 1526107390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '287415ae3c699ceaf81-59825226',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae3c699da67b7_77467152',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'page_html' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae3c699da67b7_77467152')) {function content_5ae3c699da67b7_77467152($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./app/view/admin/styles/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="./app/view/admin/js/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="./app/view/admin/styles/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <title>文章列表页</title>
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
                <th>编号</th>
                <th>文章类别</th>
                <th>文章标题</th>
                <th>更新时间</th>
                <th>内容</th>
                <th>热门</th>
                <th>缩略图</th>
                <th>顺序</th>
                <th>是否发布</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['row']->iteration++;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->iteration;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['naviga_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['work_title'];?>
</td>
                <td><?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['row']->value['work_update']);?>
</td>
                <td>详细的请看编辑</td>
                <td><img src="./app/view/admin/images/<?php if ($_smarty_tpl->tpl_vars['row']->value['work_hot']==1){?>yes<?php }else{ ?>no<?php }?>.gif" /></td>
                <td><img src="./app/uploaded/<?php echo $_smarty_tpl->tpl_vars['row']->value['work_thumn'];?>
" width="100px" height="100px" /></td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['work_order'];?>
</td>
                <td><img src="./app/view/admin/images/<?php if ($_smarty_tpl->tpl_vars['row']->value['work_show']==1){?>yes<?php }else{ ?>no<?php }?>.gif" /></td>
                <td><button type="button" class="btn btn-info" style="margin-right:5px;" onclick="location.href='index.php?p=admin&c=Work&a=sele&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['work_id'];?>
 '"><span class="glyphicon glyphicon-edit" style="font-size:10px;"></span>编辑</button><button type="button" class="btn btn-danger" onclick="if(window.confirm('是否确定删除？？？')){ location.href='index.php?p=admin&c=Work&a=del&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['work_id'];?>
 ';}"><span class="glyphicon glyphicon-trash" style="font-size:10px;"></span>删除</button></td>
            </tr>
            <?php } ?>
            <tr><td colspan="10"><?php echo $_smarty_tpl->tpl_vars['page_html']->value;?>
</td></tr>
        </tbody>
    </table>
</body>
</html><?php }} ?>