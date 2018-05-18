<?php /* Smarty version Smarty-3.1.14, created on 2018-05-07 20:04:31
         compiled from "F:\PHPStudy\WWW\16jsjgj\class_website\app\view\admin\admin_add.html" */ ?>
<?php /*%%SmartyHeaderCode:140635ae2930066f7e7-15578611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0904b0f5feb5f1a7287b808eddd086ee1c29a093' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\admin\\admin_add.html',
      1 => 1525689924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140635ae2930066f7e7-15578611',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae2930069e5e3_02736336',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae2930069e5e3_02736336')) {function content_5ae2930069e5e3_02736336($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./app/view/admin/styles/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="./app/view/admin/js/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="./app/view/admin/styles/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <title>管理员添加</title>
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
    <script type="text/javascript">
        $("document").ready(function(){
            //判断用户名密码、确认密码，邮箱是否为空
            var values;
             var name = $("#ad_username").val();
             var pass = $("#ad_userpass").val();
             var email = $("#ad_email").val();
            if(name == ""){
                $("#username").text("用户名不能为空！！！");
            }
            if(pass == ""){
                $("#pass").text("密码不能为空！！！");
            }
            if(email == ""){
                $("#email").text("邮箱不能为空！！！");
            }
            //当执行键盘按下的时候执行事件,判断密码格式、两次密码是否一致，邮箱格式是否正确
            $("#ad_email").keyup(function(){
                var emails = $(this).val();
                var reg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+$/;//利用正则表达式来进行判断
                if(!reg.test(emails)){
                    $("#email").text("邮箱格式不正确！！！");
                    values = false;
                    return values;
                }else{
                    $("#email").html("<img src='./app/view/admin/images/yes.gif' />");
                    values = true;
                    return values;
                }
            });
            $("#ad_pass").keyup(function(){
                var pass = $(this).val();
                var reg = /^(\w){4,16}$/;//4-16个字母、数字、下划线
                if(!reg.test(pass)){
                    $("#pass").text("密码格式不正确！！！");
                    values = false;
                    return values;
                }else{
                    $("#pass").html("<img src='./app/view/admin/images/yes.gif' />");
                    values = true;
                    return values;
                }
            });
            //判断那两次密码是否正确
            $("#ad_userpass").keyup(function(){
                var pass = $("#ad_pass").val();
                var userpass = $(this).val();
                if(pass != userpass){
                    $("#userpass").text("两次密码不一致！！！");
                    values = false;
                    return values;
                }else{
                    $("#userpass").html("<img src='./app/view/admin/images/yes.gif' />");
                    values = true;
                    return values;
                }
            });
            
             //ajax判断用户名是否存在
            $("#ad_username").on("keyup",function(){
                var name = $("#ad_username").val();
                $.ajax({
                    url:"index.php?p=admin&c=Admin&a=addajax",
                    data:"ad_username="+name,
                    dataType:"html",
                    type:"post",
                    success:function(info){
                        if(info == "用户名已经存在，请重新输入！！！"){
                            $("#username").html(info);
                            values = false;
                            return values;
                        }else{
                            $("#username").html(info);
                            values = true;
                            return values;
                        }
                    }
                });
            });

            //点击提交按钮时
            $("form").submit(function(event){
                var name = $("#ad_username").val();
                var pass = $("#ad_userpass").val();
                var email = $("#ad_email").val();
                alert(values);
                if(values == false || values == null || pass == "" || email == "" || name ==""){
                    event.preventDefault();//阻止表单提交
                    alert("填写信息不符合,请更改不符合的信息！！！");
                }else{
                }
            });
        });
    </script>
</head>
<body>
<table class="table table-bordered">
    <form action="index.php?p=admin&c=Admin&a=add" method="post">
    <tbody>
        <tr>
            <td>用户名</td>
            <td><input type="" placeholder="请输入用户名" class="form-control" name="ad_username" id="ad_username" /></td>
            <td id="username"></td>
        </tr>
        <tr>
            <td>Email邮箱</td>
            <td><input type="text" placeholder="请输入邮箱" class="form-control"  name="ad_email" id="ad_email" /></td>
            <td id="email"></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="password" class="form-control" placeholder="请输入密码" name="ad_pass" id="ad_pass" /></td>
            <td id="pass"></td>
        </tr>
        <tr>
            <td>确认密码</td>
            <td><input type="password" class="form-control" placeholder="请输入确认密码" name="ad_userpass" id="ad_userpass" /></td>
            <td id="userpass"></td>
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