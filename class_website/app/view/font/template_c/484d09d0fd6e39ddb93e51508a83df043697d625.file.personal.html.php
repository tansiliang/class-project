<?php /* Smarty version Smarty-3.1.14, created on 2018-05-18 17:46:40
         compiled from "F:\PHPStudy\WWW\16jsjgj\class_website\app\view\font\personal.html" */ ?>
<?php /*%%SmartyHeaderCode:10205afa8617862584-13773509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '484d09d0fd6e39ddb93e51508a83df043697d625' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\font\\personal.html',
      1 => 1526559520,
      2 => 'file',
    ),
    'd93d5b96862cfc73542a617035812d8d4f6d6ffb' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\font\\public.html',
      1 => 1526632037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10205afa8617862584-13773509',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5afa8617912220_62640092',
  'variables' => 
  array (
    'webset' => 0,
    'naviga_list' => 0,
    'naviga' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afa8617912220_62640092')) {function content_5afa8617912220_62640092($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\framework\\libs\\plugins\\function.html_radios.php';
?><html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title><?php echo $_smarty_tpl->tpl_vars['webset']->value[0]['webset_title'];?>
</title>
    <!-- 首页 -->
    <link rel="shortcut icon" href="./app/uploaded/<?php echo $_smarty_tpl->tpl_vars['webset']->value[0]['webset_title_ico'];?>
" />
    <link href="./app/view/font/css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="./app/view/font/css/shutter.css" rel="stylesheet" type="text/css" />
    <script src="./app/view/font/js/jquery.min.js" type="text/javascript"></script>
    <link href="./app/view/font/css/index.css" rel="stylesheet" type="text/css" />
    <link href="./app/view/font/css/xq_navbar.css" rel="stylesheet" />
	<link href="./app/view/font/css/xq.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="./app/view/font/css/style_common.css" />
    <link rel="stylesheet" type="text/css" href="./app/view/font/css/style7.css" />
    <script src="./app/view/font/js/index.js"></script>
    <script src="./app/view/font/js/velocity.js"></script>
    <script src="./app/view/font/js/shutter.js"></script>
    <!-- 通讯录 -->
    <script type="text/javascript" src="./app/view/font/code/js/bootstrap.js"></script>
    <script type="text/javascript" src="./app/view/font/js/zturn.js"></script>
    <link rel="stylesheet" href="./app/view/font/css/public.css" />
    <link rel="stylesheet" type="text/css" href="./app/view/font/css/list.css" />
    <!-- 昔日风采 -->
    <!-- <link rel="stylesheet" href="./app/view/font/css/mien.css"> -->
    <!-- 昔日风采详细页 -->
    <link rel="stylesheet" href="./app/view/font/css/detail.css" />
    <!-- 下载专区 -->
    <link rel="stylesheet" href="./app/view/font/css/Down.css">
    <!-- 下载专区详细页 -->
    <link rel="stylesheet" href="./app/view/font/css/load_list.css">
    <script src="./app/view/admin/js/kindeditor/kindeditor-all.js" /></script>
    <script src="./app/view/admin/js/kindeditor/lang/zh-CN.js" /></script>
    <!-- 个人中心 -->
    <link href="./app/view/font/css/personal.css" rel="stylesheet" type="text/css" />
    <!-- <script src="./app/view/font/js/personal.js"></script> -->
    <!-- 登录页面 -->
    <link rel="stylesheet" type="text/css" href="./app/view/font/css/styles.css" />
    <script>
        $(function () {
            $('.shutter').shutter({
                shutterW: 500, // 容器宽度
                shutterH: 358, // 容器高度
                isAutoPlay: true, // 是否自动播放
                playInterval: 3000, // 自动播放时间
                curDisplay: 3, // 当前显示页
                fullPage: false // 是否全屏展示
            });
        });
    </script>
    <script src="./app/view/font/js/xq_navbar.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function(){
            $("#bar2").xq_navbar({ "type": "beat", "liwidth": "avg", "bgcolor": "#666666", "hcolor": "#0a6fdd" });
        });
    </script>
</head>
<body>
<div id="page">
    <div id="header">
        <div id="Logo">
            <img src="./app/view/font/img/Logo.png" width="100px" height="71px"/>
            <span><?php echo $_smarty_tpl->tpl_vars['webset']->value[0]['webset_name'];?>
</span>
        </div>
        <div id="nav">
            <div class="xq_bag" id="bar2">
                <ul class="xq_navbar">
                    <?php  $_smarty_tpl->tpl_vars['naviga'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['naviga']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['naviga_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['naviga']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['naviga']->key => $_smarty_tpl->tpl_vars['naviga']->value){
$_smarty_tpl->tpl_vars['naviga']->_loop = true;
 $_smarty_tpl->tpl_vars['naviga']->index++;
?>
                    <?php if ($_smarty_tpl->tpl_vars['naviga']->value['naviga_bar']==1&&$_smarty_tpl->tpl_vars['naviga']->index<9){?>
                    <li class="xq_navli"><a href="<?php echo $_smarty_tpl->tpl_vars['naviga']->value['naviga_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['naviga']->value['naviga_name'];?>
</a></li>
                    <?php }?>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    
    <div id="content">
        <div id="content-left">
            <table id="page">
                <tr>
                    <td><div id="basic">基本信息</div></td>
                    <td><div id="basic" style="font-size:16px;color:red;"></div></td>
                </tr>
                <tr>
                    <td class="list_title">
                        <div id="username">
                            <span>昵称</span>
                        </div>
                    </td>
                    <td class="list_content">
                        <span id="nowName"><?php echo $_smarty_tpl->tpl_vars['member_info']->value['member_name'];?>
</span>
                    </td>
                </tr>
                <tr>
                    <td class="list_title">
                        <div id="schoolId">
                            <span>学号</span>
                        </div>
                    </td>
                    <td class="list_content">
                        <span><?php echo $_smarty_tpl->tpl_vars['member_info']->value['member_studentid'];?>
</span>
                    </td>
                </tr>
                <tr>
                    <td class="list_title">
                        <div id="head">
                            <span>头像</span>
                        </div>
                    </td>
                    <td class="list_content">
                        <img src="./app/uploaded/<?php echo $_smarty_tpl->tpl_vars['member_info']->value['member_imgthumn'];?>
" style="max-height:100px;max-width:100px;" />
                    </td>
                </tr>
                <tr>
                    <td class="list_title">
                        <div id="email">
                            <span>邮箱</span>
                        </div>
                    </td>
                    <td class="list_content">
                        <span id="nowEmail"><?php echo $_smarty_tpl->tpl_vars['member_info']->value['member_email'];?>
</span>
                    </td>
                </tr>
                <tr>
                    <td class="list_title">
                        <div id="phoneNumber">
                            <span>爱好</span>
                        </div>
                    </td>
                    <td class="list_content">
                        <span><?php echo $_smarty_tpl->tpl_vars['member_info']->value['member_hobby'];?>
</span>
                    </td>
                </tr>
                <tr>
                    <td class="list_title">
                        <div id="name">
                            <span>真实姓名</span>
                        </div>
                    </td>
                    <td class="list_content">
                        <span id="now_truename"><?php echo $_smarty_tpl->tpl_vars['member_info']->value['member_truename'];?>
</span>
                    </td>
                </tr>
                <tr>
                    <td class="list_title">
                        <div id="phoneNumber">
                            <span>手机号码</span>
                        </div>
                    </td>
                    <td class="list_content">
                        <span id="nowNumber"><?php echo $_smarty_tpl->tpl_vars['member_info']->value['member_phone'];?>
</span>
                    </td>
                </tr>
                <tr>
                    <td class="list_title">
                        <div id="phoneNumber">
                            <span>自我介绍</span>
                        </div>
                    </td>
                    <td class="list_content">
                        <span><?php echo $_smarty_tpl->tpl_vars['member_info']->value['member_content'];?>
</span>
                    </td>
                </tr>
                <tr>
                    <td class="list_title">
                        <div id="phoneNumber">
                            <span>个人图片</span>
                        </div>
                    </td>
                    <td class="list_content">
                        <img src="./app/uploaded/<?php echo $_smarty_tpl->tpl_vars['member_info']->value['member_images'];?>
" style="max-width:100px;max-height:100px;" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;padding-top:10px;">
                        <button id="" onclick="if(window.confirm('是否确定退出当前账号？？？')){ location.href='index.php?p=font&c=Personal&a=die';}" class="btn btn-danger" name="">退出当前账号</button>
                    </td>
                </tr>
            </table>
            <button id="revise" class="btn btn-info">编辑</button>
        </div>
        <div id="content-right">
        <table>
        <form action="index.php?p=font&c=personal&a=edit" method="post" enctype="multipart/form-data">
        <thead>
            <tr>
            <th><div id="basic">修改信息</div></th>
            <th colspan="2"><div id="" style="text-align:right;"><span id="remove" class="glyphicon glyphicon-remove" style="color: rgb(54, 54, 54); font-size: 24px;"></span></div></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><span class="list_a">昵称</span></td>
                <td><input type="text" name="nick" id="nick" onkeyup="IsLetter()" value="<?php echo $_smarty_tpl->tpl_vars['member_info']->value['member_name'];?>
" class="form-control"/>
                </td>
                <td id="nick_name"></td>
            </tr>
            <tr id="schoolId" class="list">
                <td><span class="list_a">学号</span></td>
                <td><span><?php echo $_smarty_tpl->tpl_vars['member_info']->value['member_studentid'];?>
</span></td>
                <td></td>
            </tr>
            <tr id="head" class="list">
                <td><span class="list_a">头像</span></td>
                <td><input type="file" name="member_imgthumn" id="member_imgthumn" /></td>
                <td><img id="imagess" src='./app/uploaded/<?php echo $_smarty_tpl->tpl_vars['member_info']->value['member_imgthumn'];?>
' style="max-height:100px;max-width:100px;" /><input type="hidden" name="img_thumn" value="<?php echo $_smarty_tpl->tpl_vars['member_info']->value['member_imgthumn'];?>
" /></td>
            </tr>
            <tr id="sex" class="list" style="margin-top:20px;">
                <td><span class="list_a">性别</span></td>
                <td><?php echo smarty_function_html_radios(array('options'=>$_smarty_tpl->tpl_vars['sex']->value,'selected'=>$_smarty_tpl->tpl_vars['sel']->value,'name'=>"sex"),$_smarty_tpl);?>
</td>
                <td></td>
            </tr>
            <tr id="name" class="list">
                <td><span class="list_a">真实姓名</span></td>
                <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['member_info']->value['member_truename'];?>
" id="member_truename" name="member_truename" class="form-control"/></td>
                <td id="new_truename"></td>
            </tr>
            <tr id="email" class="list">
                <td><span class="list_a">邮箱</span></td>
                <td><input type="email" id="member_email" name="member_email" value="<?php echo $_smarty_tpl->tpl_vars['member_info']->value['member_email'];?>
" class="form-control"/></td>
                <td id="emails"></td>
            </tr>
            <tr id="phoneNumber" class="list">
                <td><span class="list_a">手机号码</span></td>
                <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['member_info']->value['member_phone'];?>
" name="member_phone" id="member_phone" class="form-control"/></td>
                <td id="phone"></td>
            </tr>
            <tr id="phoneNumber" class="list" style="height:80px;">
                <td><span class="list_a">爱好</span></td>
                <td><textarea class="form-control" name="member_hobby" id="member_hobby"><?php echo $_smarty_tpl->tpl_vars['member_info']->value['member_hobby'];?>
</textarea></td>
                <td></td>
            </tr>
            <tr id="phoneNumber" class="list">
                <td><span class="list_a">自我介绍</span></td>
                <td><textarea name="member_content" id="member_content" class="form-control"><?php echo $_smarty_tpl->tpl_vars['member_info']->value['member_content'];?>
</textarea></td>
                <td></td>
            </tr>
            <tr id="phoneNumber" class="list" style="height:80px;">
                <td><span class="list_a">个人图片</span></td>
                <td><input type="file"  name="member_images" id="member_images" /></td>
                <td><img id="imgs" src='./app/uploaded/<?php echo $_smarty_tpl->tpl_vars['member_info']->value['member_images'];?>
' style="max-height:100px;max-width:100px;" /><input type="hidden" name="img_images" value="<?php echo $_smarty_tpl->tpl_vars['member_info']->value['member_images'];?>
" /></td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
             <td colspan="3"><div style="text-align:center;">
                 <input type="hidden" name="member_id" value="<?php echo $_smarty_tpl->tpl_vars['member_info']->value['member_id'];?>
" />
                <input type="reset" class="btn btn-danger" name="" value="重置" />
                <input type="submit" class="btn btn-success" name="" value="修改" />
                </div>
            </td>
            </tr>
        </tfoot>
        </div>
        <div style="clear:both"></div>
    </form>
    </table>
    </div>
    <script>
        $(document).ready(function () {
            $("#content-right").hide();
            $("#revise").click(function () {
                if ($("#revise").text() == "编辑") {
                    $("#revise").hide();
                    $("#content-right").show();
                    // $("#revise").css({ "background-color": "green", "color": "#fff" });
                }
            });
            $("#remove").click(function(){
                $("#revise").show();
                $("#content-right").hide();
            });
            //更换图片时显示图片
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
            //判断编辑页面的电子邮箱
            $("#member_email").keyup(function(){
                var email = $(this).val();
                var reg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+$/;
                if(email == ""){
                    $("#emails").text("修改的邮箱不能为空！！！");
                    values = false;
                    return values;
                }else if(!reg.test(email)){
                    $("#emails").text("修改的邮箱格式不正确！！！");
                    values = false;
                    return values;
                }else {
                    $("#emails").html("<img src='./app/view/admin/images/yes.gif' />");
                    values = true;
                    return values;
                }
            });
            // 判断当前的昵称是否存在
            $("#nick").keyup(function(){
                var name = $(this).val();
                if(name == ""){
                    $("#nick_name").text("修改的昵称不能为空！！！");
                    values = false;
                    return values;
                }
                $.ajax({
                    url:"index.php?p=font&c=Personal&a=editajax",
                    data:"member_name="+name+"&id=<?php echo $_smarty_tpl->tpl_vars['member_info']->value['member_id'];?>
",
                    type:"post",
                    dataType:"html",
                    success:function(info){
                        if(info == "更改的昵称已经存在，请重新输入！！！"){
                            $("#nick_name").text(info);
                            values = false;
                            return values;
                        }else{
                            $("#nick_name").html(info);
                            values = true;
                            return values;
                        }
                    }
                });
            });
            // 判断当前的真实姓名是否存在
            $("#member_truename").keyup(function(){
                var name = $(this).val();
                if(name == ""){
                    $("#new_truename").text("修改的姓名不能为空！！！");
                    values = false;
                    return values;
                }
                $.ajax({
                    url:"index.php?p=font&c=Personal&a=edittrueajax",
                    data:"member_truename="+name+"&id=<?php echo $_smarty_tpl->tpl_vars['member_info']->value['member_id'];?>
",
                    type:"post",
                    dataType:"html",
                    success:function(info){
                        if(info == "更改的姓名已经存在，请重新输入！！！"){
                            $("#new_truename").text(info);
                            values = false;
                            return values;
                        }else{
                            $("#new_truename").html(info);
                            values = true;
                            return values;
                        }
                    }
                });
            });
            // 验证手机号码
            $("#member_phone").keyup(function(){
                var phone = $(this).val();
                var reg = /^1\d{10}$/;
                if(phone == ""){
                    $("#phone").text("修改的手机号码不能为空！！！");
                    values = false;
                    return values;
                }else if(!reg.test(phone)){
                    $("#phone").text("修改的手机号码格式不正确！！！");
                    values = false;
                    return values;
                }else {
                    $("#phone").html("<img src='./app/view/admin/images/yes.gif' />");
                    values = true;
                    return values;
                }
            });
});
    </script>
    
    <!-- <script>
        var isLet = IsLetter();
        var isName = IsName();
        var isEmail = IsEmail();
        var isNumber = IsInteger();
        //判断输入的字符不得超过15个字符
        function IsLetter() {
            var newName = document.getElementById('newName').value.trim();
            if (newName.length != 0) {
                if (newName.length > 15) {
                    document.getElementById("newNameb").innerHTML = "昵称不得超过15个字！";
                    return false;
                } else {
                    document.getElementById("newNameb").innerHTML = "";
                    return true;
                }
            } else if (newName.length == 0) {
                document.getElementById("newNameb").innerHTML = "请输入昵称！";
                return false;
            } else {
                document.getElementById("newNameb").innerHTML = "";
                return true;
            }
        }
        //判断输入的字符不得超过4个字符
        function IsName() {
            var new_truename = document.getElementById('new_truename').value.trim();
            if (new_truename.length != 0) {
                if (new_truename.length > 4) {
                    document.getElementById("new_truenameb").innerHTML = "真实姓名不得超过4个字！";
                    return false;
                } else {
                    document.getElementById("new_truenameb").innerHTML = "";
                    return true;
                }
            } else if (new_truename.length == 0) {
                document.getElementById("new_truenameb").innerHTML = "请输入真实姓名！";
                return false;
            } else {
                document.getElementById("new_truenameb").innerHTML = "";
                return true;
            }
        }
        //电子邮件验证
        function IsEmail() {
            var email = document.getElementById('newEmail').value.trim();
            if (email.length != 0) {
                reg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
                if (!reg.test(email)) {
                    document.getElementById("emailp").innerHTML = "输入的电子邮件格式错误！";
                    return false;
                } else {
                    document.getElementById("emailp").innerHTML = "";
                }
            } else if (email.length == 0) {
                document.getElementById("emailp").innerHTML = "请输入电子邮件！";
                return false;
            } else {
                document.getElementById("emailp").innerHTML = "";
                return true;
            }
        }
        //验证手机号码
        function IsInteger() {
            var newNumber = document.getElementById('newNumber').value.trim();
            if (newNumber.length != 0) {
                reg = /^[+]{0,1}(\d){1,3}[ ]?([-]?((\d)|[ ]){1,12})+$/;
                if (!reg.test(newNumber)) {
                    document.getElementById("Numberb").innerHTML = "输入的字符不是整数";
                    return false;
                } else {
                    document.getElementById("Numberb").innerHTML = "";
                    return true;
                }
            } else if (newNumber.length == 0) {
                document.getElementById("Numberb").innerHTML = "请输入手机号码";
                return false;
            } else if(newNumber.length < 11 || newNumber.length > 11){
                document.getElementById("Numberb").innerHTML = "手机号码为11位的数字！！！";
                return false;
            }else{
                document.getElementById("Numberb").innerHTML = "";
            }
        }
        //提交
        function Istrue() {
            if (isLet == false || isName == false || isEmail == false || isNumber == false) {
                alert("信息输入错误！");
            } else {
                alert("lfkdsjlkfjdasl");
            }
        }
    </script> -->
    
    <div id="footer" style="clear:both;">
            <?php echo $_smarty_tpl->tpl_vars['webset']->value[0]['web_foot_content'];?>

    </div>
</div>
</body>
    
</html><?php }} ?>