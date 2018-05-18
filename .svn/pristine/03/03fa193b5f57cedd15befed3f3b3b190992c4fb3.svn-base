<?php /* Smarty version Smarty-3.1.14, created on 2018-05-02 19:03:42
         compiled from "F:\PHPStudy\WWW\16jsjgj\class_website\app\view\admin\switchable_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:37745ae99697a86d13-26511267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0059bf8a7bf14b2052e668612a31b835d989883' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\admin\\switchable_edit.html',
      1 => 1525258235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37745ae99697a86d13-26511267',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae99697cfbc22_19251148',
  'variables' => 
  array (
    'list' => 0,
    'opt' => 0,
    'sel_show' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae99697cfbc22_19251148')) {function content_5ae99697cfbc22_19251148($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\framework\\libs\\plugins\\function.html_radios.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./app/view/admin/styles/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="./app/view/admin/js/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="./app/view/admin/styles/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    
    <title>图片轮播编辑页面</title>
    <style>
        .table tbody tr td,.table tfoot tr td{
            background:#F2F9FD;
            text-align:center;
            vertical-align:middle;
        }
        .table-bordered thead tr th,.table-bordered tbody tr td{
            border-bottom-width: 0;
            border:1px solid #B5CFD9;
        }
        #name ,#title,#order,#url,#old,#salt{
            color:red;
        }
        </style>
        <script>
            $("document").ready(function(){
                $("#switchable_images").change(function(){
                    var switchable_img = document.getElementById("switchable_images").files[0];
                    var imgs = document.getElementById('imagess');
                    imgs.src = window.URL.createObjectURL(switchable_img);
                });
            });
        </script>
</head>
<body>
    <table class="table table-bordered">
        <form action="index.php?p=admin&c=switchable&a=edit" method="post" enctype="multipart/form-data">
            <thead>
                <tr>
                    <th colspan="3"><button type="button" onclick="location.href='index.php?p=admin&c=switchable&a=list'" class="btn btn-info"><span class="glyphicon glyphicon-list-alt" style="font-size:10px;margin-right:2px;"></span>图片轮播列表</button></th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <td>图片</td>
                <td><input type="file" name="switchable_images" id="switchable_images" /></td>
                <td><img id="imagess" src='./app/uploaded/<?php echo $_smarty_tpl->tpl_vars['list']->value['switchable_thumn'];?>
' height="100px" width="100px" /><input type="hidden" name="img" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['switchable_images'];?>
" /><input type="hidden" name="img_thumn" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['switchable_thumn'];?>
" /></td>
            </tr>
            <tr>
                <td>名称</td>
                <td><input type="text" name="switchable_name" id="switchable_name" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['switchable_name'];?>
" class="form-control" /></td>
                <td></td>
            </tr>
            <tr>
                <td>描述</td>
                <td><textarea class="form-control" rows="3" name="switchable_content" id="switchable_content"><?php echo $_smarty_tpl->tpl_vars['list']->value['switchable_content'];?>
</textarea></td>
                <td id=""></td>
            </tr>
            <tr>
                <td>是否发布</td>
                <td><?php echo smarty_function_html_radios(array('options'=>$_smarty_tpl->tpl_vars['opt']->value,'name'=>"switchable_show",'selected'=>$_smarty_tpl->tpl_vars['sel_show']->value),$_smarty_tpl);?>
</td>
                <td></td>
            </tr>
            <tr>
                <td>排序</td>
                <td><input type="text" class="form-control" name="switchable_order" id="switchable_order" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['switchable_order'];?>
" /></td>
                <td id="show"></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['switchable_id'];?>
" name="switchable_id" id="switchable_id" />
                <td colspan="3"><button type="reset" class="btn btn-danger" name="switchable_ap_res" id="switchable_ap_res" >重置</button><span style="width:10px;display:inline-block;"></span><button class="btn btn-success" type="submit" name="switchable_ap_sub" id="switchable_ap_sub" >修改</button></td>
            </tr>
        </tfoot>
        </form>
    </table>
</body>
</html><?php }} ?>