<?php /* Smarty version Smarty-3.1.14, created on 2018-05-18 17:45:47
         compiled from "F:\PHPStudy\WWW\16jsjgj\class_website\app\view\font\mien.html" */ ?>
<?php /*%%SmartyHeaderCode:95605af81e90a14e22-46315001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ed55fa2fe55476424e300903422c31091cf6372' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\font\\mien.html',
      1 => 1526636743,
      2 => 'file',
    ),
    'd93d5b96862cfc73542a617035812d8d4f6d6ffb' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\font\\public.html',
      1 => 1526632037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95605af81e90a14e22-46315001',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5af81e90a95cc4_29655524',
  'variables' => 
  array (
    'webset' => 0,
    'naviga_list' => 0,
    'naviga' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af81e90a95cc4_29655524')) {function content_5af81e90a95cc4_29655524($_smarty_tpl) {?><html lang="en" xmlns="http://www.w3.org/1999/xhtml">
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
    
<div class="container-fulid">
    <div style="width: 100%;overflow: hidden;" id="activity">
        <div class="main">
            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['work'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['work']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['work_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['work']->key => $_smarty_tpl->tpl_vars['work']->value){
$_smarty_tpl->tpl_vars['work']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['work']->value['work_show']==1&&$_smarty_tpl->tpl_vars['work']->value['work_title']=='昔日风采'){?>
            <div class="view view-seventh">
                <img src="./app/uploaded/<?php echo $_smarty_tpl->tpl_vars['work']->value['work_images'];?>
" />
                <div class="mask">
                    <?php echo $_smarty_tpl->tpl_vars['work']->value['work_content'];?>

                    <a href="index.php?p=font&c=Mien&a=detail&id=<?php echo $_smarty_tpl->tpl_vars['work']->value['work_id'];?>
" class="info" style="position:absolute;bottom:30px;left:110px;">详情</a>
                </div>
            </div>
            <?php }?>
            <?php } ?>
        </div>
    </div>
    <div class="ih-item">   
  </div>

    <div id="footer" style="clear:both;">
            <?php echo $_smarty_tpl->tpl_vars['webset']->value[0]['web_foot_content'];?>

    </div>
</div>
</body>
    
</html><?php }} ?>