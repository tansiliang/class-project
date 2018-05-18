<?php /* Smarty version Smarty-3.1.14, created on 2018-05-03 17:34:15
         compiled from "F:\PHPStudy\WWW\16jsjgj\class_website\app\view\admin\forum_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:198915aead58a03e757-38263907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb1693859ba67732d08fc0b82b2c7844ce22fa91' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\admin\\forum_edit.html',
      1 => 1525340051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198915aead58a03e757-38263907',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5aead58a088ae6_01911544',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aead58a088ae6_01911544')) {function content_5aead58a088ae6_01911544($_smarty_tpl) {?><!DOCTYPE html>
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
            K.create("#forum_content",{
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
                $("#forum_images").change(function(){
                    var forum_img = document.getElementById("forum_images").files[0];
                    var imgs = document.getElementById('imagess');
                    imgs.src = window.URL.createObjectURL(forum_img);
                });
            });
        </script>
</head>
<body>
    <table class="table table-bordered">
        <form action="index.php?p=admin&c=Forum&a=edit" method="post" enctype="multipart/form-data">
            <thead>
                <tr>
                    <th colspan="3"><button type="button" onclick="location.href='index.php?p=admin&c=Forum&a=list'" class="btn btn-info"><span class="glyphicon glyphicon-list-alt" style="font-size:10px;margin-right:2px;"></span>论坛列表</button></th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <td>发表的用户</td>
                <td>
                    <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['member_name'];?>
" disabled />
                </td>
                <td id="name"></td>
            </tr>
            <tr>
                <td>内容</td>
                <td><textarea style="width:700px;height:350px;" name="forum_content" id="forum_content"><?php echo $_smarty_tpl->tpl_vars['list']->value['forum_content'];?>
</textarea></td>
                <td id=""></td>
            </tr>
            <tr>
                <td>标题</td>
                <td><input type="text" class="form-control" name="forum_title" id="forum_title" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['forum_title'];?>
" /></td>
                <td></td>
            </tr>
            <tr>
                <td>图片</td>
                <td><input type="file" name="forum_images" id="forum_images" /></td>
                <td><img id="imagess" src='./app/uploaded/<?php echo $_smarty_tpl->tpl_vars['list']->value['forum_images'];?>
' style="max-width:100px;max-height:100px;" /><input type="hidden" name="imgs" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['forum_images'];?>
" /></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['forum_id'];?>
" name="forum_id" id="forum_id" />
                <td colspan="3"><button type="reset" class="btn btn-danger" name="forum_ap_res" id="forum_ap_res" >重置</button><span style="width:10px;display:inline-block;"></span><button class="btn btn-success" type="submit" name="forum_ap_sub" id="forum_ap_sub" >修改</button></td>
            </tr>
        </tfoot>
        </form>
    </table>
</body>
</html><?php }} ?>