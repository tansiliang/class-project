<?php /* Smarty version Smarty-3.1.14, created on 2018-05-14 14:42:32
         compiled from "F:\PHPStudy\WWW\16jsjgj\class_website\app\view\admin\index.html" */ ?>
<?php /*%%SmartyHeaderCode:273975adb2f4604dba5-42255767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17d9b3e58beffaa65bd13d2796ef62b9bee33f27' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\admin\\index.html',
      1 => 1526280081,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '273975adb2f4604dba5-42255767',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5adb2f46105547_31092611',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5adb2f46105547_31092611')) {function content_5adb2f46105547_31092611($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./app/view/admin/styles/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="./app/view/admin/js/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="./app/view/admin/styles/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <title>后台首页</title>
    <link rel="stylesheet" type="text/css" href="./app/view/admin/styles/index.css" />
    <script src="./app/view/admin/js/index.js"></script>
    <script>        
        //页面加载时显示
    $("document").ready(function(){
        $("#header_log").show(500);
    });
    </script>
</head>
<body>
    <header id="header">
            <div id="header_button">
                    <a target="right" href="index.php?p=admin&c=Admin&a=sele&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['ad_id'];?>
"><button type="button" id="fat-btn" title="当前用户" class="btn btn-success" target="right" ><span class="glyphicon glyphicon-user" ></span><?php echo $_smarty_tpl->tpl_vars['list']->value['ad_username'];?>
</button></a>
                    <button type="button" id="fat-btn" class="btn btn-info"><span class="glyphicon glyphicon-home"></span>前台首页</button>
                    <!-- <button type="button" id="fat-btn" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" onclick="location.href='https://www.baidu.com'"></span>清理缓存</button> -->
                    <button type="button" id="fat-btn" onclick="location.href='index.php?p=admin&c=Index&a=die'" class="btn btn-danger"><span class="glyphicon glyphicon-off"></span>退出</button>
                </div>
        <div id="header_log" style="display:none;">
            <img src="./app/view/admin/images/index/logo_index.jpg" width="80px" height="80px" />
            <div id="header_log_text">
                <h2>后台管理</h2>
            </div>
        </div>
    </header>
    <div id="left" class="">
        <div id="left_top">
            <span class="glyphicon glyphicon-th-list"></span>
            菜单列表
        </div>
        <!-- 列表 -->
        <div id="left_content" class="">
            <div id="left_admin" class="panel panel-default">
                <div class="panel-heading">
                    <a class="left_range left_top" data-toggle="collapse" data-parent="#left_content" href="#admin_list"><span class="glyphicon glyphicon-user"></span>
                        管理员信息
                    </a>
                </div>
            </div>
            <ul id="admin_list" class="panel-collapse collapse in">     
                <li class=""><a  href="index.php?p=admin&c=Admin&a=list&ad_id=<?php echo $_smarty_tpl->tpl_vars['list']->value['ad_id'];?>
" id="admin_list_a" class="left_range left_a"  target="right" ><span class="glyphicon glyphicon-play"></span>管理员列表</a></li>
                <li class=""><a href="index.php?p=admin&c=Admin&a=addpage" id="admin_add_a" class="left_range left_a"  target="right"><span class="glyphicon glyphicon-play"></span>添加管理员</a></li>
            </ul>
            <div id="left_two" class="panel panel-default">
                <div class="panel-heading">
                    <a class="left_range left_top" data-toggle="collapse" data-parent="#left_content" href="#font_list"><span class="glyphicon glyphicon-user"></span>
                        会员信息
                    </a>
                </div>
            </div>
            <ul id="font_list" class="panel-collapse collapse in">
                <li class=""><a  id="font_list_a" href="index.php?p=admin&c=Member&a=list" class="left_range left_a"  target="right" ><span class="glyphicon glyphicon-play"></span>会员列表</a></li>
                <li class=""><a href="index.php?p=admin&c=Member&a=addPage" id="font_add_a" class="left_range left_a"  target="right" ><span class="glyphicon glyphicon-play"></span>添加新会员</a></li>
            </ul>
            <div id="work" class="panel panel-default">
                <div class="panel-heading">
                    <a class="left_range left_top" data-toggle="collapse" data-parent="#left_content" href="#work_list"><span class="glyphicon glyphicon-th-list"></span>
                        网页内容
                    </a>
                </div>
            </div>
            <ul id="work_list" class="panel-collapse collapse in">
                <li class=""><a id="work_list_a" class="left_range left_a"  target="right" href="index.php?p=admin&c=Work&a=list" ><span class="glyphicon glyphicon-play"></span>文章列表</a></li>
                <li class=""><a id="work_add_a" class="left_range left_a" href="index.php?p=admin&c=Work&a=addPage" target="right" ><span class="glyphicon glyphicon-play"></span>添加文章列表</a></li>
                <li class=""><a  id="naviga_list_a" href="index.php?p=admin&c=Naviga&a=list" class="left_range left_a"  target="right" ><span class="glyphicon glyphicon-play"></span>导航分类列表</a></li>
                <li class=""><a id="naviga_add_a" href="index.php?p=admin&c=Naviga&a=addPage" class="left_range left_a"  target="right" ><span class="glyphicon glyphicon-play"></span>添加导航分类</a></li>
                <li class=""><a id="website_list" href="index.php?p=admin&c=Webset&a=list" class="left_range left_a"  target="right" ><span class="glyphicon glyphicon-play"></span>网站设置 </a></li>
                <li class=""><a id="switchble" href="index.php?p=admin&c=Switchable&a=list" class="left_range left_a"  target="right" ><span class="glyphicon glyphicon-play"></span>图片轮播管理 </a></li>
                <li class=""><a id="forum" href="index.php?p=admin&c=Forum&a=list" class="left_range left_a"  target="right" ><span class="glyphicon glyphicon-play"></span>论坛 </a></li>
                <li class=""><a id="discuss" href="index.php?p=admin&c=Discuss&a=list" class="left_range left_a"  target="right" ><span class="glyphicon glyphicon-play"></span>评论管理 </a></li>
                <li class=""><a id="reply" href="index.php?p=admin&c=Reply&a=list" class="left_range left_a" target="right" ><span class="glyphicon glyphicon-play"></span>回复管理 </a></li>
                <li class=""><a id="album" href="index.php?p=admin&c=Album&a=list" class="left_range left_a"  target="right" ><span class="glyphicon glyphicon-play"></span>相册管理 </a></li>
                <li class=""><a id="album_photo" href="index.php?p=admin&c=Album_photo&a=list" class="left_range left_a"  target="right" ><span class="glyphicon glyphicon-play"></span>照片管理 </a></li>
                <li class=""><a id="arrondi" href="index.php?p=admin&c=Arrondi&a=list" class="left_range left_a"  target="right" ><span class="glyphicon glyphicon-play"></span>下载专区 </a></li>
            </ul>
        </div>
    </div>
    <section id="bread">
        <ul class="breadcrumb">
            <li class="bread_li"><a class="bread_li_a" href="index.php?p=admin&c=Index&a=info" target="right" ><span class="glyphicon glyphicon-home"></span>首页</a></li>
            <li><a class="bread_a">网站信息</a></li>
        </ul>
    </section>
    <div id="right">
        <div id="right_top">
            <span class="top_span">网站信息</span>
        </div>
        <iframe id="right_content" scrolling="" src="index.php?p=admin&c=Index&a=info" rameborder="0" name="right">
        </iframe>
    </div>
</body>
</html><?php }} ?>