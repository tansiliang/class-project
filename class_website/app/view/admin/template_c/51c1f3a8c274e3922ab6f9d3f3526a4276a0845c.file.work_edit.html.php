<?php /* Smarty version Smarty-3.1.14, created on 2018-05-18 17:39:50
         compiled from "F:\PHPStudy\WWW\16jsjgj\class_website\app\view\admin\work_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:55325ae7d9ad12cf31-48489938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51c1f3a8c274e3922ab6f9d3f3526a4276a0845c' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\admin\\work_edit.html',
      1 => 1526636214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55325ae7d9ad12cf31-48489938',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae7d9ad1a60d4_71542998',
  'variables' => 
  array (
    'link' => 0,
    'row' => 0,
    'list' => 0,
    'hot' => 0,
    'sel_hot' => 0,
    'opt' => 0,
    'sel_show' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae7d9ad1a60d4_71542998')) {function content_5ae7d9ad1a60d4_71542998($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\framework\\libs\\plugins\\function.html_radios.php';
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
            K.create("#work_content",{
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
                $("#work_images").change(function(){
                    var work_img = document.getElementById("work_images").files[0];
                    var imgs = document.getElementById('imagess');
                    imgs.src = window.URL.createObjectURL(work_img);
                });
            });
        </script>
</head>
<body>
    <table class="table table-bordered">
        <form action="index.php?p=admin&c=Work&a=edit" method="post" enctype="multipart/form-data">
            <thead>
                <tr>
                    <th colspan="3"><button type="button" onclick="location.href='index.php?p=admin&c=Work&a=list'" class="btn btn-info"><span class="glyphicon glyphicon-list-alt" style="font-size:10px;margin-right:2px;"></span>文章列表</button></th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <td>文章类别</td>
                <td>
                    <select name="work_categoryid" class="form-control" id="work_categoryid">
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['link']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['naviga_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['naviga_id']==$_smarty_tpl->tpl_vars['list']->value['work_categoryid']){?>selected<?php }?>><?php echo str_repeat("&nbsp;&nbsp;&nbsp;",$_smarty_tpl->tpl_vars['row']->value['dree']);?>
<?php echo $_smarty_tpl->tpl_vars['row']->value['naviga_name'];?>
</option>
                        <?php } ?>
                    </select>
                </td>
                <td id="name"></td>
            </tr>
            <tr>
                <td>文章标题</td>
                <td><input type="text" name="work_title" id="work_title" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['work_title'];?>
" class="form-control" /></td>
                <td></td>
            </tr>
            <tr>
                <td>小标题</td>
                <td><input type="text" name="work_subtitle" id="work_subtitle" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['work_subtitle'];?>
" class="form-control" /></td>
                <td></td>
            </tr>
            <tr>
                <td>内容</td>
                <td><textarea style="width:700px;height:350px;" name="work_content" id="work_content"><?php echo $_smarty_tpl->tpl_vars['list']->value['work_content'];?>
</textarea></td>
                <td id=""></td>
            </tr>
            <tr>
                <td>是否热门</td>
                <td><?php echo smarty_function_html_radios(array('options'=>$_smarty_tpl->tpl_vars['hot']->value,'name'=>"work_hot",'selected'=>$_smarty_tpl->tpl_vars['sel_hot']->value),$_smarty_tpl);?>
</td>
                <td></td>
            </tr>
            <tr>
                <td>是否发布</td>
                <td><?php echo smarty_function_html_radios(array('options'=>$_smarty_tpl->tpl_vars['opt']->value,'name'=>"work_show",'selected'=>$_smarty_tpl->tpl_vars['sel_show']->value),$_smarty_tpl);?>
</td>
                <td></td>
            </tr>
            <tr>
                <td>排序</td>
                <td><input type="text" class="form-control" name="work_order" id="work_order" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['work_order'];?>
" /></td>
                <td id="show"></td>
            </tr>
            <tr>
                <td>文件</td>
                <td><input type="file" name="work_images" id="work_images" /></td>
                <td><img id="imagess" src='./app/uploaded/<?php echo $_smarty_tpl->tpl_vars['list']->value['work_thumn'];?>
' height="100px" width="100px" /><input type="hidden" name="img" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['work_images'];?>
" /><input type="hidden" name="img_thumn" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['work_thumn'];?>
" /></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['work_id'];?>
" name="work_id" id="work_id" />
                <td colspan="3"><button type="reset" class="btn btn-danger" name="work_ap_res" id="work_ap_res" >重置</button><span style="width:10px;display:inline-block;"></span><button class="btn btn-success" type="submit" name="work_ap_sub" id="work_ap_sub" >修改</button></td>
            </tr>
        </tfoot>
        </form>
    </table>
</body>
</html><?php }} ?>