<?php /* Smarty version Smarty-3.1.14, created on 2018-04-30 11:28:51
         compiled from "F:\PHPStudy\WWW\16jsjgj\class_website\app\view\admin\webset_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:28055ae58f235db9d4-61474435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '513426a11953621c3cb19e3f69699b85ff897287' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\admin\\webset_edit.html',
      1 => 1525058920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28055ae58f235db9d4-61474435',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae58f2362da75_80143930',
  'variables' => 
  array (
    'list' => 0,
    'show' => 0,
    'sel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae58f2362da75_80143930')) {function content_5ae58f2362da75_80143930($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\framework\\libs\\plugins\\function.html_radios.php';
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
    <title>网站设置的编辑页面</title>
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
                 var values = true;
                 $("#webset_name").keyup(function(){
                    var name = $("#webset_name").val();
                    if(name == ""){
                        $("#name").text("修改的网站名不能为空！！！");
                        values = false;
                        return values;
                    }else{
                        $("#name").html("<img src='./app/view/admin/images/yes.gif' />");
                        values = true;
                        return values;
                    }
                 });
                 //网站标题
                $("#webset_title").keyup(function(){
                    var title = $("#webset_title").val();
                    if(title == ""){
                        $("#title").text("修改网站标题名不能为空！！！");
                        values = false;
                        return values;
                    }
                    $.ajax({
                        url: "index.php?p=admin&c=Webset&a=ajaxedit",
                        data:"webset_title="+title+"&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['webset_id'];?>
",
                        type:"post",
                        dataType:"html",
                        success:function(info){
                            if(info == "更改的网站标题已经存在！！！"){
                                $("#title").text(info);
                                values = false;
                                return values;
                            }else{
                                $("#title").html(info);
                                values = true;
                                return values;
                            }
                        }
                    });
                });
                //判断当前的图标文件是否为空
                $("#webset_title_ico").change(function(){
                    var ico = $(this).val();
                    var titleico = document.getElementById("webset_title_ico").files[0];
                    var img = document.getElementById("ico");
                    if(ico != ""){
                        img.src = window.URL.createObjectURL(titleico);
                    }
                })
                /**
                 * 判断当前的url信息是否为空
                 */
                 $("#webset_url").keyup(function(){
                     var url = $(this).val();
                     if(url == ""){
                         $("#url").text("修改的URL不能为空！！！");
                         values = false;
                         return values;
                     }else{
                        $("#url").html("<img src='./app/view/admin/images/yes.gif' />");
                        values = true;
                        return values;
                     }
                 });

                 $("form").submit(function(e){
                    var name = $("#webset_name").val();
                    var title = $("#webset_title").val();
                    var url = $("#webset_url");
                    if(values == false || values == null || title== "" || name == "" || url == ""){
                        e.preventDefault();
                        alert("填写信息不符合,请更改不符合的信息！！！");
                    }
                 });
            });
        </script>
</head>
<body>
    <table class="table table-bordered">
        <form action="index.php?p=admin&c=Webset&a=edit" method="post" enctype="multipart/form-data">
            <thead>
                <tr>
                    <th colspan="3"><button type="button" onclick="location.href='index.php?p=admin&c=Webset&a=list'" class="btn btn-info"><span class="glyphicon glyphicon-list-alt" style="font-size:10px;margin-right:2px;"></span>管理员列表</button></th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <td>网站名</td>
                <td><input type="" placeholder="" class="form-control" name="webset_name" id="webset_name" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['webset_name'];?>
" /></td>
                <td id="name"></td>
            </tr>
            <tr>
                <td>网站标题</td>
                <td><input type="text" class="form-control"  name="webset_title" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['webset_title'];?>
" id="webset_title" /></td>
                <td id="title"></td>
            </tr>
            <tr>
                <td>标题图标</td>
                <td><input type="file" name="webset_title_ico" id="webset_title_ico" /></td>
                <td ><img src="./app/uploaded/<?php echo $_smarty_tpl->tpl_vars['list']->value['webset_title_ico'];?>
" id="ico" width="100px" height="100px"/><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['webset_title_ico'];?>
" name="webset_ico" id="webset_ico" /></td>
            </tr>
            <tr>
                <td>网址</td>
                <td><input type="text" class="form-control"  name="webset_url" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['webset_url'];?>
" id="webset_url" /></td>
                <td id="url"></td>
            </tr>
            <tr>
                    <td>seo关键字</td>
                    <td><textarea name="webset_seo" id="webset_seo" class="form-control" rows="3"><?php echo $_smarty_tpl->tpl_vars['list']->value['webset_seo'];?>
</textarea></td>
                    <td></td>
                </tr>
                <tr>
                    <td>网站描述</td>
                    <td><textarea name="webset_bewrite" id="webset_bewrite" class="form-control" rows="3"><?php echo $_smarty_tpl->tpl_vars['list']->value['webset_bewrite'];?>
</textarea></td>
                    <td></td>
                </tr>
                <tr>
                    <td>页脚信息</td>
                    <td><textarea style="width:700px;height:350px;" name="web_foot_content" id="web_foot_content"><?php echo $_smarty_tpl->tpl_vars['list']->value['web_foot_content'];?>
</textarea></td>
                    <td></td>
                </tr>
            <tr>
                <td>是否显示</td>
                <td><?php echo smarty_function_html_radios(array('options'=>$_smarty_tpl->tpl_vars['show']->value,'selected'=>$_smarty_tpl->tpl_vars['sel']->value,'name'=>'webset_show'),$_smarty_tpl);?>
</td>
                <td id="show"></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['webset_id'];?>
" name="webset_id" id="webset_id" />
                <td colspan="3"><button type="reset" class="btn btn-danger" name="webset_ap_res" id="webset_ap_res" >重置</button><span style="width:10px;display:inline-block;"></span><button class="btn btn-success" type="submit" name="webset_ap_sub" id="webset_ap_sub" >修改</button></td>
            </tr>
        </tfoot>
        </form>
    </table>
</body>
</html><?php }} ?>