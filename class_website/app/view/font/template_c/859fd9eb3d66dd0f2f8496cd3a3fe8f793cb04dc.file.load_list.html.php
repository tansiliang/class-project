<?php /* Smarty version Smarty-3.1.14, created on 2018-05-18 17:48:07
         compiled from "F:\PHPStudy\WWW\16jsjgj\class_website\app\view\font\load_list.html" */ ?>
<?php /*%%SmartyHeaderCode:27445afa3325220575-69794053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '859fd9eb3d66dd0f2f8496cd3a3fe8f793cb04dc' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\font\\load_list.html',
      1 => 1526624947,
      2 => 'file',
    ),
    'd93d5b96862cfc73542a617035812d8d4f6d6ffb' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\font\\public.html',
      1 => 1526632037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27445afa3325220575-69794053',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5afa332524f373_80540064',
  'variables' => 
  array (
    'webset' => 0,
    'naviga_list' => 0,
    'naviga' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afa332524f373_80540064')) {function content_5afa332524f373_80540064($_smarty_tpl) {?><html lang="en" xmlns="http://www.w3.org/1999/xhtml">
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
    
        <script type="text/javascript">
            KindEditor.ready(function(K){
                K.create("#arrondi_content",{
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
        <div class="content container"> 
            <!-- 右侧内容区域  -->
            <div class="right_content">
                <div class="right_content_ul">
                    <ul>
                        <li><span>1</span><br />关注</li>
                        <li><span>2</span><br />粉丝</li>
                        <li><span>3</span><br />帖子数</li>
                    </ul>
                </div>
                <div class="right_content_2">
                    <table id="table4">
                        <tr>
                            <td colspan="3" width="300">
                                <button type="button" id="btn_ft" data-toggle="modal" data-target="#myModal2">我要发帖</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" id="btn_xh"><span class="glyphicon glyphicon-heart"></span> 喜欢</button>
                            </td>
                            <td></td>
                            <td>
                                <button type="button" id="btn_sc"><span class=" glyphicon glyphicon-plus-sign"></span> 收藏</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" id="btn_sx" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-envelope"></span> 私信</button>
                            </td>
                            <td></td>
                            <td class="tbl_td">
                                <button type="button" id="btn_fx"><span class="glyphicon glyphicon-send"></span> 分享</button>
                            </td>
                        </tr>
                    </table>
                    <div id="click_fx">
                        <img src="./app/view/font/img/weixin.jpg" alt="微信" width="200" height="200">
                    </div>
                </div>
                <!-- 模态框（Modal） -->
                    <div class="modal fade" id="myModal2" style="z-index:10000;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                        &times;
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel2">
                                        发布帖子
                                    </h4>
                                </div>
                                <div class="modal-body" style="690px;">
                                    <form action="index.php?p=font&c=Download&a=add" method="post" role="form">
                                        <select name="arrondi_type" id="leixing" class="selectpicker">
                                            <option value="JavaScript专区">JavaScript专区</option>
                                            <option value="PHP专区">PHP专区</option>
                                            <option value="HTML专区">HTML专区</option>
                                            <option value="css专区">css专区</option>
                                            <option value="jQuery专区">jQuery专区</option>
                                            <option value="PS专区">PS专区</option>
                                            <option value="AI专区">AI专区</option>
                                            <option value="CDR专区">CDR专区</option>
                                            <option value="资料专区">资料专区</option>
                                        </select>
                                        <div class="modal_content1">
                                            <input type="text" name="arrondi_title" id="txt_header" class="form-control" placeholder="这里是标题哦" style="margin:10px 0;">
                                            <br />
                                            <textarea style="width:670px;height:350px;" name="arrondi_content" id="arrondi_content" ></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="hidden" id="arrondi_memberid" name="arrondi_memberid" value="<?php echo $_smarty_tpl->tpl_vars['member_info']->value['member_id'];?>
" />
                                            <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                发布帖子
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- 左侧内容区域  -->
        <div id="left_content">
            <div id="left_content_1">
                <div id="left_user">
                    <table id="table1">
                        <tr id="tr1">
                            <!-- 用户头像 -->
                            <td rowspan="2"><img src="./app/uploaded/<?php echo $_smarty_tpl->tpl_vars['arrondi_list']->value['member_imgthumn'];?>
" style="max-width:100px;max-height:100px;border-radius:50%;"/></td>
                            <td colspan="5"><strong><?php echo $_smarty_tpl->tpl_vars['arrondi_list']->value['arrondi_title'];?>
</strong></td>
                        </tr>
                        <tr id="tr2">
                            <td width="100"><span class="glyphicon glyphicon-user"></span> <?php echo $_smarty_tpl->tpl_vars['arrondi_list']->value['member_name'];?>
</td>
                            <td width="100"><span class="glyphicon glyphicon-book"></span> <a><?php echo $_smarty_tpl->tpl_vars['arrondi_list']->value['arrondi_type'];?>
</a></td>
                            <td width="200"><span class="glyphicon glyphicon-time"></span> <?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['arrondi_list']->value['arrondi_time']);?>
</td>
                            <td width="400" colspan="2" id="td_btn">
                                <!-- <a href="" id="jubao">举报</a>
                                <a href="" id="huifu">回复</a> -->
                            </td>
                        </tr>
                    </table>
                </div>
                <div id="banquan" style="padding:0 10px;"><?php echo $_smarty_tpl->tpl_vars['arrondi_list']->value['arrondi_content'];?>

                </div>
        </div>
                <div class="pinglun">
                    <div class="pinglun_1">
                        <strong>全部评论</strong>/<span id="num"> 1条</span>
                        <p id="pinglun_p">当前账号：<span><a href=""><?php echo $_smarty_tpl->tpl_vars['member_info']->value['member_name'];?>
</a></span></p>
                    </div>
                    <table id="table_2">
                        <tr>
                            <td><img src="./app/uploaded/<?php echo $_smarty_tpl->tpl_vars['member_info']->value['member_images'];?>
" alt="用户头像"></td>
                            <td>
                                <form class="bs-example bs-example-form">
                                    <div class=" input-group" id="input_right">
                                        <input type="text" class="form-control" id="tbl_text">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default" id="btn">
                                                 发布回复
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    </table>
                    <!--回复显示板块-->
                    <table id="table3">
                        <tr>
                            <td rowspan="2"><img src="./app/view/font/img/search.png" alt="用户头像"></td>
                            <td width="100"><a href="" class="tbl_user">用户名</a></td>
                            <td width="100"><span class="glyphicon glyphicon-time"></span> 时间</td>
                            <td width="130"><a class="glyphicon glyphicon-thumbs-up" id="zan" onselectstart="return false"><span style="margin:0 8px 0 5px;" id="zan1">赞</span><span id="zan_num">33</span></a></td>
                            <td width="500"></td>
                        </tr>
                        <tr id="hf">
                            <td colspan="3"><p>感谢分享精神感谢分享精神感谢分享精神感谢分享精神感谢分享精神</p></td>
                            <td colspan="2" width="400"><span id="huifu2"><a href="#" data-toggle="modal" data-target="#myModal">回复</a></span></td>
                        </tr>
                    </table>
                </div><!--结束pinglun-->


                <!-- 模态框（Modal） -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    &times;
                                </button>
                                <p class="modal-title" id="myModalLabel">
                                    与<span>南生</span>的聊天
                                </p>
                            </div>
                            <div class="modal-body">
                                <textarea name="modal_text" id="modal_text" cols="80" rows="10"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                                </button>
                                <button type="button" class="btn btn-primary">
                                    发布回复
                                </button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal -->
            </div> <!--结束left_content-->
        </div>
            <ul id="nav_fixed">
                <li><a class="glyphicon glyphicon-qrcode" id="weixin"></a></li>
                <li><a class="glyphicon glyphicon-send" id="qq"></a></li>
                <li><a href="" class="glyphicon glyphicon-triangle-top" id="top"></a></li>
            </ul>
        
    </div>
    <script type="text/javascript" src="./app/view/font/js/load_list.js"></script>

    <div id="footer" style="clear:both;">
            <?php echo $_smarty_tpl->tpl_vars['webset']->value[0]['web_foot_content'];?>

    </div>
</div>
</body>
    
</html><?php }} ?>