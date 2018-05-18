<?php /* Smarty version Smarty-3.1.14, created on 2018-04-30 11:29:08
         compiled from "F:\PHPStudy\WWW\16jsjgj\class_website\app\view\admin\webset_add.html" */ ?>
<?php /*%%SmartyHeaderCode:324355ae54c818ff577-46502320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a78ef871aaeb6da6ec6384be1f30e0af05906f67' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\admin\\webset_add.html',
      1 => 1525058917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '324355ae54c818ff577-46502320',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae54c819573b1_94678266',
  'variables' => 
  array (
    'opt' => 0,
    'sel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae54c819573b1_94678266')) {function content_5ae54c819573b1_94678266($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\framework\\libs\\plugins\\function.html_radios.php';
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
    <title>添加网站设置信息</title>
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
            var values;
            var name = $("#webset_name").val();
            var title = $("#webset_title").val();
            if(name == ""){
                $("#username").text("网站名不能为空！！！");
            }
            if(title == ""){
                $("#title").text("网站标题不能为空！！！");
            }
            $("#webset_name").keyup(function(){
                var name = $(this).val();
                if(name != ""){
                    $("#username").html("<img src='./app/view/admin/images/yes.gif' />");
                }else{
                    $("#username").text("网站名不能为空！！！");
                }
            })
            $("#webset_title").keyup(function(){
                var title = $("#webset_title").val();
                if(title != ""){
                    $("#title").html("<img src='./app/view/admin/images/yes.gif' />");
                    values = true;
                    return values;
                }else{
                    $("#title").text("网站标题不能为空！！！");
                    values = false;
                    return values;
                }
                $.ajax({
                    url:"index.php?p=admin&c=Webset&a=ajaxaddtitle",
                    data:"webset_title="+title,
                    type:"post",
                    dataType:"html",
                    success:function(info){
                        if(info == "网站标题已经存在！！！"){
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
            // 选择文件时生成二进制图片
            $("#webset_title_ico").change(function (){
               var titleico = document.getElementById("webset_title_ico").files[0];
               var img = document.getElementById("imagess");
               img.src = window.URL.createObjectURL(titleico);
            });
            // 网址
            $("#webset_url").keyup(function(){
                var url = $("#webset_url").val();
                if(url != ""){
                    $("#url").html("<img src='./app/view/admin/images/yes.gif' />");
                    values = true;
                    return values;
                }else{
                    $("#url").text("网址不能为空！！！");
                    values = false;
                    return values;
                }
            });
            //提交事件
            $("form").submit(function(e){
                var name = $("#webset_name").val();
                var url = $("#webset_url").val();
                if(values == false || name == "" || url == ""){
                    e.preventDefault();
                    alert("填写信息不符合,请更改不符合的信息！！！");
                }
            });
        });
    </script>
</head>
<body>
        <table class="table table-bordered" style="margin-bottom:40px;">
                <form action="index.php?p=admin&c=Webset&a=add" method="post" enctype="multipart/form-data">
                <thead>
                        <tr>
                            <th colspan="3"><button type="button" onclick="location.href='index.php?p=admin&c=Webset&a=list'" class="btn btn-info"><span class="glyphicon glyphicon-list-alt" style="font-size:10px;margin-right:2px;"></span>网站设置列表</button></th>
                        </tr>
                    </thead>
                <tbody>
                    <tr>
                        <td>网站名</td>
                        <td><input type="text" placeholder="请输入网站名" class="form-control" name="webset_name" id="webset_name" /></td>
                        <td id="username"></td>
                    </tr>
                    <tr>
                        <td>网站标题</td>
                        <td class="form-group"><input type="text" placeholder="请输入网站的标题" class="form-control" name="webset_title" id="webset_title" />
                        </td>
                        <td id="title"></td>
                    </tr>
                    <tr class="form-group">
                        <td>标题图标</td>
                        <td><input type="file" name="webset_title_ico" id="webset_title_ico" /></td>
                        <td id="ico"><img height="100px" width="100px" id="imagess" /></td>
                    </tr>
                    <tr>
                        <td>网站网址</td>
                        <td><input type="text" class="form-control" name="webset_url" placeholder="请输入网站网址" id="webset_url" /></td>
                        <td id="url"></td>
                    </tr>
                    <tr>
                        <td>seo关键字</td>
                        <td><textarea name="webset_seo" id="webset_seo" class="form-control" rows="3"></textarea></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>网站描述</td>
                        <td><textarea name="webset_bewrite" id="webset_bewrite" class="form-control" rows="3"></textarea></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>页脚信息</td>
                        <td><textarea name="web_foot_content" id="web_foot_content" style="height:300px;width:685px" ></textarea></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>显示/隐藏</td>
                        <td><?php echo smarty_function_html_radios(array('options'=>$_smarty_tpl->tpl_vars['opt']->value,'name'=>'webset_show','selected'=>$_smarty_tpl->tpl_vars['sel']->value),$_smarty_tpl);?>
</td>
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