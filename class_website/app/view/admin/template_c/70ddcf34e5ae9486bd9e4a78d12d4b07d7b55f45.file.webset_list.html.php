<?php /* Smarty version Smarty-3.1.14, created on 2018-04-29 17:13:07
         compiled from "F:\PHPStudy\WWW\16jsjgj\class_website\app\view\admin\webset_list.html" */ ?>
<?php /*%%SmartyHeaderCode:33815ae54544eab723-36136503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70ddcf34e5ae9486bd9e4a78d12d4b07d7b55f45' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\admin\\webset_list.html',
      1 => 1524993186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33815ae54544eab723-36136503',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae54544f0d1b6_54848119',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae54544f0d1b6_54848119')) {function content_5ae54544f0d1b6_54848119($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./app/view/admin/styles/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="./app/view/admin/js/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="./app/view/admin/styles/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <title>网站列表</title>
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
        </style>
</head>
<body>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td colspan="10" style="text-align:left;"><button type="button" onclick="location.href='index.php?p=admin&c=Webset&a=addPage'" class="btn btn-info"><span class="glyphicon glyphicon-list-alt" style="font-size:10px;margin-right:2px;"></span>添加设置信息</button></td>
                </tr>
            </thead>
                
                <tbody>
                    <tr>
                        <th>编号</th>
                        <th>网站名称</th>
                        <th>网站标题</th>
                        <th>标题图标</th>
                        <th>网址</th>
                        <th>seo关键字</th>
                        <th>描述</th>
                        <th>显示/隐藏</th>
                        <th>页脚信息</th>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['webset_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['webset_title'];?>
</td>
                        <td><img src="./app/uploaded/<?php echo $_smarty_tpl->tpl_vars['row']->value['webset_title_ico'];?>
" width="100" height="100" /></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['webset_url'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['webset_seo'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['webset_bewrite'];?>
</td>
                        <td><img src="./app/view/admin/images/<?php if ($_smarty_tpl->tpl_vars['row']->value['webset_show']==1){?>yes<?php }else{ ?>no<?php }?>.gif" /></td>
                        <td>详细内容请看编辑</td>
                        <td><button type="button" class="btn btn-info" style="margin-right:5px;" onclick="location.href='index.php?p=admin&c=Webset&a=sele&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['webset_id'];?>
 '"><span class="glyphicon glyphicon-edit" style="font-size:10px;"></span>编辑</button><button type="button" class="btn btn-danger" onclick="if(window.confirm('是否确定删除？？？')){ location.href='index.php?p=admin&c=Webset&a=del&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['webset_id'];?>
 ';}"><span class="glyphicon glyphicon-trash" style="font-size:10px;"></span>删除</button></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
</body>
</html><?php }} ?>