<?php /* Smarty version Smarty-3.1.14, created on 2018-05-04 14:54:15
         compiled from "F:\PHPStudy\WWW\16jsjgj\class_website\app\view\admin\Address_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:146605aec01e2ec2ba9-77754091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c2eef34465260f0ef9dfbc4d633caa23d503277' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\admin\\Address_edit.html',
      1 => 1525416850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146605aec01e2ec2ba9-77754091',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5aec01e2f10db6_48040638',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aec01e2f10db6_48040638')) {function content_5aec01e2f10db6_48040638($_smarty_tpl) {?><!DOCTYPE html>
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
            K.create("#list_content",{
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
                $("#list_images").change(function(){
                    var list_img = document.getElementById("list_images").files[0];
                    var imgs = document.getElementById('imagess');
                    imgs.src = window.URL.createObjectURL(list_img);
                });
            });
        </script>
</head>
<body>
    <table class="table table-bordered">
        <form action="index.php?p=admin&c=Discuss&a=edit" method="post" enctype="multipart/form-data">
            <thead>
                <tr>
                    <th colspan="3"><button type="button" onclick="location.href='index.php?p=admin&c=Discuss&a=list'" class="btn btn-info"><span class="glyphicon glyphicon-list-alt" style="font-size:10px;margin-right:2px;"></span>通讯录列表</button></th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <td>姓名</td>
                <td>
                    <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['member_name'];?>
" disabled /> 
                </td>
                <td id="name"></td>
            </tr>
            <tr>
                <td>学号</td>
                <td>
                    <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['member_studentid'];?>
" disabled /> 
                </td>
                <td id="name"></td>
            </tr>
            <tr>
                <td>自我介绍</td>
                <td><textarea style="width:700px;height:350px;" name="list_content" id="list_content"><?php echo $_smarty_tpl->tpl_vars['list']->value['list_content'];?>
</textarea></td>
                <td id=""></td>
            </tr>
            <tr>
                <td>爱好</td>
                <td><input type="text" class="form-control" name="list_hoddy" id="list_hoddy" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['list_hobby'];?>
" /></td>
                <td></td>
            </tr>
            <tr>
                <td>创建时间</td>
                <td><input type="text" class="form-control" name="list_images" id="list_images" value="<?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['list']->value['list_time']);?>
" /></td>
                <td></td>
            </tr>
            <tr>
                <td>联系方式</td>
                <td><input type="text" class="form-control" name="list_phone" id="list_phone" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['list_phone'];?>
" /></td>
                <td></td>
            </tr>
            <tr>
                <td>个人相片</td>
                <td><img src="./app/uploaded/<?php echo $_smarty_tpl->tpl_vars['list']->value['list_images'];?>
" style="max-height:100px;max-width:100px;" /></td>
                <td></td>
            </tr>
        </tbody>
        </form>
    </table>
</body>
</html><?php }} ?>