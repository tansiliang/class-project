<?php /* Smarty version Smarty-3.1.14, created on 2018-05-03 08:22:23
         compiled from "F:\PHPStudy\WWW\16jsjgj\class_website\app\view\admin\switchable_list.html" */ ?>
<?php /*%%SmartyHeaderCode:109205ae976d2546dd7-11693033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb166920637829eb4cc15f87efe3178452e66e34' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\admin\\switchable_list.html',
      1 => 1525306941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109205ae976d2546dd7-11693033',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae976d26a6721_51195032',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'html_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae976d26a6721_51195032')) {function content_5ae976d26a6721_51195032($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./app/view/admin/styles/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="./app/view/admin/js/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="./app/view/admin/styles/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <title>图片轮播列表</title>
    <style type="text/css">
        th,td{
            text-align:center;
        }
        th{
            background:url(./app/view/admin/images/index/left_bg.jpg) repeat-x;
            color:#fff;
        }
        .table tbody tr td{
            background:#F2F9FD;
            text-align:center;
            vertical-align:middle;
        }
        .table-bordered tbody tr th,.table-bordered tbody tr td{
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
                    <td colspan="10" style="text-align:left;"><button type="button" onclick="location.href='index.php?p=admin&c=switchable&a=addPage'" class="btn btn-info"><span class="glyphicon glyphicon-list-alt" style="font-size:10px;margin-right:2px;"></span>添加图片轮播信息</button></td>
                </tr>
            </thead>
                <tbody>
                    <tr>
                        <th>编号</th>
                        <th>图片</th>
                        <th>名称</th>
                        <th>描述</th>
                        <th>是否发布</th>
                        <th>排序</th>
                        <th>图片上传时间</th>
                        <th>操作</th>
                    </tr>
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
                        <td><img src="./app/uploaded/<?php echo $_smarty_tpl->tpl_vars['row']->value['switchable_thumn'];?>
" /></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['switchable_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['switchable_content'];?>
</td>
                        <td><img src="./app/view/admin/images/<?php if ($_smarty_tpl->tpl_vars['row']->value['switchable_show']==1){?>yes<?php }else{ ?>no<?php }?>.gif" /></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['switchable_order'];?>
</td>
                        <td><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['row']->value['switchable_time']);?>
</td>
                        <td><button type="button" class="btn btn-info" style="margin-right:5px;" onclick="location.href='index.php?p=admin&c=switchable&a=sele&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['switchable_id'];?>
 '"><span class="glyphicon glyphicon-edit" style="font-size:10px;"></span>编辑</button><button type="button" class="btn btn-danger" onclick="if(window.confirm('是否确定删除？？？')){ location.href='index.php?p=admin&c=switchable&a=del&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['switchable_id'];?>
 ';}"><span class="glyphicon glyphicon-trash" style="font-size:10px;"></span>删除</button></td>
                    </tr>
                    <?php } ?>
                    <tr><td colspan="8"><?php echo $_smarty_tpl->tpl_vars['html_page']->value;?>
</td></tr>
                </tbody>
            </table>
</body>
</html><?php }} ?>