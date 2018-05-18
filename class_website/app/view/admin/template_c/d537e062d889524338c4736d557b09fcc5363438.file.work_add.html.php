<?php /* Smarty version Smarty-3.1.14, created on 2018-05-18 17:39:25
         compiled from "F:\PHPStudy\WWW\16jsjgj\class_website\app\view\admin\work_add.html" */ ?>
<?php /*%%SmartyHeaderCode:64965ae5dc1ab3de80-43533844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd537e062d889524338c4736d557b09fcc5363438' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\admin\\work_add.html',
      1 => 1526636237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64965ae5dc1ab3de80-43533844',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae5dc1ab93d93_18133463',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'hot' => 0,
    'sel_hot' => 0,
    'opt' => 0,
    'sel_show' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae5dc1ab93d93_18133463')) {function content_5ae5dc1ab93d93_18133463($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\framework\\libs\\plugins\\function.html_radios.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./app/view/admin/styles/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="./app/view/admin/js/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="./app/view/admin/styles/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <title>添加文章信息</title>
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

        //生成二进制图片
        $("document").ready(function(){
            $("#work_images").change(function(){
            var thumn = document.getElementById("work_images").files[0];
            var imgs = document.getElementById('imagess');
            imgs.src = window.URL.createObjectURL(thumn);
            });
        });
        
    </script>
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
        #username ,#pass,#userpass,#email{
            color:red;
        }
    </style>
</head>
<body>
        <table class="table table-bordered">
                <form action="index.php?p=admin&c=Work&a=add" method="post" enctype="multipart/form-data">
                <tbody>
                    <tr>
                        <td>文章类别</td>
                        <td class="form-group">
                            <select name="work_categoryid" class="form-control">
                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['naviga_id'];?>
"><?php echo str_repeat("&nbsp;&nbsp;&nbsp;",$_smarty_tpl->tpl_vars['row']->value['dree']);?>
<?php echo $_smarty_tpl->tpl_vars['row']->value['naviga_name'];?>
</option>
                                <?php } ?>
                            </select>
                        </td>
                        <td id=""></td>
                    </tr>
                    <tr>
                        <td>文章标题</td>
                        <td><input type="text" name="work_title" id="work_title" value="" class="form-control" /></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>文章标题</td>
                        <td><input type="text" name="work_subtitle" id="work_subtitle" value="" class="form-control" /></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>文章内容</td>
                        <td><textarea name="work_content" id="work_content" style="width:685px; height:350px;"></textarea></td>
                        <td></td>
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
                        <td><input type="text" name="work_order" id="work_order" value="1" class="form-control" /></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>文件</td>
                        <td><input type="file" name="work_images" id="work_images" /></td>
                        <td><img height="100px" id="imagess" width="100px" /></td>
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