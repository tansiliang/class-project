<?php /* Smarty version Smarty-3.1.14, created on 2018-05-15 08:21:16
         compiled from "F:\PHPStudy\WWW\16jsjgj\class_website\app\view\admin\arrondi_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:73545af932281cb4c1-19178819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91fe26d485f5be09177c87f19eed837d7b40c29c' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\admin\\arrondi_edit.html',
      1 => 1526343566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73545af932281cb4c1-19178819',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5af932282772e4_38390590',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af932282772e4_38390590')) {function content_5af932282772e4_38390590($_smarty_tpl) {?><!DOCTYPE html>
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
            K.create("#arrondi_content",{
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
    <title>下载资料编辑页面</title>
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
                $("#arrondi_images").change(function(){
                    var arrondi_img = document.getElementById("arrondi_images").files[0];
                    var imgs = document.getElementById('imagess');
                    imgs.src = window.URL.createObjectURL(arrondi_img);
                });
            });
        </script>
</head>
<body>
    <table class="table table-bordered">
        <form action="index.php?p=admin&c=Arrondi&a=edit" method="post" enctype="multipart/form-data">
            <thead>
                <tr>
                    <th colspan="3"><button type="button" onclick="location.href='index.php?p=admin&c=Arrondi&a=list'" class="btn btn-info"><span class="glyphicon glyphicon-list-alt" style="font-size:10px;margin-right:2px;"></span>下载专区列表</button></th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <td>类型</td>
                <td>
                    <input type="text" class="form-control" name="arrondi_type" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['arrondi_type'];?>
" />
                </td>
                <td id="name"></td>
            </tr>
            <tr>
                <td>标题</td>
                <td>
                    <input type="text" class="form-control" name="arrondi_title" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['arrondi_title'];?>
" />
                </td>
                <td id="title"></td>
            </tr>
            <tr>
                <td>内容</td>
                <td><textarea style="width:700px;height:350px;" name="arrondi_content" id="arrondi_content"><?php echo $_smarty_tpl->tpl_vars['list']->value['arrondi_content'];?>
</textarea></td>
                <td id=""></td>
            </tr>
            <tr>
                <td>发布人</td>
                <td><input type="text" class="form-control" name="member_name" disabled id="arrondi_title" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['member_name'];?>
" /></td>
                <td></td>
            </tr>
            <tr>
                <td>发布时间</td>
                <td><input type="text" class="form-control" name="arrondi_images" id="arrondi_images" disabled value="<?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['list']->value['arrondi_time']);?>
" /></td>
                <td></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['arrondi_id'];?>
" name="arrondi_id" id="arrondi_id" />
                <td colspan="3"><button type="reset" class="btn btn-danger" name="arrondi_ap_res" id="arrondi_ap_res" >重置</button><span style="width:10px;display:inline-block;"></span><button class="btn btn-success" type="submit" name="arrondi_ap_sub" id="arrondi_ap_sub" >修改</button></td>
            </tr>
        </tfoot>
        </form>
    </table>
</body>
</html><?php }} ?>