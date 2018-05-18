<?php /* Smarty version Smarty-3.1.14, created on 2018-04-29 09:42:05
         compiled from "F:\PHPStudy\WWW\16jsjgj\class_website\app\view\admin\naviga_list.html" */ ?>
<?php /*%%SmartyHeaderCode:127935ae3d045642426-29142254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec0b22f47ed039c70c77f1d83906e13807cbb3c2' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\admin\\naviga_list.html',
      1 => 1524966119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127935ae3d045642426-29142254',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae3d0456a0044_33458643',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae3d0456a0044_33458643')) {function content_5ae3d0456a0044_33458643($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./app/view/admin/styles/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="./app/view/admin/js/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="./app/view/admin/styles/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <title>分类导航</title>
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
                <th>编号</th>
                <th>导航名</th>
                <th>导航地址</th>
                <th>导航栏</th>
                <th>排序</th>
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
                <td style="text-align:left;"><?php echo str_repeat("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$_smarty_tpl->tpl_vars['row']->value['dree']);?>
<?php echo $_smarty_tpl->tpl_vars['row']->value['naviga_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['naviga_url'];?>
</td>
                <td><img src="./app/view/admin/images/<?php if ($_smarty_tpl->tpl_vars['row']->value['naviga_bar']==1){?>yes<?php }else{ ?>no<?php }?>.gif" /></td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['naviga_order'];?>
</td>
                <td><button type="button" class="btn btn-info" style="margin-right:5px;" onclick="location.href='index.php?p=admin&c=Naviga&a=sele&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['naviga_id'];?>
 '"><span class="glyphicon glyphicon-edit" style="font-size:10px;"></span>编辑</button><button type="button" class="btn btn-danger" onclick="if(window.confirm('是否确定删除？？？')){ location.href='index.php?p=admin&c=Naviga&a=del&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['naviga_id'];?>
 ';}"><span class="glyphicon glyphicon-trash" style="font-size:10px;"></span>删除</button></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html><?php }} ?>