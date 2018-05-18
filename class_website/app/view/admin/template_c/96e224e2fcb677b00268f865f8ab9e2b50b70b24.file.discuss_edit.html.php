<?php /* Smarty version Smarty-3.1.14, created on 2018-05-03 21:25:47
         compiled from "F:\PHPStudy\WWW\16jsjgj\class_website\app\view\admin\discuss_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:181425aeafe9f899666-86510203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96e224e2fcb677b00268f865f8ab9e2b50b70b24' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\admin\\discuss_edit.html',
      1 => 1525353943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181425aeafe9f899666-86510203',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5aeafe9f91e385_51005745',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aeafe9f91e385_51005745')) {function content_5aeafe9f91e385_51005745($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./app/view/admin/styles/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="./app/view/admin/js/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="./app/view/admin/styles/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="./app/view/admin/js/kindeditor/kindeditor-all.js" /></script>
    <script src="./app/view/admin/js/kindeditor/lang/zh-CN.js" /></script>
    <script type="text/javascript">
        KindEditor.ready(function(K){
            K.create("#discuss_content",{
                themeType:'simple',
                resizeType:1,
                uploadjson:'./app/view/admin/js/kindeditor/php/upload_json.php',
                fileManagerJson:'./app/view/admin/js/kindeditor/php/file_manager_json.php',
                allowFileManager:true,
                afterBlur:function(){
                    this.sync();
                }
            });
        });
    </script>
    <title>编辑页面</title>
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
                $("#discuss_images").change(function(){
                    var discuss_img = document.getElementById("discuss_images").files[0];
                    var imgs = document.getElementById('imagess');
                    imgs.src = window.URL.createObjectURL(discuss_img);
                });
            });
        </script>
</head>
<body>
    <table class="table table-bordered">
        <form action="index.php?p=admin&c=Discuss&a=edit" method="post" enctype="multipart/form-data">
            <thead>
                <tr>
                    <th colspan="3"><button type="button" onclick="location.href='index.php?p=admin&c=Discuss&a=list'" class="btn btn-info"><span class="glyphicon glyphicon-list-alt" style="font-size:10px;margin-right:2px;"></span>评论列表</button></th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <td>评论用户</td>
                <td>
                    <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['member_name'];?>
" disabled />
                </td>
                <td id="name"></td>
            </tr>
            <tr>
                <td>评论内容</td>
                <td><textarea style="width:700px;height:350px;" name="discuss_content" id="discuss_content"><?php echo $_smarty_tpl->tpl_vars['list']->value['discuss_content'];?>
</textarea></td>
                <td id=""></td>
            </tr>
            <tr>
                <td>评论对象</td>
                <td><input type="text" class="form-control" name="discuss_title" id="discuss_title" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['forum_title'];?>
" /></td>
                <td></td>
            </tr>
            <tr>
                <td>评论时间</td>
                <td><input type="text" class="form-control" name="discuss_images" id="discuss_images" value="<?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['list']->value['discuss_addtime']);?>
" /></td>
                <td></td>
            </tr>
            <tr>
                <td>点赞次数</td>
                <td><input type="text" class="form-control" name="discuss_title" id="discuss_title" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['discuss_visits'];?>
" /></td>
                <td></td>
            </tr>
        </tbody>
        </form>
    </table>
</body>
</html><?php }} ?>