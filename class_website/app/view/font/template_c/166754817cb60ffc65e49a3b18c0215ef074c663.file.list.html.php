<?php /* Smarty version Smarty-3.1.14, created on 2018-05-18 17:46:23
         compiled from "F:\PHPStudy\WWW\16jsjgj\class_website\app\view\font\list.html" */ ?>
<?php /*%%SmartyHeaderCode:257995af65773c52b69-63315482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '166754817cb60ffc65e49a3b18c0215ef074c663' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\font\\list.html',
      1 => 1526612202,
      2 => 'file',
    ),
    'd93d5b96862cfc73542a617035812d8d4f6d6ffb' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\font\\public.html',
      1 => 1526632037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '257995af65773c52b69-63315482',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5af65773dd95c0_04255465',
  'variables' => 
  array (
    'webset' => 0,
    'naviga_list' => 0,
    'naviga' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af65773dd95c0_04255465')) {function content_5af65773dd95c0_04255465($_smarty_tpl) {?><html lang="en" xmlns="http://www.w3.org/1999/xhtml">
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
    
	<script>
		$("document").ready(function(){
			$(".btn-primary").click(function(){
				$(".btn-primary").attr({"data-target":"#myModal"});
				var name = $("#txt").val();
				$.ajax({
					url:"index.php?p=font&c=Address&a=select",
					data:"name="+name,
					type:"post",
					dataType:"html",
					success:function(info){
						
						if(info == "你搜索的内容不存在！！！"){
							$(".btn-primary").attr("data-target","");
							$(".btn-primary").attr("data-toggle","");
								alert(info);
						}else{
							eval("var mem_info="+info);
							$(".btn-primary").attr("data-toggle","modal");
							$(".btn-primary").attr("data-target","#myModal");
							$("#name").text(mem_info['member_name']);
							$("#studentid").text(mem_info['member_studentid']);
							$("#mem_img").attr("src","./app/uploaded/"+mem_info['member_images']);
							$("#truename").text(mem_info['member_truename']);
							$("#phone").text(mem_info['member_phone']);
							$("#hobby").text(mem_info['member_hobby']);
							$("#js").text(mem_info['member_content']);
						}
					}
				})
			})
		});
	</script>
	<div class="lb_gl">
		<div class="header">
		<!-- <form class="bs-example bs-example-form" action="" method="post"> -->
			<div class=" input-group" id="input_right">
				<input type="text" name="truenames" class="form-control" placeholder="输入真实姓名查找" id="txt">
				<span class="input-group-btn">
					<!-- <button class="btn btn-default" type="button" id="btn">
						Go!
					</button> -->
					<button class="btn btn-primary" type="button" data-target="" >
							GO
					</button>
				</span>
			</div>
		<!-- </form> -->
		</div>
		<div class="container-fulid">
			<!-- <h1 class="turn_3d">通讯录</h1> -->
			<div class="pictureSlider poster-main">
				<div class="poster-btn poster-prev-btn"></div>
				<ul id="zturn" class="poster-list">

						<?php  $_smarty_tpl->tpl_vars['member'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['member']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['member_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['member']->key => $_smarty_tpl->tpl_vars['member']->value){
$_smarty_tpl->tpl_vars['member']->_loop = true;
?>
						<li class="poster-item  zturn-item">
							<p class="xxgy">学员:<?php echo $_smarty_tpl->tpl_vars['member']->value['member_name'];?>
</p>
							<p class="say">学号：<?php echo $_smarty_tpl->tpl_vars['member']->value['member_studentid'];?>
</p>
							<div class="for_btn">
								<img src="./app/uploaded/<?php echo $_smarty_tpl->tpl_vars['member']->value['member_images'];?>
" width="100%">
								<!-- <a href="#" class="in_page"><img src="./app/view/font/img/list/iconin.png" /></a> -->
							</div>
							<div class="students_star">
								<p class="cell_list"><span class="lf">姓名：<span class="darks user"><?php echo $_smarty_tpl->tpl_vars['member']->value['member_truename'];?>
</span></span></p>
								<p class="cell_list"><span>手机：<span class="darks"><?php echo $_smarty_tpl->tpl_vars['member']->value['member_phone'];?>
</span></span>
								<p class="cell_list"><span>爱好：<span class="darks"><?php echo $_smarty_tpl->tpl_vars['member']->value['member_hobby'];?>
</span></span>
								</p>
								<div class="zwjs">
									<?php echo $_smarty_tpl->tpl_vars['member']->value['member_content'];?>

								</div>
							</div>
						</li>
						<?php } ?>
					</ul>
				</div>
		</div>	

		<!-- 按钮触发模态框 -->
	
		<!-- 模态框（Modal） -->
		<div class="modal fade" data-backdrop="static" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" style="width:385px;">
		<div class="modal-content">
		<div class="modal-header" style="padding:10px;">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
		&times;
		</button>
		</div>
		<div class="modal-body" id="modal_body">
		<ul id="zturn" class="poster-list modal_zturn">
			<li class="poster-item  zturn-item">
				<p class="xxgy">学员:<span id="name"></span></p>
				<p class="say">学号：<span id="studentid"></span></p>
				<div class="for_btn">
					<img src="" id="mem_img" width="100%">
					<!-- <a href="#" class="in_page"><img src="./app/view/font/img/list/iconin.png" /></a> -->
				</div>
				<div class="students_star">
					<p class="cell_list"><span class="lf">姓名：</span><span id="truename" class="darks user"></span></p>
					<p class="cell_list"><span>手机：</span><span id="phone" class="darks"></span>
					<p class="cell_list"><span>爱好：</span><span id="hobby" class="darks"></span>
					</p>
					<div id="js" class="zwjs">
						
					</div>
				</div>
			</li>
		</ul>
		</div>
		</div>
		</div>
	</div>			
		</div>
		</div>	
		<script type="text/javascript">
			var aa=new zturn({
				id:"zturn",
				opacity:0.9,
				width:382,
				Awidth:1024,
				scale:0.9,
				//auto:true,//是否轮播 默认5000
				auto:true,
				turning:2000//轮播时长
			});
			$(document).ready(function(){
				$("#btn").click(function(){
					var txt = $("#txt").val();
					$(function(){
						var user = $(".user");
						var arr =[];
						user.each(function(){//遍历
						arr.push($(this).text());	//将遍历的值用push()按顺序加入数组尾部
						});
						var len = arr.length;
						 for(var i=0;i<=len;++i){
							 if(txt == arr[i]){
								 
							 }
						 }
					});
				})
			})
		</script>
		
    <div id="footer" style="clear:both;">
            <?php echo $_smarty_tpl->tpl_vars['webset']->value[0]['web_foot_content'];?>

    </div>
</div>
</body>
    
</html><?php }} ?>