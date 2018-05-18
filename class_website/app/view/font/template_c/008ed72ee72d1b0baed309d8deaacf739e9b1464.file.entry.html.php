<?php /* Smarty version Smarty-3.1.14, created on 2018-05-18 13:48:50
         compiled from "F:\PHPStudy\WWW\16jsjgj\class_website\app\view\font\entry.html" */ ?>
<?php /*%%SmartyHeaderCode:246155afa99b0743047-35327577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '008ed72ee72d1b0baed309d8deaacf739e9b1464' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\font\\entry.html',
      1 => 1526602845,
      2 => 'file',
    ),
    'd93d5b96862cfc73542a617035812d8d4f6d6ffb' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\font\\public.html',
      1 => 1526612921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '246155afa99b0743047-35327577',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5afa99b07cfa64_96540588',
  'variables' => 
  array (
    'webset' => 0,
    'naviga_list' => 0,
    'naviga' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afa99b07cfa64_96540588')) {function content_5afa99b07cfa64_96540588($_smarty_tpl) {?><html lang="en" xmlns="http://www.w3.org/1999/xhtml">
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
	<link rel="stylesheet" type="text/css" href="./app/view/font/css/styles.css">
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
    
<div id="body">
    <form action="index.php?p=font&c=Personal&a=login" method="post">
        <div class="jq22-container" style="padding-top:10px;padding-bottom:90px;"/>
            <div class="login-wrap">
                <div class="login-html">
                    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">登录</label>
                    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">注册</label>
                    <div class="login-form">
                        <div class="sign-in-htm">
                            <div class="group">
                                <label for="user" class="label">学号</label>
                                <input id="user" name="studentid" type="text" class="input">
                            </div>
                            <div class="group">
                                <label for="pass" class="label">密码</label>
                                <input id="pass" type="password" name="name" class="input" data-type="password">
                            </div>
                            <div class="group">
                                <input id="check" type="checkbox" class="check" value="1">
                                <label for="check"><span class="icon"></span>记住密码</label>
                            </div>
                            <div class="group">
                                <input type="submit" class="button" value="登录">
                            </div>
                            <div class="hr"></div>
                            <!-- <div class="foot-lnk">
                                <a href="#forgot">忘记密码？</a>
                            </div> -->
                        </form>
                        </div>
                        <div class="sign-up-htm">
                            <form action="index.php?p=font&c=Personal&a=add" method="post">
                            <div class="group">
                                <label for="xuehao" class="label">学号</label>
                                <input id="studentid" type="text" name="studentid" class="input">
                                <p id="xuehao123" class="inner"></p>
                            </div>
                            <div class="group">
                                <label for="user1" class="label">昵称</label>
                                <input id="user1" type="text" name="member_name" class="input" onkeyup="IsLetter()">
                                <p id="user123" class="inner"></p>
                            </div>
                            <div class="group">
                                <label for="pass1" class="label">密码</label>
                                <input id="pass1" type="password" class="input" data-type="password" onkeyup="IsPasswd()" placeholder="只能由6-20个字母、数字和下划线组成">
                                <p id="pass1123" class="inner"></p>
                            </div>
                            <div class="group">
                                <label for="pass2" class="label">确认密码</label>
                                <input id="pass2" type="password" name="member_pass" class="input" data-type="password" onkeyup="IsPassDe(this.value)">
                                <p id="pass2p" class="inner"></p>
                            </div>
                            <div class="group">
                                <label for="email" class="label">电子邮件</label>
                                <input id="email" type="text" name="member_email" class="input" onkeyup="IsEmail()">
                                <p id="emailp" class="inner"></p>
                            </div>
                            <div class="group">
                                <input type="submit" class="button" value="注册" onsubmit="Istrue()">
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
</div>
<script>
    $("document").ready(function(){
            $("#studentid").keyup(function(){
                var studentid = $(this).val();
                reg = /^[0-9]{8}$/;
                if(studentid == ""){
                    $("#xuehao123").text("添加的学号不能为空！！！");
                    values = false;
                    return values;
                }else if(!reg.test(studentid)){
                    $("#xuehao123").text("学号的格式为8位数字！！！");
                    values = false;
                    return values;
                }
                $.ajax({
                    url:"index.php?p=font&c=Personal&a=addajax",
                    data:"member_studnetid="+studentid,
                    type:"post",
                    dataType:"html",
                    success:function(info){
                        if(info == "学号已经存在，请重新输入！！！"){
                            $("#xuehao123").text(info);
                            values = false;
                            return values;
                        }else{
                            $("#xuehao123").html(info);
                            values = true;
                            return values;
                        }
                    }
                });
            });
        });
</script>
	<script>
        
        var Isuser = IsLetter();
        // var Isxuehao = IsInteger();
        var Ispass = IsPasswd();
        var Ispass2 = IsPassDe();
        var Isemail = IsEmail();
        //判断输入的字符不得超过15个字符
        function IsLetter() {
            var user1 = document.getElementById('user1').value.trim();
            if (user1.length != 0) {
                if (user1.length > 15) {
                    document.getElementById("user123").innerHTML = "用户名不得超过15个字！";
                    return false;
                } else {
                    document.getElementById("user123").innerHTML = "";
                    return true;
                }
            } else if (user1.length == 0) {
                document.getElementById("user123").innerHTML = "请输入用户名！";
                return false;
            } else {
                document.getElementById("user123").innerHTML = "";
                return true;
            } 
        }

        //判断输入的字符是否为整数 
        function IsInteger() {
            var xuehao = document.getElementById('xuehao').value.trim();
            if (xuehao.length != 0) {
                reg = /^[-+]?\d*$/;
                if (!reg.test(xuehao)) {
                    document.getElementById("xuehao123").innerHTML = "输入的字符不是整数";//请将“整数类型”要换成你要验证的那个属性名称！ 
                    return false;
                } else {
                    document.getElementById("xuehao123").innerHTML = "";
                    return true;
                }
            } else if (xuehao.length == 0) {
                document.getElementById("xuehao123").innerHTML = "请输入学号！";
                return false;
            } else {
                document.getElementById("xuehao123").innerHTML = "";
                return true;
            }
        }
        
        //判断密码只能由6-20个数字、字母和下划线组成
        function IsPasswd() {
            var pass1 = document.getElementById('pass1').value.trim();
            if (pass1.length != 0) {
                reg = /^[a-zA-Z0-9_]+$/;
                if (!reg.test(pass1)) {
                    document.getElementById("pass1123").innerHTML = "输入的密码类型错误！";
                    return false;
                } else {
                    document.getElementById("pass1123").innerHTML = "";
                    return true;
                }
            } else if (pass1.length == 0) {
                document.getElementById("pass1123").innerHTML = "请输入密码！";
                return false;
            } else {
                document.getElementById("pass1123").innerHTML = "";
                return true;
            }
            
        } 
        
        //确认密码
        function IsPassDe(values) {
            var pass1 = document.getElementById('pass1').value.trim();
            var pass2 = document.getElementById('pass2').value.trim();
            if (values == pass1) {
                document.getElementById("pass2p").innerHTML = "";
                return true;
            } else {
                document.getElementById("pass2p").innerHTML = "密码不一致";
                return false;
            }
        }
        
        //判断输入的EMAIL格式是否正确 
        function IsEmail() {
            var email = document.getElementById('email').value.trim();
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
    
        //提交
        function Istrue() {
            if (Isuser == false || Isxuehao == false || Ispass == false || Ispass2 == false || Isemail == false) {
                alert("信息输入错误！");
            } else {
                alert("lfkdsjlkfjdasl");
            }
        }
    </script>
    
    <div id="footer" style="clear:both;">
            <?php echo $_smarty_tpl->tpl_vars['webset']->value[0]['web_foot_content'];?>

    </div>
</div>
</body>
    
</html><?php }} ?>