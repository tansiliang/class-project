<?php /* Smarty version Smarty-3.1.14, created on 2018-05-02 18:37:35
         compiled from "F:\PHPStudy\WWW\16jsjgj\class_website\app\view\admin\switchable_add.html" */ ?>
<?php /*%%SmartyHeaderCode:127865ae979ad60c664-23057068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d44bf34d84b45aa211bcf865ec2a0b74da10727' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\admin\\switchable_add.html',
      1 => 1525257339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127865ae979ad60c664-23057068',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae979ad6c0181_59319323',
  'variables' => 
  array (
    'opt' => 0,
    'sel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae979ad6c0181_59319323')) {function content_5ae979ad6c0181_59319323($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\framework\\libs\\plugins\\function.html_radios.php';
?><!DOCTYPE html>
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
            K.create("#web_foot_content",{
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
    <title>添加图片信息</title>
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
        #username ,#title,#url,#email{
            color:red;
        }
    </style>
    <script type="text/javascript">
        $("deocument").ready(function(){
            // 选择文件时生成二进制图片
            $("#switchable_images").change(function (){
               var titleico = document.getElementById("switchable_images").files[0];
               var img = document.getElementById("imagess");
               img.src = window.URL.createObjectURL(titleico);
            });
            //提交事件
            $("form").submit(function(e){
                var img = $("#switchable_images").val();
                if(img == ""){
                    e.preventDefault();
                    alert("图片不能为空，请选择上传的图片！！！");
                }
            });
        });
    </script>
</head>
<body>
        <table class="table table-bordered" style="margin-bottom:40px;">
                <form action="index.php?p=admin&c=switchable&a=add" method="post" enctype="multipart/form-data">
                <thead>
                        <tr>
                            <th colspan="3"><button type="button" onclick="location.href='index.php?p=admin&c=switchable&a=list'" class="btn btn-info"><span class="glyphicon glyphicon-list-alt" style="font-size:10px;margin-right:2px;"></span>图片轮播列表</button></th>
                        </tr>
                    </thead>
                <tbody>
                    <tr>
                        <td>名称</td>
                        <td><input type="text" placeholder="" class="form-control" name="switchable_name" id="switchable_name" /></td>
                        <td id="username"></td>
                    </tr>
                    <tr class="form-group">
                        <td>图片</td>
                        <td><input type="file" name="switchable_images" id="switchable_images" /></td>
                        <td id="ico"><img height="100px" width="100px" id="imagess" /></td>
                    </tr>
                    <tr>
                        <td>图片描述</td>
                        <td><textarea name="switchable_content" id="switchable_content" class="form-control" rows="3"></textarea></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>发布/撤回</td>
                        <td><?php echo smarty_function_html_radios(array('options'=>$_smarty_tpl->tpl_vars['opt']->value,'name'=>'switchable_show','selected'=>$_smarty_tpl->tpl_vars['sel']->value),$_smarty_tpl);?>
</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>排序</td>
                        <td><input type="text" class="form-control" name="switchable_order" value="1" id="switchable_order" /></td>
                        <td></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3"><button type="reset" class="btn btn-danger" name="ad_ap_res" id="ad_ap_res" >重置</button><span style="width:10px;display:inline-block;"></span><button class="btn btn-success" type="submit" name="ad_ap_sub" id="ad_ap_sub">创建</button></td>
                    </tr>
                </tfoot>
                </form>
            </table>
</body>
</html><?php }} ?>