<?php /* Smarty version Smarty-3.1.14, created on 2018-05-17 17:53:21
         compiled from "F:\PHPStudy\WWW\16jsjgj\class_website\app\view\admin\member_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:283155ae9ada145a0c3-37347132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5fa449e51ec6231f67fa4dfbfa6c98d1e7d5412' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\admin\\member_edit.html',
      1 => 1526545847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '283155ae9ada145a0c3-37347132',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae9ada14a82d1_31645910',
  'variables' => 
  array (
    'list' => 0,
    'sex' => 0,
    'sel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae9ada14a82d1_31645910')) {function content_5ae9ada14a82d1_31645910($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\framework\\libs\\plugins\\function.html_radios.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./app/view/admin/styles/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="./app/view/admin/js/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="./app/view/admin/styles/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
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
        #username ,#pass,#userpass,#email,#old,#salt{
            color:red;
             
        }
        </style>
        <script type="text/javascript">
        $("document").ready(function(){
            var values = TextTrackCue;
            //判断编辑页面的用户名
            $("#member_name").keyup(function(){
                var name = $(this).val();
                if(name == ""){
                    $("#username").text("修改的用户名不能为空！！！");
                    values = false;
                    return values;
                }
                $.ajax({
                    url:"index.php?p=admin&c=Member&a=editajax",
                    data:"member_name="+name+"&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['member_id'];?>
",
                    type:"post",
                    dataType:"html",
                    success:function(info){
                        if(info == "更改的用户名已经存在，请重新输入！！！"){
                            $("#username").text(info);
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
            //判断编辑页面的电子邮箱
            $("#member_email").keyup(function(){
                var email = $(this).val();
                var reg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+$/;
                if(email == ""){
                    $("#email").text("修改的邮箱不能为空！！！");
                    values = false;
                    return values;
                }else if(!reg.test(email)){
                    $("#email").text("修改的邮箱格式不正确！！！");
                    values = false;
                    return values;
                }else {
                    $("#email").html("<img src='./app/view/admin/images/yes.gif' />");
                    values = true;
                    return values;
                }
            });
            $("#oldpass").keyup(function(){
                var old = $(this).val();
                if(old != ""){
                    $.ajax({
                        url:"index.php?p=admin&c=Member&a=editajaxoldpass",
                        data:"member_userpass="+old+"&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['member_id'];?>
",
                        type:"post",
                        dataType:"html",
                        success:function(info){
                            if(info == "输入的旧密码不正确，请重新输入！！！"){
                                $("#old").text(info);
                                values = false;
                                return values;
                            }else{
                                $("#old").html(info);
                                values = true;
                                return values;
                            }
                        }
                    });
                }
            });
           
            $("#member_pass").keyup(function(){
                var old = $("#oldpass").val(); 
                //判断旧密码是否为空，为空则不用执行新密码，不为空则需要判断
                if(old != ""){
                    var pass = $(this).val();
                    var reg = /^(\w){4,16}$/;//4-16个字母、数字、下划线
                    if(pass == ""){
                        $("#pass").text("修改密码不能为空！！！");
                        values = false;
                        return values;
                    }
                    if(!reg.test(pass)){
                        $("#pass").text("修改的密码格式不正确！！！");
                        values = false;
                        return values;
                    }else{
                        $("#pass").html("<img src='./app/view/admin/images/yes.gif' />");
                        values = true;
                        return values;
                    }
                }
                
            });
            //判断那两次密码是否正确
            $("#member_password").keyup(function(){
                var pass = $("#member_pass").val();
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
            //学号
            $("#member_studentid").keyup(function(){
                var student = $("#member_studentid").val();
                var reg = /^[0-9]{8}$/;
                if(student == ""){
                    $("#studentid").text("更改的学号不能为空！！！");
                    values = false;
                    return values;
                }else if(!reg.test(student)){
                    $("#studentid").text("更改的学号格式不正确，学号为8位数字！！！");
                    values = false;
                    return values;
                }
                $.ajax({
                    url:"index.php?p=admin&c=Member&a=ajaxstudentid",
                    data:"member_studentid="+student+"&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['member_id'];?>
",
                    type:"post",
                    dataType:"html",
                    success:function(info){
                        if(info == "更改的学号已经存在，请重新输入！！！"){
                            $("#studentid").text(info);
                            values = false;
                            return values;
                        }else{
                            $("#studentid").html(info);
                            values = true;
                            return values;
                        }
                    }
                });
            });
            $("form").submit(function(event){
                var name = $("#member_name").val();
                var email = $("#member_email").val();
                if(values == false || values == null || email == "" || name ==""){
                    event.preventDefault();//阻止表单提交
                    alert("填写信息不符合,请更改不符合的信息！！！");
                }else{
                }
            });
            $("#member_imgthumn").change(function(){
                var work_img = document.getElementById("member_imgthumn").files[0];
                var imgs = document.getElementById('imagess');
                imgs.src = window.URL.createObjectURL(work_img);
            });
            $("#member_images").change(function(){
                var work_img = document.getElementById("member_images").files[0];
                var imgs = document.getElementById('imgs');
                imgs.src = window.URL.createObjectURL(work_img);
            });
        });
    </script>
</head>
<body>
    <table class="table table-bordered">
        <form action="index.php?p=admin&c=Member&a=edit" method="post" enctype="multipart/form-data">
        <thead>
            <tr>
                <th colspan="3"><button type="button" onclick="location.href='index.php?p=admin&c=Member&a=list'" class="btn btn-info"><span class="glyphicon glyphicon-list-alt" style="font-size:10px;margin-right:2px;"></span>会员列表</button></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>用户名</td>
                <td><input type="text" placeholder="请输入用户名" class="form-control" name="member_name" id="member_name" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['member_name'];?>
" /></td>
                <td id="username"></td>
            </tr>
            <tr>
                <td>学号</td>
                <td><input type="text" class="form-control" name="member_studentid" id="member_studentid" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['member_studentid'];?>
" /></td>
                <td id="studentid"></td>
            </tr>
            <tr>
                <td>用户头像</td>
                <td><input type="file" name="member_imgthumn" id="member_imgthumn" /></td>
                <td><img id="imagess" src='./app/uploaded/<?php echo $_smarty_tpl->tpl_vars['list']->value['member_imgthumn'];?>
' style="max-height:100px;max-width:100px;" /><input type="hidden" name="img_thumn" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['member_imgthumn'];?>
" /></td>
            </tr>
            <tr>
                <td>Email邮箱</td>
                <td><input type="text" placeholder="请输入邮箱" class="form-control"  name="member_email" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['member_email'];?>
" id="member_email" /></td>
                <td id="email"></td>
            </tr>
            <tr>
                <td>真实姓名</td>
                <td><input type="text" class="form-control"  name="member_truename" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['member_truename'];?>
" id="member_truename" /></td>
                <td id=""></td>
            </tr>
            <tr>
                    <td>性别</td>
                    <td><?php echo smarty_function_html_radios(array('options'=>$_smarty_tpl->tpl_vars['sex']->value,'selected'=>$_smarty_tpl->tpl_vars['sel']->value,'name'=>"member_sex"),$_smarty_tpl);?>
</td>
                    <td id=""></td>
                </tr>
            <tr>
                <td>爱好</td>
                <td><input type="text" class="form-control"  name="member_hobby" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['member_hobby'];?>
" id="member_hobby" /></td>
                <td id=""></td>
            </tr>
            <tr>
                <td>自我介绍</td>
                <td><textarea name="member_content" id="member_content" class="form-control"><?php echo $_smarty_tpl->tpl_vars['list']->value['member_content'];?>
</textarea></td>
                <td id=""></td>
            </tr>
            <tr>
                <td>联系方式</td>
                <td><input type="text" class="form-control"  name="member_phone" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['member_phone'];?>
" id="member_phone" /></td>
                <td id=""></td>
            </tr>
            <tr>
                <td>个人图片</td>
                <td><input type="file"  name="member_images" id="member_images" /></td>
                <td id=""><img id="imgs" src='./app/uploaded/<?php echo $_smarty_tpl->tpl_vars['list']->value['member_images'];?>
' style="max-height:100px;max-width:100px;" /><input type="hidden" name="img_images" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['member_images'];?>
" /></td>
            </tr>
            <tr>
                <td>旧密码</td>
                <td><input type="password" class="form-control" name="oldpass" id="oldpass" /><input type="hidden" name="member_userpass" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['member_pass'];?>
" /></td>
                <td id="old">如需要更改密码，请输入旧密码，不修改则留空！！！</td>
            </tr>
            <tr>
                <td>新密码</td>
                <td><input type="password" class="form-control" placeholder="请输入密码" name="member_pass" id="member_pass" /></td>
                <td id="pass"></td>
            </tr>
            <tr>
                <td>确认密码</td>
                <td><input type="password" class="form-control" placeholder="请输入确认密码" name="member_password" id="member_password" /></td>
                <td id="userpass"></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['member_id'];?>
" name="member_id" id="member_id" />
                <td colspan="3"><button type="reset" class="btn btn-danger" name="member_ap_res" id="member_ap_res" >重置</button><span style="width:10px;display:inline-block;"></span><button class="btn btn-success" type="submit" name="member_ap_sub" id="member_ap_sub" >修改</button></td>
            </tr>
        </tfoot>
        </form>
        </table>
</body>
</html><?php }} ?>